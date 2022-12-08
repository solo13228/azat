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
<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="" style="border-radius: 20px; width: 870px; height: 650px;" class="w-100">
<br>
<br>
<p><?echo $arResult["DETAIL_TEXT"];?></p>