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


<section class="services-section">
	<div class="container">
		 <!-- Sec Title -->
		<div class="section-title text-center">
			<h2><?=$arParams['BASE_TITLE']?></h2>
				<p class="text">
					<?=$arParams['BASE_DESC']?>
				</p>
		</div>
		<div class="row">
			<? $i=0; ?>
			<?foreach($arResult["ITEMS"] as $arItem){?>
					<!-- Featured Block -->
					<?
					if($arItem['PROPERTIES']['ADVENT_ICON_AR']['VALUE']){ 
					    $res_img = CIBlockElement::GetByID($arItem['PROPERTIES']['ADVENT_ICON_AR']['VALUE']);
					    $element_img = $res_img->GetNextElement();	
					    $prop_img = $element_img->GetProperties(); 		
						$img_file = CFile::GetPath($prop_img["SVG_FILE"]['VALUE']);
						$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
						if($svg['id']){	
							$img_grup = $img_file.'#'.$svg['id'];
						}

					} elseif($arItem['PROPERTIES']['ADVENT_ICON_FILE']['VALUE']) { 
						$svg_file = CFile::GetPath($arItem['PROPERTIES']['ADVENT_ICON_FILE']['VALUE']);
						$svg_img = file_get_contents($_SERVER["DOCUMENT_ROOT"].$svg_file);
					}
					
					?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>	 	
					<div class="featured-block style-two col-lg-4 col-md-6 col-sm-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image-layer" style="background-image:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>)">
							</div>
							<?
			 						//$svg_id = file_get_contents($_SERVER["DOCUMENT_ROOT"].$img);
									//echo $svg_id;
									

			 						?>

							<div class="icon-box">
			 					<span class="icon <?//=$arItem['PROPERTIES']['ADVENT_ICON']['VALUE'];?> m-0">
			 						
									<? if($img_grup){?>
										<svg>
									     	<use xlink:href="<?=$img_grup?>">
									  	</svg>
								  	<?} elseif($svg_img){?>
										<?=$svg_img?>
									<?}?>
								  
								</span>
							</div>
							<h3><a href="#"><? echo htmlspecialcharsBack($arItem['NAME']);?></a></h3>
							<p>
								<?if($arItem['PROPERTIES']['ADVENT_TEXT_P']['VALUE'])
								echo htmlspecialcharsBack($arItem['PROPERTIES']['ADVENT_TEXT_P']['VALUE']['TEXT']);?>
							</p>
						</div>
					</div>
				<?
				$i++;
			}?>	
		</div>		
	</div>
</section>



