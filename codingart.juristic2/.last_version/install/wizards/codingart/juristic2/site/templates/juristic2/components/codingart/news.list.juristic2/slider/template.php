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

CJSCore::Init(array("fx"));
$randID = $this->randString();
$strContID = 'bx_catalog_slider_'.$randID;
$itemsCount = count($arResult["ITEMS"]);
$arRowIDs = array();
$boolFirst = true;
$strContWidth = 100*$itemsCount;
$strItemWidth = 100/$itemsCount;
?>

   <section class="banner-section">
   	
		<div><img class="banner-loader" width="60px" src="<?=SITE_TEMPLATE_PATH?>/images/loader.gif"></div>
        <div class="banner-carousel owl-carousel owl-theme owl-loaded owl-drag">
		

		<?foreach($arResult["ITEMS"] as $key => $arItem){
		$strRowID = 'cat-top-'.$key.'_'.$randID;
		$arRowIDs[] = $strRowID;
		$strTitle = (
			isset($arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"]) && '' != isset($arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"])
			? $arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"]
			: $arItem['NAME']
		);
		?>
		<?
		if($arItem['PROPERTIES']['SIDER_GRADIENT']['VALUE_XML_ID']){
			$grad_xml = $arItem['PROPERTIES']['SIDER_GRADIENT']['VALUE_XML_ID'];
		} else {
			$grad_xml = 'on';
		}

		if($arItem['PROPERTIES']['SIDER_COLOR_TEXT']['VALUE_XML_ID']){
			$color_xml = $arItem['PROPERTIES']['SIDER_COLOR_TEXT']['VALUE_XML_ID'];
		} else {
			$color_xml = 'white';
		}
		?>
            <!-- Slide Item -->
            <div id="<?=$this->GetEditAreaId($arItem['ID']);?>"   class="slide-item grad_<?=$grad_xml?> color_<?=$color_xml?>" style="">
			
            	<div  class="image-layer" style="background-image: url(<?=CFile::GetPath($arItem['PROPERTIES']['SLIDER_BG']['VALUE']);?>);"></div>
            <?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?> 
                <div class="container xs-banner-container-parent" >

					<div class="clearfix">
						
						<!-- Content Column -->
						<div class="banner-column col-lg-7 col-md-12 col-sm-12">
							<div class="title wow fadeInUp" data-wow-delay="250ms"><?=$arItem['DISPLAY_PROPERTIES']['SLIDER_DEPARTMENT']['VALUE'];?></div>
							<h1 class="wow fadeInUp" data-wow-delay="500ms"><?=$arItem['DISPLAY_PROPERTIES']['SLIDER_TAGLINE']['VALUE'];?></h1>
							<p class="text wow fadeInUp" data-wow-delay="750ms"><?if($arItem['DISPLAY_PROPERTIES']['SLIDER_DESCRIPTION']['~VALUE'])
							echo $arItem['DISPLAY_PROPERTIES']['SLIDER_DESCRIPTION']['~VALUE']['TEXT'];?></p>
							<div class="link-box wow fadeInUp" data-wow-delay="1000ms">
								
								<?$slider_link = $arItem['DISPLAY_PROPERTIES']['SLIDER_BTN_LINK']['VALUE'];
								
								$slider_link_check = strpos($slider_link, '#');
								if($slider_link_check === false){?>
									<a href="<?=$arItem['DISPLAY_PROPERTIES']['SLIDER_BTN_LINK']['VALUE'];?>" class="theme-btn btn-style-two"><i><?=$arItem['DISPLAY_PROPERTIES']['SLIDER_BTN']['VALUE'];?></i> </a>
								<?}else{?>
									
									
									<a href="" data-toggle="modal" data-target="<?=$arItem['DISPLAY_PROPERTIES']['SLIDER_BTN_LINK']['VALUE'];?>"  class="theme-btn btn-style-two" onclick="modal_spec_content('<?=$arItem['DISPLAY_PROPERTIES']['SLIDER_TAGLINE']['VALUE'];?>','')"><i><?=$arItem['DISPLAY_PROPERTIES']['SLIDER_BTN']['VALUE'];?></i> </a>
								<?}?>
								

								



								
							</div>
						</div>
						
						<!-- Image Column -->

							<div class="image">
								
							</div>

						
					</div>
                    
                </div>
            </div>
       	<?
		$boolFirst = true;
		}?>
        
			
			
        </div>
    </section>
    <!-- End Bnner Section -->

<?/*
if (1 < $itemsCount)
{
	$arJSParams = array(
		'cont' => $strContID,
		'arrows' => array(
			'id' => $strContID.'_arrows',
			'className' => 'bx_slider_controls'
		),
		'left' => array(
			'id' => $strContID.'_left_arr',
			'className' => 'bx_slider_arrow_left'
		),
		'right' => array(
			'id' => $strContID.'_right_arr',
			'className' => 'bx_slider_arrow_right'
		),
		'pagination' => array(
			'id' => $strContID.'_pagination',
			'className' => 'bx_slider_pagination'
		),
		'items' => $arRowIDs,
		'rotate' => (0 < $arParams['ROTATE_TIMER']),
		'rotateTimer' => $arParams['ROTATE_TIMER']
	);
?>
<script type="text/javascript">
	var ob<? echo $strContID; ?> = new JCCatalogTopBannerList(<? echo CUtil::PhpToJSObject($arJSParams, false, true); ?>);
</script>
<?
}
*/?>