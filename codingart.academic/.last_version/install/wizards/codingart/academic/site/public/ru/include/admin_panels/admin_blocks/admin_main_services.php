
	<div class="title">Блок "Услуги"</div>
	<label class="col-12">Заголовок  блока (Услуги)</label>
	<input class="col-12" type="text" name="admin_main_services_title"  placeholder="" value="<?=$main_services_title?>">
	<label class="col-12">Описание  блока (Услуги)</label>
	<textarea class="col-12"  name="admin_main_services_desc"  placeholder="<?=$main_services_desc?>" value="<?=$main_services_desc?>"><?=$main_services_desc?></textarea>
	<div class="select_block mb-4">
		<label class="col-12">Выберите Услуги</label>
		<div class="select-box admin_main_services_items_box">
			 <?
		    $arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "REVIEWS_NAME_DETAL","PREVIEW_TEXT", "PREVIEW_PICTURE", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
			$arFilter = Array("IBLOCK_ID"=>"100","", "ACTIVE"=>"Y");
			$res = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
			while ($arSection = $res->GetNext()) {
				if ($arSection['DEPTH_LEVEL'] == 1){?>
					<div class="select_option item_<?=$arSection['ID'];?>" data_id="<?=$arSection['ID'];?>"  data_val="<?=$arSection['ID'];?>"><?=$arSection['NAME'];?></div>
				<?}
			}?>
		</div>
		<select multiple="" style="display:none;" size="7" class="col-12 admin_main_services_items" name="admin_main_services_items[]" value="">
		    <?
		    $arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "REVIEWS_NAME_DETAL","PREVIEW_TEXT", "PREVIEW_PICTURE", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
			$arFilter = Array("IBLOCK_ID"=>"100","", "ACTIVE"=>"Y");
			$res = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
			while ($arSection = $res->GetNext()) {
				if ($arSection['DEPTH_LEVEL'] == 1){?>
					<option class="item_<?=$arSection['ID'];?>" value="<?=$arSection['ID'];?>"><?=$arSection['NAME'];?></option>
				<?}
			}?>
		</select>	
	</div>
