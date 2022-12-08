<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
<?$main_orber_in = array( 
    
    '2' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_WELC']['VALUE_XML_ID'],
	'3' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_LASTN']['VALUE_XML_ID'],
    '4' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_CLAS']['VALUE_XML_ID'],
    '5' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_TEACH']['VALUE_XML_ID'],
    '6' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_COURS']['VALUE_XML_ID'],
	'7' => $arItemGeneral['PROPERTIES']['MAIN_ORDER_WAY']['VALUE_XML_ID'],
);?>
<?
while ($i <= 7) {
    $i++;
    if(($main_orber_in[$i]=='1') or ($main_orber_in[$i]=='NULL')) $main_orber_in[$i] = $i;
}
$main_order_pull = array( 
   
    '2' => "way.php",
	'3' => "welc.php",
    '4' => "classes.php",
    '5' => "teachers.php",
    '6' => "courses.php",
	'7' => "lastn.php",
);
$main_order_xml = array(
     $main_orber_in['2'] => $main_order_pull['2'],
     $main_orber_in['3'] => $main_order_pull['3'],
     $main_orber_in['4'] => $main_order_pull['4'],
     $main_orber_in['5'] => $main_order_pull['5'],
     $main_orber_in['6'] => $main_order_pull['6'],
     $main_orber_in['7'] => $main_order_pull['7'],
);
?>
<?
for ($i=1; $i < 8; $i++) { 
    $iorder = $main_orber_in[$i];
    if($main_order_pull[$iorder]){
        $main_orber_url[$i] = $_SERVER["DOCUMENT_ROOT"].SITE_DIR."/include/blocks/".$main_order_pull[$iorder];
    }
}
?>
<?
for ($i=1; $i < 8; $i++) { 
    $iorder = $main_orber_in[$i];
}
?>
<?if(file_exists($main_orber_url['2'])) {include($main_orber_url['2']);}?>
<?if(file_exists($main_orber_url['3'])) {include($main_orber_url['3']);}?>
<?if(file_exists($main_orber_url['4'])) {include($main_orber_url['4']);}?>
<?if(file_exists($main_orber_url['5'])) {include($main_orber_url['5']);}?>
<?if(file_exists($main_orber_url['6'])) {include($main_orber_url['6']);}?>
<?if(file_exists($main_orber_url['7'])) {include($main_orber_url['7']);}?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>