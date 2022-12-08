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
	"BASE_DESC" => Array(
		"PARENT" => "BASE",
		"NAME" => "Описание блока",
		"TYPE" => "TEXT",
		"DEFAULT" => "",
	),
);
$arTemplateParameters['BASE_MODE'] = array(
     	"PARENT" => "BASE",
		"NAME" => "Выводить в виде карусели",
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
	);
$arTemplateParameters['BASE_BTN_FORM_NAME'] = array(
		"PARENT" => "BASE",
		"NAME" => "Кнопка (Оставить отзыв)",
		"TYPE" => "TEXT",
		"DEFAULT" => "Оставить отзыв",
);
$arTemplateParameters['BASE_BTN_ALL_NAME'] = array(
		"PARENT" => "BASE",
		"NAME" => "Кнопка (Посмотреть все)",
		"TYPE" => "TEXT",
		"DEFAULT" => "Посмотреть все",
);
$arTemplateParameters['BASE_BTN_ALL_LINK'] = array(
		"PARENT" => "BASE",
		"NAME" => "Ссылка (Посмотреть все)",
		"TYPE" => "TEXT",
		"DEFAULT" => "",
);
?>
