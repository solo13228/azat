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
 
  


<section class="doctors-page-section filters-box team-section">
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
            <div class="filter-list <?if($arParams['BASE_MODE'] == 'Y'){echo 'team-carousel owl-carousel owl-theme p-0';} else {echo "row";}?>">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				
					<?
					$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
					if($ar_res = $res->GetNext());
					if($ar_res['GLOBAL_ACTIVE']=="Y") { 

					$section_id = $arItem["IBLOCK_SECTION_ID"];
					$name = $arItem["NAME"];
					$detal_url = $arItem["DETAIL_PAGE_URL"];
					$img = $arItem["PREVIEW_PICTURE"]['SRC'];
					$speshel = $arItem['PROPERTIES']['SPEC_SPESHEL']['VALUE'];
					$soc_vk = $arItem['PROPERTIES']['SPEC_VK']['VALUE'];
					$soc_fb = $arItem['PROPERTIES']['SPEC_FB']['VALUE'];
					$soc_inst = $arItem['PROPERTIES']['SPEC_INST']['VALUE'];


					if($arItem['PROPERTIES']["SPEC_ICON"]['VALUE']){ 
						$res_icon = CIBlockElement::GetByID($arItem['PROPERTIES']["SPEC_ICON"]['VALUE']);
					    $element_icon = $res_icon->GetNextElement();	
					    $prop_icon = $element_icon->GetProperties(); 		
						$icon = CFile::GetPath($prop_icon["SVG_FILE"]['VALUE']);
					}
					?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?> 

					<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="team-block <?if($arParams['BASE_MODE'] == 'N'){echo ' all item_'.$section_id.' mix traumatology dental pediatric  col-lg-3 col-md-6 col-sm-12';}?>">
						<div class="inner-box">
							<a href="<?=$detal_url?>">
								<div class="image" style="background: url(<?=$img?>);">
								
									
								</div>
								</a>
								<div class="lower-content"> 
									<div class="icon-box"> 

										<span class="icon">
											<?if($soc_vk){?><a href="<?=$soc_vk;?>" class="icon"><img src="/bitrix/templates/juristic2/assets/images/vk.png" class="mx-auto mb-4 d-block"></a><span class="social-name"></span><?}?>
										</span>
										<span class="icon">
											<?if($soc_fb){?><a href="<?=$soc_fb;?>" class="icon"><img src="/bitrix/templates/juristic2/assets/images/fb.png" class="mx-auto mb-4 d-block"></a><span class="social-name"></span><?}?>
										</span>
										<span class="icon">
											<?if($soc_inst){?><a href="<?=$soc_inst;?>" class="icon"><img src="/bitrix/templates/juristic2/assets/images/ins.png" class="mx-auto mb-4 d-block"></a><span class="social-name"></span><?}?>
										</span>
									</div>
									<h3><a href="<?=$detal_url?>"><?=$name?></a></h3>
									<p class="designation"><?=$speshel?></p>
								
								</div>
							</div>
						</div>
					<?}
				endforeach;?>
				
					
				</div>
				
			</div>
			</div>
				<?if(($arParams['BASE_BTN_ALL_NAME']) and ($arParams['BASE_BTN_ALL_LINK']) and ($arParams['BASE_MODE']=='Y')){?>
						<div class="col-12 mt-4 text-center">
								<a href="<?=$arParams['BASE_BTN_ALL_LINK']?>" class="btn"><?=$arParams['BASE_BTN_ALL_NAME']?></a>
						</div>
					<?}?>
		</div>
	</section>
	<!-- End Doctors Page Section -->
