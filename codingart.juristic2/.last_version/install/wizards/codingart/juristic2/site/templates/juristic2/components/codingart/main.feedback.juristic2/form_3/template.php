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


	<div class="inner-column">
		<div class="title-box">
			<h3  style="color: #fff !important;"><?=$arParams['FORM_TITLE']?></h3>
		</div>
		<div class="contact-form">
			<form method="POST" action="#" id="xs-contact-form" class="form_post">
				<div class="d-none value">
	      			<input type="hidden" name="admin_mail" value="<?=$admin_mail?>">
	      			<input type="hidden" name="from_mail" value="<?=$from_mail?>">
	      			<input type="hidden" name="title" value="<?=$arParams['FORM_TITLE']?>">
	      			<input type="hidden" name="form_class" value="form_3">
	      			<input type="hidden" name="feed_form" value="
		  			<?foreach ($arParams['EVENT_MESSAGE_ID'] as $key => $value) {
		  				echo $value.", ";
		  			}?>
		  			">
	      		</div>
				<div class="form-group">
 							 <input type="text" name="profile_name" placeholder="Введите ваше имя" id="xs_contact_name" required="">
						</div>
						<div class="form-group">
 							<input type="email" name="profile_mail" placeholder="Ваша почта " id="xs_contact_email" required="">
						</div>
						<div class="form-group">
 							 <input type="tel" name="profile_phone" placeholder="Телефонный номер " required="">
						</div>
						<div class="form-group comment-group">
 							<textarea name="profile_coment" placeholder="Напишите ваше сообщение" id="x_contact_massage" required=""></textarea>
						</div>
						<div class="form-group">
 							<button type="submit" class="theme-btn submit-btn btn" id="xs_contact_submit">Отправить сейчас</button>
						</div>
				<div class="row justify-content-center">
				<div class="col-12">
					<div class="note-terms contacts_note-terms mt-2">
						<label style="color: #fff;">
							<input type="hidden" name="confirm" value="<?=GetMessage('FORM_PROP_CONFIRM')?> "> 
							<input type="checkbox" checked="" autocomplete="off" required> <?=GetMessage('FORM_PROP_1')?> 
							<a  style="color: #fff;" href="<?=SITE_DIR?>include/privacy-policy.php" target="_blank"><?=GetMessage('FORM_PROP_2')?> </a>.
						</label>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>

	
