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
         	<?foreach($arResult["ITEMS"] as $arItem):?>
         	<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
            
                <div class="notice-right-wrapper mb-25 pb-25" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                 <h3><? echo $arItem["NAME"] ?></h3>
                 <div class="notice-video" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>')">
                     <div class="video-icon video-hover">
                         <a class="video-popup" href="<?=$arItem["PREVIEW_TEXT"]?>">
                             <i class="zmdi zmdi-play"></i>
                         </a>
                     </div>
                 </div>
                </div> 
			<?endforeach;?>