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
<section class="page-content style2">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="class-single-content">
							<p><?echo $arResult["DETAIL_TEXT"];?></p>
						</div><!--class-single-content end-->
					</div>
					<div class="col-xl-4 col-lg-4">
<br>
		<br><br>
		<br><br>
		<br>
<div class="sidebar class-sidebar">
		<div class="widget widget-information">
			<h3 class="widget-title"><?=GetMessage("CLASS_INFO")?></h3>
			<ul>
				<li>
					<h4><?=GetMessage("STUD_TIME")?></h4>
					<span><?echo $arResult["DISPLAY_PROPERTIES"]["LEARNING_TIME"]["DISPLAY_VALUE"]?></span>
				</li>
				<li>
					<h4><?=GetMessage("STUD_AGE")?></h4>
					<span><?echo $arResult["DISPLAY_PROPERTIES"]["AGE"]["DISPLAY_VALUE"]?></span>
				</li>
				<li>
					<h4><?=GetMessage("STUD_PLACE")?></h4>
					<span><?echo $arResult["DISPLAY_PROPERTIES"]["CLASS_SIZE"]["DISPLAY_VALUE"]?></span>
				</li>
				<li>
					<h4><?=GetMessage("STUD_DURAT")?></h4>
					<span><?echo $arResult["DISPLAY_PROPERTIES"]["COURES_DURATION"]["DISPLAY_VALUE"]?></span>
				</li>
			</ul>
			<div class="tech-info">
				<div class="tech-tble">
					<img src="<?echo $arResult["DISPLAY_PROPERTIES"]["TEACHER_PHOTO"]["FILE_VALUE"]["SRC"]?>" style="width: 54px; height: 54px" alt="">
					<div class="tch-info">
						<h3><?echo $arResult["DISPLAY_PROPERTIES"]["TEACHER_NAME"]["DISPLAY_VALUE"]?></h3>
						<span><?echo $arResult["DISPLAY_PROPERTIES"]["CLASS_NAME"]["DISPLAY_VALUE"]?></span>
					</div>
				</div>
				<a href="<?=SITE_DIR?>contacts/" title="" class="btn-default">					<h4><?=GetMessage("STUD_CONTACT")?></h4><i class="fa fa-long-arrow-alt-right"></i></a>
			</div>
		</div>
						<?$APPLICATION->IncludeComponent(
	"itproduce:news.list",
	"sideclass",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "AGE",
			1 => "LEARNING_TIME",
			2 => "TEACHER_NAME",
			3 => "CLASS_SIZE",
			4 => "CLASS_NAME",
			5 => "COURES_DURATION",
			6 => "PRICE",
			7 => "TEACHER_PHOTO",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "sideclass"
	),
	false
);?>
					</div>
		</div>
	</div>
</section>