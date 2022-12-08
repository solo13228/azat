<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<h2 class="main-title"><?=GetMessage("SITE_NAME")?></h2>
<section class="main-banner">
<div class="container">
	<div class="row align-items-center">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        	<?
        	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        	?>
	       <div class="col-lg-7 col-md-7" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
                    <h2><?=$arItem["DISPLAY_PROPERTIES"]["TOPDESCR"]["DISPLAY_VALUE"]?></h2>
                    <p><?=$arItem["NAME"]?></p>
					<i class="fa fa-circle" aria-hidden="true"></i>
                    <?$APPLICATION->IncludeComponent(
                    "itproduce:search.form",
                    "search.form",
                    array(
                        "PAGE" => "#SITE_DIR#search/",
                        "USE_SUGGEST" => "N",
                        "COMPONENT_TEMPLATE" => "search.form"
                         ),
                         false
                        );
                        ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="banner-img wow zoomIn" data-wow-duration="1000ms">
     	          <img class="topimg" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                </div>
                <div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
