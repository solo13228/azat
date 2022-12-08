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

if($_REQUEST["SECTION_ID"]){
	$res = CIBlockSection::GetByID($_REQUEST["SECTION_ID"]);
	if($ar_res = $res->GetNext())
	  $page_title =  $ar_res['NAME'];
	
} else {
	$page_title = $arParams["PAGER_TITLE"];
}

?>
<section id="main-content" class="blog main-container" role="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12">
				<aside id="sidebar" class="sidebar" role="complementary">
					<div id="search-2" class="widget widget_search d-none">
						
					</div>
					<?$APPLICATION->IncludeComponent(
						"codingart:catalog.section.list.juristic2", 
						"blog_list", 
						array(
							"ADD_SECTIONS_CHAIN" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "A",
							"COUNT_ELEMENTS" => "Y",
							"FILTER_NAME" => "sectionsFilter",
							"IBLOCK_ID" => $arParams["IBLOCK_ID"],
							"IBLOCK_TYPE" => "content_juristic2",
							"SECTION_CODE" => "",
							"PAGER_TITLE" => GetMessage('PROP_1'),
							"SECTION_FIELDS" => array(
								0 => "",
								1 => "",
							),
							"SECTION_ID" =>"",
							"SECTION_URL" => "",
							"SECTION_USER_FIELDS" => array(
								0 => "",
								1 => "",
							),
							"SHOW_PARENT_NAME" => "Y",
							"TOP_DEPTH" => "2",
							"VIEW_MODE" => "LINE",
							"COMPONENT_TEMPLATE" => "blog_list"
						),
						false
					);?>
					<?$APPLICATION->IncludeComponent(
	"codingart:news.list.juristic2", 
	"recent_posts", 
	array(
		"COMPONENT_TEMPLATE" => "recent_posts",
		"IBLOCK_TYPE" => "content_juristic2",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => GetMessage("PROP_2"),
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
					<div id="archives-2" class="widget widget_archive d-none">
						<h3 class="widget-title"><?=GetMessage('PROP_3')?></h3>
						<ul>
							<li>
								<a href="">August 2019</a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<h1 class="col-12 mb-3"><?=$page_title?></h1>
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
		$title = leng_text($title,90,'');
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
			</div>
			</div>
		</div>
	</div>
</section>