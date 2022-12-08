<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule('iblock');

$arTemplateParameters = array(
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_NAME" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_NAME"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),	

);
$IBLOCK_ID = $arCurrentValues['IBLOCK_ID'];
	$arPropList = array();
    $arFilter = Array('IBLOCK_ID' => $IBLOCK_ID);
    $res = CIBlockElement::GetList(array(), $arFilter);
    while($ar_fields = $res->GetNext()){  	
	       $arPropList[$ar_fields['ID']] = $ar_fields['NAME'];
    }
    $arTemplateParameters['BASE_LIST'] = array(
		"PARENT" => "BASE",
		"NAME" => "Список",
		"TYPE" => "LIST",
		"VALUES" => $arPropList,
		"MULTIPLE" => "Y",
		"SIZE" => "5"
	);
?>