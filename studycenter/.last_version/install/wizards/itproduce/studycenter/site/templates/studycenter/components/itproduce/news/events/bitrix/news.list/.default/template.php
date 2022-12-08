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
<section class="page-content">
			<div class="container">
				<div class="course-section">
					<div class="courses-list">
						<div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-lg-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="course-card">
			<div class="d-flex flex-wrap align-items-center">
				<ul class="course-meta">
					<li>
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<?=$arItem["DISPLAY_PROPERTIES"]["DATE_EVENT"]["DISPLAY_VALUE"]?>
					</li>  
				</ul>
				<span><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?>&nbsp;₽</span>
			</div>
			<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><? echo $arItem["NAME"] ?></a></h3>
			<div class="d-flex flex-wrap">
				<div class="posted-by">
					<img src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["SRC"]?>"  alt="">
					<a href="#" title=""><?=$arItem["DISPLAY_PROPERTIES"]["ORGANIZER"]["DISPLAY_VALUE"]?></a>
				</div>
				<span class="locat"><i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i><?=$arItem["DISPLAY_PROPERTIES"]["PLACE"]["DISPLAY_VALUE"]?></span>
			</div>
		</div><!--course-card end-->
	</div>
<?endforeach;?>
				</div>
			</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
	</div>
</section>