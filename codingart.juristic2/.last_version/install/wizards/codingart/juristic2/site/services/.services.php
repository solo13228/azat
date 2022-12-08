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
			"icons_svg.php",
			"price.php",
			"slider.php",
			"advantages.php",
			"new_blog.php",
			"stocks.php",
			"specialists.php",
			"questions_and_answers.php",
			"reviews.php",
			"services.php",
			"certificates.php",
			"branches.php",
			"gallery.php",
			"general.php",
			"projects.php",
			"requests_1.php",
			"requests_2.php",
			"requests_3.php",
			"requests_4.php",
			"requests_9.php",
			"requests_5.php",
			"requests_6.php",
			"requests_7.php",			
		),
	),
);
?>

