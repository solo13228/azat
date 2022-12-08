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
<!-- Blog Start -->
<div class="blog-details-area pt-150 pb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-details">
                    <div class="blog-details-img">
                        <img src="<?echo $arResult["DETAIL_PICTURE"]["SRC"]?>" style="width: 767px;height: auto;" alt="blog-details">
                    </div>
                    <div class="blog-details-content">
                        <h2><? echo $arResult["NAME"] ?> </h2>
                        <h6><?echo $arResult["CREATED_USER_NAME"]?>  /  <?=FormatDateFromDB($arItem["DATE_CREATE"], 'M d, Y');?></h6>
                        <p><?echo $arResult['DETAIL_TEXT']?></p>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <?$APPLICATION->IncludeComponent("codingart:search.form", "sidebar", Array(
				"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
					"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
				),
				false
				);?>
                <?$APPLICATION->IncludeComponent(
				"codingart:catalog.section.list", 
				"sidebar", 
				array(
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COUNT_ELEMENTS" => "Y",
				"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
				"FILTER_NAME" => "sectionsFilter",
				"IBLOCK_ID" => $GLOBALS["codingart_block_id"]["blog_id"],
				"IBLOCK_TYPE" => "content",
				"SECTION_CODE" => "",
				"SECTION_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_URL" => "?SECTION_CODE=#CODE#",
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"SHOW_PARENT_NAME" => "Y",
				"TOP_DEPTH" => "2",
				"VIEW_MODE" => "LINE",
				"COMPONENT_TEMPLATE" => "sidebar"
				),
				false
				);?>
                <?$APPLICATION->IncludeComponent(
				"codingart:news.list", 
				"sidebar", 
				array(
				"COMPONENT_TEMPLATE" => "sidebar",
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => $GLOBALS["codingart_block_id"]["blog_id"],
				"NEWS_COUNT" => "3",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_PICTURE",
					2 => "DATE_CREATE",
					3 => "CREATED_USER_NAME",
					4 => "",
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
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"ADD_SECTIONS_CHAIN" => "Y",
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
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
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
                <?$APPLICATION->IncludeComponent(
				"codingart:search.tags.cloud", 
				"sidebar", 
				array(
				"COMPONENT_TEMPLATE" => "sidebar",
				"SORT" => "NAME",
				"PAGE_ELEMENTS" => "6",
				"PERIOD" => "",
				"URL_SEARCH" => "/search/index.php",
				"TAGS_INHERIT" => "Y",
				"CHECK_DATES" => "N",
				"FILTER_NAME" => "",
				"arrFILTER" => array(
				),
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"FONT_MAX" => "50",
				"FONT_MIN" => "10",
				"COLOR_NEW" => "3E74E6",
				"COLOR_OLD" => "C0C0C0",
				"PERIOD_NEW_TAGS" => "",
				"SHOW_CHAIN" => "Y",
				"COLOR_TYPE" => "Y",
				"WIDTH" => "100%"
				),
				false
				);?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->