<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?if (!empty($arResult)):?>
<div class="widget widget-links">
	<h3 class="widget-title"><?$APPLICATION->IncludeFile(SITE_DIR."include/footer/quicklinks.php",array(),array("MODE" => "text"))?></h3>
	<ul>
	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>	
		<li><a href="<?=$arItem["LINK"]?>" title=""><?=$arItem["TEXT"]?></a></li>

	<?endforeach?>
	</ul>
</div>
<?endif?>