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


<div class="single-blog-widget mb-50">
	 <h3><?=GetMessage("CATEGOR_SBAR")?></h3>
	<ul>
<?
$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;
foreach($arResult["SECTIONS"] as $arSection):

	if($CURRENT_DEPTH<$arSection["DEPTH_LEVEL"])

	echo "<ul>";

	elseif($CURRENT_DEPTH>$arSection["DEPTH_LEVEL"])

	echo str_repeat("</ul>", $CURRENT_DEPTH - $arSection["DEPTH_LEVEL"]);

	$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];

?>

	<li><a href="<?=SITE_DIR?>blog<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?><?if($arParams["COUNT_ELEMENTS"]):?> (<?=$arSection["ELEMENT_CNT"]?>)<?endif;?></a></li>

<?endforeach?>
<?php unset($arSection);?>
	</ul>
</div>