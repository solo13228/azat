<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"files.php", // Copy bitrix files
			"template.php", // Install template
			//"theme.php", // Install theme
			"group.php", // Install group
			"settings.php",
		),
	),

	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"utop.php",
			"blocks.php",
			"masonary.php",
			"classes.php",
			"courses.php",
			"blogs.php",
			"beneficts.php",
			"classblock.php",
			"contact_requests.php",
			"general_s1_s1.php",
			"misson.php",
			"welcometo.php",
			"events.php",
			"teachers.php",
		),
	),
);
?>

