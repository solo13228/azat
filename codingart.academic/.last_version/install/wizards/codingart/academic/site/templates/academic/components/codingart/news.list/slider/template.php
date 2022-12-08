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
<section id="slider-container" class="slider-area two"> 
    <div class="slider-owl owl-theme owl-carousel"> 
        <?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
        <div class="single-slide item" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>')" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="slider-content-area">  
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1"> 
                            <div class="slide-content-wrapper">
                                <div class="slide-content text-center">
                                    <h2><? echo $arItem["NAME"] ?></h2>
                                    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                                    <?endif;?>
                                    <a class="default-btn" href="<?=SITE_DIR?>about"><?=GetMessage("BTN_MORE")?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?endforeach;?>
    </div>
</section>
<?endif;?>