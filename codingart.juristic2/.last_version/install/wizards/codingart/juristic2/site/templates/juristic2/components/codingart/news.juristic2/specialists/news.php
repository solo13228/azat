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


	<?$APPLICATION->IncludeComponent(
	"codingart:news.list.juristic2", 
	"specialists", 
	array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COMPONENT_TEMPLATE" => "specialists",
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILE_404" => "",
		"FILTER_NAME" => "",
		"GROUP_PERMISSIONS" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"IBLOCK_TYPE" => "content_juristic2",
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_PARAMS_NAME" => "",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "SPEC_FB",
			2 => "SPEC_INST",
			3 => "SPEC_VK",
			4 => "SPEC_SPESHEL",
			5 => "",
		),
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "",
		"SORT_ORDER2" => "",
		"STRICT_SECTION_CHECK" => "Y",
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"BASE_TITLE" => "",
		"BASE_DESC" => "",
		"BASE_MODE" => "N",
		"BASE_BTN_EL_NAME" => "Записаться",
		"BASE_BTN_ALL_NAME" => "Посмотреть все",
		"BASE_BTN_ALL_LINK" => "#SITE_DIR#/services/"
	),
	false
);?>

<section class="book-form py-5 my-5">
	<div class="team-pattern-layer-two" style="">
	</div>
	<div class="container">
		<div class="row">
			<div class="text-form col-lg-5 col-12">
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
										"PATH" => SITE_DIR."include/main-form24.php"
									),
									false
								);?>
		
			</div>
			<div class="box-form col-lg-7 col-12">
				<?global $arItemGeneral;?>
<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_9", 
	array(
		"COMPONENT_TEMPLATE" => "form_9",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_SELECT_IBLOCK_ID" => $arParams["SERVICES_ID"],
		"FORM_TITLE" => "Записаться на консультацию",
		"MODAL_MOD" => "N",
		"FORM_TITLE_2" => ""
	),
	false
);?>
			</div>
		</div>
	</div>
</section>