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
$monthes = array(
	"01" => GetMessage('MONT_ITEM_1'), 
	"02" => GetMessage('MONT_ITEM_2'), 
	"03" => GetMessage('MONT_ITEM_3'), 
	"04" => GetMessage('MONT_ITEM_4'), 
	"05" => GetMessage('MONT_ITEM_5'), 
	"06" => GetMessage('MONT_ITEM_6'),
	"07" => GetMessage('MONT_ITEM_7'), 
	"08" => GetMessage('MONT_ITEM_8'), 
	"09" => GetMessage('MONT_ITEM_9'), 
	"10" => GetMessage('MONT_ITEM_10'), 
	"11" => GetMessage('MONT_ITEM_11'), 
	"12" => GetMessage('MONT_ITEM_12')
);
?>



<section class="events-section">
	<div class="pattern-layer-two" style="">
	</div>
	<div class="container">
	 	<!-- Title Box -->
		<div class="title-box">
			<div class="clearfix">
				<div class="pull-left">
					<h2><?=$arParams['BASE_TITLE']?></h2>
				</div>
				<div class="pull-right">
	 			<a href="<?=SITE_DIR?>news/" class="view-events"><?=GetMessage('BTN_ALL');?> <span class="arrow fa fa-angle-right"></span></a>
				</div>
			</div>
		</div>
	 	<!-- Inner Container -->
		<div class="inner-container">
			<div class="pattern-layer-one" style="">
			</div>
			<div class="row">
				<?$num=0;
					foreach($arResult["ITEMS"] as $arItem){?>

						<?$num++;
						$id_item = $arItem['ID'];
						$title = $arItem['NAME'];
						$img =$arItem["PREVIEW_PICTURE"]['SRC'];
						
						$adres = $prop['EVENT_ADRES']['VALUE'];
						
					
						$link = $arItem["DETAIL_PAGE_URL"];
						$data = explode(".", $arItem['TIMESTAMP_X']);
						$mont = substr($monthes[$data[1]], 0, 3);
						$user = explode(")", $arItem['USER_NAME']);
						$reslt = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
						$ar_reslt = $reslt->GetNext();
					$category = $ar_reslt['NAME'];
					$category_link = $ar_reslt['SECTION_PAGE_URL'];
						?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?> 
						<? if($num == 1) {?> 

					 <!-- Column -->
							<div class="column col-lg-6 col-md-12 col-sm-12 mb-2">
								 <!-- Event Block -->
								<div class="event-block item-<?=$num?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
										
										<div class="upper-box clearfix">
											 <!-- Event Date -->
											<div class="event-date">
				 								<strong><?=$data[0]?></strong><?=$mont?>
											</div>
											<div class="image">
				 								<img src="<?=$img?>" alt="">
											</div>
											<ul class="event-list pt-3">
												
												<li><span class="icon icon-user"></span><?=$user[1];?></li>
												<?if($category){?>
													<li><span class="icon icon-folder"></span><a href="<?=$category?>"><?=$category;?></a></li>
												<?}?>
											</ul>
										
										</div>
											<h3 class="mt-0"><a href="<?=$link?>"><?=$title;?></a></h3>
									</div>
								</div>
							</div>
						<?} else { ?>
							 <!-- Column -->
							<?if($num == 2){?>	<div class="column col-lg-6 col-md-12 col-sm-12"> <?}?>
								 <!-- Event Block Two -->
								<div class="event-block-two item-<?=$num?> <?if($num>3){echo 'd-none';}?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

										<div class="content clearfix">
											
											 <!-- Event Date -->
											 <div class="event-date">
				 							<strong><?=$data[0]?></strong><?=$mont?>
											</div> 
											<ul class="event-list">
												<li><span class="icon icon-user"></span><?=$user[1];?></li>
												<?if($category){?>
													<li><span class="icon icon-folder"></span><a href="<?=$category?>"><?=$category;?></a></li>
												<?}?>
											</ul>
											<h3><a href="<?=$link?>"><?=$title;?></a></h3>
											
										</div>
									</div>
								</div>
								 <!-- Event Block Two -->
							<?if($num == 3){?>	</div><?}?>	
						<? ?>
					<?}
					$i++;
				}?>	
			</div>
		</div>
	</div>
</section>
