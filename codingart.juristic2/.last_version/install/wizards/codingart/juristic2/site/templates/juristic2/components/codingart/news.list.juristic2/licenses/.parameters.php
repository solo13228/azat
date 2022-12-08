<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

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
	"BASE_TITLE" => Array(
		"PARENT" => "BASE",
		"NAME" => "Заголовок блока",
		"TYPE" => "TEXT",
		"DEFAULT" => "",
	),

);
$arTemplateParameters['BASE_MODE'] = array(
     	"PARENT" => "BASE",
		"NAME" => "Выводить в виде карусели",
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
		"REFRESH" => "Y",
);

if($arCurrentValues['BASE_MODE'] == "N"){
	$arTemplateParameters['BASE_BG_IMG'] = array(
	     	"PARENT" => "BASE",
			"NAME" => "Фон блока",
			"TYPE" => "STRING",
			"DEFAULT" => "/upload/iblock/d4b/d4bc43bb55ae8f422336838dc29b8c9e.jpg",
	);
}