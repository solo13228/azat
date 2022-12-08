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
<div class="about-area pb-155">
    <div class="container">
        <div class="row">
		<br><br><br>
        	<?foreach($arResult["ITEMS"] as $arItem):?>
		 <?
		 $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		 $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		 ?>
            <div class="col-md-6 col-sm-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="about-content">
                    <h2><? echo $arItem["NAME"] ?></h2>
                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                    
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-img">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="about" style="width: 547px; height: auto;">
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</div>