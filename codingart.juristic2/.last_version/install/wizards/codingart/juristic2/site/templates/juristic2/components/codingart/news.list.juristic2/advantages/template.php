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
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_id_link.php");?>
<ul class="featured-list row mt-4 pt-2">
	<?if($arParams['BASE_LIST']){
	foreach ($arParams['BASE_LIST'] as $elm_id):
		$res = CIBlockElement::GetByID($elm_id);
		while ($element = $res->GetNextElement()) {
		    $field = $element->GetFields();   
		    $prop = $element->GetProperties();
			if($field['ACTIVE']=="Y") { 
				$img_grup='';
			

			if($prop['ADVENT_ICON_AR']['VALUE']){ 
				
			    $res_img = CIBlockElement::GetByID($prop['ADVENT_ICON_AR']['VALUE']);
			    $element_img = $res_img->GetNextElement();	
			    $prop_img = $element_img->GetProperties(); 		
				$img_file = CFile::GetPath($prop_img["SVG_FILE"]['VALUE']);
				$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
				if($svg['id']){	
					$img_grup = $img_file.'#'.$svg['id'];
				}

			} elseif($prop['ADVENT_ICON_FILE']['VALUE']) { 
				$svg_file = CFile::GetPath($prop['ADVENT_ICON_FILE']['VALUE']);
				$svg_img = file_get_contents($_SERVER["DOCUMENT_ROOT"].$svg_file);
			}
			

		   ?>

				<?
				$arButtons = CIBlock::GetPanelButtons(
				$field["IBLOCK_ID"],
				$field["ID"],
				    0,
				    array("SECTION_BUTTONS"=>false, "SESSID"=>false)
				);
				$field["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
				$field["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

				$this->AddEditAction($field['ID'], $field['EDIT_LINK'], CIBlock::GetArrayByID($field["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($field['ID'], $field['DELETE_LINK'], CIBlock::GetArrayByID($field["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<li class="wow fadeInUp clearfix col-lg-6 col-12" data-wow-delay="0ms" data-wow-duration="1500ms" id="<?=$this->GetEditAreaId($field['ID']);?>">
				<span class="icon <?//=$prop['ADVENT_ICON']['VALUE'];?> m-0">
				
					<? if($img_grup){?>
					<svg>
				     	<use xlink:href="<?=$img_grup?>">
				  	</svg>
				  	<?} elseif($svg_img){?>
						<?=$svg_img?>
					<?}?>
				
				</span>

				<div class="content">
					<div class="title"><?=$field['NAME'];?></div>
					<p><?if($prop['ADVENT_TEXT_P']['VALUE'])
					echo $prop['ADVENT_TEXT_P']['VALUE']['TEXT'];?></p>
				</div>
			</li>
		<?}
		}
		?>
	<?endforeach;
} else {?>
    <?$arFilter = Array('IBLOCK_ID' => $codingart_block_id['advantages_id']);
    $res = CIBlockElement::GetList(array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter);
    $num = 1;
    
		while ($element = $res->GetNextElement()) {
			if($num>$arParams['NEWS_COUNT']){	break; }
			$num=$num +1;
		    $field = $element->GetFields();   
		    $prop = $element->GetProperties();
			if($field['ACTIVE']=="Y") { 
			$img_grup = '';	

			if($prop['ADVENT_ICON_AR']['VALUE']){ 
				
			    $res_img = CIBlockElement::GetByID($prop['ADVENT_ICON_AR']['VALUE']);
			    $element_img = $res_img->GetNextElement();	
			    $prop_img = $element_img->GetProperties(); 		
				$img_file = CFile::GetPath($prop_img["SVG_FILE"]['VALUE']);
				$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
				if($svg['id']){	
					$img_grup = $img_file.'#'.$svg['id'];
				}

			} elseif($prop['ADVENT_ICON_FILE']['VALUE']) { 
				$svg_file = CFile::GetPath($prop['ADVENT_ICON_FILE']['VALUE']);
				$svg_img = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$svg_file);
			}
			

		    ?>
			<?
				$arButtons = CIBlock::GetPanelButtons(
				$field["IBLOCK_ID"],
				$field["ID"],
				    0,
				    array("SECTION_BUTTONS"=>false, "SESSID"=>false)
				);
				$field["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
				$field["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

				$this->AddEditAction($field['ID'], $field['EDIT_LINK'], CIBlock::GetArrayByID($field["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($field['ID'], $field['DELETE_LINK'], CIBlock::GetArrayByID($field["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<li class="wow fadeInUp clearfix col-lg-6 col-12" data-wow-delay="0ms" data-wow-duration="1500ms" id="<?=$this->GetEditAreaId($field['ID']);?>">
				<span class="icon <?//=$prop['ADVENT_ICON']['VALUE'];?> m-0">
					
					<? if($img_grup){?>
					<svg>
				     	<use xlink:href="<?=$img_grup?>">
				  	</svg>
				  	<?} elseif($svg_img){?>
						<?=$svg_img?>
					<?}?>
					
				</span>

				<div class="content">
					<div class="title"><?=$field['NAME'];?></div>
					<p><?if($prop['ADVENT_TEXT_P']['VALUE'])
					echo $prop['ADVENT_TEXT_P']['VALUE']['TEXT'];?></p>
				</div>
			</li>
		<?}
		}
		?>

<?}?>
</ul>  


				
				


