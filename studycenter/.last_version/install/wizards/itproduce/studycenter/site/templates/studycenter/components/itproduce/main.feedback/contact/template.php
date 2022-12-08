<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="comment-area">
	<h3><?$APPLICATION->IncludeFile(
            SITE_DIR."include/contacts/contactus.php",
            array(),
            array(
                "MODE" => "text"));?></h3>
	<form id="contact-form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
		 <?=bitrix_sessid_post()?>
		<div class="response"></div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?><?(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"]))?'*':'';?>">
				</div><!--form-group end-->
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>"placeholder="<?=GetMessage("MFT_EMAIL")?><?(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"]))?'*':'';?>">
				</div><!--form-group end-->
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<textarea name="MESSAGE" value="<?=$arResult["MESSAGE"]?>" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
				</div><!--form-group end-->
			</div>
			 <?if($arParams["USE_CAPTCHA"] == "Y"):?>
                            <div class="form-group">
                                <label for="input-5" class="col-sm-4 col-xs-12 control-label required"><?=GetMessage("MFT_CODE")?></label>
                                <div class="col-sm-8 col-xs-12">
                                    <div class="input-group-captcha">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="image">
                                                    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                                                    <img class="img-responsive" src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control" name="captcha_word" type="text" placeholder="<?=GetMessage("MFT_KOD")?>" maxlength="50" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?endif;?>
			<div class="col-lg-12">
				<div class="form-submit">
					<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
					<input type="submit" name="submit" class="btn-default" value="<?=GetMessage("MFT_SUBMIT")?>">
				</div><!--form-submit end-->
			</div>
		</div>
	</form>
	<p class="form-message">
	<?
	if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if($arResult["OK_MESSAGE"] <> '')
	{
		?>
		<div class="mf-ok-text">
			<?=$arResult["OK_MESSAGE"]?>
		</div>
		<?
	}
	?>
	</p>
</div>