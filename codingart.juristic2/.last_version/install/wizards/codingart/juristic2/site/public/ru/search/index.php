<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->SetTitle("�����");?>
<section id="main-content" class="blog main-container" role="main">
	<div class="container">
		<div class="row">
			 <div class="col-lg-4 col-md-12">
        		<aside id="sidebar" class="sidebar" role="complementary">
					<?$APPLICATION->IncludeComponent(
	"codingart:news.list.juristic2", 
	"recent_posts", 
	array(
		"COMPONENT_TEMPLATE" => "recent_posts",
		"IBLOCK_TYPE" => "content_juristic2",
		"IBLOCK_ID" => $codingart_block_id['new_blog_id'],
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
		"PAGER_TITLE" => "���������� ������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
				</aside> <!-- #sidebar --> 
			</div><!-- Sidebar col end -->
			<div class="col-lg-8 col-md-12">
				<div class="not-found">  
					<?$APPLICATION->IncludeComponent(
	"codingart:search.page.juristic2",
	"search_medicart_page",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "000000",
		"COLOR_OLD" => "C8C8C8",
		"COLOR_TYPE" => "Y",
		"COMPONENT_TEMPLATE" => "search_medicart_page",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"NO_WORD_LOGIC" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_TITLE" => "���������� ������",
		"PAGE_RESULT_COUNT" => "5",
		"PATH_TO_USER_PROFILE" => "",
		"PERIOD_NEW_TAGS" => "",
		"RATING_TYPE" => "",
		"RESTART" => "Y",
		"SHOW_CHAIN" => "Y",
		"SHOW_ITEM_DATE_CHANGE" => "Y",
		"SHOW_ITEM_TAGS" => "Y",
		"SHOW_ORDER_BY" => "Y",
		"SHOW_RATING" => "",
		"SHOW_TAGS_CLOUD" => "Y",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "Y",
		"TAGS_INHERIT" => "Y",
		"TAGS_PAGE_ELEMENTS" => "150",
		"TAGS_PERIOD" => "",
		"TAGS_SORT" => "NAME",
		"TAGS_URL_SEARCH" => "",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "Y",
		"WIDTH" => "100%",
		"arrFILTER" => array(0=>"no",),
		"arrFILTER_blog" => "",
		"arrFILTER_forum" => "",
		"arrFILTER_iblock_content" => array(0=>"1",1=>"3",2=>"4",3=>"5",4=>"6",5=>"7",6=>"8",7=>"9",8=>"10",9=>"11",10=>"12",11=>"21",12=>"all",),
		"arrFILTER_iblock_forms" => array(0=>"all",),
		"arrFILTER_iblock_general_settings" => array(0=>"all",),
		"arrFILTER_iblock_price" => array(0=>"all",),
		"arrFILTER_iblock_requests" => "",
		"arrFILTER_main" => "",
		"arrWHERE" => array()
	)
);?>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>