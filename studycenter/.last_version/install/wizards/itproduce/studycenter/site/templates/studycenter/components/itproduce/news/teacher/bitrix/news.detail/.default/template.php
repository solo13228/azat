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
<section class="page-content">
			<div class="container">
				<div class="teacher-single-page">
					<div class="row">
						<div class="col-lg-4">
							<div class="teacher-coly">
								<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="371" height="505" alt="">
							</div><!--teacher-coly end-->
						</div>
						<div class="col-lg-8">
							<div class="teacher-content">
								<h3><?echo $arResult["PROPERTIES"]["POSITION"]["VALUE"]?></h3>
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z">
											<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/ro1.png" alt="">
											<div class="rol-info">
												<h3><?=GetMessage("TPHONE")?></h3>
												<span><?echo $arResult["PROPERTIES"]["PHONE"]["VALUE"]?></span>
											</div>
										</div><!--rol-z end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z">
											<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/ro2.png" alt="">
											<div class="rol-info">
												<h3><?=GetMessage("TEMAIL")?></h3>
												<span><?echo $arResult["PROPERTIES"]["EMAIL"]["VALUE"]?></span>
											</div>
										</div><!--rol-z end-->
									</div>
								</div>
								<p><?echo $arResult["DETAIL_TEXT"];?></p>
								<ul class="tech-detils">
									<li>
										<h3><?=GetMessage("TDATE")?></h3>
										<span><?echo $arResult["PROPERTIES"]["BIRTHDAY"]["VALUE"]?></span>
									</li>
									<li>
										<h3><?=GetMessage("TEDUC")?></h3>
										<span><?echo $arResult["PROPERTIES"]["EDUCATION"]["VALUE"]?></span>
									</li>
									<li>
										<h3><?=GetMessage("TEXP")?></h3>
										<span><?echo $arResult["PROPERTIES"]["EXPERIANCE"]["VALUE"]?></span>
									</li>
								</ul><!--tech-detils end-->
								<div class="skills-tech">
									<h3><?=GetMessage("TSKILL")?></h3>
									<div class="progess-row">
										<h3><?=GetMessage("TTRAIN")?></h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr1" data-wow-duration="1000ms" role="progressbar" style="width: <?echo $arResult["PROPERTIES"]["TEACHING"]["VALUE"]?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span><?echo $arResult["PROPERTIES"]["TEACHING"]["VALUE"]?>% </span>
									</div>
									<div class="progess-row">
										<h3><?=GetMessage("TORAT")?></h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr2" role="progressbar" style="width: <?echo $arResult["PROPERTIES"]["SPEAKING"]["VALUE"]?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span><?echo $arResult["PROPERTIES"]["SPEAKING"]["VALUE"]?>% </span>
									</div>
									<div class="progess-row">
										<h3><?=GetMessage("TMARITAL")?></h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr3" role="progressbar" style="width: <?echo $arResult["PROPERTIES"]["SUPPORT"]["VALUE"]?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span><?echo $arResult["PROPERTIES"]["SUPPORT"]["VALUE"]?>% </span>
									</div>
									<div class="progess-row">
										<h3><?=GetMessage("TRECOM")?></h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr4" role="progressbar" style="width: <?echo $arResult["PROPERTIES"]["WELL_BEING"]["VALUE"]?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span><?echo $arResult["PROPERTIES"]["WELL_BEING"]["VALUE"]?>% </span>
									</div>
								</div><!--skills-tech end-->
							</div><!--teacher-content end-->
						</div>
					</div>
				</div><!--teacher-single-page end-->
				<div class="teachers-section teacher-page">
					<?$APPLICATION->IncludeComponent(
					"itproduce:news.list",
					"teacher",
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
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
						"DETAIL_URL" => "?ELEMENT_ID=#ID#",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(
							0 => "NAME",
							1 => "PREVIEW_PICTURE",
							2 => "DETAIL_PICTURE",
							3 => "",
						),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "5",
						"IBLOCK_TYPE" => "content",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "N",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "4",
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
							0 => "POSITION",
							1 => "",
						),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "DESC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "N",
						"COMPONENT_TEMPLATE" => "teacher"
					),
					false
				);?>
		</div>
	</div>
</section><!--page-content end-->