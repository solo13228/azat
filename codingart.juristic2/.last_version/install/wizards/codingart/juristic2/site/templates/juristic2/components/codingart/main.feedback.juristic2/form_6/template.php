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
<div class="mb-4">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if(strlen($arResult["OK_MESSAGE"]) > 0)
	{
		?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>
	<h3 class="mb-3 mt-4"><?=$arParams['FORM_TITLE']?> </h3>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form_post form_6">
		<div class="d-none value">
		   	<input type="hidden" name="admin_mail" value="<?=$admin_mail?>">
	  		<input type="hidden" name="from_mail" value="<?=$from_mail?>">
		    <input type="hidden" name="title" value="Запись на услугу">
		     <input type="hidden" name="profile_coment" value="<?=$arParams['MSG_TITLE']?>">
		    <input type="hidden" name="form_class" value="form_6">
		    <input type="hidden" name="profile_select" value="<?=$arParams['MSG_TITLE']?>">
		    <input type="hidden" name="feed_form" value="
		  			<?foreach ($arParams['EVENT_MESSAGE_ID'] as $key => $value) {
		  				echo $value.", ";
		  			}?>
		  			">

		 </div>
		<?=bitrix_sessid_post()?>
	<div class="row">
		<div class=" input-container col-lg-4">
			<input
				type="text"
				id="mainFeedback_name"
				name="profile_name"
				class=""
				value=""
				placeholder="<?=GetMessage('MFT_NAME');?><?if(empty($arParams['REQUIRED_FIELDS']) || in_array('NAME', $arParams['REQUIRED_FIELDS'])):?>*<?endif;?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>required<?endif?>
			/>
		</div>
		<div class=" input-container col-lg-4">
			<input
				type="tel"
				name="profile_phone"
				id="mainFeedback_phone"
				class=""
				value=""
				placeholder="<?=GetMessage('MFT_PHONE')?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array('PHONE', $arParams["REQUIRED_FIELDS"])):?>*<?endif;?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?>required<?endif?>
			/>
		</div>
		
		<div class="col-lg-4">
			<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
			<input type="submit" name="submit"  value="<?=GetMessage("MFT_SUBMIT")?>" class="btn ">
		</div>
		<div class="row justify-content-center">
				<div class="col-12">
					<div class="note-terms contacts_note-terms mt-2 ml-3">
						<label>
							<input type="hidden" name="confirm" value="<?=GetMessage('FORM_PROP_CONFIRM')?> "> 
							<input type="checkbox" checked="" autocomplete="off" required> <?=GetMessage('FORM_PROP_1')?> 
							<a href="<?=SITE_DIR?>include/privacy-policy.php" target="_blank"><?=GetMessage('FORM_PROP_2')?> </a>.
						</label>
					</div>
				</div>
			</div>
	</div>
	</form>
</div>