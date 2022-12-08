<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
<?$main_orber_in = array(
	'2' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_SLIDER']['VALUE_XML_ID'],
	'3' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_BENEFITS']['VALUE_XML_ID'],
	'4' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_WELCOME']['VALUE_XML_ID'],
	'5' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_COURS']['VALUE_XML_ID'],
	'6' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_VIDEO']['VALUE_XML_ID'],
	'7' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_EVENTS']['VALUE_XML_ID'],
	'8' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_REVIEWS']['VALUE_XML_ID'],
	'9' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_BLOG']['VALUE_XML_ID'],
);
while ($i <= 9) {
	$i++;
	if(($main_orber_in[$i]=='1') or ($main_orber_in[$i]=='NULL')) $main_orber_in[$i] = $i;
}

$main_order_pull = array(
	'2' => "slider.php",
	'3' => "benefits.php",
	'4' => "welcome.php",
	'5' => "cours.php",
	'6' => "video.php",
	'7' => "events.php",
	'8' => "reviews.php",
	'9' => "blog.php",
);
$main_order_xml = array(
	$main_orber_in['2'] => $main_order_pull['2'],
	$main_orber_in['3'] => $main_order_pull['3'],
	$main_orber_in['4'] => $main_order_pull['4'],
	$main_orber_in['5'] => $main_order_pull['5'],
	$main_orber_in['6'] => $main_order_pull['6'],
	$main_orber_in['7'] => $main_order_pull['7'],
	$main_orber_in['8'] => $main_order_pull['8'],
	$main_orber_in['9'] => $main_order_pull['9'],
	);
?>
<?
for ($i=1; $i < 10; $i++) { 
    $iorder = $main_orber_in[$i];
    if($main_order_pull[$iorder]){
        $main_orber_url[$i] = $_SERVER["DOCUMENT_ROOT"].SITE_DIR."/include/blocks/".$main_order_pull[$iorder];
    }
}
?>
<?
for ($i=1; $i < 10; $i++) { 
    $iorder = $main_orber_in[$i];
}
?>
<?if(file_exists($main_orber_url['2'])) {include($main_orber_url['2']);}?>
<?if(file_exists($main_orber_url['3'])) {include($main_orber_url['3']);}?>
<?if(file_exists($main_orber_url['4'])) {include($main_orber_url['4']);}?>
<?if(file_exists($main_orber_url['5'])) {include($main_orber_url['5']);}?>
<?if(file_exists($main_orber_url['6'])) {include($main_orber_url['6']);}?>
<?if(file_exists($main_orber_url['7'])) {include($main_orber_url['7']);}?>
<?if(file_exists($main_orber_url['8'])) {include($main_orber_url['8']);}?>
<?if(file_exists($main_orber_url['9'])) {include($main_orber_url['9']);}?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>


