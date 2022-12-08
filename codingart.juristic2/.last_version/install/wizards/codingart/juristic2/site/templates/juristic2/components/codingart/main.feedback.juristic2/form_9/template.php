<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
global $arItemGeneral;?>

<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/datepicker.min.css" rel="stylesheet" type="text/css">
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/datepicker.js"></script>

<?
if(empty($arParams["EMAIL_TO"])){
	$from_mail = $arParams["EMAIL_TO"];
} else {
	$admin_mail = $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'];
}
if($arItemGeneral['PROPERTIES']['EMAIL_FROM']['VALUE'])
	$from_mail = $arItemGeneral['PROPERTIES']['EMAIL_FROM']['VALUE'];

?>
	<?
	$form_title_2 = $arParams['FORM_TITLE'];
	$form_name = GetMessage('MFT_NAME');
	$form_phone = GetMessage('MFT_PHONE');
	$form_select = $arParams['FORM_SELECT_IBLOCK_ID'];
	$form_data = GetMessage('MFT_DATA');
	$form_time = GetMessage('MFT_TIME');
	$form_btn = GetMessage('MFT_SUBMIT');
	$form_pk_desc = GetMessage('MFT_TEXT_DESC');
	$form_pk_text = GetMessage('MFT_TEXT');
	$form_pk_file = GetMessage('MFT_TEXT_LINK');
	
	
	if(!$form_pk_text){ 
		$form_pk_text =  GetMessage('MFT_TEXT');
	}
	if(!$form_pk_file){ 
		$form_pk_file = SITE_DIR.'include/privacy-policy.php';
	}
	?>

<? if($arParams['MODAL_MOD'] == "Y"){ ?>
<div class="modal fade modal-sign-up" id="modal-sign-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?=$form_title_2?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<style type="text/css">
      		.modal-sign-up h4, .modal-sign-up small {  display: none;}
			.modal-sign-up .col-xl-7 {max-width: 100%;flex: 100%;}
      	</style>	
<?}?>	
<? if($arParams['MODAL_MOD'] == "N"){ ?>
		<small><?=$form_title_1?></small>
		<h4><?=$form_title_2?></h4>
<?}?>
		<form  action="" method="POST" class="form_post book-form-box">
			<div class="d-none value">
      			<input type="hidden" name="admin_mail" value="<?=$admin_mail?>">
      			<input type="hidden" name="from_mail" value="<?=$from_mail?>">
      			<input type="hidden" name="title" value="<?=$form_title_2?>">
      			<input type="hidden" name="form_class" value="form_9">
      			<input type="hidden" name="feed_form" value="
		  			<?foreach ($arParams['EVENT_MESSAGE_ID'] as $key => $value) {
		  				echo $value.", ";
		  			}?>
		  			">
      		</div>	
			<div class="row  justify-content-start">
				<div class="col-lg-12 input-container">
					<input name="profile_name" type="text" value="" class="" placeholder="<?=$form_name?>" required="">
				</div>
				<div class="col-lg-12 input-container">
					<input name="profile_phone" type="tel"  value="" class="" placeholder="<?=$form_phone?>" required="">
				</div>
				<div class="col-lg-12 input-container select-box">
					<input name="select" type="text"  value="" class="" placeholder="<?=GetMessage('MFT_SERV')?>" required="" readonly>
					<span style="" class="icon icon-down-arrow2"></span>
					<div class="d-none profile_select_box input-modal">
						<?$IBLOCK_ID = $arParams['FORM_SELECT_IBLOCK_ID'];
							$arPropList = array();
						    $arFilter = Array('IBLOCK_ID' => $IBLOCK_ID,'ACTIVE'=>'Y');
						    $res = CIBlockElement::GetList(array(), $arFilter);
						    while($ar_fields = $res->GetNext()){
						    	$res_2 = CIBlockSection::GetByID($ar_fields["IBLOCK_SECTION_ID"]);
								if($ar_res = $res_2->GetNext());
								
								if(($ar_fields['ACTIVE'] == 'Y') and ($ar_res['GLOBAL_ACTIVE']=='Y')){ ?>
							   		<li data_id="<?=$ar_fields['ID']?>" value="<?=$ar_fields['NAME']?>"><?=$ar_fields['NAME']?></li>
							   	<?}
						    }
						?>
					</div>
					<select type="hidden" name="profile_select" value="" class="cs-select cs-skin-border d-none">
					    <option value="" disabled selected><?=GetMessage('MFT_SERV')?></option>
					  	<?$IBLOCK_ID = $arParams['FORM_SELECT_IBLOCK_ID'];
							$arPropList = array();
						    $arFilter = Array('IBLOCK_ID' => $IBLOCK_ID,'ACTIVE'=>'Y');
						    $res = CIBlockElement::GetList(array(), $arFilter);
						    while($ar_fields = $res->GetNext()){
						    	$res_2 = CIBlockSection::GetByID($ar_fields["IBLOCK_SECTION_ID"]);
								if($ar_res = $res_2->GetNext());
								
								if(($ar_fields['ACTIVE'] == 'Y') and ($ar_res['GLOBAL_ACTIVE']=='Y')){ ?>
							   		<option data_id="<?=$ar_fields['ID']?>" value="<?=$ar_fields['NAME']?>"><?=$ar_fields['NAME']?></option>
							   	<?}
						    }
						?>
		    		</select>
				</div>
				
				<div class="text-left col-xl-12 col-lg-12">
					<button type="submit" class="btn col-12"> <?=$form_btn?></button>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="note-terms contacts_note-terms mt-2">
						<label>
							<input type="checkbox" checked="" autocomplete="off" required> <?=$form_pk_desc?>
							<a href="<?=SITE_DIR?>include/privacy-policy.php" target="_blank"><?=$form_pk_text?></a>.
						</label>
					</div>
				</div>
			</div>
		</form>

<? if($arParams['MODAL_MOD'] == "Y"){ ?>
      </div>
    </div>
  </div>
</div>
<?}?>

<script type="text/javascript">
	function profile_select_box_open() {
		$('.book-form-box .profile_select_box').removeClass('d-none');
		$('body').append('<div class="select_box_over"></div>');
		$('.select_box_over').click(function() {
			$('.select_box_over').remove();
			$('.book-form-box .profile_select_box').addClass('d-none');
			$('.book-form-box .select-box .icon').addClass('icon-down-arrow2');
			$('.book-form-box .select-box .icon').removeClass('icon-up-arrow2');
		});
		$('.book-form-box .select-box .icon').removeClass('icon-down-arrow2');
		$('.book-form-box .select-box .icon').addClass('icon-up-arrow2');
	}

	$('.book-form-box input[name="select"]').click(function() {
		profile_select_box_open();
	});
	$('.book-form-box .select-box .icon').click(function() {
		profile_select_box_open();
	});
	$('.book-form-box .profile_select_box li').click(function() {
		$('.book-form-box .profile_select_box').addClass('d-none');
		li_value = $(this).attr('data_id');
		li_name = $(this).attr('value');

		$('.book-form-box input[name="select"]').val(li_name);
		$('select[name="profile_select"] option').removeAttr("selected");
		$('select[name="profile_select"] option[data_id="'+li_value+'"]').prop("selected", "selected");
		$('.select_box_over').remove();
		$('.book-form-box .select-box .icon').addClass('icon-down-arrow2');
		$('.book-form-box .select-box .icon').removeClass('icon-up-arrow2');
	});
	
	

</script>
