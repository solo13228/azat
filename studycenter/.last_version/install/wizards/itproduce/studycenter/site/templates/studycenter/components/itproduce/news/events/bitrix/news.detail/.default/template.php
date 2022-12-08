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
		<div class="row">
			<div class="col-lg-9">
				<div class="event-single">
					<div class="event-gallery-sec">
						<div class="event-gallery">
							<a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" title="" class="html5lightbox" data-group="set1">
								<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
							</a>
							<span class="price"><?echo $arResult["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?>&nbsp;₽</span>
						</div><!--event-gallery end-->
						<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-3">
							<div class="event-gallery">
								<a href="<?echo $arResult["DISPLAY_PROPERTIES"]["PICONE"]["FILE_VALUE"]["SRC"]?>" title="" class="html5lightbox" data-group="set1">
									<img src="<?echo $arResult["DISPLAY_PROPERTIES"]["PICONE"]["FILE_VALUE"]["SRC"]?>" alt="">
								</a>
							</div><!--event-gallery end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-3">
							<div class="event-gallery">
								<a href="<?echo $arResult["DISPLAY_PROPERTIES"]["PICTWO"]["FILE_VALUE"]["SRC"]?>" title="" class="html5lightbox" data-group="set1">
									<img src="<?echo $arResult["DISPLAY_PROPERTIES"]["PICTWO"]["FILE_VALUE"]["SRC"]?>" alt="">
								</a>
							</div><!--event-gallery end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-3">
							<div class="event-gallery">
								<a href="<?echo $arResult["DISPLAY_PROPERTIES"]["PICTHREE"]["FILE_VALUE"]["SRC"]?>" title="" class="html5lightbox" data-group="set1">
									<img src="<?echo $arResult["DISPLAY_PROPERTIES"]["PICTHREE"]["FILE_VALUE"]["SRC"]?>" alt="">
								</a>
							</div><!--event-gallery end-->
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-3">
							<div class="event-gallery">
								<a href="<?echo $arResult["DISPLAY_PROPERTIES"]["PICFOUR"]["FILE_VALUE"]["SRC"]?>" title="" class="html5lightbox" data-group="set1">
									<img src="<?echo $arResult["DISPLAY_PROPERTIES"]["PICFOUR"]["FILE_VALUE"]["SRC"]?>" alt="">
								</a>
							</div><!--event-gallery end-->
						</div>
					</div>
					</div><!--event-gallery-sec end-->
					<p><?echo $arResult["DETAIL_TEXT"];?></p>				
				</div><!--event-single end-->
			</div>
			<div class="col-lg-3">
				<div class="sidebar class-sidebar position-static" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="widget widget-information">
								<ul class="clt">
									<li>
										<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/cir3.png" alt="">
										<div class="clt-info">
											<h3><?echo $arResult["PROPERTIES"]["PLACE"]["VALUE"]?></h3>
										</div>
									</li>
									<li>
										<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/cir4.png" alt="">
										<div class="clt-info">
											<h3><?echo $arResult["PROPERTIES"]["DATE_EVENT"]["VALUE"]?></h3>
										</div>
									</li>
								</ul>
								<div class="tech-info">
									<div class="tech-tble">
										<img src="<?echo $arResult["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["SRC"]?>" style="width: 54px; height: 54px;" alt="">
										<div class="tch-info">
											<h3><?echo $arResult["DISPLAY_PROPERTIES"]["ORGANIZER"]["DISPLAY_VALUE"]?></h3>
											<span></span>
										</div>
									</div>
									<a href="<?=SITE_DIR?>contacts/" title="" class="btn-default"><?=GetMessage("ME_CONTACTS")?> <i class="fa fa-long-arrow-alt-right"></i></a>
								</div>
							</div><!--widget-information end-->
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
							</div><!--widget-contact-dp end-->
						</div><!--sidebar end-->
			</div>
		</div>
	</div>
</section><!--page-content end-->