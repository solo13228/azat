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


<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="xs-search-panel">
	<div class="search-form">
		<form action="<?=$arResult["FORM_ACTION"]?>" class="xs-search-group">

			<?if($arParams["USE_SUGGEST"] === "Y"):?>
			<?$APPLICATION->IncludeComponent(
						"bitrix:search.suggest.input",
						"",
						array(
							"NAME" => "q",
							"VALUE" => "",
							"INPUT_SIZE" => 15,
							"DROPDOWN_SIZE" => 10,
						),
						$component, array("HIDE_ICONS" => "Y")
			);?>
			<?else:?>
			<input type="text"  name="q" value="" class="form-control" name="search" id="search" placeholder="Поиск">
			<?endif;?>
			<button name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"  class="search-button"><i class="icon icon-search"></i></button>
		</form>
	</div>
    </div>
</div>