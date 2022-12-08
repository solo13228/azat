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
<div class="about-sec">
	<div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="col-lg-6 col-md-6 col-sm-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="abt-col">
		<img src="<?=$arItem["DISPLAY_PROPERTIES"]["ICONS"]["FILE_VALUE"]["SRC"]?>" alt="">
		<h3><?=$arItem["NAME"]?></h3>
		<p><?=$arItem["DISPLAY_PROPERTIES"]["OPISANIE"]["DISPLAY_VALUE"]?></p>
	</div><!--abt-col end-->
</div>
<?endforeach;?>
	</div>
</div>
						