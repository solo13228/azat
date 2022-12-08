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
<?
$is_mobile_device = check_mobile_device();

?>
<?if($arParams['BASE_LIST_TEMP'] == "ELEMENTS"){?>
<?$item_i = 0;?>
<section class="team-section">
	<div class="team-pattern-layer" style=""><br><br>
	</div>
	<div class="container">
		<div class="section-title text-center">
			<h2><?=$arParams['BASE_TITLE']?></h2>
			<p class="text">
				<?=$arParams['BASE_DESC']?>
			</p>
		</div>
		<div class="<?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){echo 'team-carousel owl-carousel owl-theme';} else {echo "row";}?>">

	<?if($arParams['BASE_LIST']) { 
		foreach ($arParams['BASE_LIST'] as $elm_id) {
			$res = CIBlockElement::GetByID($elm_id);
			while($ob = $res->GetNextElement()){ 
				$field = $ob->GetFields();  
				$prop = $ob->GetProperties();  
				if($arParams['NEWS_COUNT'] == $item_i) { break;}
			?><?$item_i++;?>

			<?$res = CIBlockSection::GetByID($field["IBLOCK_SECTION_ID"]);
			if($ar_res = $res->GetNext());
			if(($field['ACTIVE'] == 'Y') and ($ar_res['GLOBAL_ACTIVE']=='Y')){?>
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
				
				<div href="<?=$field["DETAIL_PAGE_URL"]?>" class="team-block item-<?=$item_i?> <?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){}else{echo 'col-lg-3 col-md-6 col-12 mb-2';}?> " id="<?=$this->GetEditAreaId($field['ID']);?>">
				 <!-- Team Block -->
				
					<div class="inner-box">
						
						<div class="image" style="background: url(<?=CFile::GetPath($field["PREVIEW_PICTURE"])?>);">
							
							
						</div>
						<div class="lower-content">
						
							
							<h3 style="height: 50px; margin-top: 15px; display: inline-flex; align-items: center;"><a href="<?=$field["DETAIL_PAGE_URL"];?>"><?=$field['NAME'];?></a></h3>
							<div style="height: 55px; padding:0 15px; overflow: hidden;" >
								<?=leng_text(htmlspecialcharsBack($prop["SERVICES_DESC_MAIN"]["VALUE"]["TEXT"]),50,'...');?></div>
							<a class="btn mt-3" href="<?=$field["DETAIL_PAGE_URL"]?>"><?=$arParams['BASE_BTN_EL_NAME']?></a>
						</div>
					</div>
				</div>
			<?}?>
		
			<?}
		}?>
		
	<?} else {?>

			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?if($arParams['NEWS_COUNT'] == $item_i) { break;}?>
				<?$item_i++;?>

				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?> 
				
				<div href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="team-block item-<?=$item_i?> <?if($arParams['BASE_MODE'] == 'N'){echo 'col-lg-3 col-md-6 col-12 mb-2';}?> " id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				 <!-- Team Block -->
				
					<div class="inner-box">
						
						<div class="image" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
						</div>
						<div class="lower-content">
						
							
							<h3 style="height: 50px; margin-top: <?=$mun_tab['1']?>px;"><a href="<?=$arItem["DETAIL_PAGE_URL"];?>"><?=$arItem['NAME'];?></a></h3>
							<div style="height: 55px; padding:0 15px; overflow: hidden;"><?=leng_text(htmlspecialcharsBack($arItem["PROPERTIES"]["SERVICES_DESC_MAIN"]["VALUE"]["TEXT"]),50,'...');?></div>
							<a class="btn mt-3" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arParams['BASE_BTN_EL_NAME']?></a>
						</div>
					</div>
				</div>
				
			<?endforeach;?>

			
	<?}?>
	</div>
	<?if(($arParams['BASE_BTN_ALL_NAME']) and ($arParams['BASE_BTN_ALL_LINK'])){?>
			<div class="col-12 mt-5 text-center">
					
					<a href="<?=$arParams['BASE_BTN_ALL_LINK']?>" class="btn"><?=$arParams['BASE_BTN_ALL_NAME']?><span class="icon icon-arrow-right"></span></a>
			</div>
	<?}?>
	
	
	</div>
</section>
<?} elseif($arParams['BASE_LIST_TEMP'] == "SELECTS") {?>

<section class="services-section-two style-two pt-0">
	<div class="team-pattern-layer" style=""><br><br>
	</div>
	<div class="team-pattern-layer-two" style="">
	</div>
	<div class="container">
	

	<div class="section-title text-center">
			<h2><?=$arParams['BASE_TITLE']?></h2>
			<p class="text">
				<?=$arParams['BASE_DESC']?>
			</p>
	</div>


<div class="<?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){echo 'team-carousel-three owl-carousel owl-theme';} else {echo "row";}?>">
	
		<?$i = 0;?>
		<?if($arParams['BASE_LIST']) { 
		foreach ($arParams['BASE_LIST'] as $elm_id) {
				$res = CIBlockSection::GetByID($elm_id);
				while ($arSection = $res->GetNext()) {
					$array_sections = $arSection;
				 

				   if ($arSection['DEPTH_LEVEL'] == 1){

				   	$i++;
				   ?>

					<div class="services-block  <?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){}else{echo '';}?>">
						<div class="inner-box">
							<div class="content">
								<h3><a ><?=$arSection['NAME'];?></a></h3>
							</div>
						</div>
					</div>
					<?}
				}
				$num=0;
			}
		} else {
	
				$IBLOCK_ID = $arParams['IBLOCK_ID'];
				$arPropList = array();
				$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "SECTION_ID"=>$arResult['SECTION']['ID'],  'GLOBAL_ACTIVE'=>'Y');
				$res = CIBlockSection::GetList(array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter);
				while ($arSection = $res->GetNext()) {
					$array_sections = $arSection;
				   /* $field= $element->GetFields();   
				   $prop = $element->GetProperties();*/
					


				   if ($arSection['DEPTH_LEVEL'] == 1){
				   	$i++; ?>

					<div class="services-block  <?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){}else{echo '';}?>">
						<div class="inner-box">
							<div class="content">
								<h3><a ><?=$arSection['NAME'];?></a></h3>
							</div>
						</div>
					</div>
					<?}
				}
		}?>

</div>

	<div class="<?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){echo 'team-carousel-one owl-carousel owl-theme';} else {echo "row";}?>">
		<?
		$i = 0;
		$icons_pull = array( 
			1 => 'icon-heart1 ',
			2 => 'icon-hospital-symbol',
			3 => 'icon-brifecase-hospital2 ',
			4 => 'icon-ambulance ',
		);
		?>
<?if($arParams['BASE_LIST']) { 
foreach ($arParams['BASE_LIST'] as $elm_id) {
		$res = CIBlockSection::GetByID($elm_id);
		while ($arSection = $res->GetNext()) {
			$array_sections = $arSection;
		  

		   if ($arSection['DEPTH_LEVEL'] == 1){

		   	$i++;
		   ?>

			<div class="services-block col-lg-6 col-md-12 col-sm-12 m-auto <?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){}else{echo '';}?>">
				<div class="inner-box">
					<div class="content">
						<div class="icon-box col-3 mr-3 m-0">
	 						<span class="icon m-0">
	 							<img width="80%" src="<?=CFile::GetPath($arSection['DETAIL_PICTURE']);?>" alt="">
	 						</span>
	 						<span class="icon  d-none <?=$icons_pull[$i]?>"></span>
						</div>
						<h3><a href="<?=$arSection['SECTION_PAGE_URL'];?>"><?=$arSection['NAME'];?></a></h3>
						<ul>
				 		<?$arFilter = Array(
						    'IBLOCK_ID'=>$arParams['IBLOCK_ID'], 
						    'GLOBAL_ACTIVE'=>'Y', 
						    'SECTION_ID'=>$arSection['ID']);
					    $db_list = CIBlockSection::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, true);
					    $secton_id = $arSection['ID'];
					    $num = 0; 
					
					    while($ar_result = $db_list->GetNext()){  ?> 
					    	<?if($ar_result){$num++; ?>
						    	<li class="items item_<?=$num?> <?if($num>6){echo "d-none";}?>">
						    		<a href="<?=$ar_result['SECTION_PAGE_URL'];?>"><?=$ar_result['NAME']?></a>
						    	</li>
					    	<?}else{?>
								
							<?}?>
						
									
						<?}?>
 					
						<?$arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'],"IBLOCK_SECTION_ID"=> $secton_id, "ACTIVE"=>"Y");
						$res_el = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, false, $arSelect);

						while($ob_el = $res_el->GetNextElement()){ 
						    $arProps = $ob_el->GetFields();  
						    $num++;
						     //print_r($arProps);
						?>		    
							<li class="items item_<?=$num?> <?if($num>6){echo "d-none";}?>">
								 <a href="<?=$arProps['DETAIL_PAGE_URL'];?>"><?=$arProps['NAME'];?></a>
							</li>

						<?}?>

						</ul>
						<a class="link" href="<?=$arSection['SECTION_PAGE_URL'];?>"><span class="icon icon-chevron-right"></span></a>
					</div>
				</div>
			</div>
			<?}
		}
		$num=0;
	}
} else {
	
		$IBLOCK_ID = $arParams['IBLOCK_ID'];
		$arPropList = array();
		$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "SECTION_ID"=>$arResult['SECTION']['ID'],  'GLOBAL_ACTIVE'=>'Y');
		$res = CIBlockSection::GetList(array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, Array('UF_*'));
		while ($arSection = $res->GetNext()) {
			$array_sections = $arSection;
		  
			
		   if ($arSection['DEPTH_LEVEL'] == 1){
		   	$i++; ?>
			
			<?	
			if($arSection['UF_ICON_SVG']){
				$img_file = CFile::GetPath($arSection['UF_ICON_SVG']);

				$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
				if($svg['id']){
					$img_grup = $img_file.'#'.$svg['id'];
				}
				$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
			} else {

				$img_file = CFile::GetPath($arSection['DETAIL_PICTURE']);
			}
			?>
			<div class="services-block col-lg-6 col-md-12 col-sm-12 m-auto <?if(($arParams['BASE_MODE'] == 'Y') or ($is_mobile_device)){}else{echo '';}?>">
				<div class="inner-box">
					<div class="content">
						<div class="icon-box col-3 mr-3 m-0">
	 						<span class="icon m-0">
	 							<?=$svg_file?>
	 							<?//<img width="80%" src="" alt="">?>
	 						</span>
	 						<span class="icon d-none <?=$icons_pull[$i]?>"></span>
						</div>
						<h3><a href="<?=$arSection['SECTION_PAGE_URL'];?>"><?=$arSection['NAME'];?></a></h3>
						<ul>
							
				 		<?$arFilter = Array(
						    'IBLOCK_ID'=>$arParams['IBLOCK_ID'], 
						    'GLOBAL_ACTIVE'=>'Y', 
						    'SECTION_ID'=>$arSection['ID']);
					    $db_list = CIBlockSection::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, true);
					    $secton_id = $arSection['ID'];
					    $num = 0; 
					   
					    while($ar_result = $db_list->GetNext()){  ?> 
					    	<?if($ar_result){$num++; ?>
						    	<li class="items item_<?=$num?> <?if($num>6){echo "d-none";}?>">
						    		<a href="<?=$ar_result['SECTION_PAGE_URL'];?>"><?=$ar_result['NAME']?></a>
						    	</li>
					    	<?}else{?>
								
							<?}?>
						
									
						<?}?>
 					
						<?$arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'],"IBLOCK_SECTION_ID"=> $secton_id, "ACTIVE"=>"Y");
						$res_el = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, false, $arSelect);

						while($ob_el = $res_el->GetNextElement()){ 
						    $arProps = $ob_el->GetFields();  
						    $num++;
						   
						?>		    
							<li class="items item_<?=$num?> <?if($num>6){echo "d-none";}?>">
								 <a href="<?=$arProps['DETAIL_PAGE_URL'];?>"><?=$arProps['NAME'];?></a>
							</li>

						<?}?>

						</ul>
						
					</div>
				</div>
			</div>
			<?}
		}
}?>

		
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".services-section-two .team-carousel-one .owl-nav .owl-prev").click(function(){
			$(".services-section-two .team-carousel-three .owl-nav .owl-prev").click();
		});
		$(".services-section-two .team-carousel-one .owl-nav .owl-next").click(function(){
			$(".services-section-two .team-carousel-three .owl-nav .owl-next").click();
		});
	});
</script>
	<?if(($arParams['BASE_BTN_ALL_NAME']) and ($arParams['BASE_BTN_ALL_LINK'])){?>
			<div class="col-12  text-center">
					<a href="<?=$arParams['BASE_BTN_ALL_LINK']?>" class="btn"><?=$arParams['BASE_BTN_ALL_NAME']?></a>
			</div>
		<?}?>
</div>
</section>







<?} elseif($arParams['BASE_LIST_TEMP'] == "TABS") {?>


<section class="services-section-two style-two pt-0">
	<div class="team-pattern-layer" style=""><br><br>
	</div>
	<div class="team-pattern-layer-two" style="">
	</div>
	<div class="container">
	

	<div class="section-title text-center">
			<h2><?=$arParams['BASE_TITLE']?></h2>
			<p class="text">
				<?=$arParams['BASE_DESC']?>
			</p>
	</div>


<div class="row justify-content-center">
	
		<?$i = 0;?>
		<?if($arParams['BASE_LIST']) { 
		foreach ($arParams['BASE_LIST'] as $elm_id) {
				$res = CIBlockSection::GetByID($elm_id);
				while ($arSection = $res->GetNext()) {
					$array_sections = $arSection;
				  


				   if ($arSection['DEPTH_LEVEL'] == 1){

				   	$i++;
				   ?>

					<div class="services-block  tab-btn">
						<div class="inner-box">
							<div class="content">
								<h3><a data_id="<?=$arSection['ID'];?>"><?=$arSection['NAME'];?></a></h3>
							</div>
						</div>
					</div>
					<?}
				}
				$num=0;
			}
		} else {
	
				$IBLOCK_ID = $arParams['IBLOCK_ID'];
				$arPropList = array();
				$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "SECTION_ID"=>$arResult['SECTION']['ID'],  'GLOBAL_ACTIVE'=>'Y');
				$res = CIBlockSection::GetList(array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter);
				while ($arSection = $res->GetNext()) {
					$array_sections = $arSection;
				
				   if ($arSection['DEPTH_LEVEL'] == 1){
				   	$i++; ?>

					<div class="services-block tab-btn">
						<div class="inner-box" data_id="<?=$arSection['ID'];?>">
							<div class="content">
								<h3><a data_id="<?=$arSection['ID'];?>"><?=$arSection['NAME'];?></a></h3>
							</div>
						</div>
					</div>
					<?}
				}?>

				<select name="section_select" value="" class="cs-select cs-skin-border section_select">
					<?$IBLOCK_ID = $arParams['IBLOCK_ID'];
					$arPropList = array();
					$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "SECTION_ID"=>$arResult['SECTION']['ID'],  'GLOBAL_ACTIVE'=>'Y');
					$res = CIBlockSection::GetList(array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter);
					while ($arSection = $res->GetNext()) {
						$array_sections = $arSection;
					 
					   if ($arSection['DEPTH_LEVEL'] == 1){
					   	$i++; ?>					
						<option value="<?=$arSection['ID'];?>"><?=$arSection['NAME'];?></option>
						<?}
					}?>
				</select>

		<?}?>

</div>

	<div class="row">
		<?
		$i = 0;
		$icons_pull = array( 
			1 => 'icon-heart1 ',
			2 => 'icon-hospital-symbol',
			3 => 'icon-brifecase-hospital2 ',
			4 => 'icon-ambulance ',
		);
		?>
<?if($arParams['BASE_LIST']) { 
	foreach ($arParams['BASE_LIST'] as $elm_id) {
		$res = CIBlockSection::GetByID($elm_id);
		while ($arSection = $res->GetNext()) {
			$array_sections = $arSection;
		  


		   if ($arSection['DEPTH_LEVEL'] == 1){

		   	$i++;
		   ?>
			
			<div class="services-block tab-btn col-lg-6 col-md-12 col-sm-12 m-auto ">
				<div class="inner-box">
					<div class="content">
						<div class="icon-box col-3 mr-3 m-0">
	 						<span class="icon m-0">
	 							<img width="80%" src="<?=CFile::GetPath($arSection['DETAIL_PICTURE']);?>" alt="">
	 						</span>
	 						<span class="icon  d-none <?=$icons_pull[$i]?>"></span>
						</div>
						<h3><a href="<?=$arSection['SECTION_PAGE_URL'];?>"><?=$arSection['NAME'];?></a></h3>
						<ul>
				 		<?$arFilter = Array(
						    'IBLOCK_ID'=>$arParams['IBLOCK_ID'], 
						    'GLOBAL_ACTIVE'=>'Y', 
						    'SECTION_ID'=>$arSection['ID']);
					    $db_list = CIBlockSection::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, true);
					    $secton_id = $arSection['ID'];
					    $num = 0; 
					  
					    while($ar_result = $db_list->GetNext()){  ?> 
					    	<?if($ar_result){$num++; ?>
						    	<li class="items item_<?=$num?> <?if($num>6){echo "d-none";}?>">
						    		<a href="<?=$ar_result['SECTION_PAGE_URL'];?>"><?=$ar_result['NAME']?></a>
						    	</li>

					    	<?}else{?>
								
							<?}?>
						
									
						<?}?>
 					
						<?$arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'],"IBLOCK_SECTION_ID"=> $secton_id, "ACTIVE"=>"Y");
						$res_el = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, false, $arSelect);

						while($ob_el = $res_el->GetNextElement()){ 
						    $arProps = $ob_el->GetFields();  
						    $num++;  
						?>		    
							<li class="items item_<?=$num?> <?if($num>6){echo "d-none";}?>">
								 <a href="<?=$arProps['DETAIL_PAGE_URL'];?>"><?=$arProps['NAME'];?></a>
							</li>

						<?}?>

						</ul>
						<a class="link" href="<?=$arSection['SECTION_PAGE_URL'];?>"><span class="icon icon-chevron-right"></span></a>
					</div>
				</div>
			</div>
			<?}
		}
		$num=0;
	}
} else {
		


		$mun_tab = array();				
		$IBLOCK_ID = $arParams['IBLOCK_ID'];
		$arPropList = array();
		$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "SECTION_ID"=>"",  'GLOBAL_ACTIVE'=>'Y');
		$res = CIBlockSection::GetList(array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, Array('UF_*'));
		while ($arSection = $res->GetNext()) {
			$array_sections = $arSection;
		 
		$arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
						$arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'],"IBLOCK_SECTION_ID"=> $arSection['ID'], "ACTIVE"=>"Y");
						$res_el = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"]), $arFilter, false, false, $arSelect);

						while($ob_el = $res_el->GetNextElement()){ 
						    $arProps = $ob_el->GetFields(); 
						    $prop = $ob_el->GetProperties(); 	
		 
		   	$i++; ?>

			<?	
			$img_file = '';
			$svg_file = "";
			
			if($prop["SERVICES_ICON"]["VALUE"]){
				$img_file = CFile::GetPath($prop["SERVICES_ICON"]["VALUE"]);

				$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
				if($svg['id']){
					$img_grup = $img_file.'#'.$svg['id'];
				}
				$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
			} else {

				$img_file = CFile::GetPath($arSection['DETAIL_PICTURE']);
			}
			$mun_tab[$i] = $arSection['ID'];
			?>
			<div class="services-block tab-item col-lg-4 col-md-6 col-sm-6 section_<?=$arSection['ID'];?>">
				<div class="inner-box">
					<div class="content">
						<div class="icon-box col-3 mr-3 m-0">
	 						<span class="icon m-0">
	 							<?=$svg_file?>
	 							
	 						</span>
	 						<span class="icon d-none <?=$icons_pull[$i]?>"></span>
						</div>
						<?
						$title_text = $arProps['NAME'];
						
						?>
						<h3><a href="<?=$arProps['DETAIL_PAGE_URL'];?>"><?=$title_text;?></a></h3>
						
					</div>
				</div>
			</div>
		
						
									
						<?}?>
			<?
		}
}?>

		
	</div>
	<style type="text/css">
		.services-section-two .services-block.tab-item{
			display: none;
		}
		.services-section-two .services-block.tab-item.active{
			display: block;
		}
		.services-section-two .services-block.tab-item .inner-box h3 {
		    height: 56px;
		}

		.services-section-two .services-block.tab-btn .inner-box.active {
		    background: #556080;
		}
		.services-section-two .services-block.tab-btn .inner-box.active a {
			color: #fff !important;
		}
	</style>
	
<script type="text/javascript">
	$('.services-section-two .services-block.tab-btn .inner-box[data_id="<?=$mun_tab['1']?>"]').addClass("active");
	$(".services-section-two .services-block.tab-item.section_<?=$mun_tab['1']?>").addClass("active");

	$(".services-section-two .section_select").click(function(){
		$('.services-section-two .services-block.tab-btn .inner-box').removeClass("active");
		data_id = $(".services-section-two .section_select").val();
		$('.services-section-two .services-block.tab-btn .inner-box[data_id="'+data_id+'"]').addClass("active");
		$(".services-section-two .services-block.tab-item").removeClass("active");
		$(".services-section-two .services-block.tab-item.section_"+data_id).addClass("active");
	});

	$(".services-section-two .services-block.tab-btn .inner-box a").click(function(){
		$('.services-section-two .services-block.tab-btn .inner-box').removeClass("active");
		data_id = $(this).attr('data_id');
		$('.services-section-two .services-block.tab-btn .inner-box[data_id="'+data_id+'"]').addClass("active");
		$(".services-section-two .services-block.tab-item").removeClass("active");
		$(".services-section-two .services-block.tab-item.section_"+data_id).addClass("active");
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$(".services-section-two .team-carousel-one .owl-nav .owl-next").click(function(){
			$(".services-section-two .team-carousel-three .owl-nav .owl-next").click();
		});
	});
</script>
	<?if(($arParams['BASE_BTN_ALL_NAME']) and ($arParams['BASE_BTN_ALL_LINK'])){?>
			<div class="col-12  text-center mt-3">
					<a href="<?=$arParams['BASE_BTN_ALL_LINK']?>" class="btn"><?=$arParams['BASE_BTN_ALL_NAME']?></a>
			</div>
		<?}?>
</div>
</section>
<?}?>