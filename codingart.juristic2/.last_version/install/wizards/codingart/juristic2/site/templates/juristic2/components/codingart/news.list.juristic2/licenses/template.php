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
<section class="doctors-page-section filters-box team-section licenses-box pt-0">
	<div class="container-fluid p-0">
	<div class="container">
		
		<!--MixitUp Galery-->
        <div class="mixitup-gallery">
            
            <?if($arParams['BASE_MODE'] == 'N'){?>
            <div class="filters text-center clearfix">
            	
            	<ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all"><?=GetMessage('FILTER_ALL')?></li>
                    	<?/*foreach($arResult["ITEMS"] as $arItem):?>
                    		<li class="filter" data-role="button" data-filter=".xray"><?=$arItem['PROPERTIES']['SPEC_SPESHEL']['VALUE'];?></li>
						<?endforeach;*/?>
						<?$IBLOCK_ID = $arResult['ID'];
						$arFilter = Array(
						      'IBLOCK_ID'=>$IBLOCK_ID, 
						      'GLOBAL_ACTIVE'=>'Y');
						$obSection = CIBlockSection::GetTreeList($arFilter);

						while($arCatItem = $obSection->GetNext()){
						   for($i=0;$i<=($arCatItem['DEPTH_LEVEL']-2);$i++)?>
						     <li class="filter" data-role="button" data-filter=".item_<?=$arCatItem['ID'];?>"><?=$arCatItem['NAME'];?></li>
						<?}?>
                </ul> 
            </div>
            <?} else { ?>

            <div class="section-title text-center">
				<h2><?=$arParams['BASE_TITLE']?></h2>
				<p class="text">
					<?=$arParams['BASE_DESC']?>
				</p>
			</div>
			<?}?>	
            <div class="filter-list <?if($arParams['BASE_MODE'] == 'Y'){echo 'team-carousel owl-carousel owl-theme p-0';} else {echo "row justify-content-center";}?>">
				<?foreach($arResult["ITEMS"] as $arItem):?>

					<?
					$section_id = $arItem["IBLOCK_SECTION_ID"];
					$name = $arItem["NAME"];
					$detal_url = $arItem["DETAIL_PAGE_URL"];
					$img = $arItem["PREVIEW_PICTURE"]['SRC'];
					$speshel = $arItem['PROPERTIES']['SPEC_SPESHEL']['VALUE'];
					$soc_vk = $arItem['PROPERTIES']['SPEC_VK']['VALUE'];
					$soc_fb = $arItem['PROPERTIES']['SPEC_FB']['VALUE'];
					$soc_inst = $arItem['PROPERTIES']['SPEC_INST']['VALUE'];
					?>
						<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?> 
					<!-- Team Block -->
					<div  class="team-block <?if($arParams['BASE_MODE'] == 'N'){echo ' all item_'.$section_id.' mix traumatology dental pediatric  col-lg-3 col-md-6 col-sm-12';}?>">
						<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="inner-box" style="background: url(<?=$img;?>)" href="<?=$img;?>" data-fancybox="gallery-sert">
								<div class="image">
									
									<div class="overlay-box">
										<div class="overlay-inner">
											<ul class="team-social-box">
												<?if($soc_vk){?><li class="vk"><a href="<?=$soc_vk;?>" class="icon icons-vk2"></a><span class="social-name">vkontakte</span></li><?}?>
												<?if($soc_fb){?><li class="facebook"><a href="<?=$soc_fb;?>" class="icon icons-facebook2"></a><span class="social-name">facebook</span></li><?}?>
												<?if($soc_inst){?><li class="instagram"><a href="<?=$soc_inst;?>" class="icon icons-instagram2"></a><span class="social-name">instagram</span></li><?}?>
											</ul>
											<a class="bg-link" href=""></a>
											<div class="hover_box"><h3><?=$name?></h3></div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					<?endforeach;?>
				
					
				</div>
				
			</div>
			</div>
				
		</div>
	</section>
	<!-- End Doctors Page Section -->

<?}else{?>




<!-- Gallery Section --> 
<section id="sert" class="sert-section gallery-section <?if(!$arParams['BASE_TITLE'])echo "pt-0";?>">
	<div class="image-layer <?if(!$arParams['BASE_BG_IMG'])echo "d-none";?>" style="background-image:url(<?=$arParams['BASE_BG_IMG']?>)">
	</div>
	<div class="container">
	<div class="title-box">
		<h2 style="<?if(!$arParams['BASE_BG_IMG'])echo "color: #000;";?>" class="<?if(!$arParams['BASE_TITLE'])echo "d-none";?>"><?=$arParams['BASE_TITLE']?></h2>
	</div>
	<div class="row justify-content-center">
	
	<?$num = 0;?>

		<?foreach($arResult["ITEMS"] as $arItem){?>

		<?$id_item = $arItem['ID'];?>
		<?$title = $arItem['NAME'];?>
		<?$img = $arItem["PREVIEW_PICTURE"]['SRC'];?>	
		<?//$img_full = CFile::GetPath($arItem['DETAIL_PICTURE']);?>	
		<?$icon = $arItem['GALLERY_ICON']['VALUE'];?>

		<?if($arItem['OPEN_NUM']['VALUE']){ 
			$open_num = $arItem['OPEN_NUM']['VALUE'];
		} else {
			$open_num = 8;
		}?>

		<? $num++; ?>
	 <!-- Project Block -->
		<div class="project-block item_<?=$num?> col-lg-3 col-md-6 col-sm-12 d-none">
			<div class="inner-box " >
				<div class="image" style="background: url(<?=$img;?>)" href="<?=$img;?>" data-fancybox="gallery-1">
					<!-- Overlay Box -->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="overlay-content">
								<div class="icon-box">
 									<span class="icon <?=$icon?>"></span>
								</div>
								<h3><a><?=$title?></a></h3>
 								<a class="plus"  data-caption=""><span class="flaticon-plus-symbol"></span></a>
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
	 
	<?if($i>8){ ?>
	<div class="button-box text-center">
		<a href="#open_gal" class="theme-btn btn-style-three open_sert">Посмотреть все <span class="arrow icon-chevron-right"></span></a>
		<a href="#sert" class="theme-btn btn-style-three close_sert d-none">Свернуть <span class="arrow icon-chevron-up"></span></a>
	</div>
	<?}?>	
	<script type="text/javascript">
		open_num = 8;
		function open_img_sert() {
			open_num = 9;
			for (var i = 0; i < open_num; i++) {
				$(".sert-section .item_"+i).removeClass('d-none');
			}
		}
		open_img_sert();
		$(".sert-section .button-box .open_sert").click(function(){
			$(".sert-section .button-box .close_sert").removeClass('d-none');
			$(".sert-section .button-box .open_sert").addClass('d-none');
			$(".sert-section .project-block").removeClass('d-none');
		});
		$(".sert-section .button-box .close_sert").click(function(){
			$(".sert-section .button-box .close_sert").addClass('d-none');
			$(".sert-section .button-box .open_sert").removeClass('d-none');
			$(".sert-section .project-block").addClass('d-none');
			open_img_sert();
		});

	</script>
	</div>
</section>
<?}?>
				
				


