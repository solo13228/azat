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
<script>
	jQuery(function($){
	$(".pophone").mask("+7(999) 999-9999");
	});
</script>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
    foreach($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
    ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>
 
 
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
    <div class="mf-name">
        <div class="mf-text">
            <?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
        <input class="mbox" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
    </div>
      
    <div class="so_mf mf-phone">
        <div class="mf-text">
           <?=GetMessage("MFT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("user_phone", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
        <input class="pophone" type="text" name="user_phone" placeholder="+7 (___) ___-__-__" value="<?=$arResult["AUTHOR_PHONE"]?>">
    </div>

    <div class="so_mf mf-class">
        <div class="mf-text">
            <?=GetMessage("MFT_CLASS")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("user_street", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
        </div>
        <input class="mbox" type="text" name="user_class" value="<?echo $GLOBALS['krasn'];?>" readonly>
    </div>
 
    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
    <div class="mf-captcha">
        <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
        <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
        <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
        <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
        <input type="text" name="captcha_word" size="30" maxlength="50" value="">
    </div>
    <?endif;?><br>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

     
    <div class="lnk-dv text-center">
	<input type="submit" id="sendbtn" readonly="readonly" style="cursor:pointer" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>

</form>
</div>