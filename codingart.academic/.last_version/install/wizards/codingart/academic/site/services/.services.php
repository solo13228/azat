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
			"blog.php",
			"benefits.php",
			"board.php",
			"contact_data.php",
			"contact_requests.php",
			"courses.php",
			"events.php",
			"general.php",
			"newsletter_requests.php",
			"reviews.php",
			"reviews-block.php",
			"slider.php",
			"teachers.php",
			"videoboard-block.php",
			"welcome.php",			
		),
	),
);
?>

