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


<div class="single-blog-widget">
	<h3>Категории</h3>
	<ul style="display:flex;flex-wrap: wrap;">
		<li><a href="<?=SITE_DIR?>courses/">Все</a></li>
<?
$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;
foreach($arResult["SECTIONS"] as $arSection):

	if($CURRENT_DEPTH<$arSection["DEPTH_LEVEL"])

	echo "<ul>";

	elseif($CURRENT_DEPTH>$arSection["DEPTH_LEVEL"])

	echo str_repeat("</ul>", $CURRENT_DEPTH - $arSection["DEPTH_LEVEL"]);

	$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];

?>

		<li style="margin-left:45px; padding-bottom: 20px;"><a href="<?=SITE_DIR?>courses<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?><?if($arParams["COUNT_ELEMENTS"]):?> <?endif;?></a></li>

<?endforeach?>
<?php unset($arSection);?>
	</ul>
</div>