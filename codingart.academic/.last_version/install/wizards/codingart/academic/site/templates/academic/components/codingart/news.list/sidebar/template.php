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
<div class="single-blog-widget mb-50">
	<h3><?=GetMessage("LPOST_SBAR")?></h3>
	<?foreach($arResult["ITEMS"] as $cell=>$arItem):?>
	<div class="single-post mb-30">
        <div class="single-post-img">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="max-width: 95px;max-height: 84px;" alt="post">
                <div class="blog-hover">
                    <i class="fa fa-link"></i>
                </div>
            </a>
        </div>
        <div class="single-post-content">
            <h4><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><? echo $arItem["NAME"] ?></a></h4>
            <p><?=$arItem["CREATED_USER_NAME"]?>  /  <?=FormatDateFromDB($arItem["DATE_CREATE"], 'M d, Y');?></p>
        </div>
    </div>
    <?endforeach;?>
</div>
<?endif;?>