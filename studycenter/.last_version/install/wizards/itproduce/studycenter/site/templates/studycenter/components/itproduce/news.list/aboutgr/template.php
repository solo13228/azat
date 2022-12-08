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

<?if($arResult["ITEMS"]):?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="row align-items-center" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="col-lg-6 col-md-6">
			<div class="section-title">
				<h2><?=$arItem["NAME"]?></h2>
				<p class="mw-100"><?=$arItem["PREVIEW_TEXT"]?></p>
				<a href="<?=SITE_DIR?>classes/" title="" class="btn-default"><?=GetMessage("MCLASSES")?><i class="fa fa-long-arrow-alt-right"></i></a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="avt-img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			</div>
		</div>
	</div>		
<?endforeach;?>
<?endif;?>