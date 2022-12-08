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
<div class="blog-area pt-150 pb-150">
            <div class="container">
                <div class="row">
                	<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
                    <div class="col-md-4 col-sm-6 col-xs-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="single-blog">
                            <div class="blog-img">
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="width: auto; height: 246px" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p><?=$arItem["CREATED_USER_NAME"]?>  /  <?=FormatDateFromDB($arItem["DATE_CREATE"], 'M d, Y');?></p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><? echo $arItem["NAME"] ?></a></h2>
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=GetMessage("REMORE")?></a>
                                </div>
                            </div>
                        </div><br>
                    </div>

                    <?endforeach;?>  
</div>
 <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
</div>