

	<div class="title">Блок "О клинике"</div>
	<div class="col-12  upload-box mb-4 p-0">
		<label class="col-12">Фото клиники (О клинике)</label>
		<a  class=" btn-upload mb-4 d-block col-12">Загрузить фото</a>
		<img width="250px" src="<?=CFile::GetPath($main_onas_img);?>" alt="" title="">
		<input class="col-12" type="hidden" name="admin_main_onas_img" id=""  value="<?=$main_onas_img?>">
	</div>
	<label class="col-12">Заголовок  блока (О клинике)</label>
	<input class="col-12" type="text" name="admin_main_onas_title"  placeholder="" value="<?=$main_onas_title?>">
	<label class="col-12">Описание блока (О клинике)</label>
	<textarea  class="col-12"  name="admin_main_onas_desc"  placeholder="<?=$main_onas_desc?>" value="<?=$main_onas_desc?>"><?=$main_onas_desc?></textarea>
	<label class="col-12">Выберите преимущества</label>
	<div class="select_block mb-4">
		<div class="select-box admin_main_onas_items_adv_box">
			 <?
	    $arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "REVIEWS_NAME_DETAL","PREVIEW_TEXT", "PREVIEW_PICTURE", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
				$arFilter = Array("IBLOCK_ID"=>"95","", "ACTIVE"=>"Y");
				$res_el = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
				while ($ob_el = $res_el->GetNextElement()) {
					$field = $ob_el->GetFields();?>
				<div class="select_option item_<?=$field['ID'];?>" data_id="<?=$field['ID'];?>"  data_val="<?=$field['ID'];?>"><?=$field['NAME'];?></div>
			<?
		}?>
		</div>
		<select multiple="" style="display:none;" size="7" class="col-12 admin_main_onas_items_adv" name="admin_main_onas_items_adv[]" value="">
	    <?
	    $arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "REVIEWS_NAME_DETAL","PREVIEW_TEXT", "PREVIEW_PICTURE", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
				$arFilter = Array("IBLOCK_ID"=>"95","", "ACTIVE"=>"Y");
				$res_el = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
				while ($ob_el = $res_el->GetNextElement()) {
					$field = $ob_el->GetFields();?>
				<option class="item_<?=$field['ID'];?>" value="<?=$field['ID'];?>"><?=$field['NAME'];?></option>
			<?
		}?>
		</select>
	</div>
