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
<?if($arParams['BASE_MODE'] == 'Y'){?>
<section class="testimonial-section">
<div class="container">
<!-- Sec Title -->
<div class="row">

<div class="testimonials-carousel owl-carousel owl-theme col-lg-7 col-md-12 col-12">
	
	<?foreach ($arResult["ITEMS"] as $arItem) {
		$id_item = $arItem['ID'];
		$name = $arItem['NAME'];
		$name_detal = $arItem['PROPERTIES']['REVIEWS_NAME_DETAL']['VALUE'];
		$img = $arItem["PREVIEW_PICTURE"]['SRC'];	
		$text = $arItem['PREVIEW_TEXT'];
		$svg_file = SITE_DIR. "images/quot.svg";
		$svg_img = file_get_contents($_SERVER["DOCUMENT_ROOT"].$svg_file);
		?>
			<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>	 	
					<div class="testimonial-block"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="inner-box text-left">
							<div class="content-box">
								<div class="quote-icon">
									
									<?if($svg_img) echo $svg_img;?>
								</div>
								<p class="text">
									 <?=$text;?>
								</p>
								
							</div>
							<div class="image-box m-0">
								<div class="col-12 stars text-center mb-4">
							  			<i class="icon icon-star-1" lvl_data="1"></i>
							  			<i class="icon icon-star-1" lvl_data="2"></i>
							  			<i class="icon icon-star-1" lvl_data="3"></i>
							  			<i class="icon icon-star-1" lvl_data="4"></i>
							  			<i class="icon icon-star-1" lvl_data="5"></i>
							  	</div>
								<div class="row">
									<div class="col-lg-3 col-md-4 col-11">
					 					<div class="img-border"><img src="<?=$img;?>" alt=""></div>
					 				</div>
					 				<div class="col-9">
					 					<h3 class="pt-1"><?=$name;?></h3>
										<p class="designation">
											 <?=$name_detal;?>
										</p>
									</div>
								</div>
								</div>
							</div>
						</div>
				
				<?}?>
				
</div>
<div class="section-title text-right col-lg-5 col-md-12 col-12">
	<svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none" class="ml-auto mb-4 mt-lg-5 mt-md-4 mt-3  d-block">
<circle cx="37.5" cy="37.5" r="35" fill="#C9B38C" stroke="#F1F1F1" stroke-width="5"></circle>
<path d="M54 50V26L42 38V50H54Z" fill="white"></path>
<path d="M34 50V26L22 38V50H34Z" fill="white"></path>
</svg>
	<h2><?=$arParams['BASE_TITLE']?></h2>
	<div class="text">
		<?=$arParams['BASE_DESC']?>	
	</div>
	<div class="col-12 mt-5 text-right <?if((!$arParams['BASE_BTN_ALL_NAME']) and (!$arParams['BASE_BTN_FORM_NAME']))echo"d-none";?>">
		<a href="<?=$arParams['BASE_BTN_ALL_LINK']?>" class="btn <?if(!$arParams['BASE_BTN_ALL_NAME'])echo"d-none";?>"><?=$arParams['BASE_BTN_ALL_NAME']?></a>
		<a data-toggle="modal" data-target="#modal-new-reviews" class="btn ml-lg-4 <?if(!$arParams['BASE_BTN_FORM_NAME'])echo"d-none";?>"><?=$arParams['BASE_BTN_FORM_NAME']?></a>
	</div>
</div>
</div>
	
	
</section>
<?}else{?>


<section id="reviews" class="reviews reviews-page my-5">
  <div class="container">
   <h1 class="mb-4"><?=$arParams['BASE_TITLE']?></h1>
	<div class="text">
		<?=$arParams['BASE_DESC']?>	
	</div>

		<div class="row justify-content-start  m-0 reviews reviews-box accordion">

			<?foreach ($arResult["ITEMS"] as $arItem) {
				$id_item = $arItem['ID'];
				$name = $arItem['NAME'];
				$name_detal = $arItem['PROPERTIES']['REVIEWS_NAME_DETAL']['VALUE'];
				$img = $arItem["PREVIEW_PICTURE"]['SRC'];	
				$text = $arItem['PREVIEW_TEXT'];
				?>
				 	<!-- Testimonial Block -->
				  	<div class="row p-0 col-lg-6 col-md-11 col-12 accordion-head">
				  		<div class="col-lg-2 col-2 p-0 accordion-img">
				  			<img src="<?=$img?>">
				  		</div>
				  		<div class="col-lg-10 col-10 pl-2 py-4 body">
					  		<div class="reviews-title col-12 row m-0">
					  			<b class="col-7 pl-0"><?=$title?></b>
					  			<div class="col-4 stars text-right">
						  			<i style="color:#000;" class="hover icon icon-star2" lvl_data="1"></i>
						  			<i style="color:#000;" class="icon icon-star2" lvl_data="2"></i>
						  			<i style="color:#000;" class="icon icon-star2" lvl_data="3"></i>
						  			<i style="color:#000;" class="icon icon-star2" lvl_data="4"></i>
						  			<i style="color:#000;" class="icon icon-star2" lvl_data="5"></i>
						  		</div>
					  		</div>
					  		<div class="name_detal col-12"><?=$name_detal?></div>
							<div class="accordion-body-1 col-12 mt-3">
								<?=leng_text($text, 100, "...");?>
							</div>
							<div class="accordion-body-2 col-12 mt-3 d-none">
								<?=$text;?>
							</div>								  		
						</div>
						<div class="accordion-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
				  	</div>
				<?}?>
		</div>
		<div class="col-12 mt-5 text-center">
				<a data-toggle="modal" data-target="#modal-new-reviews" class="btn ml-lg-4 <?if(!$arParams['BASE_BTN_FORM_NAME'])echo"d-none";?>"><?=$arParams['BASE_BTN_FORM_NAME']?></a>
		</div>
	</div>
</section>

<?}?>