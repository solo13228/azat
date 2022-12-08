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

<div class="reply-area">
    <h3><?=GetMessage("MFT_CONN")?></h3>
    <p><?=GetMessage("MFT_DESCR")?> </p>
    <div class="mfeedback">
    <form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="row row-10">
    <?=bitrix_sessid_post()?>
        <div class="col-md-12">
        	<p><?=GetMessage("MFT_NAME")?></p>
            <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"]))?'*':'';?>">
        </div>
        <div class="col-md-12">
        	<p><?=GetMessage("MFT_EMAIL")?></p>
            <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>"placeholder="<?(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"]))?'*':'';?>">
        </div>
        <div class="col-md-12">
        	<p><?=GetMessage("MFT_SUBJECT")?></p>
        	<input type="text" name="subject" id="subject" required="">
        	<p><?=GetMessage("MFT_MESSAGE")?></p>
            <textarea name="MESSAGE" cols="15" rows="10" value="<?=$arResult["MESSAGE"]?>" placeholder="<?(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"]))?'*':'';?>"><?=$arResult["MESSAGE"]?></textarea>
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <div class="col-12"><input class="sendcont" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>"></div>
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
</div>
