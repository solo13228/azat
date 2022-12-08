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



<!-- Gallery Section --> 
<section id="gallery" class="gallery-section">
	
	<div class="container">
	<div class="title-box">
	
		<h2 style="color:#000;"><?=$arParams['BASE_TITLE']?></h2>
			
	</div>
	<div class="row">

	<?$num = 0; $i=0;?>
	<?foreach($arResult["ITEMS"] as $arItem){?>
		 
		<?$id_item = $arItem['ID'];?>
		<?$title = $arItem['NAME'];?>
		<?$img = $arItem["PREVIEW_PICTURE"]["SRC"];?>	
		<?$img_full = $arItem['DETAIL_PICTURE']["SRC"];?>	
		<?$icon = $arItem['PROPERTIES']['GALLERY_ICON']['VALUE'];?>

		<?if($arItem['PROPERTIES']['OPEN_NUM']['VALUE']){ 
			$open_num = $arItem['PROPERTIES']['OPEN_NUM']['VALUE'];
		} else {
			$open_num = 6;
		}?>

		<? $num++; ?>
	 <!-- Project Block -->
	 <?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>	 	
		<div class="project-block item_<?=$num?> col-lg-4 col-md-6 col-sm-12 d-none" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="inner-box">
				<div class="image" style="background: url(<?=$img;?>)" href="<?=$img_full;?>" data-fancybox="gallery-gal">
 					
					<!-- Overlay Box -->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="overlay-content">
								<div class="icon-box">
 									<span class="icon "><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M44.9432 45.9318C43.5672 45.1907 42.8694 44.1051 42.8694 42.7054V11.199C42.8694 10.8104 42.5545 10.4956 42.1661 10.4956C41.7777 10.4956 41.4627 10.8104 41.4627 11.199V42.7054C41.4627 44.2938 42.1218 45.6208 43.3814 46.5933H14.7652C12.5699 46.5933 10.7839 44.8073 10.7839 42.6119C10.7839 42.6119 10.7839 4.15484 10.7839 4.15475C10.7839 3.14136 10.4139 2.16614 9.74271 1.4067H37.4814C39.6767 1.4067 41.4627 3.19275 41.4627 5.38805V7.96363C41.4627 8.35216 41.7777 8.66698 42.1661 8.66698C42.5545 8.66698 42.8694 8.35216 42.8694 7.96363V5.38805C42.8694 2.417 40.4524 0 37.4814 0H6.62911C4.33815 0 2.47437 1.86379 2.47437 4.15475V6.72686C2.47437 7.59957 3.18428 8.30949 4.05691 8.30949H9.37715V42.6119C9.37715 45.5829 11.7942 47.9999 14.7652 47.9999H44.4263C44.938 47.9999 45.3658 47.6672 45.4907 47.172C45.6163 46.6742 45.3963 46.1759 44.9432 45.9318ZM9.37715 6.90279H4.05691C3.95994 6.90279 3.88107 6.82382 3.88107 6.72686V4.15475C3.88107 2.63954 5.11381 1.4067 6.62911 1.4067C8.14441 1.4067 9.37715 2.63954 9.37715 4.15475V6.90279Z" fill="#C9B38C"></path>
<path d="M32.3977 6.97482C32.7862 6.97482 33.1011 6.66 33.1011 6.27147C33.1011 5.88293 32.7862 5.56812 32.3977 5.56812H19.8491C19.4607 5.56812 19.1458 5.88293 19.1458 6.27147C19.1458 6.66 19.4607 6.97482 19.8491 6.97482H32.3977Z" fill="#C9B38C"></path>
<path d="M37.1164 11.936H15.1305C14.742 11.936 14.4271 12.2509 14.4271 12.6394C14.4271 13.0279 14.742 13.3427 15.1305 13.3427H37.1164C37.5048 13.3427 37.8197 13.0279 37.8197 12.6394C37.8197 12.2509 37.5048 11.936 37.1164 11.936Z" fill="#C9B38C"></path>
<path d="M37.1164 15.4353H15.1305C14.742 15.4353 14.4271 15.7501 14.4271 16.1387C14.4271 16.5272 14.742 16.842 15.1305 16.842H37.1164C37.5048 16.842 37.8197 16.5272 37.8197 16.1387C37.8197 15.7501 37.5048 15.4353 37.1164 15.4353Z" fill="#C9B38C"></path>
<path d="M37.8197 19.6374C37.8197 19.2489 37.5048 18.9341 37.1164 18.9341H15.1305C14.742 18.9341 14.4271 19.2489 14.4271 19.6374C14.4271 20.026 14.742 20.3408 15.1305 20.3408H37.1164C37.5048 20.3408 37.8197 20.026 37.8197 19.6374Z" fill="#C9B38C"></path>
<path d="M28.4861 23.1369C28.4861 22.7484 28.1712 22.4336 27.7827 22.4336H15.1305C14.742 22.4336 14.4271 22.7484 14.4271 23.1369C14.4271 23.5255 14.742 23.8403 15.1305 23.8403H27.7827C28.1712 23.8403 28.4861 23.5254 28.4861 23.1369Z" fill="#C9B38C"></path>
<path d="M23.2982 42.2958C23.5771 42.4612 23.9271 42.467 24.2117 42.3111L26.1408 41.253L28.067 42.3169C28.205 42.3931 28.3587 42.4311 28.5122 42.431C28.6745 42.431 28.8368 42.3886 28.9804 42.304C29.2598 42.1393 29.4337 41.8356 29.434 41.5119L29.4459 36.393C30.6701 35.415 31.4565 33.911 31.4565 32.2259C31.4565 29.2852 29.0641 26.8928 26.1233 26.8928C23.1826 26.8928 20.7902 29.2852 20.7902 32.2259C20.7902 32.6144 21.1051 32.9293 21.4936 32.9293C21.882 32.9293 22.1969 32.6144 22.1969 32.2259C22.1969 30.0609 23.9583 28.2995 26.1233 28.2995C28.2883 28.2995 30.0498 30.0609 30.0498 32.2259C30.0498 34.3909 28.2884 36.1523 26.1233 36.1523C24.965 36.1523 23.8715 35.6444 23.123 34.7588C22.8723 34.4623 22.4285 34.4249 22.1318 34.6757C21.8351 34.9265 21.7979 35.3702 22.0487 35.6669C22.2931 35.956 22.5651 36.2147 22.8584 36.442L22.8465 41.5017C22.8463 41.826 23.0193 42.1302 23.2982 42.2958ZM24.2634 37.2228C24.8515 37.4416 25.4797 37.5588 26.1234 37.5588C26.7979 37.5588 27.4429 37.4317 28.0374 37.2023L28.0293 40.689L26.5872 39.8925C26.4477 39.8155 26.2947 39.7771 26.1417 39.7771C25.9895 39.7771 25.8373 39.8152 25.6984 39.8913L24.2554 40.6828L24.2634 37.2228Z" fill="#C9B38C"></path>
</svg></span>
								</div>
								<h3><a><?=$title?></a></h3>
 								<a class="plus"  data-caption=""><span class=""></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?
	$i++;
	}?>	
	</div>
	</div>

	<?if($i>6){ ?>
	<div class="button-box text-center">
		<a href="#open_gal" class="theme-btn btn-style-three open_gal">Посмотреть все <span class="arrow icon-chevron-right"></span></a>
		<a href="#gallery" class="theme-btn btn-style-three close_gal d-none">Свернуть <span class="arrow icon-chevron-up"></span></a>
	</div>
	<?}?>
	<script type="text/javascript">
		function open_img() {
			open_num = <?=$open_num?> + 1;
			for (var i = 0; i < open_num; i++) {
				$("#gallery .item_"+i).removeClass('d-none');
			}
		}
		open_img();
		$("#gallery .button-box .open_gal").click(function(){
			$("#gallery .button-box .close_gal").removeClass('d-none');
			$("#gallery .button-box .open_gal").addClass('d-none');
			$("#gallery .project-block").removeClass('d-none');
		});
		$("#gallery .button-box .close_gal").click(function(){
			$("#gallery .button-box .close_gal").addClass('d-none');
			$("#gallery .button-box .open_gal").removeClass('d-none');
			$("#gallery .project-block").addClass('d-none');
			open_img();
		});

	</script>
	</div>
</section>



	
		