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
$default_img = "<?=SITE_TEMPLATE_PATH?>components/bitrix/catalog.section.list/catalog_content";
$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line catalog_content',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().''
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().''
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<script type="text/javascript">

	this_id = 'bx_1847241719_<?=$arParams["SECTION_ID"]?>';
	$('#'+this_id).children('a').addClass('hover');
	while(this_id){ 
	
		$('#'+this_id).children('ul').addClass('active');
		this_id = $('#'+this_id).parent('ul').parent('li').attr('id');	
	}	

</script>
<div class="<? echo $arCurView['CONT']; ?> m-0"><?
if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID'])
{
	$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

	?>
	<p><?=$arResult['SECTION']['DESCRIPTION']?></p>
	

<?}
if (0 < $arResult["SECTIONS_COUNT"])
{
?>

				
					
					
<div class="<? echo $arCurView['LIST']; ?> row m-0 services-price price-box accordion">						
<?
	switch ($arParams['VIEW_MODE'])
	{
		case 'LINE':
			foreach ($arResult['SECTIONS'] as &$arSection){?>				
			 <? $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);?>

			
			
			  	<div class="row m-0 col-12 item-price accordion-head" onClick="javascript: document.location.href = '<?=$arSection["SECTION_PAGE_URL"];?>'" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
			  		<div class="price-title col-6"><b><? echo $arSection['NAME']; ?></b></div>
			  		<i style="" class="icon icon-arrow_right"></i>
				</div>
			<?}
			unset($arSection);
			break;
		case 'TEXT':
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

				?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>"><h2 class="bx_catalog_text_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
				if ($arParams["COUNT_ELEMENTS"])
				{
					?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
				}
				?></h2></li><?
			}
			unset($arSection);
			break;
		case 'TILE':
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

				if (false === $arSection['PICTURE'])
					$arSection['PICTURE'] = array(
						'SRC' => $arCurView['EMPTY_IMG'],
						'ALT' => (
							'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
							? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
							: $arSection["NAME"]
						),
						'TITLE' => (
							'' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
							? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
							: $arSection["NAME"]
						)
					);
				?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
				<? if(($arSection['PICTURE']['SRC']!=$default_img) or ($arSection['PICTURE']['SRC'])){?>0000<a
					href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
					class="bx_catalog_tile_img"
					style="background-image:url('<? echo $arSection['PICTURE']['SRC']; ?>');"
					title="<? echo $arSection['PICTURE']['TITLE']; ?>"
					> </a><?}?><?
				if ('Y' != $arParams['HIDE_SECTION_NAME'])
				{
					?><h2 class="bx_catalog_tile_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
					if ($arParams["COUNT_ELEMENTS"])
					{
						?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
					}
				?></h2><?
				}
				?></li><?
			}
			unset($arSection);
			break;
		case 'LIST':
			$intCurrentDepth = 1;
			$boolFirst = true;
			foreach ($arResult['SECTIONS'] as &$arSection)
			{ 

				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

				if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
				{
					if (0 < $intCurrentDepth)
						echo "\n",str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']),'<ul>';
				}
				elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL'])
				{
					if (!$boolFirst)
						echo '</li>';
				}
				else
				{
					while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL'])
					{
						echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
						$intCurrentDepth--;
					}
					echo str_repeat("\t", $intCurrentDepth-1),'</li>';
				}

				echo (!$boolFirst ? "\n" : ''),str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
				?><li id="<?=$this->GetEditAreaId($arSection['ID']);?>"><h2 class="bx_sitemap_li_title"><a href="<?=$arSection["SECTION_PAGE_URL"];?>"><? echo $arSection["NAME"];?><?
				if ($arParams["COUNT_ELEMENTS"])
				{
					?> <span><? /*echo $arSection["ELEMENT_CNT"]; */?></span><?
				}
				?></a></h2><?

				$intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
				$boolFirst = false;
			}
			unset($arSection);
			while ($intCurrentDepth > 1)
			{
				echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
				$intCurrentDepth--;
			}
			if ($intCurrentDepth > 0)
			{
				echo '</li>',"\n";
			}
			break;
	}
?>

</div>
<?
	//echo ('LINE' != $arParams['VIEW_MODE'] ? '<div style="clear: both;"></div>' : '');
}
?>

</div>
</li>

<div class="row m-0 services-price price-box accordion <? echo $arCurView['LIST']; ?>">
<? $arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "SECTION_ID"=>$arResult['SECTION']['ID']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false);?>

	<?while($ob = $res->GetNextElement()){ 
		
	    $arProps = $ob->GetProperties();  
	    $field = $ob->GetFields(); 
		$name = $field['NAME'];
		if($arProps['DESC']['VALUE'])
		$desc = htmlspecialcharsBack($arProps['DESC']['VALUE']['TEXT']);
		else  $desc = ' ';
		$price = $arProps['PRICE']['VALUE'];
		$grup = $arProps['GRUP']['VALUE'];
		$disease = $arProps['DISEASE']['VALUE'];
		$body_systems = $arProps['BODY_SYSTEMS']['VALUE'];
		$fance = $arProps['FENCE']['VALUE'];
		$deadline = $arProps['DEADLINE']['VALUE'];
		$study_composition = $arProps['STUDY_COMPOSITION']['VALUE'];
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
	    <div class=" row m-0 col-12 item-price accordion-head  <?if(!$arProps['DESC']['VALUE']){echo('not-desc');}?>"  id="<?=$this->GetEditAreaId($field['ID']);?>">
			<div class="price-title col-6" style="align-items: center;  display: grid;"><b><?=$name?></b></div>
			<div class="price-value col-2 d-flex p-lg-0 p-md-0 " style="align-items: center;  display: grid;">
				<?if($price){ ?>
					<?=$price?> 
					<?$price_val = ''; $price_val = preg_replace('/[^0-9]/i', ' ', $price); $price_val = str_replace(' ', '', $price_val);
					if(is_numeric($price_val)){echo GetMessage('RUB');}?>
				<?}?>
			</div>
			<div class="price-btn col-3 "><a href="#" class="btn" data-toggle="modal" data-target="#modal-sing-online" onclick="modal_sing_content('<?=$name?>')"><?=GetMessage('BTN_SING_ONLINE')?></a></div>
			<div class="accordion-arrow col-1 <?if(!$arProps['DESC']['VALUE']){echo('d-none');}?>"><i style="" class="icon icon-down-arrow2"></i></div>
			<div class="accordion-body price-desc col-12 mt-3 d-none">
				<?if($desc){?><?=$desc?><br><?}?>
				<?if($grup){?><?=$grup;?><br><?}?>
				<?if($disease){?><?=$disease;?><br><?}?>
				<?if($body_systems){?><?=$body_systems;?><br><?}?>
				<?if($fance){?><?=$fance;?><br><?}?>
				<?if($deadline){?><?=$deadline;?><br><?}?>
				<?if($study_composition){?><?=$study_composition;?><br><?}?>
			</div>	
	   </div>
	   		
	   	
	<?}?>

</div>


