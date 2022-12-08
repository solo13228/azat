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
	),
	"FROM_TEMP_LIST" => Array(
			"NAME" => GetMessage("MFP_REQUIRED_FIELDS"), 
			"TYPE"=>"LIST", 
			"VALUES" => Array(
				"list" => GetMessage("MFP_TYPE_LIST"),
				"detal" => GetMessage("MFP_TYPE_DETAL"),
				"servisec" => GetMessage("MFP_TYPE_SERV")
			),
			"DEFAULT"=>"",  
			"PARENT" => "BASE",
	),
);
?>