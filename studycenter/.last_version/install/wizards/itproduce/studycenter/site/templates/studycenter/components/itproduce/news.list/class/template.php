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
<div class="classes-sec">
    <div class="row classes-carousel">
        
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-lg-3">
		<div class="classes-col" data-wow-duration="1000ms" data-wow-delay="200ms" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="class-thumb">
				<img src="<?=$arItem["DISPLAY_PROPERTIES"]["CLASS_PHOTO"]["FILE_VALUE"]["SRC"]?>" alt="" class="w-100">
				<a href="<?=SITE_DIR?>contacts/" title="" class="crt-btn">
					<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icon10.png" alt="">
				</a>
			</div>
			<div class="class-info">
				<h3><a href="<?=SITE_DIR?>classes<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><? echo $arItem["NAME"] ?></a></h3>
					<span><?=$arItem["DISPLAY_PROPERTIES"]["LEARNING_TIME"]["DISPLAY_VALUE"]?></span>
				<div class="d-flex flex-wrap align-items-center">
					<div class="posted-by">
						<img src="<?=$arItem["DISPLAY_PROPERTIES"]["TEACHER_PHOTO"]["FILE_VALUE"]["SRC"]?>" style="width: 26px; height: 26px" alt="">
						<a href="#" title=""><?=$arItem["DISPLAY_PROPERTIES"]["TEACHER_NAME"]["DISPLAY_VALUE"]?></a>
					</div>
					<strong class="price"><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?>&nbsp;₽</strong>
				</div>
			</div>
		</div>
	</div>
<?endforeach;?>
		
        </div>
        <div class="lnk-dv text-center">
                <a href="<?=SITE_DIR?>classes/" title="" class="btn-default"><?=GetMessage("RCLASS")?> <i class="fa fa-long-arrow-alt-right"></i></a>
     	</div>
</div>