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
<?

if($arParams['PARENT_SECTION']){
	$res = CIBlockSection::GetByID($arParams['PARENT_SECTION']);
	if($ar_res = $res->GetNext())
	  $page_title =  $ar_res['NAME'];
	
} else {
	$page_title = $arParams["PAGER_TITLE"];
}

?>

<div class="row">

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?		
		$res = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
		$ar_res = $res->GetNext();
		$category = $ar_res['NAME'];
		$category_link = $ar_res['SECTION_PAGE_URL'];

		$id_item = $arItem['ID'];
		$title = $arItem['NAME'];
		$text = $arItem["PREVIEW_TEXT"];
		$img = $arItem["PREVIEW_PICTURE"]['SRC'];	
		$url_detal = $arItem["DETAIL_PAGE_URL"];
		$data = explode(" ", $arItem['TIMESTAMP_X']);
	
		$text = leng_text($text,90,'...');
		//$title = leng_text($title,90,'');
		?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
	 	<!-- News Block -->
		<article  class="post-<?=$id_item?> col-lg-12 col-12 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
			<div class="bg row m-0" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="post-media post-image col-lg-4 col-md-4 col-12"> 
				<a href="<?=$url_detal?>"> 
					<img width="100%" class="img-fluid lazyloaded" src="<?=$img?>" alt=" Hospital doctors examine patients so that" data-lazy-src="<?=$img?>" data-was-processed="true">
					<noscript>
						<img class="img-fluid" src="<?=$img?>" alt=" Hospital doctors examine patients so that">
					</noscript> 
				</a>
			</div>
			<div class="post-body clearfix col-lg-8 col-md-8 col-12">
				<div class="entry-header">
				<div class="post-meta"> 
					<h3 class="entry-title"> 
						<a href="<?=$url_detal?>"><?=$title?></a>
					</h3>
					<span class="post-meta-date"> 
						<i class="icon icon-clock3"></i> <?=$data[0]?>
					</span>
						<span class="meta-categories post-cat"> 
							<i class="icon icon-folder"></i> 
							<a href="<?=$category_link?>" rel="category tag" class="btn-link"><?=$category?></a> 
						</span>
					</div>
				
				</div>
				<div class="post-content">
					<div class="entry-content">
						<p> <?=$text?></p>
					</div>
					<div class="post-footer readmore-btn-area">
						<a class="readmore_ btn-link" href="<?=$url_detal?>">
							<?=GetMessage('PROP_4')?>
							<i class="icon icon-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		</article>
		<?endforeach;?>	
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
		<?endif;?>
</div>
