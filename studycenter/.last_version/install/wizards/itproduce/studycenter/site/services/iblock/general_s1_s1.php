<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if(!CModule::IncludeModule("iblock"))
	return;
use \Bitrix\Main\Config\Option; 
$iblockXMLFile = WIZARD_SERVICE_RELATIVE_PATH."/xml/".LANGUAGE_ID."/general_s1_s1.xml"; 
$iblockCode = "general_s1_s1_".WIZARD_SITE_ID;
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
		"general_s1_s1",
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
WizardServices::IncludeServiceLang("general_s1_s1.php", $lang);

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
CUserOptions::SetOption("form", "form_element_".$iblockID, array("tabs" => 'edit1--#--'.GetMessage("SET_1").'--,--ID--#--ID--,--DATE_CREATE--#--'.GetMessage("SET_2").'--,--TIMESTAMP_X--#--'.GetMessage("SET_3").'--,--ACTIVE--#--'.GetMessage("SET_4").'--,--ACTIVE_FROM--#--'.GetMessage("SET_5").'--,--ACTIVE_TO--#--'.GetMessage("SET_6").'--,--NAME--#--*'.GetMessage("SET_7").'--,--CODE--#--'.GetMessage("SET_8").'--,--SORT--#--'.GetMessage("SET_9").'--,--PROPERTY_'.$arProperty["ADRESS"].'--#--'.GetMessage("SET_10").'--,--PROPERTY_'.$arProperty["WORK_HOURS"].'--#--'.GetMessage("SET_11").'--,--PROPERTY_'.$arProperty["LOGO"].'--#--'.GetMessage("SET_12").'--,--PROPERTY_'.$arProperty["PHONE"].'--#--'.GetMessage("SET_13").'--;--cedit1--#--'.GetMessage("SET_14").'--,--PROPERTY_'.$arProperty["INST_URL"].'--#--'.GetMessage("SET_15").'--,--PROPERTY_'.$arProperty["YT_URL"].'--#--'.GetMessage("SET_16").'--,--PROPERTY_'.$arProperty["VK_URL"].'--#--'.GetMessage("SET_17").'--;--cedit2--#--'.GetMessage("SET_18").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_WELC"].'--#--'.GetMessage("SET_19").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_COURS"].'--#--'.GetMessage("SET_20").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_CLAS"].'--#--'.GetMessage("SET_21").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_TEACH"].'--#--'.GetMessage("SET_22").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_LASTN"].'--#--'.GetMessage("SET_23").'--,--PROPERTY_'.$arProperty["MAIN_ORDER_WAY"].'--#--'.GetMessage("SET_24").'--;--cedit3--#--'.GetMessage("SET_25").'--,--PROPERTY_'.$arProperty["GEN_COLOR_1"].'--#--'.GetMessage("SET_26").'--,--PROPERTY_'.$arProperty["GEN_COLOR_2"].'--#--'.GetMessage("SET_27").'--,--PROPERTY_'.$arProperty["GEN_COLOR_3"].'--#--'.GetMessage("SET_28").'--;--edit5--#--'.GetMessage("SET_29").'--,--PREVIEW_PICTURE--#--'.GetMessage("SET_30").'--,--PREVIEW_TEXT--#--'.GetMessage("SET_31").'--;--edit6--#--'.GetMessage("SET_32").'--,--DETAIL_PICTURE--#--'.GetMessage("SET_33").'--,--DETAIL_TEXT--#--'.GetMessage("SET_34").'--;--edit14--#--SEO--,--IPROPERTY_TEMPLATES_ELEMENT_META_TITLE--#--'.GetMessage("SET_35").' META TITLE--,--IPROPERTY_TEMPLATES_ELEMENT_META_KEYWORDS--#--'.GetMessage("SET_35").' META KEYWORDS--,--IPROPERTY_TEMPLATES_ELEMENT_META_DESCRIPTION--#--'.GetMessage("SET_35").' META DESCRIPTION--,--IPROPERTY_TEMPLATES_ELEMENT_PAGE_TITLE--#--'.GetMessage("SET_36").'--,--IPROPERTY_TEMPLATES_ELEMENTS_PREVIEW_PICTURE--#----'.GetMessage("SET_37").'--,--IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_ALT--#--'.GetMessage("SET_35").' ALT--,--IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_TITLE--#--'.GetMessage("SET_35").' TITLE--,--IPROPERTY_TEMPLATES_ELEMENT_PREVIEW_PICTURE_FILE_NAME--#--'.GetMessage("SET_38").'--,--IPROPERTY_TEMPLATES_ELEMENTS_DETAIL_PICTURE--#----'.GetMessage("SET_39").'--,--IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_ALT--#--'.GetMessage("SET_35").' ALT--,--IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_TITLE--#--'.GetMessage("SET_35").' TITLE--,--IPROPERTY_TEMPLATES_ELEMENT_DETAIL_PICTURE_FILE_NAME--#--'.GetMessage("SET_40").'--,--SEO_ADDITIONAL--#----'.GetMessage("SET_41").'--,--TAGS--#--'.GetMessage("SET_42").'--;--edit2--#--'.GetMessage("SET_43").'--,--SECTIONS--#--'.GetMessage("SET_43").'--;--')); 
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/include/iblock_id_link.php", array("GENERAL_IBLOCK_ID" => $iblockID));
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/include/iblock_id_link.php", array("GENERAL_ELEMENT_ID" => $element_id));
?>