<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;
use \Bitrix\Main\Config\Option;
if(!defined("WIZARD_SITE_ID")) return;
if(!defined("WIZARD_SITE_DIR")) return;
if(!defined("WIZARD_SITE_PATH")) return;
if(!defined("WIZARD_TEMPLATE_ID")) return;
if(!defined("WIZARD_TEMPLATE_ABSOLUTE_PATH")) return;
if(!defined("WIZARD_THEME_ID")) return;


$iblockXMLFile = WIZARD_SERVICE_RELATIVE_PATH."/xml/".LANGUAGE_ID."/general.xml"; 
$iblockCode = "general_".WIZARD_SITE_ID;
$iblockType = "general_settings"; 


CWizardUtil::ReplaceMacros($iblockXMLFile, array("SITE_ID" => WIZARD_SITE_ID));

$new_items_id = WIZARD_SITE_ID;
$new_items_id = preg_replace("/[a-z]/i", "", $new_items_id);

CWizardUtil::ReplaceMacros($iblockXMLFile, array("ITEM_ID" => $new_items_id));

$rsIBlock = CIBlock::GetList(array(), array("CODE" => $iblockCode, "TYPE" => $iblockType));
$iblockID = false; 
if ($arIBlock = $rsIBlock->Fetch())
{
	$iblockID = $arIBlock["ID"]; 
	if (WIZARD_REINSTALL_DATA)
	{
		CIBlock::Delete($arIBlock["ID"]); 
		$iblockID = false; 
	}
}

if($iblockID == false)
{
	$permissions = Array(
			"1" => "X",
			"2" => "R"
		);
	$dbGroup = CGroup::GetList($by = "", $order = "", Array("STRING_ID" => "content_editor"));
	if($arGroup = $dbGroup -> Fetch())
	{
		$permissions[$arGroup["ID"]] = 'W';
	};
	$iblockID = WizardServices::ImportIBlockFromXML(
		$iblockXMLFile,
		$iblockCode,
		$iblockType,
		WIZARD_SITE_ID,
		$permissions
	);

	if ($iblockID < 1)
		return;
	
	//WizardServices::SetIBlockFormSettings($iblockID, Array ( 'tabs' => GetMessage("W_IB_GROUP_PHOTOG_TAB1").$REAL_PICTURE_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB2").$rating_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB3").$vote_count_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB4").$vote_sum_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB5").$APPROVE_ELEMENT_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB6").$PUBLIC_ELEMENT_PROPERTY_ID.GetMessage("W_IB_GROUP_PHOTOG_TAB7"), ));
	
	//IBlock fields
	$iblock = new CIBlock;
	$arFields = Array(
		"ACTIVE" => "Y",
		"FIELDS" => array ( 'IBLOCK_SECTION' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'ACTIVE' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => 'Y', ), 'ACTIVE_FROM' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '=today', ), 'ACTIVE_TO' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'SORT' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'NAME' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => '', ), 'PREVIEW_PICTURE' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => array ( 'FROM_DETAIL' => 'N', 'SCALE' => 'N', 'WIDTH' => '', 'HEIGHT' => '', 'IGNORE_ERRORS' => 'N', ), ), 'PREVIEW_TEXT_TYPE' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => 'text', ), 'PREVIEW_TEXT' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'DETAIL_PICTURE' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => array ( 'SCALE' => 'N', 'WIDTH' => '', 'HEIGHT' => '', 'IGNORE_ERRORS' => 'N', ), ), 'DETAIL_TEXT_TYPE' => array ( 'IS_REQUIRED' => 'Y', 'DEFAULT_VALUE' => 'text', ), 'DETAIL_TEXT' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'XML_ID' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'CODE' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), 'TAGS' => array ( 'IS_REQUIRED' => 'N', 'DEFAULT_VALUE' => '', ), ), 
		"CODE" => $iblockCode, 
		"XML_ID" => $iblockCode,
		"NAME" => $iblock->GetArrayByID($iblockID, "NAME"),
		//"NAME" => "[".WIZARD_SITE_ID."] ".$iblock->GetArrayByID($iblockID, "NAME")
	);
	
	$iblock->Update($iblockID, $arFields);
}
else
{
	$arSites = array(); 
	$db_res = CIBlock::GetSite($iblockID);
	while ($res = $db_res->Fetch())
		$arSites[] = $res["LID"]; 
	if (!in_array(WIZARD_SITE_ID, $arSites))
	{
		$arSites[] = WIZARD_SITE_ID;
		$iblock = new CIBlock;
		$iblock->Update($iblockID, array("LID" => $arSites));
	}
}

// iblock user fields
	$dbSite = CSite::GetByID(WIZARD_SITE_ID);
	if($arSite = $dbSite -> Fetch()) $lang = $arSite["LANGUAGE_ID"];
	if(!strlen($lang)) $lang = "ru";
	WizardServices::IncludeServiceLang("editform_useroptions.php", $lang);
	$arProperty = array();
	$dbProperty = CIBlockProperty::GetList(array(), array("IBLOCK_ID" => $iblockID));
	while($arProp = $dbProperty->Fetch())
		$arProperty[$arProp["CODE"]] = $arProp["ID"];


CUserOptions::SetOption("form", "form_element_".$iblockID, array("tabs" => 'edit1--#--'.GetMessage("WZD_OPTION_0").'--,--ID--#--'.GetMessage("WZD_OPTION_1").'--,--DATE_CREATE--#--'.GetMessage("WZD_OPTION_2").'--,--TIMESTAMP_X--#--'.GetMessage("WZD_OPTION_3").'--,--ACTIVE--#--'.GetMessage("WZD_OPTION_4").'--,--ACTIVE_FROM--#--'.GetMessage("WZD_OPTION_5").'--,--ACTIVE_TO--#--'.GetMessage("WZD_OPTION_6").'--,--NAME--#--'.GetMessage("WZD_OPTION_7").'--,--CODE--#--'.GetMessage("WZD_OPTION_8").'--,--SORT--#--'.GetMessage("WZD_OPTION_9").'--,--edit1_csection3--#----'.GetMessage("WZD_OPTION_10").'--,--PROPERTY_'.$arProperty["GEN_COLORS"].'--#--'.GetMessage("WZD_OPTION_11").'--,--edit1_csection5--#----'.GetMessage("WZD_OPTION_12").'--,--PROPERTY_'.$arProperty["GEN_COLOR_1"].'--#--'.GetMessage("WZD_OPTION_13").'--,--PROPERTY_'.$arProperty["GEN_COLOR_2"].'--#--'.GetMessage("WZD_OPTION_14").'--,--PROPERTY_'.$arProperty["GEN_COLOR_3"].'--#--'.GetMessage("WZD_OPTION_15").'--,--PROPERTY_'.$arProperty["GEN_COLOR_4"].'--#--'.GetMessage("WZD_OPTION_16").'--,--edit1_csection1--#----'.GetMessage("WZD_OPTION_18").'--,--PROPERTY_'.$arProperty["GENERAL_LOGO"].'--#--'.GetMessage("WZD_OPTION_19").'--,--edit1_csection6--#----'.GetMessage("WZD_OPTION_20").'--,--PROPERTY_'.$arProperty["GENERAL_PHONE"].'--#--'.GetMessage("WZD_OPTION_21").'--,--PROPERTY_'.$arProperty["GENERAL_MAIL"].'--#--'.GetMessage("WZD_OPTION_22").'--,--PROPERTY_'.$arProperty["GENERAL_ADRES"].'--#--'.GetMessage("WZD_OPTION_23").'--,--PROPERTY_'.$arProperty["GENERAL_VK"].'--#--'.GetMessage("WZD_OPTION_24").'--,--PROPERTY_'.$arProperty["GENERAL_FB"].'--#--'.GetMessage("WZD_OPTION_25").'--,--PROPERTY_'.$arProperty["GENERAL_INST"].'--#--'.GetMessage("WZD_OPTION_26").'--,--edit1_csection8--#----'.GetMessage("WZD_OPTION_27").'--,--PROPERTY_'.$arProperty["EMAIL"].'--#--'.GetMessage("WZD_OPTION_28").'--,--PROPERTY_'.$arProperty["EMAIL_FROM"].'--#--'.GetMessage("WZD_OPTION_29").'--,--edit1_csection2--#----'.GetMessage("WZD_OPTION_30").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK"].'--#--'.GetMessage("WZD_OPTION_31").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_TITLE"].'--#--'.GetMessage("WZD_OPTION_32").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_1"].'--#--'.GetMessage("WZD_OPTION_33").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_2"].'--#--'.GetMessage("WZD_OPTION_34").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_3"].'--#--'.GetMessage("WZD_OPTION_35").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_4"].'--#--'.GetMessage("WZD_OPTION_36").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_5"].'--#--'.GetMessage("WZD_OPTION_37").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_6"].'--#--'.GetMessage("WZD_OPTION_38").'--,--PROPERTY_'.$arProperty["GENERAL_TIME_WORK_FOTTER_7"].'--#--'.GetMessage("WZD_OPTION_39").'--,--edit1_csection7--#----'.GetMessage("WZD_OPTION_40").'--,--PROPERTY_'.$arProperty["GENERAL_FIX_TEXT"].'--#--'.GetMessage("WZD_OPTION_41").'--,--edit1_csection4--#----'.GetMessage("WZD_OPTION_42").'--,--PROPERTY_'.$arProperty["GENERAL_CUSTOM_HEADER_HTML"].'--#--'.GetMessage("WZD_OPTION_43").'--,--PROPERTY_'.$arProperty["GENERAL_CUSTOM_FOOTER_HTML"].'--#--'.GetMessage("WZD_OPTION_44").'--;--cedit1--#--'.GetMessage("WZD_OPTION_45").'--,--PROPERTY_'.$arProperty["GENERAL_FIX_MENU"].'--#--'.GetMessage("WZD_OPTION_46").'--,--PROPERTY_'.$arProperty["GENERAL_MENU_SERVICES"].'--#--'.GetMessage("WZD_OPTION_47").'--;--cedit2--#--'.GetMessage("WZD_OPTION_48").'--,--PROPERTY_'.$arProperty["GENERAL_MENU_FOTTER"].'--#--'.GetMessage("WZD_OPTION_49").'--,--PROPERTY_'.$arProperty["GENERAL_COPYRIGHT"].'--#--'.GetMessage("WZD_OPTION_50").'--;--cedit3--#--'.GetMessage("WZD_OPTION_51").'--,--cedit3_csection1--#----'.GetMessage("WZD_OPTION_52").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_SERV"].'--#--'.GetMessage("WZD_OPTION_53").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_SALE"].'--#--'.GetMessage("WZD_OPTION_54").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_SPEC"].'--#--'.GetMessage("WZD_OPTION_55").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_FORM"].'--#--'.GetMessage("WZD_OPTION_56").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_ONAS"].'--#--'.GetMessage("WZD_OPTION_57").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_REVI"].'--#--'.GetMessage("WZD_OPTION_58").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_EVEN"].'--#--'.GetMessage("WZD_OPTION_59").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_NEWS"].'--#--'.GetMessage("WZD_OPTION_60").'--;--edit14--#--'.GetMessage("WZD_OPTION_61").'--,--IPROPERTY_TEMPLATES_ELEMENT_META_TITLE--#--'.GetMessage("WZD_OPTION_62").'--,--IPROPERTY_TEMPLATES_ELEMENT_META_KEYWORDS--#--'.GetMessage("WZD_OPTION_63").'--,--IPROPERTY_TEMPLATES_ELEMENT_META_DESCRIPTION--#--'.GetMessage("WZD_OPTION_64").'--,--IPROPERTY_TEMPLATES_ELEMENT_PAGE_TITLE--#--'.GetMessage("WZD_OPTION_65").'--,--IPROPERTY_TEMPLATES_ELEMENTS_PREVIEW_PICTURE--#----'.GetMessage("WZD_OPTION_66").'--,--IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_ALT--#--'.GetMessage("WZD_OPTION_67").'--,--IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_TITLE--#--'.GetMessage("WZD_OPTION_68").'--,--IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_NAME--#--'.GetMessage("WZD_OPTION_69").'--,--IPROPERTY_TEMPLATES_ELEMENTS_DETAIL_PICTURE--#----'.GetMessage("WZD_OPTION_70").'--,--IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_ALT--#--'.GetMessage("WZD_OPTION_71").'--,--IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_TITLE--#--'.GetMessage("WZD_OPTION_72").'--,--IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_NAME--#--'.GetMessage("WZD_OPTION_73").'--,--SEO_ADDITIONAL--#----'.GetMessage("WZD_OPTION_74").'--,--TAGS--#--'.GetMessage("WZD_OPTION_75").'--'.GetMessage("WZD_OPTION_76").'--,--SECTIONS--#--'.GetMessage("WZD_OPTION_77").'--;--',));


$services_id = "services_".WIZARD_SITE_ID;
$stocks_id = "stocks_".WIZARD_SITE_ID;
$specialists_id = "specialists_".WIZARD_SITE_ID;
$advantages_id = "advantages_".WIZARD_SITE_ID; 
$reviews_id = "reviews_".WIZARD_SITE_ID;
$new_blog_id = "new_blog_".WIZARD_SITE_ID; 
$certificates_id = "certificates_".WIZARD_SITE_ID;
$gallery_id = "gallery_".WIZARD_SITE_ID;


$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>$iblockID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement()){ 
 $arFields = $ob->GetFields();  
}
$element_id = $arFields["ID"];

CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/inc/iblock_id_link.php", array("GENERAL_IBLOCK_ID" => $iblockID));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/inc/iblock_id_link.php", array("GENERAL_ELEMENT_ID" => $element_id));
?>