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
$this->setFrameMode(true);?>
<?$res = CIBlock::GetByID( $arParams["IBLOCK_ID"]);
$ar_res = $res->GetNext();
$list_title = $ar_res["NAME"];?>

<?
$res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'CODE' => $arParams['THIS_SID'], 'SITE_ID' => SITE_ID));
$section = $res->Fetch();
$section_id = $section['ID'];
?>

<?
$res = CIBlockElement::GetList(array(), array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'CODE' => $arParams['THIS_EID'], 'SITE_ID' => SITE_ID));
$element = $res->Fetch();
$element_id = $element['ID'];
?>
<?$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'widget widget_recent_entries catalog_list mb-2',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
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

<div id="" class="<? echo $arCurView['CONT']; ?>"><?

if (0 < $arResult["SECTIONS_COUNT"])
{
?>
<ul class="<? echo $arCurView['LIST']; ?>">
<?
	switch ($arParams['VIEW_MODE'])
	{
		case 'LINE':
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
				$level = $arSection['RELATIVE_DEPTH_LEVEL'];
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
				?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="lvl-0<?=$level?>" lvl_data="<?=$level?>">
				<a
					href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
					class="bx_catalog_line_img lvl-0<?=$level?>"
					style="background-image: url('<? echo $arSection['PICTURE']['SRC']; ?>');"
					title="<? echo $arSection['PICTURE']['TITLE']; ?>"
				></a>
				<a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="lvl-0<?=$level?>"><? echo $arSection['NAME']; ?></a><?
				if ($arParams["COUNT_ELEMENTS"])
				{
					?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
				}
				?><?
				if ('' != $arSection['DESCRIPTION'])
				{
					?><p class="bx_catalog_line_description"><? echo $arSection['DESCRIPTION']; ?></p><?
				}
				?><div style="clear: both;"></div>
				</li><?
			}
			unset($arSection);
			break;
		case 'TEXT':
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
				$level = $arSection['RELATIVE_DEPTH_LEVEL'];
				?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="lvl-0<?=$level?>"  lvl_data="<?=$level?>"><a  class="lvl-0<?=$level?>" href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
				if ($arParams["COUNT_ELEMENTS"])
				{
					?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
				}
				?></li><?
			}
			unset($arSection);
			break;
		case 'TILE':
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
				$level = $arSection['RELATIVE_DEPTH_LEVEL'];
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
				?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="lvl-0<?=$level?>" lvl_data="<?=$level?>">
				<a
					href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
					class="bx_catalog_tile_img"
					style="background-image:url('<? echo $arSection['PICTURE']['SRC']; ?>');"
					title="<? echo $arSection['PICTURE']['TITLE']; ?>"
					> </a><?
				if ('Y' != $arParams['HIDE_SECTION_NAME'])
				{
					?><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="lvl-0<?=$level?>"><? echo $arSection['NAME']; ?></a><?
					if ($arParams["COUNT_ELEMENTS"])
					{
						?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
					}
				?><?
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
				$level = $arSection['RELATIVE_DEPTH_LEVEL'];
				if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
				{
					if (0 < $intCurrentDepth)
						echo "\n",str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']),'<ul class="lvl-0'.$level.'" lvl_data="'.$level.'">';

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
				?><li id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="lvl-0<?=$level?> <?if(($section_id == $arSection['ID']) /*and (!$element_id)*/) echo " active_ids";?> <?=$section_id?> ids-<?=$arSection['ID']?>" lvl_data="<?=$level?>">
					<a class="lvl-0<?=$level?> " href="<? echo $arSection["SECTION_PAGE_URL"]; ?>">
						<? echo $arSection["NAME"];?>
				<?if ($arParams["COUNT_ELEMENTS"]){
					?> <span><? /*echo $arSection["ELEMENT_CNT"]; */?></span><?
				}
				?>
				</a> 
<? $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$arSection["ID"]);
   $db_list = CIBlockSection::GetList(Array("NAME"=>"asc"), $arFilter, false,array("NAME","CODE","ID"));

//if($db_list['result']['num_rows']>0){
   //echo  $db_list['result']['num_rows'];
$wle = false;
$welm = false;
if($level){
	$uf_razd="";
	$rsResult = CIBlockSection::GetList(array("SORT"=>"ASC"), array("IBLOCK_ID"=>$arParams["IBLOCK_ID"]), false, array("UF_ELEM_RAZD"));
	while($arResults = $rsResult->GetNext())
	{
		if($arResults["CODE"]== $arSection['CODE']){
			$uf_razd=$arResults["UF_ELEM_RAZD"];
		}
	}
	if($uf_razd!=1){
   while($ar_result = $db_list->GetNext())
   {	
   		$wle = true;
  	
   	
   

   }
   if(!$wle){
			
		
   } 
   $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID'=>$arSection['ID'], $arSection["RELATIVE_DEPTH_LEVEL"]=> 1);
					$db_list = CIBlockSection::GetList(Array(), $arFilter, true);
					while($ar_result = $db_list->GetNext())
					{
					    $arrayID[] = $ar_result['ID'];
					}
					
					//print_r($arrayID);
					/*Формируем массив */
					$arSelect = Array("ID", "IBLOCK_ID", "NAME","DETAIL_PAGE_URL", "PROPERTY_*");
					$arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "SECTION_ID"=>$arSection['ID'], $arSection["RELATIVE_DEPTH_LEVEL"]=> 1, 'ACTIVE'=>'Y');
					$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);?>
				<ul class="lvl-0<?=$level+1?>"  lvl_data="<?=$level+1?>">
					<?while($ob = $res->GetNextElement()){ 
						$welm = true;
					    $arProps = $ob->GetProperties();  
					    $field = $ob->GetFields(); 
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
					   	
					   	<li  class="lvl-0<?=$level+1?><?if(($element_id == $field['ID'])) echo " active_ide";?>" lvl_data="<?=$level+1?>"  style="min-height: 12px;" id="<?=$this->GetEditAreaId($field['ID']);?>">	
					   		<a class="lvl-0<?=$level+1?>"  lvl_data="<?=$level+1?>" href="<?=$field['DETAIL_PAGE_URL'];?>"><?=$field['NAME'];?> <span></span>	</a> 
																	
						</li>
					  <?}?>
				</ul>
<?}
}?>
					<?if($wle or $welm){?>
						<i style="<?if($level>1){?>color:#000;<?}?>" class="icon plus icon-down-arrow2" lvl_data="<?=$level?>"></i>
						<i style="<?if($level>1){?>color:#000;<?}?>" class="icon minus icon-up-arrow2 d-none" lvl_data="<?=$level?>"></i>
					<?}?>
				<?
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
</ul>
<?
	echo ('LINE' != $arParams['VIEW_MODE'] ? '<div style="clear: both;"></div>' : '');
}
?>
</div>

<? if(!$arResult["SECTIONS"]){?>
	<div class="mb-5">
	<?$arSelect = Array("ID", "IBLOCK_ID","ACTIVE",  "NAME","DETAIL_PAGE_URL", "PROPERTY_*");
	//$arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "", $arSection["RELATIVE_DEPTH_LEVEL"]=> 1);
	$arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "SECTION_ID"=>$arResult['SECTION']['ID'], 'ACTIVE'=>'Y');
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);?>
				<ul class="lvl-01"  lvl_data="<?=$level+1?>">
					<?while($ob = $res->GetNextElement()){ 
						$welm = true;
					    $arProps = $ob->GetProperties();  
					    $field = $ob->GetFields(); 
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
					   	<li  class="pt-2 pb-2 px-3 mb-0 lvl-0<?=$level+1?><?if(($element_id == $field['ID'])) echo " active_ide";?>" lvl_data="<?=$level+1?>"  style="min-height: 12px;" id="<?=$this->GetEditAreaId($field['ID']);?>">	
					   		<a class="lvl-0<?=$level+1?>"  lvl_data="<?=$level+1?>" href="<?=$field['DETAIL_PAGE_URL'];?>"><?=$field['NAME'];?> <span></span>	</a> 
																	
						</li>
					  <?}?>
				</ul>
	</div>
<?}
?>
<script type="text/javascript">
	if($('li[class*="active_id"]').hasClass('active_ide')){
		this_id = $('.active_ide').attr('id');
	} else {
		this_id = $('.active_ids').attr('id');
	}
	
	$('#'+this_id).children('a').addClass('hover');
	while(this_id){ 
		
		$('#'+this_id).children('ul').addClass('active');
		this_id = $('#'+this_id).parent('ul').parent('li').attr('id');	
	}	

</script>