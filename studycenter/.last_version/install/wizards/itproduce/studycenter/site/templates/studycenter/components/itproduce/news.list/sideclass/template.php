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
<br>
<br>
<br>
<br>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<!--widget-information end-->
		<?$APPLICATION->IncludeComponent(
			"itproduce:news.list",
			"sidebarclass",
			array(
				"COMPONENT_TEMPLATE" => "sidebarclass",
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "4",
				"NEWS_COUNT" => "6",
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
				"SET_TITLE" => "Y",
				"SET_BROWSER_TITLE" => "Y",
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
		<br>
	<div class="widget widget-contact-dp mdp-contact">
		<div class="mdp-our-contacts">
			<h3><?=GetMessage("SITE_OURCONT")?></h3>
			<ul>
				<li>
					<div class="d-flex flex-wrap">
						<div class="icon-v">
							<i class="fa fa-phone"></i>
						</div>
						<div class="dd-cont">
							<h4><?=GetMessage("SITE_PHONE")?></h4>
							<span><?echo $GLOBALS["global_info"]["PHONE"]?></span>
						</div>
					</div>
				</li>
				<li>
					<div class="d-flex flex-wrap">
						<div class="icon-v">
							<i class="fa fa-clock "></i>
						</div>
						<div class="dd-cont">
							<h4><?=GetMessage("SITE_WTIME")?></h4>
							<span><?echo $GLOBALS["global_info"]["WORK_HOURS"]?></span>
						</div>
					</div>
				</li>
				<li>
					<div class="d-flex flex-wrap">
						<div class="icon-v">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="dd-cont">
							<h4><?=GetMessage("SITE_ADDRESS")?></h4>
							<span><?echo $GLOBALS["global_info"]["ADRESS"]?></span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
<?endforeach;?>
