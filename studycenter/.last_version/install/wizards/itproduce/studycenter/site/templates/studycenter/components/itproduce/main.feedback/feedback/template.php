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

<section class="newsletter-section" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div class="container">
        <div class="newsletter-sec">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newsz-ltr-text">
                        <h2><?$APPLICATION->IncludeFile(
                                            SITE_DIR."include/footer/joinus.php",
                                            array(),
                                            array(
                                                "MODE" => "text"));?></h2>
                    </div><!--newsz-ltr-text end-->
                </div>
                <div class="col-lg-8">
                    <div class="mfeedback">
                    <form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="newsletter-form">
                    <?=bitrix_sessid_post()?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?><?(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"]))?'*':'';?>">
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" placeholder="<?=GetMessage("MFT_EMAIL")?><?(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"]))?'*':'';?>">
                                </div><!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                        <?$APPLICATION->IncludeComponent(
	"itproduce:news.list",
	"classlist",
	array(
		"COMPONENT_TEMPLATE" => "classlist",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => $GLOBALS["itproduce_block_id"]["classes_list_id"],
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
                                </div>
                            <div class="col-md-12">
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
                            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                            <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
                        </div>
                        <p class="form-message">
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
                        </p>
                    </form>
                    </div>
                </div>
            </div>
        </div><!--newsletter-sec end-->
    </div>
</section>
