<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule('iblock');?>


<?

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
	"BASE_LIST_TEMP" => Array(
		"PARENT" => "BASE",
		"NAME" => "Вид вывода",
		"TYPE" => "LIST",
		"VALUES" => array(
			"SELECTS" => "Разделы",
			"ELEMENTS" => "Елементы",
			"TABS" => "Табы",
		),
		"MULTIPLE" => "N",
		'DEFAULT' => 'SELECTS',
		"REFRESH" => "Y"

	),	
);

if ($arCurrentValues['BASE_LIST_TEMP'] == "SELECTS"){
	$IBLOCK_ID = $arCurrentValues['IBLOCK_ID'];

	$arPropList = array();
	$arFilter = Array('IBLOCK_ID' => $IBLOCK_ID, 'GLOBAL_ACTIVE'=>'Y' );
	$res = CIBlockSection::GetList(array(), $arFilter);
	while($ar_fields = $res->GetNext()){
		if ($ar_fields['DEPTH_LEVEL'] == 1){
	   		$arPropList[$ar_fields['ID']] = $ar_fields['NAME'];
	   	}
	}

	$arTemplateParameters['BASE_LIST'] = array(
		"PARENT" => "BASE",
		"NAME" => "Список",
		"TYPE" => "LIST",
		"VALUES" => $arPropList,
		"MULTIPLE" => "Y",
		"SIZE" => "5"
	);
	 $arTemplateParameters['BASE_MODE'] = array(
     	"PARENT" => "BASE",
		"NAME" => "Выводить в виде карусели",
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
	);
}



if ($arCurrentValues['BASE_LIST_TEMP'] == "ELEMENTS"){
	$IBLOCK_ID = $arCurrentValues['IBLOCK_ID'];
	$arPropList = array();
    $arFilter = Array('IBLOCK_ID' => $IBLOCK_ID,'ACTIVE'=>'Y');
    $res = CIBlockElement::GetList(array(), $arFilter);
    while($ar_fields = $res->GetNext()){
    	$res_2 = CIBlockSection::GetByID($ar_fields["IBLOCK_SECTION_ID"]);
		if($ar_res = $res_2->GetNext());
		
		if(($ar_fields['ACTIVE'] == 'Y') and ($ar_res['GLOBAL_ACTIVE']=='Y')){  	
	       $arPropList[$ar_fields['ID']] = $ar_fields['NAME'];
	    }
    }
    $arTemplateParameters['BASE_LIST'] = array(
		"PARENT" => "BASE",
		"NAME" => "Список",
		"TYPE" => "LIST",
		"VALUES" => $arPropList,
		"MULTIPLE" => "Y",
		"SIZE" => "5"
	);
     $arTemplateParameters['BASE_MODE'] = array(
     	"PARENT" => "BASE",
		"NAME" => "Выводить в виде карусели",
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
	);

}
$arTemplateParameters['BASE_BTN_EL_NAME'] = array(
		"PARENT" => "BASE",
		"NAME" => "Кнопка (Подробнее)",
		"TYPE" => "TEXT",
		"DEFAULT" => "Подробнее",
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
		"DEFAULT" => "#SITE_DIR#/services/",
);
?>
