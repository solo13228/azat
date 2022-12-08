	<div class="title">Блок "Специалисты"</div>
	<label class="col-12">Заголовок  блока (Специалисты)</label>
	<input class="col-12" type="text" name="admin_main_spec_block_title"  placeholder="" value="<?=$main_spec_block_title?>">
	<label class="col-12">Описание  блока (Специалисты)</label>
	<textarea  class="col-12"  name="admin_main_spec_block_desc"  placeholder="<?=$main_spec_block_desc?>" value="<?=$main_spec_block_desc?>"><?=$main_spec_block_desc?></textarea>
	<label class="col-12">Контент блока (Специалисты)</label>
	<div class="select_block mb-4">
		<div class="select-box admin_main_spec_block_content_box">
			<?
	    $arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "REVIEWS_NAME_DETAL","PREVIEW_TEXT", "PREVIEW_PICTURE", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
				$arFilter = Array("IBLOCK_ID"=>"98","", "ACTIVE"=>"Y");
				$res_el = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
				while ($ob_el = $res_el->GetNextElement()) {
					$field = $ob_el->GetFields();?>
				<div class="select_option item_<?=$field['ID'];?>" data_id="<?=$field['ID'];?>"  data_val="<?=$field['ID'];?>"><?=$field['NAME'];?></div>
			<?
		}?>
		</div>
		<select multiple="" style="display:none;" size="7" class="col-12 admin_main_spec_block_content" name="admin_main_spec_block_content[]" value="">
	    <?
	    $arSelect = Array("ID","IBLOCK_ID","IBLOCK_SECTION_ID", "NAME", "REVIEWS_NAME_DETAL","PREVIEW_TEXT", "PREVIEW_PICTURE", "OBJECT_LONGITUDE", "OBJECT_LATITUDE","DETAIL_PAGE_URL");
				$arFilter = Array("IBLOCK_ID"=>"98","", "ACTIVE"=>"Y");
				$res_el = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
				while ($ob_el = $res_el->GetNextElement()) {
					$field = $ob_el->GetFields();?>
				<option class="item_<?=$field['ID'];?>" value="<?=$field['ID'];?>"><?=$field['NAME'];?></option>
			<?
		}?>
		</select>
	</div>
