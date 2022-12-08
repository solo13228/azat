<?

require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";
global $USER;
if ($USER->IsAdmin()) {
?>
<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/spectrum.css" rel="stylesheet">
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/spectrum.js"></script>


<?
$main_order_array = array(
	'2' => array(
		'status'=>	'active',
		'xml'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_WELC']['VALUE_XML_ID'],
		'name'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_WELC']['NAME'],
		'id'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_WELC']['VALUE'],
	),
	'3' => array(
		'status'=>	'active',
		'xml'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_LASTN']['VALUE_XML_ID'],
		'name'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_LASTN']['NAME'],
		'id'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_LASTN']['VALUE'],
	),
	'4' => array(
		'status'=>	'active',
		'xml'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_CLAS']['VALUE_XML_ID'],
		'name'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_CLAS']['NAME'],
		'id'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_CLAS']['VALUE'],
	),
	'5' => array(
		'status'=>	'active',
		'xml'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_TEACH']['VALUE_XML_ID'],
		'name'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_TEACH']['NAME'],
		'id'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_TEACH']['VALUE'],
	),
	'6' => array(
		'status'=>	'active',
		'xml'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_COURS']['VALUE_XML_ID'],
		'name'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_COURS']['NAME'],
		'id'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_COURS']['VALUE'],
	),
	'7' => array(
		'status'=>	'active',
		'xml'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_WAY']['VALUE_XML_ID'],
		'name'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_WAY']['NAME'],
		'id'	=>	$arItemGeneral['PROPERTIES']['MAIN_ORDER_WAY']['VALUE'],
	),

);
function random_xml_func($arr){
	for ($a=2; $a < 8; $a++) {
		$random_xml = $a;
		for ($i=2; $i < 8; $i++) {
			for ($b=2; $b < 8; $b++) {
				if($arr[$b]['xml']==$random_xml)
			  		$random_xml = 0;
			}
		}
		if ($random_xml > 0) {
			break;
		}
	}
	return $random_xml;
}


for ($i=2; $i < 8; $i++) {
	if($main_order_array[$i]['xml'] == '1' ) {
		$main_order_array[$i]['xml'] = $i;
		$main_order_array[$i]['status'] = 'active';
	}
	if(($main_order_array[$i]['xml'] == 'NULL') or (!$main_order_array[$i]['xml'])) {
		$main_order_array[$i]['status'] = 'disable';
		$main_order_array[$i]['xml'] = random_xml_func($main_order_array);
	}
}



/*if($arItemGeneral['PROPERTIES']['MAIN_TITLE']['VALUE'])
$main_title = $arItemGeneral['PROPERTIES']['MAIN_TITLE']['VALUE'];
if($arItemGeneral['PROPERTIES']['SERVICES_TITLE']['VALUE'])
$services_title = $arItemGeneral['PROPERTIES']['SERVICES_TITLE']['VALUE'];
if($arItemGeneral['PROPERTIES']['NEWS_TITLE']['VALUE'])
$news_title = $arItemGeneral['PROPERTIES']['NEWS_TITLE']['VALUE'];
if($arItemGeneral['PROPERTIES']['COMPANY_TITLE']['VALUE'])
$company_title = $arItemGeneral['PROPERTIES']['COMPANY_TITLE']['VALUE'];
if($arItemGeneral['PROPERTIES']['REVIEWS_TITLE']['VALUE'])
$reviews_title = $arItemGeneral['PROPERTIES']['REVIEWS_TITLE']['VALUE'];
if($arItemGeneral['PROPERTIES']['CONTACTS_TITLE']['VALUE'])
$contacts_title = $arItemGeneral['PROPERTIES']['CONTACTS_TITLE']['VALUE'];
if($arItemGeneral['PROPERTIES']['SPEC_TITLE']['VALUE'])
$spec_title = $arItemGeneral['PROPERTIES']['SPEC_TITLE']['VALUE'];
if($arItemGeneral['PROPERTIES']['GENERAL_MENU_SERVICES']['VALUE'])
$general_menu_services = $arItemGeneral['PROPERTIES']['GENERAL_MENU_SERVICES']['VALUE'];*/


if($GLOBALS["global_info"]["LOGO"])
$general_logo = $GLOBALS["global_info"]["LOGO"];
if($GLOBALS["global_info"]["PHONE"])
$general_phone = $GLOBALS["global_info"]["PHONE"];
if($GLOBALS["global_info"]["WORK_HOURS"])
$general_wh = $GLOBALS["global_info"]["WORK_HOURS"];
if($GLOBALS["global_info"]["ADRESS"])
$general_adres = $GLOBALS["global_info"]["ADRESS"];
if($GLOBALS["global_info"]["INST_URL"])
$general_inst = $GLOBALS["global_info"]["INST_URL"];
if($GLOBALS["global_info"]["VK_URL"])
$general_vk = $GLOBALS["global_info"]["VK_URL"];
if($GLOBALS["global_info"]["YT_URL"])
$general_yt = $GLOBALS["global_info"]["YT_URL"];
?>
<div class="admin_panels_btn fadeInLeft animated">
	<span class="icon icon-settings "></span>
</div>
<div class="btn submit_click d-none  fadeInLeft animated">���������</div>
<div class="admin_panels_overlay d-none">
</div>
<div class="admin_panels p-0 col-lg-5 col-md-8 col-12 d-none  slideInLeft animated" style="display: none;">
	<div class="row m-0">

		<form action="" method="POST" class="admin_form row mx-0" enctype="multipart/form-data">
			<div class="admin_panel_btns col-lg-3 col-md-12 col-12 mx-0">
				<div class="row mx-0 pt-3">

					<div class="col-12 admin_panel_btn_1 btn active" data-body="tab_1">����� </div>
					<div class="col-12 admin_panel_btn_5 btn" data-body="tab_5">�������</div>

				</div>

			</div>
			<div class="admin_panel_body tab_1 pl-4  py-3 col-lg-9 col-md-12 col-12">






				<h2 class="pb-3">����� </h2>
	      		<div class="d-none value">
	      			<input type="hidden" name="name" value="��������� �������">
					<input type="hidden" name="iblock_id" value="">
					<input type="hidden" name="form_class" value="admin_panels">
		  			<input type="hidden" name="colors" value="<?=$gen_colors?>">

	      		</div>
		      	<div class="row col-12 p-0 m-0 info-box">
		      		<div class="edit-box col-12 pl-0">
		      			<div class="title">������� �����</div>
						<div class="col-xl-12 col-lg-12 row radio mb-3">

							<label style="background: #f37335;" value="#f37335" class="color_1"></label>
							<label style="background: #65ae83;" value="#65ae83" class="color_2"></label>
							<label style="background: #5bb4e4;" value="#5bb4e4" class="color_3"></label>
							<label style="background: #dd6042;" value="#dd6042" class="color_4"></label>
							<label style="background: #ec1a23;" value="#ec1a23" class="color_5"></label>
							<label style="background: #686157;" value="#686157" class="color_6"></label>
							<label style="background: #797676;" value="" class="color_custom"><i class=""><img src="<?=SITE_DIR?>include/admin_panels/img/color_picker.png"></i></label>
						</div>

						<div class="custom_color col-12 my-3 pl-0 d-none">
							<p>���������������� �����</p>
							<div class="col-xl-12 col-lg-12 row ml-0 pl-0">
								<div class="color_1_box color_pick col-12 row ml-0 pl-0">
									<label class="col-12">�������� ����</label>

									<input id="color_1" maxlength="7" class="col-3 ml-3" type="text" name="color_1" value="<?=$general_color_1?>">
									<div class="box_picker" ></div>

									<script>

										$("#color_1").spectrum({
											color: "<?=$gen_color_1?>",
											showInput: true,
											allowEmpty:true,
											showInitial: true,
											preferredFormat: "hex",
											chooseText: "�������",
    										cancelText: "�����"
										});
									</script>
								</div>
								<div class="color_2_box color_pick col-12 row ml-0 pl-0">
									<label class="col-12">���.����</label>

									<input  id="color_2" maxlength="7" class="col-3 ml-3" type="text" name="color_2" value="<?=$general_color_2?>">
									<div class="box_picker" ></div>
									<script>


										$("#color_2").spectrum({
											color: "<?=$gen_color_2?>",
											showInput: true,
											allowEmpty:true,
											showInitial: true,
											preferredFormat: "hex",
											chooseText: "�������",
    										cancelText: "�����"
										});
									</script>
								</div>
								<div class="color_3_box color_pick col-12 row ml-0 pl-0">
									<label class="col-12">���.����</label>

									<input  id="color_3" maxlength="7" class="col-3 ml-3" type="text" name="color_3" value="<?=$general_color_3?>">
									<div class="box_picker" ></div>
									<script>
										$("#color_3").spectrum({
											color: "<?=$gen_color_3?>",
											showInput: true,
											allowEmpty:true,
											showInitial: true,
											preferredFormat: "hex",
											chooseText: "�������",
    										cancelText: "�����"
										});
									</script>
								</div>

								<div class="color_4_box color_pick col-12 row ml-0 pl-0 d-none">
									<label class="col-12">������</label>

									<input id="color_4" maxlength="7" class="col-3 ml-3" type="text" name="color_4" value="<?=$general_color_4?>">
									<div class="box_picker" ></div>
									<script>
										$("#color_4").spectrum({
											color: "<?=$gen_color_4?>",
											showInput: true,
											allowEmpty:true,
											showInitial: true,
											preferredFormat: "hex",
											chooseText: "�������",
    										cancelText: "�����"
										});
									</script>
								</div>
							</div>
						</div>
						<div class="edit-box col-12 pl-0">
							<div class="title">�������</div>
							<div class="col-12 logo-box upload-box mb-4 p-0 row m-0" style="position: relative;">
								<a class="btn-upload mb-4 d-block col-12">��������� ����</a>
								<div class="upload_img_box"><img class="upload_img" src="<?=CFile::GetPath($general_logo)?>" alt="" title=""></div>
								<img class="loading_gif" style="" src="<?=SITE_DIR?>include/admin_panels/img/loading.gif" width="30px" height="30px">
							</div>
							<input id="sortpicture" type="file" name="sortpic" style="display: none;" onchange="previewFile()"/>
							<script type="text/javascript">
								$("a.btn-upload").click(function(){
									$('#sortpicture').click();
								});
								// $('input[type="file"]').on('change', function (event, files, label) {
								//     var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
								//     // $('.filename').text(file_name);
								//     alert(file_name);
								//     $(".upload_img").attr('src',readAsDataURL(this.value));
								// });
								function previewFile() {
								  const preview = document.querySelector('img.upload_img');
								  const file = document.querySelector('input[type=file]').files[0];
								  const reader = new FileReader();

								  reader.addEventListener("load", function () {
								    // convert image file to base64 string
								    preview.src = reader.result;
								  }, false);

								  if (file) {
								    reader.readAsDataURL(file);
								  }
								}
							</script>
						</div>
					</div>

					<div class="edit-box col-12 pl-0">
						<div class="title">��������</div>
						<label class="col-12">�������</label>
						<input class="col-12" type="text" name="admin_general_phone"  placeholder="" value="<?=$general_phone?>">
						<label class="col-12">������ ������</label>
						<input class="col-12" type="text" name="admin_general_wh"  placeholder="" value="<?=$general_wh?>">
						<label class="col-12">�����   </label>
						<input class="col-12" type="text" name="admin_general_adres"  placeholder="" value="<?=$general_adres?>">
						<div class="title">���. ����</div>
						<label class="col-12">Instagram   </label>
						<input class="col-12" type="text" name="admin_general_inst"  placeholder="" value="<?=$general_inst?>">
						<label class="col-12">���������   </label>
						<input class="col-12" type="text" name="admin_general_vk"  placeholder="" value="<?=$general_vk?>">
						<label class="col-12">Youtube   </label>
						<input class="col-12" type="text" name="admin_general_yt"  placeholder="" value="<?=$general_yt?>">
					</div>



				</div>
			</div>

			<div class="admin_panel_body tab_2 pl-4  py-3 col-lg-9 col-md-12 col-12 off">
				<h2 class="pb-3">�����</h2>
				<div class="row col-12 p-0 m-0 info-box">
					<div class="edit-box col-12 pl-0">

		      			<div class="title">�������� ����</div>
		      			<div class="select-box admin_general_fix_menu">
		      				<input type="hidden" name="admin_general_fix_menu" value="<?=$general_fix_menu?>">
							<div class="select_option <?if($general_fix_menu == 1){echo 'active';}?>" data_val="<?=$general_fix_menu?>">����. ����</div>
						</div>

		      		</div>

				</div>
			</div>


			<div class="admin_panel_body tab_5 pl-4  py-3 col-lg-9 col-md-12 col-12 off">
				<h2 class="pb-3">�������</h2>
				<div class="row col-12 p-0 m-0 info-box">
					<div class="edit-box col-12 pl-0">
						<div class="title">��������� ������</div>
						<input type="hidden" class="input_order_item item_<?=$main_order_array['2']['xml']?>" name="admin_MAIN_ORDER_WELC" value="<?=$main_order_array['3']['xml']?>">
						<input type="hidden" class="input_order_item item_<?=$main_order_array['3']['xml']?>" name="admin_MAIN_ORDER_LASTN" value="<?=$main_order_array['7']['xml']?>">
						<input type="hidden" class="input_order_item item_<?=$main_order_array['4']['xml']?>" name="admin_MAIN_ORDER_CLAS" value="<?=$main_order_array['4']['xml']?>">
						<input type="hidden" class="input_order_item item_<?=$main_order_array['5']['xml']?>" name="admin_MAIN_ORDER_TEACH" value="<?=$main_order_array['5']['xml']?>">
						<input type="hidden" class="input_order_item item_<?=$main_order_array['6']['xml']?>" name="admin_MAIN_ORDER_COURS" value="<?=$main_order_array['6']['xml']?>">
						<input type="hidden" class="input_order_item item_<?=$main_order_array['7']['xml']?>" name="admin_MAIN_ORDER_WAY" value="<?=$main_order_array['2']['xml']?>">

						  <ul id="sortable">
						    <?
							for ($i=2; $i < 8; $i++) {
								$order = $main_order_array[$i]['xml'];
								if($main_order_array[$i]['status']){
								?>
								 <li data_num="<?=$i?>" data_xml="<?=$order?>" data_id="<?if($main_order_array[$i]['status']=="active"){ echo $order;}?>" class="ui-state-default ">
								 	<label class="check-label <?=$main_order_array[$i]['status']?>"></label>
							        <span><?=$main_order_array[$order]['name']?></span>
							        <i class="icon icon-move">
							        	<style>
										.icon.icon-move:before{
											content: url("<?=SITE_DIR?>include/admin_panels/img/move.png");
										}
									</style>
							        </i>
							    </li>
								<?}
							}?>

							  </ul>
					</div>



				</div>
			</div>




			<div class="text-left col-lg-3 col-md-12 col-12 mt-5 btn-box">
					<button type="submit" class="btn">���������</button>
				</div>
		</form>
	</div>
</div>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.js"></script>
<script type="text/javascript">
	$('.admin_panels_btn').click(function() {

		if(!$(this).hasClass('active')){
			$('.admin_panels').removeClass('d-none');
			$('.admin_panels_overlay').removeClass('d-none');
			$('.admin_panels').addClass('d-block');
			$(this).addClass('active');
			$('.admin_panels').removeClass('slideOutLeft');

		} else {
			$('.admin_panels').removeClass('d-block');
			$('.admin_panels_overlay').removeClass('d-block');
			$('.admin_panels').addClass('slideOutLeft ');
			$('.admin_panels').addClass('d-none ');
			$('.admin_panels_overlay').addClass('d-none');

			$(this).removeClass('active');
			$('.submit_click').addClass('d-none');


		}

	});
	$('.admin_panels_overlay').click(function() {
		$('.admin_panels').addClass('slideOutLeft ');
		$('.admin_panels_overlay').addClass('d-none');
		$('.admin_panels_btn').removeClass('active');
		$('.submit_click').addClass('d-none');
	});
	$('.admin_panels').click(function() {
		$('.submit_click').removeClass('d-none');
	});

	$('.select-box .select_option').click(function() {
		value = $(this).attr('data_id');

		if(!$(this).hasClass('active')){
			$(this).addClass('active');
			select_block = $(this).parent('.select-box').parent('.select_block').find('select .item_'+value).prop("selected", "selected");
			$(this).parent('.select-box.admin_general_fix_menu').find('.select_option').attr('data_val','1');
			$(this).parent('.select-box.admin_general_fix_menu').find('input[name="admin_general_fix_menu"]').val("1");

		}else{
			$(this).removeClass('active');
			select_block = $(this).parent('.select-box').parent('.select_block').find('select .item_'+value).prop("selected", "");
			$(this).parent('.select-box.admin_general_fix_menu').find('.select_option').attr('data_val','-1');
			$(this).parent('.select-box').find('input[name="admin_general_fix_menu"]').val("-1");
		}

	});



	function color_hex_fun(color_hex_1,color_hex_2,color_hex_3,color_hex_4){
		$('.custom_color .color_1_box .btn_color_pick').css('background', color_hex_1);
		$('.custom_color .color_2_box .btn_color_pick').css('background', color_hex_2);
		$('.custom_color .color_3_box .btn_color_pick').css('background', color_hex_3);
		$('.custom_color .color_4_box .btn_color_pick').css('background', color_hex_4);

		$('.custom_color .color_1_box .sp-preview .sp-preview-inner').css('background', color_hex_1);
		$('.custom_color .color_2_box .sp-preview .sp-preview-inner').css('background', color_hex_2);
		$('.custom_color .color_3_box .sp-preview .sp-preview-inner').css('background', color_hex_3);
		$('.custom_color .color_4_box .sp-preview .sp-preview-inner').css('background', color_hex_4);

		$('.custom_color .color_1_box input').val(color_hex_1);
		$('.custom_color .color_2_box input').val(color_hex_2);
		$('.custom_color .color_3_box input').val(color_hex_3);
		$('.custom_color .color_4_box input').val(color_hex_4);
	}
	$('.admin_panels .radio label.color_1').click(function() {
	    color_hex_fun("#f37335", "#1260a0", "#ffd31d", "#2b2d37");
	});
	$('.admin_panels .radio label.color_2').click(function() {
	    color_hex_fun("#65ae83", "#000080", "#ffd31d", "#47394a");
	});
	$('.admin_panels .radio label.color_3').click(function() {
	    color_hex_fun("#5bb4e4", "#00008B", "#ffd31d", "#363636");
	});
	$('.admin_panels .radio label.color_4').click(function() {
	    color_hex_fun("#dd6042", "#0000CD", "#ffd31d", "#3b2d44");
	});
	$('.admin_panels .radio label.color_5').click(function() {
	    color_hex_fun("#ec1a23", "#0000FF", "#ffd31d", "#222629");
	});
	$('.admin_panels .radio label.color_6').click(function() {
	    color_hex_fun("#686157", "#4169E1", "#ffd31d", "#3c3c3c");
	});



	gen_colors_hex = "<?=$gen_colors?>";
	if(gen_colors_hex == "#f37335"){color_hex_fun("#f37335", "#1260a0", "#ffd31d", "#2b2d37");}
	if(gen_colors_hex == "#65ae83"){color_hex_fun("#65ae83", "#000080", "#ffd31d", "#47394a");}
	if(gen_colors_hex == "#5bb4e4"){color_hex_fun("#5bb4e4", "#00008B", "#ffd31d", "#363636");}
	if(gen_colors_hex == "#dd6042"){color_hex_fun("#dd6042", "#0000CD", "#ffd31d", "#3b2d44");}
	if(gen_colors_hex == "#ec1a23"){color_hex_fun("#ec1a23", "#0000FF", "#ffd31d", "#222629");}
	if(gen_colors_hex == "#686157"){color_hex_fun("#686157", "#4169E1", "#ffd31d", "#3c3c3c");}



	$('.admin_panels .radio label').click(function() {
		$('.admin_panels .radio label').removeClass('active');
		$(this).addClass('active');
		val_color = $(this).attr("value");
		$('.admin_panels .admin_form input[name="colors"]').val(val_color);
		$('.custom_color').addClass('d-none');
	});
	$('.admin_panels .radio label.color_custom').click(function() {

		$('.custom_color').removeClass('d-none');
		$('.admin_panels .admin_form input[name="colors"]').val();

	});

	$('.admin_panel_btns .btn').click(function() {
		$('.admin_panel_btns .btn').removeClass('active');
		$(this).addClass('active');
		data_body = $(this).attr('data-body');
		$('.admin_panel_body').addClass('off');
		$('.admin_panel_body.'+data_body).removeClass('off');
	});
	$('.submit_click').click(function() {
		$('.admin_panels .admin_form button[type="submit"]').click();
	});


</script>

<script type="text/javascript">

<?if($general_menu_services) foreach ($general_menu_services  as $key => $value) {?>
	 $('select.admin_general_menu_services option.item_<?=$value?>').attr("selected", "selected");
	  $('div.admin_general_menu_services_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($main_services_items) foreach ($main_services_items  as $key => $value) {?>
	 $('select.admin_main_services_items option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_main_services_items_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($main_sale_items) foreach ($main_sale_items  as $key => $value) {?>
	 $('select.admin_main_sale_items option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_main_sale_items_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($main_spec_block_content) foreach ($main_spec_block_content  as $key => $value) {?>
	 $('select.admin_main_spec_block_content option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_main_spec_block_content_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($main_onas_items_adv) foreach ($main_onas_items_adv  as $key => $value) {?>
	 $('select.admin_main_onas_items_adv option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_main_onas_items_adv_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($main_reviews_content) foreach ($main_reviews_content  as $key => $value) {?>
	 $('select.admin_main_reviews_content option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_main_reviews_content_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($main_event_content) foreach ($main_event_content  as $key => $value) {?>
	 $('select.admin_main_event_content option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_main_event_content_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($main_news_content) foreach ($main_news_content  as $key => $value) {?>
	 $('select.admin_main_news_content option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_main_news_content_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($o_nas_sert_item) foreach ($o_nas_sert_item  as $key => $value) {?>
	 $('select.admin_o_nas_sert_item option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_o_nas_sert_item_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($o_nas_adevnt_content) foreach ($o_nas_adevnt_content  as $key => $value) {?>
	 $('select.admin_o_nas_adevnt_content option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_o_nas_adevnt_content_box .item_<?=$value?>').addClass('active');
<?}?>
<?if($o_nas_gallery_content) foreach ($o_nas_gallery_content  as $key => $value) {?>
	 $('select.admin_o_nas_gallery_content option.item_<?=$value?>').attr("selected", "selected");
	 $('div.admin_o_nas_gallery_content_box .item_<?=$value?>').addClass('active');
<?}?>

 $('.admin_panels .radio label[value="<?=$gen_colors?>"]').addClass("active");



</script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/admin/colorpicker.min.js"></script>


<script type="text/javascript">



color_picker_html = '<div id="color_picker"><div class="close_pick"><span class="icon icons-cross2"></span></div><div id="color_picker_box"><div id="picker"></div><div id="slide"></div></div></div>';

$(".custom_color .color_pick .btn_color_pick").click(function() {
	$(".btn_color_pick").removeClass("active");
	$(this).addClass("active");
	color_pick = $(this).parent(".color_pick");
	$(".custom_color .color_pick .box_picker").html("");
	color_pick.find('.box_picker').html(color_picker_html);
	var color_hex;
	ColorPicker(
	    document.getElementById('slide'),
	    document.getElementById('picker'),
	    function(hex, hsv, rgb) {

			color_hex = hex;
			color_pick.find('.btn_color_pick').css("background",color_hex);
    		color_pick.find('input').val(color_hex);

    });
    $("#color_picker .close_pick").click(function() {
	$(".custom_color .color_pick .box_picker").html("");
});
});


	$('.color_pick input').hover(function() {

		val_color = $(this).val();
		class_color = $(this).attr('name');
		$('.color_pick.'+class_color+'_box .btn_color_pick').css("background",val_color);

	});
</script>


<div class="modal fade modal-upload" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <?$APPLICATION->IncludeComponent("itproduce:main.file.input.juristic2", "drag_n_drop_juristic2", Array(
			"INPUT_NAME" => "NEW_FILE_UPLOAD",
				"MULTIPLE" => "Y",
				"MODULE_ID" => "main",
				"MAX_FILE_SIZE" => "",
				"ALLOW_UPLOAD" => "A",
				"ALLOW_UPLOAD_EXT" => "",
				"INPUT_CAPTION" => "�������� ����",
				"INPUT_VALUE" => $_POST["NEW_FILE_UPLOAD"]
			),
			false
		);?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span class="icon icons-cross2"></span>
        </button>
      </div>

    </div>
  </div>
</div>
<link href="<?=SITE_DIR?>include/admin_panels/css/admin_panels.css" rel="stylesheet">
<link href="<?=SITE_DIR?>include/admin_panels/css/animate.css" rel="stylesheet">
<script src="<?=SITE_DIR?>include/admin_panels/js/admin_panels.js"></script>

<script src="<?=SITE_DIR?>include/admin_panels/js/jquery-ui.js"></script>
	<style type="text/css">
						#sortable {
						  	list-style-type: none;
						    margin: 0;
						    padding: 0;
						    width: 100%;
							height: 470px;
						}

						#sortable li {
							width: 100%;
						    display: block;
						    background: #f5f5f5;
						    border-radius: 5px;
						    padding: 15px;
						    line-height: 1.5;
						    padding-left: 40px;
						    margin-bottom: 5px;
						    border: 1px solid #f5f5f5;
						    cursor: move;
						    position: relative;
						    font-size: 14px;
						}


						#sortable input[type="checkbox"] {
						    width: 35px;
						    height: 18px;
						    min-width: 0px;
						    margin: 0px;
						    position: absolute;
						    left: 5px;
						}

						#sortable li:hover {
						    border-color: #f37335;
						}

						#sortable li:active {
						    box-shadow: 2px 5px 6px #ccc;
						    border-color: #f37335;
						    background: #fff;
						}
						#sortable label.check-label{
						    position: absolute;
						    left: 0px;
						    cursor: pointer;
						}
						#sortable label.check-label:hover,#sortable label.check-label.active:hover {
						    border-color: #f37335;
						    background: #faf8f8;
						}

						#sortable label.check-label:before, #sortable label.check-label.active:before {
						    content: '';
						    background: #fff;
						    width: 20px;
						    height: 20px;
						    position: absolute;
						    left: 10px;
						    border: 1px solid #f8f8f8;
						    border-radius: 50%;
						}

						#sortable label.check-label.active:after {
						    content: '';
						    background: #f37335;
						    width: 14px;
						    height: 14px;
						    position: absolute;
						    left: 13px;
						    margin-top: 3px;
						    border: 1px solid #f8f8f8;
						    border-radius: 50%;
						}

						#sortable label.check-label:hover:before {
						    border-color: #f37335;
						}
						#sortable li i.icon {
						    position: absolute;
						    right: 19px;
						    line-height: 1.3;
						    font-size: 16px;
						    color: #ccc;
						}

						#sortable li:hover i.icon {
						    color: #666;
						}
						.admin_panels .admin_panel_body {
						    overflow-y: scroll;
						    overflow-x: hidden;
						    height: 100vh;
						}
						.admin_panels img {
						    height: 100%;
						    max-width: 250px;
    						height: auto;
						}
						.admin_panels img.loading_gif {
						    display: block;
						    position: absolute;
						    left: 66px;
						    top: 30px;
						    height: 30px;
						    top: 60px;
						    left: 9px;
						    opacity: 0;
						}
						.admin_panels .upload_img_box {
						    background: #fff;
						    position: relative;
						    z-index: 1;
						}
						.admin_panels .admin_panel_body.off {
						    display: block !important;
						    position: absolute;
						    z-index: 1;
						    right: 0px;
						}
						.admin_panels .admin_panel_body:not(.off) {
						    position: absolute;
						    right: 0px;
						    display: block;
						    z-index: 5;
						    background: #fff;
						}
						.admin_panel_btns{
							position: absolute;
							height: 100%;
						}
					</style>
					<script type="text/javascript">
						const s = $("#sortable");
						let ui_val = new Array();
						s.sortable({
							placeholder: "ui-state-highlight"
						  });
						s.disableSelection();
						function ui_input_val(){

							i=0;
							$('.input_order_item').each(function(){
								i++;
								ui_val[i] = $(this).val(ui_val[i]);

							});
							i=0;
							$('#sortable .ui-state-default').each(function(){
								i++; $(this).attr('data_id', ui_val[i]);

							});

						}
						function ui_state_val(){
							i=0;
							$('#sortable .ui-state-default').each(function(){
								i++; ui_val[i] = $(this).attr('data_id');
							});
							i=0;
							$('.input_order_item').each(function(){
								i++;
								$(this).val(ui_val[i]);

							});

						}

						$('#sortable label.check-label').click(function() {
							if(!$(this).hasClass('active')){
								$(this).addClass('active');
								data_xml = $(this).parent('.ui-state-default').attr('data_xml');
								$(this).parent('.ui-state-default').attr('data_id',data_xml);
							}else{
								$(this).removeClass('active');

								$(this).parent('.ui-state-default').attr('data_id','');
							}
						});



							ui_state_val()
							ui_state_val()
						$('#sortable .ui-state-default').hover(
						function() {
							ui_state_val()
						},
						function() {
							ui_state_val()
						});



					</script>
<script type="text/javascript">
	$("form.admin_form").submit(function(){
 	var form_data = $(this).serialize();
	var file_data = "&";
	 //form_data = form_data +"&admin_general_logo=" +$('[name="admin_general_logo"]').val();
	$("form.admin_form").find('input[type="file"]').each(function () {

	 	val = $(this).val();
	 	name = $(this).attr("name");
	  	file_data += name+ '=' +val+'&';

	});

console.log(file_data);
//console.log(forms_data);
    $.ajax({
            type: "POST",
            url: "<?=SITE_DIR?>include/update_iblock.php",
            data: form_data+file_data,
            success: function(data) {
	            window.location.reload();
				/*data0=data;
	            data_title=data0.split("title=")[1];
	            data_title=data_title.split(";")[0];

	            data_name=data0.split("names=")[1];
	            data_name=data_name.split(";")[0];*/

	         	//console.log(data);
	            //success_on();

	        },
	        error: function(){
    			alert('error!');


    		}
    });

    file_data = $('#sortpicture').prop('files')[0];
    form_data = new FormData();
    form_data.append('file', file_data);

    $.ajax({
        url: '<?=SITE_DIR?>include/upload.php',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(php_script_response){
            location.reload();
        }
    });
	return false;
});
</script>
<style>
	.icon.icon-settings:before{
		content: url("<?=SITE_DIR?>include/admin_panels/img/settings.png");
	}
</style>
<?}?>