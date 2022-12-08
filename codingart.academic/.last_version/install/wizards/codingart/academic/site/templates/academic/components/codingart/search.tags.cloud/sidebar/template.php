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

if(is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):
?>
<div class="single-blog-widget">
	<h3><?=GetMessage("TAG_SBAR")?></h3>
	<div class="single-tag">
	<?foreach ($arResult["SEARCH"] as $key => $res){?>
			<a href="<?=SITE_DIR?>search/?tags=<?=$res["NAME"]?>" rel="nofollow" class="mr-10 mb-10"><?=$res["NAME"]?></a>
		<?}?>
	<?endif;?>
	</div>
</div>