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
<ul data-toggle="dropdown" class="header-search search-toggle">
    <li class="search-menu">
        <i class="fa fa-search"></i>
    </li>
</ul>
<div class="search">
    <div class="search-form">
		<form id="search-form" action="<?=$arResult["FORM_ACTION"]?>">
			<input type="search" name="q" value="" placeholder="<?=GetMessage("BSF_T_SEARCH_BUTTON")?>" />
            <button type="submit">
                <span><i class="fa fa-search"></i></span>
            </button>
		</form>
	</div>
</div>