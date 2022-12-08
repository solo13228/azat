<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;
use \Bitrix\Main\Config\Option;  
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
		"general",
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
$dbSite = CSite::GetByID(WIZARD_SITE_ID);
if($arSite = $dbSite -> Fetch()) $lang = $arSite["LANGUAGE_ID"];
if(!strlen($lang)) $lang = "ru";
WizardServices::IncludeServiceLang("general.php", $lang);

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>$iblockID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement()){ 
 $arFields = $ob->GetFields();  
}
$element_id = $arFields["ID"];
$arProperty = array();
$dbProperty = CIBlockProperty::GetList(array(), array("IBLOCK_ID" => $iblockID));
	while($arProp = $dbProperty->Fetch())
	$arProperty[$arProp["CODE"]] = $arProp["ID"]; 
CUserOptions::SetOption("form", "form_element_".$iblockID, array("tabs" => 'edit1--#--'.GetMessage("WZD_OPTION_1").'--,--ID--#--ID--,--DATE_CREATE--#--'.GetMessage("WZD_OPTION_2").'--,--TIMESTAMP_X--#--'.GetMessage("WZD_OPTION_3").'--,--ACTIVE--#--'.GetMessage("WZD_OPTION_4").'--,--ACTIVE_FROM--#--'.GetMessage("WZD_OPTION_5").'--,--ACTIVE_TO--#--'.GetMessage("WZD_OPTION_6").'--,--NAME--#--*'.GetMessage("WZD_OPTION_7").'--,--CODE--#--'.GetMessage("WZD_OPTION_8").'--,--SORT--#--'.GetMessage("WZD_OPTION_9").'--,--PROPERTY_'.$arProperty["ADRESS"].'--#--'.GetMessage("WZD_OPTION_10").'--,--PROPERTY_'.$arProperty["LOGO"].'--#--'.GetMessage("WZD_OPTION_11").'--,--PROPERTY_'.$arProperty["MAIL"].'--#--'.GetMessage("WZD_OPTION_12").'--,--PROPERTY_'.$arProperty["PHONE"].'--#--'.GetMessage("WZD_OPTION_13").'--,--PROPERTY_'.$arProperty["PHONE_2"].'--#--'.GetMessage("WZD_OPTION_14").'--;--cedit1--#--'.GetMessage("WZD_OPTION_15").'--,--PROPERTY_'.$arProperty["GEN_COLOR_1"].'--#--'.GetMessage("WZD_OPTION_16").'--,--PROPERTY_'.$arProperty["GEN_COLOR_2"].'--#--'.GetMessage("WZD_OPTION_17").'--,--PROPERTY_'.$arProperty["GEN_COLOR_3"].'--#--'.GetMessage("WZD_OPTION_18").'--;--cedit2--#--'.GetMessage("WZD_OPTION_19").'--,--PROPERTY_'.$arProperty["ICON_3"].'--#--'.GetMessage("WZD_OPTION_20").'--,--PROPERTY_'.$arProperty["URL_3"].'--#--'.GetMessage("WZD_OPTION_21").'--,--PROPERTY_'.$arProperty["ICON_1"].'--#--'.GetMessage("WZD_OPTION_22").'--,--PROPERTY_'.$arProperty["URL_1"].'--#--'.GetMessage("WZD_OPTION_23").'--,--PROPERTY_'.$arProperty["ICON_2"].'--#--'.GetMessage("WZD_OPTION_24").'--,--PROPERTY_'.$arProperty["URL_2"].'--#--'.GetMessage("WZD_OPTION_25").'--,--PROPERTY_'.$arProperty["ICON_4"].'--#--'.GetMessage("WZD_OPTION_26").'--,--PROPERTY_'.$arProperty["URL_4"].'--#--'.GetMessage("WZD_OPTION_27").'--;--cedit3--#--'.GetMessage("WZD_OPTION_28").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_SLIDER"].'--#--'.GetMessage("WZD_OPTION_29").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_BENEFITS"].'--#--'.GetMessage("WZD_OPTION_30").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_WELCOME"].'--#--'.GetMessage("WZD_OPTION_31").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_COURS"].'--#--'.GetMessage("WZD_OPTION_32").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_VIDEO"].'--#--'.GetMessage("WZD_OPTION_33").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_EVENTS"].'--#--'.GetMessage("WZD_OPTION_34").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_REVIEWS"].'--#--'.GetMessage("WZD_OPTION_35").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_BLOG"].'--#--'.GetMessage("WZD_OPTION_36").'--;--'));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/include/iblock_id_link.php", array("GENERAL_IBLOCK_ID" => $iblockID));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/include/iblock_id_link.php", array("GENERAL_ELEMENT_ID" => $element_id));
?>