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
<div class="event-area three text-center pt-150 pb-150">
            <div class="container">
		<div class="row">
    	<?foreach($arResult["ITEMS"] as $arItem):?>
    	<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="col-md-4 col-sm-6 col-xs-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	    <div class="single-event mb-60">
	        <div class="event-img">
	            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
	                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="event" style="max-height: 365px; max-height: 246px;">
	                <div class="course-hover">
	                    <i class="fa fa-link"></i>
	                </div>
	            </a>
	            <div class="event-date">
	                <h3><?=FormatDateFromDB($arItem["ACTIVE_FROM"], 'DD M');?></span></h3>  
	            </div>
	        </div>
	        <div class="event-content text-left">
	            <h4><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><? echo $arItem["NAME"] ?></a></h4>
	            <ul>
	                <li><span><?=GetMessage("TIME_ORG")?><?=FormatDateFromDB($arItem["ACTIVE_FROM"], 'HH:MI');?></span></li>
	                <li><span><?=GetMessage("ADDRES_ORG")?></span><?=$arItem["DISPLAY_PROPERTIES"]["ADDRESS"]["DISPLAY_VALUE"]?></li>
	            </ul>
	            <div class="event-content-right">
	                <a class="default-btn" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=GetMessage("MOREINFO")?></a>
	            </div>
	        </div>
	    </div>
	    </div>	
	    <?endforeach;?>      
		</div>
	</div>
</div>
 