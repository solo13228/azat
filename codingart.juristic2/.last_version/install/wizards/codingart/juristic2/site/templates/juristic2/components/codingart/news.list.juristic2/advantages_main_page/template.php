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


<section class="adv_main_page">
	<div class="container">
		 <!-- Sec Title -->
		
		<div class="row justify-content-center;">
			<? $i=0; ?>
			<?foreach($arResult["ITEMS"] as $arItem){?>
					<!-- Featured Block -->
					<?
					$img_grup = '';
					$svg_file = '';
					if($arItem['PROPERTIES']['ADVENT_ICON_AR']['VALUE']){
						$res_img = CIBlockElement::GetByID($arItem['PROPERTIES']['ADVENT_ICON_AR']['VALUE']);
					    $element_img = $res_img->GetNextElement();	
					    $prop_img = $element_img->GetProperties(); 		
						$img_file = CFile::GetPath($prop_img["SVG_FILE"]['VALUE']);
						$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file)  );
						$img_grup = $img_file.'#'.$svg['id'];
					}
					if($arItem['PROPERTIES']['ADVENT_ICON_FILE']['VALUE']){
						$img_file = CFile::GetPath($arItem['PROPERTIES']['ADVENT_ICON_FILE']['VALUE']);

						$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
						if($svg['id']){
							$img_grup = $img_file.'#'.$svg['id'];
						}
						$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
					}

					?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>	 	
					<div class="featured-block style-two col-lg-3 col-md-6 col-sm-6  col-10 m-auto p-0" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="row">
								<div class="icon-box col-4">
				 					<span class="icon <?//=$prop['ADVENT_ICON']['VALUE'];?> m-0">
				 						<?if($svg['id']){?>
										<svg class="list_icon">
									     	<use xlink:href="<?=$img_grup?>" >
									  	</svg>
										<?}?>
										<?if($svg_file){
										  	echo $svg_file;
										  }?>
									  
									</span>
								</div>
								<h3 class="col-8 m-0 pl-0"><a style="cursor: default;"><?=htmlspecialcharsBack($arItem['NAME']);?></a></h3>
							</div>
						</div>
					</div>
				<?
				$i++;
			}?>	
		</div>		
	</div>
</section>



