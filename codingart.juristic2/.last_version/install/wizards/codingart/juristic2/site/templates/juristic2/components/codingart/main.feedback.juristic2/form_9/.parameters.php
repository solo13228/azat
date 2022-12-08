<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(

	"REQUIRED_FIELDS" => Array(
			"NAME" => GetMessage("MFP_REQUIRED_FIELDS"), 
			"TYPE"=>"LIST", 
			"MULTIPLE"=>"Y", 
			"VALUES" => Array("NONE" => GetMessage("MFP_ALL_REQ"), "NAME" => GetMessage("MFP_NAME"), "PHONE" => GetMessage("MFP_PHONE"), "MESSAGE" => GetMessage("MFP_MESSAGE")),
			"DEFAULT"=>"", 
			"COLS"=>25, 
			"PARENT" => "BASE",
	)
);
if ($arCurrentValues['MODAL_MOD'] == "N"){
	$arTemplateParameters["FORM_TITLE_2"] = Array(
		"NAME" => "Заголовок формы 2", 
		"TYPE" => "TEXT",
		"DEFAULT" => "", 
		"SORT" => "2",
		"PARENT" => "BASE",
	);
}
?>
