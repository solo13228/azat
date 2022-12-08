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
<div class="row">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="col-md-4 col-sm-6 col-xs-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="single-course mb-70">
            <div class="course-img">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["SERVICES_ICON"]["FILE_VALUE"]["SRC"]?>" alt="course">
                    <div class="course-hover">
                        <i class="fa fa-link"></i>
                    </div>
                </a>
            </div>
            <div class="course-content">
                <h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><? echo $arItem["NAME"] ?></a></h3>
                <p maxlength="170"><?=$arItem["PREVIEW_TEXT"]?></p>
                <a class="default-btn" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=GetMessage("RMORE_BTN")?></a>
            </div>   
        </div>
    </div>
    <?endforeach;?>
</div>