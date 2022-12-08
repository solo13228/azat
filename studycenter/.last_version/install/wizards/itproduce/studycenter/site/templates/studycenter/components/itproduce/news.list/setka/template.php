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
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="abt-img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
		<ul class="masonary" style="position: relative; height: 588px;">
			<li class="width1 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO1"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO1"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width2 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO2"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO2"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width3 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO3"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO3"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width4 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO4"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO4"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width5 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO5"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO5"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width6 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO6"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO6"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width7 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO7"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO7"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width8 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO8"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO8"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width9 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO9"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO9"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
			<li class="width10 wow zoomIn" data-wow-duration="1000ms"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO10"]["FILE_VALUE"]["SRC"]?>" data-group="set1" title="" class="html5lightbox"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO10"]["FILE_VALUE"]["SRC"]?>" alt=""></a></li>
		</ul>
	</div>
<?endforeach;?>

