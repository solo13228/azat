<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_id_link.php");?>
<section class="container-fluid  o-nas  o-nas-block">
	<div class="container" style="max-width: 100%!important;">
	<div class="pattern-layer" style=""></div>
	<div class="outer-section">
		<div class="clearfix">
			
			<!-- Left Column -->
			<div class="left-column">
				<div class="inner-column">					
							<?$APPLICATION->IncludeComponent(
								"codingart:main.include.juristic2", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"EDIT_TEMPLATE" => "",
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/o-nas-img-main.php"
								),
								false
							);?>
					
				</div>
			</div>

			<!-- Right Column -->

	<div class="right-column">
		<div class="inner-column">
			<?$APPLICATION->IncludeComponent(
				"codingart:main.include.juristic2", 
				".default", 
				array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO",
					"EDIT_TEMPLATE" => "",
					"COMPONENT_TEMPLATE" => ".default",
					"PATH" => SITE_DIR."include/o-nas-main.php"
				),
				false
			);?>
				
					
<?$APPLICATION->IncludeComponent(
	"codingart:news.list.juristic2", 
	"advantages", 
	array(
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "advantages",
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
			28 => "",
		),
		"FILE_404" => $arParams["FILE_404"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $codingart_block_id["advantages_id"],
		"IBLOCK_TYPE" => "content_juristic2",
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "ADVENT_TEXT_H3",
			2 => "ADVENT_ICON",
			3 => "ADVENT_TEXT_P",
			4 => "DOK_ADVENT_ICON_COLOR",
			5 => "",
			6 => "ADVENT_ICON_FILE",
		),
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"STRICT_SECTION_CHECK" => "Y",
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"BASE_TITLE" => "Специалисты",
		"BASE_DESC" => "Сплоченная команда опытных врачей, способных решить любую проблему с вашим здоровьем.",
		"BASE_LIST_TEMP" => "SELECTS",
		"BASE_BTN_EL_NAME" => "Подробнее",
		"BASE_BTN_ALL_NAME" => "Посмотреть все",
		"BASE_BTN_ALL_LINK" => "#SITE_DIR#/services/",
		"BASE_MODE" => "Y",
		"BASE_LIST" => array(
		)
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"codingart:main.include.juristic2", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/o-nas-main_btn.php"
	),
	false
);?>


				</div>
			</div>
	    </div>
		</div>
	</div>
</section>
