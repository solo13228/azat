<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?><br>
<!-- About Start -->
 <?$APPLICATION->IncludeComponent(
	"codingart:news.list", 
	"welcome-block", 
	array(
		"COMPONENT_TEMPLATE" => "welcome-block",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => $GLOBALS["codingart_block_id"]["welcome_id"],
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "BTN_NAME",
			2 => "",
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
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
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
<!-- About End -->
<!-- Teacher Start -->
        <div class="teacher-area pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/section.png" alt="title">
                            <h2><?$APPLICATION->IncludeFile(
            SITE_DIR."include/teacher/meet.php",
            array(),
            array(
                "MODE" => "text"));?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?$APPLICATION->IncludeComponent(
	"codingart:news.list", 
	"teachers", 
	array(
		"COMPONENT_TEMPLATE" => "teachers",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => $GLOBALS["codingart_block_id"]["teachers_id"],
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "POSITION",
			2 => "SLINKICO1",
			3 => "SLINKICO2",
			4 => "SLINKICO3",
			5 => "SLINK1",
			6 => "SLINK2",
			7 => "SLINK3",
			8 => "PHOTO",
			9 => "",
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
        </div>
 <!-- Teacher End -->
<!-- Testimonial Area Start -->
<?$APPLICATION->IncludeComponent(
	"codingart:news.list", 
	"reviews", 
	array(
		"COMPONENT_TEMPLATE" => "reviews",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => $GLOBALS["codingart_block_id"]["reviews_id"],
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "POSER",
			2 => "",
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
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
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
<!-- Testimonial Area End -->
<!-- Notice Start -->
  <section class="notice-area two pt-140">
     <div class="container">
        <div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12" >
			<?$APPLICATION->IncludeComponent("codingart:news.list", "videoboard", Array(
			    "COMPONENT_TEMPLATE" => ".default",
			        "IBLOCK_TYPE" => "content",
			        "IBLOCK_ID" => $GLOBALS["codingart_block_id"]["videoboard-block_id"],
			        "NEWS_COUNT" => "20",
			        "SORT_BY1" => "ACTIVE_FROM",
			        "SORT_ORDER1" => "DESC",
			        "SORT_BY2" => "SORT",
			        "SORT_ORDER2" => "ASC",
			        "FILTER_NAME" => "",
			        "FIELD_CODE" => array(
			            0 => "NAME",
			            1 => "PREVIEW_TEXT",
			            2 => "PREVIEW_PICTURE",
			            3 => "",
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
			        "DISPLAY_BOTTOM_PAGER" => "Y",
			        "PAGER_TITLE" => "Новости",
			        "PAGER_SHOW_ALWAYS" => "N",
			        "PAGER_DESC_NUMBERING" => "N",
			        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			        "PAGER_SHOW_ALL" => "N",
			        "PAGER_BASE_LINK_ENABLE" => "N",
			        "SET_STATUS_404" => "N",
			        "SHOW_404" => "N",
			        "MESSAGE_404" => "",
			    ),
			    false
			);?>
		</div>
	<div class="col-md-6 col-sm-6 col-xs-12">
		    <div class="notice-left-wrapper">
		        <h3><?$APPLICATION->IncludeFile(
		            SITE_DIR."include/main/board.php",
		            array(),
		            array(
		                "MODE" => "text"));?></h3>
		        <div class="notice-left" >
					<?$APPLICATION->IncludeComponent(
					    "codingart:news.list",
					    "board",
					    array(
					        "COMPONENT_TEMPLATE" => "board",
					        "IBLOCK_TYPE" => "content",
					        "IBLOCK_ID" => $GLOBALS["codingart_block_id"]["board_id"],
					        "NEWS_COUNT" => "20",
					        "SORT_BY1" => "ACTIVE_FROM",
					        "SORT_ORDER1" => "DESC",
					        "SORT_BY2" => "SORT",
					        "SORT_ORDER2" => "ASC",
					        "FILTER_NAME" => "",
					        "FIELD_CODE" => array(
					            0 => "NAME",
					            1 => "DATE_CREATE",
					            2 => "",
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
					        "ACTIVE_DATE_FORMAT" => "d.M.Y",
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
			</div>
        </div>
    </div>
</section>
<!-- Notice End -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>