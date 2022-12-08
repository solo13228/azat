<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_id_link.php");?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_bd_update.php");?>

<!DOCTYPE html>
<html>
<span style="display: none;">

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> 
<?
function check_mobile_device() { 
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
    // var_dump($agent);exit;
    foreach ($mobile_agent_array as $value) {    
        if (strpos($agent, $value) !== false) return true;   
    }       
    return false; 
}
?>
<?
$APPLICATION->IncludeComponent(
	"codingart:news.list.juristic2", 
	"general", 
	array(
		"IBLOCK_TYPE" => "general_settings",
		"IBLOCK_ID" => $codingart_block_id['general_id'],
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "MAIN_TITLE",
			1 => "SERVICES_TITLE",
			2 => "NEWS_TITLE",
			3 => "COMPANY_TITLE",
			4 => "REVIEWS_TITLE",
			5 => "CONTACTS_TITLE",
			6 => "SPEC_TITLE",
			7 => "GENERAL_PHONE",
			8 => "GENERAL_MAIL",
			9 => "GENERAL_TIME_WORK",
			10 => "GENERAL_FIX_TEXT",
			11 => "MAIN_SERVICES_TITLE",
			12 => "MAIN_SERVICES_DESC",
			13 => "MAIN_SALE_TITLE",
			14 => "MAIN_SALE_DESC",
			15 => "MAIN_SPEC_BLOCK_TITLE",
			16 => "MAIN_SPEC_BLOCK_DESC",
			17 => "MAIN_ONAS_TITLE",
			18 => "MAIN_ONAS_DESC",
			19 => "MAIN_REVIEWS_TITLE",
			20 => "MAIN_EVENT_TITLE",
			21 => "MAIN_NEWS_TITLE",
			22 => "MAIN_NEWS_DESC",
			23 => "GENERAL_ADRES",
			24 => "GENERAL_DESC",
			25 => "IME_WORK_FOTTER_TITLE",
			26 => "GENERAL_TIME_WORK_FOTTER_1",
			27 => "GENERAL_TIME_WORK_FOTTER_2",
			28 => "GENERAL_TIME_WORK_FOTTER_3",
			29 => "GENERAL_TIME_WORK_FOTTER_4",
			30 => "GENERAL_TIME_WORK_FOTTER_5",
			31 => "GENERAL_TIME_WORK_FOTTER_6",
			32 => "GENERAL_TIME_WORK_FOTTER_7",
			33 => "GENERAL_MENU_FOTTER",
			34 => "GENERAL_COPYRIGHT",
			35 => "GENERAL_VK",
			36 => "GENERAL_FB",
			37 => "GENERAL_INST",
			38 => "O_NAS_SERT_TITLE",
			39 => "MAIN_EMER_TITLE_1",
			40 => "MAIN_EMER_TITLE_2",
			41 => "MAIN_GALLERY_TITLE",
			42 => "MAIN_ADEVNT_HOSP_TITLE",
			43 => "MAIN_EMER_PHONE",
			44 => "SERVICES_DESC_TITLE",
			45 => "MAIN_EMER_DESC",
			46 => "MAIN_ADEVNT_HOSP_DESC",
			47 => "SERVICES_DESC_TEXT",
			48 => "REVIRWS_TITLE",
			49 => "SPEC_BLOCK_TITLE",
			50 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "100",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DISPLAY_PANEL" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "general",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);
?>

</span>
<?
if($arItemGeneral['PROPERTIES']['GEN_COLORS']['VALUE_XML_ID']){
	if($arItemGeneral['PROPERTIES']['GEN_COLORS']['VALUE_XML_ID'] == "#C9B38C"){$gen_color = 1;}
	if($arItemGeneral['PROPERTIES']['GEN_COLORS']['VALUE_XML_ID'] == "#65ae83"){$gen_color = 2;}
	if($arItemGeneral['PROPERTIES']['GEN_COLORS']['VALUE_XML_ID'] == "#5bb4e4"){$gen_color = 3;}
	if($arItemGeneral['PROPERTIES']['GEN_COLORS']['VALUE_XML_ID'] == "#dd6042"){$gen_color = 4;}
	if($arItemGeneral['PROPERTIES']['GEN_COLORS']['VALUE_XML_ID'] == "#ec1a23"){$gen_color = 5;}
	if($arItemGeneral['PROPERTIES']['GEN_COLORS']['VALUE_XML_ID'] == "#686157"){$gen_color = 6;}
} else {
	
}
	$gen_color = ".default";
	$general_color_1 = $arItemGeneral['PROPERTIES']['GEN_COLOR_1']['VALUE'];
	$general_color_2 = $arItemGeneral['PROPERTIES']['GEN_COLOR_2']['VALUE'];
	$general_color_3 = $arItemGeneral['PROPERTIES']['GEN_COLOR_3']['VALUE'];
	$general_color_4 = $arItemGeneral['PROPERTIES']['GEN_COLOR_4']['VALUE'];
	
	$file = fopen($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.php", 'r');
	$text = fread($file, filesize($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.php"));
	fclose($file);
	$file = fopen($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.css", 'w');
	$text = str_replace('#C9B38C', $general_color_1, $text);
	$text = str_replace('#556080', $general_color_2, $text);
	$text = str_replace('#262b3e', $general_color_3, $text); 
	
	
	fwrite($file, $text);
	fclose($file);
	
	clearstatcache();
?>

<?
$monthes = array(
	"01" => GetMessage('MONT_ITEM_1'), 
	"02" => GetMessage('MONT_ITEM_2'), 
	"03" => GetMessage('MONT_ITEM_3'), 
	"04" => GetMessage('MONT_ITEM_4'), 
	"05" => GetMessage('MONT_ITEM_5'), 
	"06" => GetMessage('MONT_ITEM_6'),
	"07" => GetMessage('MONT_ITEM_7'), 
	"08" => GetMessage('MONT_ITEM_8'), 
	"09" => GetMessage('MONT_ITEM_9'), 
	"10" => GetMessage('MONT_ITEM_10'), 
	"11" => GetMessage('MONT_ITEM_11'), 
	"12" => GetMessage('MONT_ITEM_12')
);

$main_title = $arItemGeneral['PROPERTIES']['MAIN_TITLE']['VALUE'];

$general_logo = $arItemGeneral['PROPERTIES']['GENERAL_LOGO']['VALUE'];
$general_phone = $arItemGeneral['PROPERTIES']['GENERAL_PHONE']['VALUE'];
$general_time_work = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK']['VALUE'];
$general_mail = $arItemGeneral['PROPERTIES']['GENERAL_MAIL']['VALUE'];
$general_adres = $arItemGeneral['PROPERTIES']['GENERAL_ADRES']['VALUE'];

$general_insta = $arItemGeneral['PROPERTIES']['GENERAL_INST']['VALUE'];
$general_facebook = $arItemGeneral['PROPERTIES']['GENERAL_FB']['VALUE'];
$general_vk = $arItemGeneral['PROPERTIES']['GENERAL_VK']['VALUE'];

if($arItemGeneral['PROPERTIES']['GENERAL_DESC']['VALUE'])
$general_desc = $arItemGeneral['PROPERTIES']['GENERAL_DESC']['VALUE']['TEXT'];

$services_title = $arItemGeneral['PROPERTIES']['SERVICES_TITLE']['VALUE'];
$news_title = $arItemGeneral['PROPERTIES']['NEWS_TITLE']['VALUE'];
$reviews_title = $arItemGeneral['PROPERTIES']['REVIEWS_TITLE']['VALUE'];
$contacts_title = $arItemGeneral['PROPERTIES']['CONTACTS_TITLE']['VALUE'];
$spec_title = $arItemGeneral['PROPERTIES']['SPEC_TITLE']['VALUE'];
$company_title = $arItemGeneral['PROPERTIES']['COMPANY_TITLE']['VALUE'];

?>
<?
$rezip =  $_SERVER['REMOTE_ADDR'];
$ip = '66.249';
$pos = strpos($rezip, $ip);
if($pos === false) {
    $result_ip = "Y"; 
} else {
   $result_ip = "N";
}
?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title><?$APPLICATION->ShowTitle()?></title>
 <?if($result_ip == "Y"){?>
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/bootstrap.css" rel="stylesheet">

<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/jquery-ui.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/icomoon-icons.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/animate.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/flaticon.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/owl.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/animation.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/magnific-popup.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<?}?>
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/menu.css" rel="stylesheet">



<?$APPLICATION->ShowHead()?>

<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/responsive.css" rel="stylesheet">

<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/mob.css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/themes/<?=$gen_color?>/color.css" rel="stylesheet">
 <?if($result_ip == "Y"){?>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/font_link.php");?>
<?}?>
<?/* $file_favicon = CFile::GetPath($arItemGeneral['PROPERTIES']['GENERAL_FAVICON']['VALUE']);
$findme = '.ico';
$pos = strpos($file_favicon, $findme);
if ($pos === false) {
  echo '<link rel="shortcut icon" href="'.$file_favicon.'" type="image/png">';
} else {
  echo '<link rel="shortcut icon" href="'.$file_favicon.'" type="image/x-icon">';
}*/
?>


<?
if(strlen($arItemGeneral['PROPERTIES']['GENERAL_FAVICON']['VALUE'])){
	$APPLICATION->AddHeadString('<link rel="shortcut icon" href="'.CFile::GetPath($arItemGeneral['PROPERTIES']['GENERAL_FAVICON']['VALUE']).'" type="image/png" />', true);
}
?>

</head>
<?$APPLICATION->ShowPanel();?>
<body class="<? if ($APPLICATION->GetCurPage(false) === SITE_DIR){?>main_page <?} else {?> all_page<?}?>">


    <header class="elementskit-header main-header <?if($arItemGeneral['PROPERTIES']['GENERAL_FIX_MENU']['VALUE_XML_ID']=='1'){echo 'general-fix-main';}?>">
	
        <div class="header-top">
			<div class="container ">
				<div class="top-outer clearfix">
					<!-- Top Left -->
					<ul class="top-left">
						<li class="head-adress"><a href="<?=SITE_DIR?>contacts/" target="_blank"><span class="icon  flaticon-map-pin-marked"></span><?=$general_adres?></a></li>
						<li class="head-mail"><a href="mailto:<?=$general_mail?>"><span class="icon flaticon-mail"></span><?=$general_mail?></a></li>
						<li class="head-phone"><a href="tel:<?=$general_phone?>"><span class="icon flaticon-phone-receiver"></span><?=$general_phone?></a></li>
						<!-- <?if(!empty($general_insta)){?>
							<li class="head-insta">
								<a href="<?=$general_insta?>" class="icon icons-instagram2" style="margin-top: 4px;color: #c9b38c;font-size: 20px;"></a>
							</li>
						<?}?>
						<?if(!empty($general_facebook)){?>
							<li class="head-facebook">
								<a href="<?=$general_facebook?>" class="icon icons-facebook2" style="margin-top: 4px;color: #c9b38c;font-size: 20px;"></a>
							</li>
						<?}?>
						<?if(!empty($general_vk)){?>
							<li class="head-vk">
								<a href="<?=$general_vk?>" class="icon icons-vk2" style="margin-top: 4px;color: #c9b38c;font-size: 20px;"></a>
							</li>
						<?}?> -->
						<li class="head-search">
							<a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon flaticon-search"></i></a>
							<a data-toggle="modal" data-target="#modal-callback" class="btn"><?=GetMessage('BTN_CALL')?></a>
						
						</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper"> <!-- xs-container -->
			<div class="container">
				<div class="xs-navbar clearfix">
					
					<div class="logo-outer">
						<div class="logo"><a href="<?=SITE_DIR?>"><img  src="<?=CFile::GetPath($general_logo);?>" alt="" title=""></a></div>
					</div>
					
					<nav class="elementskit-navbar">

						<!-- ---------------------------------------
									// god menu markup start
								---------------------------------------- -->

						<div class="xs-mobile-search">
							<a href="#modal-popup-2" class="xs-modal-popup"><i class="icon flaticon-search"></i></a>
							<?if(!empty($general_insta)){?>
								<a href="<?=$general_insta?>" class="icon icons-instagram2 mob-icon-header"></a>
							<?}?>
							<?if(!empty($general_facebook)){?>
								<a href="<?=$general_facebook?>" class="icon icons-facebook2 mob-icon-header"></a>
							<?}?>
							<?if(!empty($general_vk)){?>
								<a href="<?=$general_vk?>" class="icon icons-vk2 mob-icon-header"></a>
							<?}?>
						</div>
						<div class="phone_mob">
							<a href="tel:<?=$general_phone?>">
								<span class="icon flaticon-phone-receiver"></span>
								<span class="phone_mob_text"><?=$general_phone?></span>
							</a>
						</div>
						<!-- start humberger (for offcanvas toggler) -->
						<button class=" elementskit-menu-toggler xs-bold-menu">
							<span class="icon flaticon-menu-4" style="
							    font-size: 25px;
							    background: none !important;
							"></span>
							
						</button>
						<!-- end humberger -->

						<!-- start menu container -->
						<div class="elementskit-menu-container elementskit-menu-offcanvas-elements">

							    <?$APPLICATION->IncludeComponent(
									"codingart:menu.juristic2", 
									"horizontal_multilevel", 
									array(
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "left",
										"COMPONENT_TEMPLATE" => "horizontal_multilevel",
										"DELAY" => "N",
										"MAX_LEVEL" => "2",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_TYPE" => "N",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "top",
										"USE_EXT" => "N"
									),
									false
								);?>

							

						</div>
					
						<div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler">
						</div>
						<!-- end offcanvas overlay -->
						<!-- ---------------------------------------
									// god menu markup end
								---------------------------------------- -->

					</nav>
					
				</div>
			</div>
		</div>
		<!-- .container END -->
    </header><!-- End header section -->

<? if ($APPLICATION->GetCurPage(false) === SITE_DIR){?>
<?$APPLICATION->IncludeComponent(
	"codingart:news.list.juristic2", 
	"slider", 
	array(
		"IBLOCK_TYPE" => "content_juristic2",
		"IBLOCK_ID" => $codingart_block_id['slider_id'],
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "SIDER_GRADIENT",
			2 => "SLIDER_DESCRIPTION",
			3 => "SLIDER_DEPARTMENT",
			4 => "SLIDER_TAGLINE",
			5 => "SLIDER_BTN_LINK",
			6 => "SLIDER_BTN",
			7 => "SIDER_COLOR_TEXT",
			8 => "",
		),
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"SET_BROWSER_TITLE" => "N",
		"ITEM_GEN" => $arItemGeneral,
		"FIELD_CODE" => array(
			0 => "",
			1 => "ID",
			2 => "CODE",
			3 => "XML_ID",
			4 => "NAME",
			5 => "TAGS",
			6 => "SORT",
			7 => "PREVIEW_TEXT",
			8 => "PREVIEW_PICTURE",
			9 => "DETAIL_TEXT",
			10 => "DETAIL_PICTURE",
			11 => "DATE_ACTIVE_FROM",
			12 => "ACTIVE_FROM",
			13 => "DATE_ACTIVE_TO",
			14 => "ACTIVE_TO",
			15 => "SHOW_COUNTER",
			16 => "SHOW_COUNTER_START",
			17 => "IBLOCK_TYPE_ID",
			18 => "IBLOCK_ID",
			19 => "IBLOCK_CODE",
			20 => "IBLOCK_NAME",
			21 => "IBLOCK_EXTERNAL_ID",
			22 => "DATE_CREATE",
			23 => "CREATED_BY",
			24 => "CREATED_USER_NAME",
			25 => "TIMESTAMP_X",
			26 => "MODIFIED_BY",
			27 => "USER_NAME",
			28 => "",
		),
		"PAGER_TITLE" => "Новости"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"codingart:news.list.juristic2", 
	"advantages_main_page", 
	array(
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "advantages_main_page",
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
			2 => "",
		),
		"FILE_404" => $arParams["FILE_404"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $codingart_block_id["advantages_id"],
		"IBLOCK_TYPE" => "content_juristic2",
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "na-glavnoy",
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "ADVENT_TEXT_H3",
			2 => "ADVENT_ICON",
			3 => "ADVENT_TEXT_P",
			4 => "DOK_ADVENT_ICON_COLOR",
			5 => "",
			6 => "",
		),
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"STRICT_SECTION_CHECK" => "Y",
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"BASE_TITLE" => "Преимущества больницы",
		"BASE_DESC" => ""
	),
	false
);?>
<? } else { ?>
	

<? function top_line($title_page){ 
		if(iconv_strlen($title_page) >35){
			$title_page = substr($title_page, 0,35);
			$title_page = substr($title_page, 0, strrpos($title_page, ' '))."... ";
		}
		

if($_REQUEST["SECTION_ID"]){ 
	$res = CIBlockSection::GetByID($_REQUEST["SECTION_ID"]);
	if($ar_res = $res->GetNext())
	$section_title = $ar_res['NAME'];
	$section_link = $ar_res['SECTION_PAGE_URL'];
}

	?>
<?}?>
	<section class="page-breadcrumb">
		<div class="container">
			<div class="clearfix">
				<div class="pull-left">
				
				<?$APPLICATION->IncludeComponent(
					"codingart:breadcrumb.juristic2", 
					"template", 
					array(
						"PATH" => "",
						"SITE_ID" => SITE_ID,
						"START_FROM" => "0",
						"COMPONENT_TEMPLATE" => "template"
					),
					false
				);?>
					
				</div>
				
			</div>
		</div>
	</section>

<?}?>
	

<?function leng_text($desc_text, $mun_text, $more_text){
	$desc_text = rtrim(substr(strip_tags($desc_text), 0,$mun_text), "!,.-");
	$desc_text = substr($desc_text, 0, strrpos($desc_text, ' ')).$more_text;
	return $desc_text;
}
?>
 <?//if($result_ip == "Y"){?>
<?if ($GLOBALS["APPLICATION"]->GetCurPage() != "/"){?>
<section id="main-content" class="blog main-container" role="main">
	<div class="container">
		<div class="row justify-content-center">
<?}?>