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
	$(".newphone").mask("+7(999) 999-9999");
	});
</script>
<div class="subscribe-area pt-60 pb-70">
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="subscribe-content section-title text-center">
	                <h2><?=GetMessage("SUBSCRIBE")?></h2>
	                <p><?=GetMessage("POSSIBILITY")?> </p>
	            </div>
	        	<div class="newsletter-form mc_embed_signup">
					<?if(!empty($arResult["ERROR_MESSAGE"]))
					{
						foreach($arResult["ERROR_MESSAGE"] as $v)
							ShowError($v);
					}
					if($arResult["OK_MESSAGE"] <> '')
					{
						?><div class="mf-ok-text" style="text-align: center;"><?=$arResult["OK_MESSAGE"]?></div><?
					}
					?>
					<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
						<?=bitrix_sessid_post()?>
						<div id="mc_embed_signup_scroll" class="mc-form">
							<div class="col-md-6 col-12 space__bottom--20"> 
								<input type="text" name="name" placeholder="<?=GetMessage("MFT_NAME")?>" style="">
							</div>
							<div class="col-md-6 col-12 space__bottom--20">
								<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" placeholder="<?=GetMessage("MFT_EMAIL")?>">
							</div>
							<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
							<div class="col-md-6 col-12 dd"><br>
								<input class="sphone" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>