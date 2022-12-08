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
<div class="single-blog-widget mb-50">
    <h3><?=GetMessage("BSF_T_SEARCH_BUTTON")?></h3>
	<div class="blog-search">
		<form id="search" action="<?=$arResult["FORM_ACTION"]?>">
				<input type="search" placeholder="<?=GetMessage("BSF_T_SEARCH_BUTTON")?>" name="q" value=""/>
				<button type="submit">
		            <span><i class="fa fa-search"></i></span>
		        </button>
		</form>
	</div>
</div>