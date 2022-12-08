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
<div class="row m-0 pt-5 question question-box accordion">	
	<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="row m-0 col-12 accordion-head" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="question-title col-12">
	 				<b><?=$arItem['NAME']?></b>
					<div class="accordion-arrow ">
	 					<i class="icon icon-down-arrow2"></i>
					</div>
				</div>
				<div class="accordion-body col-12 mt-3 d-none">
					 <?=htmlspecialcharsBack($arItem["PROPERTIES"]["ANSWER"]["VALUE"]["TEXT"]);?>
				
				</div>
		</div>
	<?endforeach;?>
</div>
