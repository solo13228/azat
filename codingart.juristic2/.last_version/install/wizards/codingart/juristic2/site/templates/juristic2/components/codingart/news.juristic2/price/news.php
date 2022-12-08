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


<div class="col-lg-4 col-md-12">
	<aside id="sidebar" class="sidebar" role="complementary">
		<?$APPLICATION->IncludeComponent(
			"codingart:catalog.section.list.juristic2", 
			"price_list", 
			array(
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => "price_list",
				"COUNT_ELEMENTS" => "Y",
				"FILTER_NAME" => "sectionsFilter",
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"IBLOCK_TYPE" => "catalog_juristic2",
				"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
				"SECTION_FIELDS" => array(
					0 => "ID",
					1 => "CODE",
					2 => "XML_ID",
					3 => "NAME",
					4 => "SORT",
					5 => "DESCRIPTION",
					6 => "PICTURE",
					7 => "DETAIL_PICTURE",
					8 => "IBLOCK_TYPE_ID",
					9 => "IBLOCK_ID",
					10 => "IBLOCK_CODE",
					11 => "IBLOCK_EXTERNAL_ID",
					12 => "DATE_CREATE",
					13 => "CREATED_BY",
					14 => "TIMESTAMP_X",
					15 => "MODIFIED_BY",
					16 => "",
				),
				"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"SHOW_PARENT_NAME" => "Y",
				"TOP_DEPTH" => "6",
				"VIEW_MODE" => "LIST"
			),
			false
		);?> 
	</aside> <!-- #sidebar -->
</div>
<!-- Sidebar col end -->
<div class="col-lg-8 col-md-12">
	<div class="not-found">
		<?$APPLICATION->IncludeComponent(
			"codingart:catalog.section.list.juristic2", 
			"price_content", 
			array(
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => "price_content",
				"COUNT_ELEMENTS" => "Y",
				"FILTER_NAME" => "sectionsFilter",
				"HIDE_SECTION_NAME" => "N",
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"IBLOCK_TYPE" => "catalog_juristic2",
				"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
				"SECTION_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"SHOW_PARENT_NAME" => "Y",
				"TOP_DEPTH" => "2",
				"VIEW_MODE" => "LINE"
			),
			false
		);?>
	</div>
</div>