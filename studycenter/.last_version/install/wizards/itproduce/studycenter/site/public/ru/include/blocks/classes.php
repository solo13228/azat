<!--====================  class area ====================-->
<section class="classes-section">
    <div class="container">
        <div class="sec-title">
            <h2><?$APPLICATION->IncludeFile(SITE_DIR."include/class/title.php", array(), array("MODE" => "text"));?></h2>
            <p><?$APPLICATION->IncludeFile(SITE_DIR."include/class/text.php", array(), array("MODE" => "text"));?></p>
        </div><!--sec-title end-->

<?$APPLICATION->IncludeComponent(
    "itproduce:news.list",
    "class",
    array(
        "COMPONENT_TEMPLATE" => "class",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => $GLOBALS["itproduce_block_id"]["classes_list_id"],
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
            0 => "AGE",
            1 => "LEARNING_TIME",
            2 => "TEACHER_NAME",
            3 => "CLASS_SIZE",
            4 => "CLASS_NAME",
            5 => "COURES_DURATION",
            6 => "PRICE",
            7 => "CLASS_PHOTO",
            8 => "TEACHER_PHOTO",
            9 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "?ELEMENT_ID=#ID#",
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

    </div>
</section>
<!--====================  End of class area  ====================-->