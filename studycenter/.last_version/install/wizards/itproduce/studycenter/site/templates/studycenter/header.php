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
            '=IBLOCK_ID' => $GLOBALS["itproduce_block_id"]["general_id"],
        ]
    ]);
    foreach ($elementIterator->fetchAll() as $element) {
    }
    $GLOBALS["itproduce_block_id"]["element_id"] = $element["ID"];
}
$GLOBALS["global_info"];
if(CModule::IncludeModule("iblock")){
    $db_props = CIBlockElement::GetProperty($GLOBALS["itproduce_block_id"]["general_id"], $GLOBALS["itproduce_block_id"]["element_id"], "sort", "asc", array());
    while($ar_props = $db_props->Fetch()){
        $GLOBALS["global_info"][$ar_props["CODE"]] = $ar_props["VALUE"];
    }
}
?>
<?
$arItemGeneral['PROPERTIES'];
$db_props = CIBlockElement::GetProperty($GLOBALS["itproduce_block_id"]["general_id"], $GLOBALS["itproduce_block_id"]["element_id"], "sort", "asc", array());
while($ar_props = $db_props->Fetch()){
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["ID"] = $ar_props["ID"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["VALUE"] = $ar_props["VALUE"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["NAME"] = $ar_props["NAME"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["VALUE_XML_ID"] = $ar_props["VALUE_XML_ID"];
    $arItemGeneral['PROPERTIES'][$ar_props["CODE"]]["XML_ID"] = $ar_props["XML_ID"];
    }
?>
<!DOCTYPE html>
<?php
$gen_color = ".default";
if ($GLOBALS["global_info"]["GEN_COLOR_1"] != null) {$general_color_1 = $GLOBALS["global_info"]["GEN_COLOR_1"];}
else{$general_color_1 = '#f37335';}
if ($GLOBALS["global_info"]["GEN_COLOR_2"] != null) {$general_color_2 = $GLOBALS["global_info"]["GEN_COLOR_2"];}
else{$general_color_2 = '#1260a0';}
if ($GLOBALS["global_info"]["GEN_COLOR_3"] != null) {$general_color_3 = $GLOBALS["global_info"]["GEN_COLOR_3"];}
else{$general_color_3 = '#ffd31d';}
$file = fopen($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.php", 'r');
$text = fread($file, filesize($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.php"));
fclose($file);
$file = fopen($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/themes/.default/color.css", 'w');
$text = str_replace('#f37335', $general_color_1, $text);
$text = str_replace('#1260a0', $general_color_2, $text);
$text = str_replace('#ffd31d', $general_color_3, $text);
fwrite($file, $text);
fclose($file);
 ?>
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon.png">
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/animate.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/bootstrap.min.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/font-awesome.min.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/main.css")?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/".$gen_color."/color.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/responsive.css")?>
</head>

<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="wrapper">
        <div class="main-section">
            <header>
                <div class="container">
                    <div class="header-content d-flex flex-wrap align-items-center">
                    <div class="logo">
                        <?
                        $props = CIBlockElement::GetProperty($GLOBALS["itproduce_block_id"]["general_id"], $GLOBALS["itproduce_block_id"]["element_id"], "sort", "asc", array("CODE" => "LOGO"));
                        if ($ar_props = $props->GetNext()){
                            $prop = $ar_props['VALUE'];
                            $file = CFile::GetFileArray($prop);
                            $LOGO_SRC = $file['SRC'];}
                        if($LOGO_SRC != null):?>
                            <a href="<?=SITE_DIR?>" title=""><img  src="<?=$LOGO_SRC?>" style="width: 162px;height: 57px;" alt=""></a>
                        <?endif;?>
                    </div><!--logo end-->
                    <ul class="contact-add d-flex flex-wrap">
                        <li>
                            <div class="contact-info">
                                <i class="fa fa-phone"></i>
                                <div class="contact-tt">
                                    <h4><?=GetMessage("SITE_PHONE")?></h4>
                                    <span><?echo $GLOBALS["global_info"]["PHONE"]?></span>
                                </div>
                            </div><!--contact-info end-->
                        </li>
                        <li>
                            <div class="contact-info">
                                <i class="fa fa-clock "></i>
                                <div class="contact-tt">
                                    <h4><?=GetMessage("SITE_WTIME")?></h4>
                                    <span><?echo $GLOBALS["global_info"]["WORK_HOURS"]?></span>
                                </div>
                            </div><!--contact-info end-->
                        </li>
                        <li>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <div class="contact-tt">
                                    <h4><?=GetMessage("SITE_ADDRESS")?></h4>
                                    <span><?echo $GLOBALS["global_info"]["ADRESS"]?></span>
                                </div>
                            </div><!--contact-info end-->
                        </li>
                    </ul><!--contact-information end-->
                    <div class="menu-btn">
                        <a href="#">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </a>
                    </div><!--menu-btn end-->
                </div><!--header-content end-->

                        <?$APPLICATION->IncludeComponent("itproduce:menu", "top", Array(
                        "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => "",
                            "MENU_CACHE_TIME" => "3600",
                            "PE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                        false
                        );?>
                </div>
            </header>
        </div>
        <?if($bIsMainPage):?>

        <?else:?>

        <section class="pager-section">
            <div class="container">
                    <div class="pager-content text-center">
                    <h2><?$APPLICATION->ShowTitle();?></h2>
                    <?$APPLICATION->IncludeComponent("itproduce:breadcrumb", "navi", Array(

                        ),
                        false
                    );?>
                    </div>
                    <h2 class="page-titlee"><?=GetMessage("SITE_NAME")?></h2>
            </div>
        </section>

        <?endif;?>

        <div class="responsive-menu">
            <?$APPLICATION->IncludeComponent("itproduce:menu", "responsive", Array(
                "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => "",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "responsive",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => ".default"
                ),
                false
            );?>
        </div>
