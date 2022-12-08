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
<div class="teachers">
            <div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="teacher">
            <div class="teacher-img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  alt="" class="w-100">
            </div>
            <div class="teacher-info">
                <h3><a href="teachers<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><? echo $arItem["NAME"] ?></a></h3>
                <span><?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?></span>

            </div>
        </div>
    </div>
<?endforeach;?>
    </div>
</div>