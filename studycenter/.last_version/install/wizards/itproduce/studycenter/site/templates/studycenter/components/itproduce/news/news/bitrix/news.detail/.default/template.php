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
<div class="blog-posts">
					<div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-lg-4 col-md-6 col-sm-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="blog-post">
			<div class="blog-thumbnail">
				<img src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["SRC"]?>" alt="" width="1680" height="1120" class="w-100">
					<span class="category"><?=$arItem["DISPLAY_PROPERTIES"]["CATEGORIES"]["DISPLAY_VALUE"]?></span>
			</div>
			
			<div class="blog-info">
				<ul class="meta">
					<li><a href="#" title=""><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"]?></a></li>
					<li><a href="#" title=""><?=$arItem["CREATED_USER_NAME"]?></a></li>
					<li><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icon13.png" alt="" /><a href="#" title=""><?=$arItem["TAGS"]?></a></li>
				</ul>
				<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><? echo $arItem["NAME"] ?></a></h3>
				<p><?=$arItem["DISPLAY_PROPERTIES"]["DESCR"]["DISPLAY_VALUE"]?></p>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="" class="read-more"><?=GetMessage("READ")?><i class="fa fa-long-arrow-alt-right"></i></a>
			</div>
			
		</div>
	</div>	
<?endforeach;?>
	</div>
</div>
