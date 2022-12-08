<!-- Event Area Start -->
<div class="event-area three text-center pt-150 pb-150">
    <div class="container">
        <div class="row">
        	<div class="col-xs-12">
        		<div class="section-title">
                    <img  src="<?=SITE_TEMPLATE_PATH?>/img/icon/section.png" style="max-width: 44px;max-height: 33px;" alt="section-title">
		            <h2><?$APPLICATION->IncludeFile(
				    SITE_DIR."include/main/lastevent.php",
				    array(),
				    array(
				        "MODE" => "text"));?></h2>
				</div>
			</div>
		</div>
    <?$APPLICATION->IncludeComponent(
	"codingart:news.list",
	"events",
	array(
		"COMPONENT_TEMPLATE" => "events",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => $GLOBALS["codingart_block_id"]["events_id"],
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DATE_ACTIVE_FROM",
			3 => "ACTIVE_FROM",
			4 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "ADDRESS",
			1 => "",
		),
		"CHECK_DATES" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
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
	</div>
</div>
 <!-- Event Area End -->