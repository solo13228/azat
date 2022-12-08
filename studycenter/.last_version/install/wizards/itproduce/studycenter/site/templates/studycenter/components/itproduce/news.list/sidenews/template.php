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
<div class="wd-posts">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div class="wd-post d-flex flex-wrap">
			<div class="wd-thumb">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="border-radius: 5px; width: 52px; height: 52;" alt="">
			</div>
			<div class="wd-info">
				<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><? echo $arItem["NAME"] ?></a></h3>
				<span><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"]?></span>
			</div>
		</div>
<?endforeach;?>
</div>