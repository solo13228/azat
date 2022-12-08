<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<!-- Contact Start -->
<?$APPLICATION->IncludeComponent("codingart:map.yandex.view", "map", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"INIT_MAP_TYPE" => "MAP",	
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.785278631673656;s:10:\"yandex_lon\";d:49.11889807656396;s:12:\"yandex_scale\";i:10;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:49.118898076564;s:3:\"LAT\";d:55.78527863168;s:4:\"TEXT\";s:7:\"Eduhome\";}}}",	
		"MAP_WIDTH" => "2611",	
		"MAP_HEIGHT" => "440",	
		"CONTROLS" => array(	
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"OPTIONS" => array(	
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",	
		"API_KEY" => "",
	),
	false
);?>
<div class="contact-area pt-150 pb-140"> 
    <div class="container">     
        <div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12">
			<div class="contact-contents text-center">
            <?$APPLICATION->IncludeComponent(
			"codingart:news.list", 
			"contact_info", 
			array(
				"COMPONENT_TEMPLATE" => "contact_info",
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => $GLOBALS["codingart_block_id"]["contact_data_id"],
				"NEWS_COUNT" => "4",
				"SORT_BY1" => "ID",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "DESCRIP",
					1 => "ICON",
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
		);?></div></div>
<div class="col-md-7 col-sm-7 col-xs-12">
                    <?$APPLICATION->IncludeComponent(
	"codingart:main.feedback", 
	"contact", 
	array(
		"COMPONENT_TEMPLATE" => "contact",
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		)
	),
	false
);?>
			</div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>