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
<div class="testimonial-area pt-110 pb-105 text-center">
    <div class="container">
        <div class="row">
            <div class="testimonial-owl owl-theme owl-carousel">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>    
                <div class="col-md-8 col-md-offset-2 col-sm-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="single-testimonial">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="width: 84px; height: auto" alt="testimonial">
                            </div>
                            <div class="testimonial-content">
                                <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                <h4><? echo $arItem["NAME"] ?></h4>
                                <h5><?=$arItem["DISPLAY_PROPERTIES"]["POSER"]["DISPLAY_VALUE"]?></h5>
                            </div>
                        </div>
                    </div>
                </div> 
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>
