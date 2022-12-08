<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$bIsMainPage = $APPLICATION->GetCurPage(false)  == SITE_DIR;
?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/iblock_id_link.php");?>
<?
if (\Bitrix\Main\Loader::includeModule('iblock')) {
    $elementIterator = \Bitrix\Iblock\ElementTable::getList([
        'select' => [
            '*',
        ],
        'filter' => [
            '=IBLOCK_ID' => $GLOBALS["codingart_block_id"]["general_id"],
        ]
    ]);
    foreach ($elementIterator->fetchAll() as $element) {
    }
    $GLOBALS["codingart_block_id"]["element_id"] = $element["ID"];
}
$GLOBALS["global_info"];
if(CModule::IncludeModule("iblock")){
	$db_props = CIBlockElement::GetProperty($GLOBALS["codingart_block_id"]["general_id"], $GLOBALS["codingart_block_id"]["element_id"], "sort", "asc", array());
	while($ar_props = $db_props->Fetch()){
		$GLOBALS["global_info"][$ar_props["CODE"]] = $ar_props["VALUE"];
	}
}
?>
<?
$arItemGeneral['PROPERTIES'];
$db_props = CIBlockElement::GetProperty($GLOBALS["codingart_block_id"]["general_id"], $GLOBALS["codingart_block_id"]["element_id"], "sort", "asc", array());
while($ar_props = $db_props->Fetch()){
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["ID"] = $ar_props["ID"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["VALUE"] = $ar_props["VALUE"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["NAME"] = $ar_props["NAME"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["VALUE_XML_ID"] = $ar_props["VALUE_XML_ID"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["XML_ID"] = $ar_props["XML_ID"];
    }
?>
<!doctype html>
<?php 
$gen_color = ".default";
if ($GLOBALS["global_info"]["GEN_COLOR_1"] != null) {$general_color_1 = $GLOBALS["global_info"]["GEN_COLOR_1"];}
else{$general_color_1 = '#2c2b5e';}
if ($GLOBALS["global_info"]["GEN_COLOR_2"] != null) {$general_color_2 = $GLOBALS["global_info"]["GEN_COLOR_2"];}
else{$general_color_2 = '#ec1c23';}
if ($GLOBALS["global_info"]["GEN_COLOR_3"] != null) {$general_color_3 = $GLOBALS["global_info"]["GEN_COLOR_3"];}
else{$general_color_3 = '#303030';}
$file = fopen($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.php", 'r');
$text = fread($file, filesize($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.php"));
fclose($file);
$file = fopen($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.css", 'w');
$text = str_replace('#2c2b5e', $general_color_1, $text);
$text = str_replace('#ec1c23', $general_color_2, $text);
$text = str_replace('#303030', $general_color_3, $text);
fwrite($file, $text);
fclose($file);
 ?>
<html>
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?$APPLICATION->ShowTitle();?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?$APPLICATION->ShowHead();?>
        <!-- Place favicon.ico in the root directory -->
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.css")?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/meanmenu.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/magnific-popup.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.min.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/et-line-icon.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/reset.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ionicons.min.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/material-design-iconic-font.min.css")?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css")?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/".$gen_color."/color.css");?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css")?>
        
    </head>
    <body>
        <?$APPLICATION->ShowPanel();?>
        <!-- Header Area Start -->
        <header class="top">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                <?$APPLICATION->IncludeFile(
            SITE_DIR."include/main/questions.php",
            array(),
            array(
                "MODE" => "html"));?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
		                    <div class="header-top-right text-right">
		                        <ul>
		                            <li><a href="//<?echo $GLOBALS["global_info"]["URL_1"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_1"]?>"></i></a></li>
                                    <li><a href="//<?echo $GLOBALS["global_info"]["URL_2"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_2"]?>"></i></a></li>
                                    <li><a href="//<?echo $GLOBALS["global_info"]["URL_3"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_3"]?>"></i></a></li>
                                    <li><a href="//<?echo $GLOBALS["global_info"]["URL_4"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_4"]?>"></i></a></li>
		                        </ul>
		                    </div>
		                </div>
                    </div>
                </div>
            </div>
            <div class="header-area two header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="logo">
                                <a href="<?=SITE_DIR?>"><?
                        $props = CIBlockElement::GetProperty($GLOBALS["codingart_block_id"]["general_id"], $GLOBALS["codingart_block_id"]["element_id"], "sort", "asc", array("CODE" => "LOGO"));
                        if ($ar_props = $props->GetNext()){
                            $prop = $ar_props['VALUE'];
                            $file = CFile::GetFileArray($prop);
                            $LOGO_SRC = $file['SRC'];}
                        if($LOGO_SRC != null):?>
                            <img  src="<?=$LOGO_SRC?>" alt="eduhome"><?endif;?></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-6">
                            <div class="content-wrapper text-right">
                                <!-- Main Menu Start -->
                                    <?$APPLICATION->IncludeComponent(
                                    "codingart:menu",
                                    "main",
                                    array(
                                        "COMPONENT_TEMPLATE" => "main",
                                        "ROOT_MENU_TYPE" => "top",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MAX_LEVEL" => "1",
                                        "CHILD_MENU_TYPE" => "left",
                                        "USE_EXT" => "N",
                                        "DELAY" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                    ),
                                    false
                                    );?>
                                <!-- Main Menu End -->
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<?if($bIsMainPage):?>
 
<?else:?>
<div class="banner-area-wrapper">
    <div class="banner-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-content-wrapper">
                        <div class="banner-content">
                            <h2><?$APPLICATION->ShowTitle();?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?endif;?>
