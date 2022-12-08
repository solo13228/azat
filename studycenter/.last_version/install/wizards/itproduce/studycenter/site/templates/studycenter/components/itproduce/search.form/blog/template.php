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
$this->setFrameMode(true);?>
<div class="widget widget-search">
	<form action="<?= $arResult["FORM_ACTION"]; ?>">
		<input type="text" name="q" value="<?=GetMessage("BSF_T_SEARCH_BUTTON")?>" onfocus="this.value='';" onblur="if (this.value=='') {this.value='<?=GetMessage("BSF_T_SEARCH_BUTTON")?>';}">
		<button type="submit" name="s" value=""><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icon4.png" alt=""></button>
	</form>
</div><!--widget-search end-->
