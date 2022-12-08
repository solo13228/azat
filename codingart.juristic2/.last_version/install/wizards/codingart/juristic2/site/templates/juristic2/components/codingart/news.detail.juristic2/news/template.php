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


	<? 
	$section_id = $arResult["IBLOCK_SECTION_ID"];
	$name = $arResult["NAME"];
	$name_title = str_replace(" ","-",$arResult["NAME"]);
	$text = $arResult["PREVIEW_TEXT"];
	$img = $arResult["DETAIL_PICTURE"]['SRC'];	
	$url_detal=$arResult["DETAIL_PAGE_URL"];
	$data = explode(" ", $arResult['DATE_CREATE']);
	$category = $arResult['SECTION']['PATH']['0']['NAME'];
	$category_link = $arResult['SECTION']['PATH']['0']['SECTION_PAGE_URL'];
	?>
	
	

				<?
				$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?> 
				<article  class="post-content detal post-single post-916 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
					<div class="post-media post-image" > 
						<img width="100%" class="img-fluid lazyloaded" src="<?=$img?>" alt=" Hospital doctors examine patients so that" data-lazy-src="<?=$img?>" data-was-processed="true">
						<noscript><img class="img-fluid" src="<?=$img?>" alt=" Hospital doctors examine patients so that"></noscript>
					</div>
					<div class="post-body clearfix">
						<header class="entry-header clearfix">
							<div class="post-meta"> <span class="post-meta-date"> <i class="icon icon-clock3"></i><?=$data[0]?></span><span class="meta-categories post-cat"> <i class="icon icon-folder"></i> <a href="<?=$category_link?>" rel="category tag"><?=$category?></a> </span> 
							
						</div>
						</header>
						<?$APPLICATION->SetTitle($name);?>
						<div class="entry-content clearfix">
							<h2><?=$name?></h2>
							<?=$text?>
							<div class="post-footer clearfix"></div>
						</div>
					</div>
				</article>
			<nav class="post-navigation clearfix d-none">
				<?
				$arFilter = Array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
				$arSelect = Array($section_id, "DETAIL_PAGE_URL");
				$ElementID = $arResult['ID'];

				$resPrev = CIBlockElement::GetList(
					Array("CREATED"=>"ASC"),
					$arFilter,
					false,
					Array('nPageSize' => 2, 'nElementID' => $ElementID),
					$arSelect
				);?>
			<div class="post-previous"> 
				<?if ($ar_fields = $resPrev->GetNext()) {
					if($ElementID == $ar_fields['ID']) {
						echo "";
					} else {?>
						<? 
						$res = CIBlockElement::GetByID($ar_fields['ID']);
						if($ar_res = $res->GetNext())?>
						
							<a href="<?=$ar_fields['DETAIL_PAGE_URL']?>">
								<h3><?=$ar_res['NAME']?></h3> 
								<span>
									<i class="icon icon-left-arrow2"></i>
									<?=GetMessage('PREV_POST')?>
								</span> 
							</a>
						
						
					<?}
				}?>
			</div>	
			
				<?$resNext = CIBlockElement::GetList(
					Array("CREATED"=>"DESC"),
					$arFilter,
					false,
					Array('nPageSize' => 1, 'nElementID' => $ElementID),
					$arSelect
				);?>
			<div class="post-next"> 
				<? if ($ar_fields = $resNext->GetNext()) {
					if($ElementID == $ar_fields['ID']) {
						echo "";
					} else {?>
						<? 
						$res = CIBlockElement::GetByID($ar_fields['ID']);
						if($ar_res = $res->GetNext())?>
						
							<a href="<?=$ar_fields['DETAIL_PAGE_URL']?>">
								<h3><?=$ar_res['NAME']?></h3> 
								<span>
									<?=GetMessage('NEXT_POST')?>
									<i class="icon icon-right-arrow2"></i>
								</span> 
							</a>
					<?}
				}?>
			</div>
		</nav>

				
				


