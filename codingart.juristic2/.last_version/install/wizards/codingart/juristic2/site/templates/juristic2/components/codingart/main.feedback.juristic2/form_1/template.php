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

$form_templets = $arParams["FROM_TEMP_LIST"];
$form_name = $arItem['PROPERTIES']['FORM_1_NAME']['VALUE'];
$form_phone = $arItem['PROPERTIES']['FORM_1_PHONE']['VALUE'];
$form_select = $arItem['PROPERTIES']['FORM_1_SELECT']['VALUE'];
$form_data = $arItem['PROPERTIES']['FORM_1_DATA']['VALUE'];
$form_time = $arItem['PROPERTIES']['FORM_1_TIME']['VALUE'];
$form_btn = GetMessage('BTN_SUBMIT');
$form_pk_text = $arItem['PROPERTIES']['FORM_1_PK_TEXT']['VALUE'];
$form_pk_file = $arItem['PROPERTIES']['FORM_1_PK_FILE']['VALUE'];
$profile_name = "Клиент";

$form_title = $arParams['FORM_TITLE'] ." : ". $arParams['RESULT_NAME'];

?>

<? if($form_templets=='detal'){?>
		<form class="form-def row m-0 pt-3 form_post" method="POST" >
			<div class="d-none value">	
	  			<input type="hidden" name="profile_name" value="<?=$form_name?>">
	  			<input type="hidden" name="iblock_id" value="">
				<input type="hidden" name="form_class" value="form_1">
	  			<input type="hidden" name="admin_mail" value="<?=$admin_mail?>">
	  			<input type="hidden" name="from_mail" value="<?=$from_mail?>">
	  			<input type="hidden" name="title" value="<?=$form_title?>">
	  			<input type="hidden" name="modal-success" value="<?=$arParams['OK_TEXT']?>">
	  			<input type="hidden" name="feed_form" value="
		  			<?foreach ($arParams['EVENT_MESSAGE_ID'] as $key => $value) {
		  				echo $value.", ";
		  			}?>
		  			">
			</div>
			<div class="col input-container col-lg-4 col-md-6 col-12 pr-0 pl-0">
				<input class="m-0 p-3 text-center" type="tel" name="profile_phone" placeholder="+7 (___) ___-__-__" required="">
			</div>
			
			<div class="input-container col-lg-4 col-md-6 col-12 pr-0 text-center">
			
				<button type="submit" class="btn p-3"> <?=$form_btn?></button>
			</div>
		</form>
	<?}elseif($form_templets=='servisec'){?>
	<form class="form-def row m-0 pt-3 form_post" action="" method="POST">
		<div class="d-none value">
  			<input type="hidden" name="admin_mail" value="<?=$admin_mail?>">
  			<input type="hidden" name="from_mail" value="<?=$from_mail?>">
  			<input type="hidden" name="title" value="<?=$form_title?>">
  			<input type="hidden" name="profile_name" value="<?=$profile_name?>">
  			<input type="hidden" name="form_class" value="form_1">
  			<input type="hidden" name="feed_form" value="
		  			<?foreach ($arParams['EVENT_MESSAGE_ID'] as $key => $value) {
		  				echo $value.", ";
		  			}?>
		  			">
  		</div>	
		<div class="form-group col-lg-6 col-md-6 col-12 pr-lg-1 pr-md-4 pl-lg-4 pl-md-4">
			<span class="icon flaticon-phone-receiver"></span>
			<input class="m-0" type="tel" name="profile_phone" placeholder="+7 (___) ___-__-__" required="">
		</div>
		<div class="btn-box col-lg-6 col-md-6 col-12 pl-lg-0 pl-md-0 text-center">
			<button type="submit" class="btn"> <?=$form_btn?></button>
			<?/*if($sp_desc){?><a href="<?=$sp_url?>" class="desc-link"><?=GetMessage('BTN_MORE')?></a><?}*/?>
		</div>
	</form>	
	<?}else{?>		
		<form class="form-def form_post"  action="" method="POST" class="form_post">
			<div class="d-none value">
	  			<input type="hidden" name="admin_mail" value="<?=$admin_mail?>">
	  			<input type="hidden" name="from_mail" value="<?=$from_mail?>">
	  			<input type="hidden" name="title" value="<?=$form_title?>">
	  			<input type="hidden" name="profile_name" value="<?=$profile_name?>">
	  			<input type="hidden" name="form_class" value="form_1">
	  			<input type="hidden" name="feed_form" value="
		  			<?foreach ($arParams['EVENT_MESSAGE_ID'] as $key => $value) {
		  				echo $value.", ";
		  			}?>
		  			">
	  		</div>	
			<div class="form-group ">
					<span class="icon flaticon-phone-receiver"></span>
					<input type="tel" name="profile_phone" placeholder="+7 (___) ___-__-__" required="">
			</div>
			<div class="btn-box">
				<button type="submit" class="btn"> <?=$form_btn?></button>
			</div>
		</form>

<?}?>