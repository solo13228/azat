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
global $arItemGeneral;
if(empty($arParams["EMAIL_TO"])){
	$from_mail = $arParams["EMAIL_TO"];
} else {
	$admin_mail = $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'];
}
if($arItemGeneral['PROPERTIES']['EMAIL_FROM']['VALUE'])
	$from_mail = $arItemGeneral['PROPERTIES']['EMAIL_FROM']['VALUE'];

?>
<div class="modal fade modal-spec" id="modal-spec" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?=GetMessage('FORM_2_TITLE')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="" method="POST" class="form_post">
  			<div class="d-none value">
	  			<input type="hidden" name="iblock_id" value="">
				<input type="hidden" name="form_class" value="form_2">
	  			<input type="hidden" name="admin_mail" value="<?=$admin_mail?>">
	  			<input type="hidden" name="from_mail" value="<?=$from_mail?>">
	  			<input type="hidden" name="title" value="<?=$arParams['FORM_TITLE']?>">
	  			<input type="hidden" name="modal-success" value="<?=$arParams['OK_TEXT']?>">
	  			<input type="hidden" name="coment" value="">
	  			<input type="hidden" name="speshel" value="">
	  			<input type="hidden" name="feed_form" value="
		  			<?foreach ($arParams['EVENT_MESSAGE_ID'] as $key => $value) {
		  				echo $value.", ";
		  			}?>
		  			">
  			</div>	
			<div class="row justify-content-center">
				<div class="col-xl-12 col-lg-12 input-container">
					<label><?=GetMessage('FORM_REV_NAME')?></label>
					<input name="profile_name" type="text" class=" input_ask-qustions" placeholder="<?=GetMessage('FORM_REV_NAME')?>" required="">
				</div>
				<div class="col-xl-12 col-lg-12 input-container">
					<label><?=GetMessage('FORM_REV_PHONE')?></label>
					<input name="profile_phone" type="tel" class="mt-2 mt-md-0 ym-record-keys" placeholder="<?=GetMessage('FORM_REV_PHONE')?>" required="">
				</div>
				<div class="text-left col-xl-7 col-lg-7">
					<button type="submit" class="btn col-12"><?=GetMessage('BTN_SUBMIT')?></button>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="note-terms contacts_note-terms mt-2">
						<label>
							<input type="hidden" name="confirm" value="<?=GetMessage('FORM_PROP_CONFIRM')?> "> 
							<input type="checkbox" checked="" autocomplete="off" required> <?=GetMessage('FORM_PROP_1')?> 
							<a href="<?=SITE_DIR?>include/privacy-policy.php" target="_blank"><?=GetMessage('FORM_PROP_2')?> </a>.
						</label>
					</div>
				</div>
			</div>
		</form>
		</div>
    </div>
  </div>
</div>