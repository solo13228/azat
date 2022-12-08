<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_id_link.php");?>
<?if (!empty($arResult)):?>
<!-- start menu container -->
<div class="elementskit-menu-container elementskit-menu-offcanvas-elements">

<!-- start menu item list -->
<ul class="elementskit-navbar-nav nav-alignment-dynamic">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="elementskit-dropdown-has"><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a>

				<ul class="elementskit-dropdown elementskit-submenu-panel ">
		<?else:?>
			<li <?if ($arItem["SELECTED"]):?> class="elementskit-dropdown-has item-selected"<?endif?>>
				<a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="parent"><?=htmlspecialcharsbx($arItem["TEXT"])?>123</a>
			<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="<?if(strpos(htmlspecialcharsbx($arItem["LINK"]), "services")){ echo "elementskit-megamenu-has elementskit-dropdown-has";} ?>"><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>" class="elementskit-dropdown-has <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?> "><?=htmlspecialcharsbx($arItem["TEXT"])?></a>

				<?if(strpos(htmlspecialcharsbx($arItem["LINK"]), "services")){?>
			
					<ul class="elementskit-dropdown elementskit-submenu-panel ">
						<?
						global $arItemGeneral;
						
						?>
						<? 
						$chars = [SITE_DIR,'services']; // символы для удаления
						$item_link =  str_replace($chars, '', $arItem["LINK"]); // PHP код
						$item_link =  str_replace('/', '', $item_link);
						$arResult["SECTION_ID"] = CIBlockFindTools::GetSectionID(
						    $arResult["VARIABLES"]["SECTION_ID"],
						    $item_link,
						    array("IBLOCK_ID" => $codingart_block_id["services_id"])
						);?>
					<?

							$res = CIBlockSection::GetByID($arResult["SECTION_ID"]);
							while ($arSection = $res->GetNext()) {
								$array_sections = $arSection;
					
							   if(($arSection['GLOBAL_ACTIVE']=="Y") and ($arSection['ACTIVE']=="Y")) { 
							   if ($arSection['DEPTH_LEVEL'] == 1){?>

							
									
								 		<?$arFilter = Array(
										    'IBLOCK_ID'=>$codingart_block_id['services_id'], 
										    'GLOBAL_ACTIVE'=>'Y', 
										    'SECTION_ID'=>$arSection['ID']);
									    $db_list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);
									    $num = 0;
									    while($ar_result = $db_list->GetNext())
									    { $num++;?> 
									    	<li class="  items item_<?=$num?>">
									    		<a href="<?=$ar_result['SECTION_PAGE_URL'];?>"><?=$ar_result['NAME']?></a>
									    	</li>

										<?}?>
										<?$arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "OBJECT_LONGITUDE", "OBJECT_LATITUDE", "DETAIL_PAGE_URL");
											$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"],"IBLOCK_SECTION_ID"=> $arSection['ID'], "ACTIVE"=>"Y");
											$res_el = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);

											while($ob_el = $res_el->GetNextElement()){ 
											    $arProps = $ob_el->GetFields();  
											    $num++;
											     //print_r($arProps);
											?>	
											<li class="items item_<?=$num?>">
												 <a href="<?=$arProps['DETAIL_PAGE_URL'];?>"><?=$arProps['NAME'];?></a>
											</li>
										<?}?>
									
							<?}
							}
						}?>
							
					
					</ul>
				<?}?>
				</li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="elementskit-dropdown-has item-selected"<?endif?>><a href="<?=htmlspecialcharsbx($arItem["LINK"])?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="elementskit-dropdown-has <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>  " title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?else:?>
				<li><a href="" class="elementskit-dropdown-has denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=htmlspecialcharsbx($arItem["TEXT"])?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="elementskit-nav-identity-panel">
	<div class="logo-outer">
		<div class="logo"><a href="<?=SITE_DIR?>"><img src="<?=CFile::GetPath($arItemGeneral['PROPERTIES']['GENERAL_LOGO']['VALUE']);?>" alt="" title=""></a></div>
	</div>
	<button class="elementskit-menu-close elementskit-menu-toggler" type="button"><span class="icon icon-cross"></span></button>
</div>
<div class="menu-clear-left"></div>
<?endif?>