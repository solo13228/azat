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
<div class="row">
    <div class="col-xs-12">
        <div class="course-title">
            <h3><?=GetMessage("SEARCH_TEXT")?></h3>
        </div>
        <div class="course-form">
            <form id="search" action="<?=$arResult["FORM_ACTION"]?>">
                <input type="search" placeholder="<?=GetMessage("BSF_T_SEARCH_BUTTON")?>" name="q" value=""/>
                <button type="submit"><?=GetMessage("SEARCH_BTN")?></button>
            </form>
        </div>
    </div>
</div>  