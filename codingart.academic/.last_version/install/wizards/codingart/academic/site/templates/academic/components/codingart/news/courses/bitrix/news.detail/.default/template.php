<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<style>
.courses-details-img {
    display: flex;
    justify-content: center;
    align-content: flex-end;
}
</style>
<?$GLOBALS['krasn'] = $arResult["NAME"];?>
<div class="courses-details-area blog-area pt-150 pb-140">
    <div class="container">
        <div class="row">

                <div class="courses-details">
                    <div class="courses-details-img">
                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="courses-details">
                    </div>
					<br>

                    <div class="course-details-content">
                        <h2><?=GetMessage("ABOUT")?></h2>
                        <p><?echo $arResult['DETAIL_TEXT']?></p>
                    </div>
				<div class="two-block">
					<div class="course-details-right col-md-7 col-sm-7 col-xs-12">
                            <h3><?=GetMessage("COURSE_FEATURES")?></h3>
                            <ul>
                                <li><?=GetMessage("COURSE_BEGIN")?>
                                <span><?=FormatDateFromDB($arItem["ACTIVE_FROM"], 'd M, Y');?></span></li>
                                <li><?=GetMessage("COURSE_DURATION")?> <span><?echo $arResult["DISPLAY_PROPERTIES"]["DURATION"]["VALUE"]?>
                                </span></li>
                                <li><?=GetMessage("CLASS_DURATION")?>
                                <span><?echo $arResult["DISPLAY_PROPERTIES"]["CLASS_DURATION"]["VALUE"]?></span></li>
                                <li><?=GetMessage("SKILL_LEVEL")?>
                                <span><?echo $arResult["DISPLAY_PROPERTIES"]["SKILL_LEVEL"]["VALUE"]?></span></li>
                                <li><?=GetMessage("STUDENTS")?> <span><?echo $arResult["DISPLAY_PROPERTIES"]["STUDENTS"]["VALUE"]?></span></li>
                            </ul>
							<h3 class="red"><?=GetMessage("PRICE")?> <?echo $arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?> <?=GetMessage("CURRENCY")?></h3>
                        </div>
			<div id="formt" class="col-md-7 col-sm-7 col-xs-12">

                    <?$APPLICATION->IncludeComponent(
    "so:main.feedback", 
    "cours", 
    array(
        "COMPONENT_TEMPLATE" => "cours",
        "USE_CAPTCHA" => "N",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
        "REQUIRED_FIELDS" => array(
            0 => "NAME",
            1 => "user_phone",
        ),
        "EVENT_MESSAGE_ID" => array(
            0 => "7",
        )
    ),
    false
);?>
			</div></div><br>

        </div>
    </div>
</div>
</div>
<!-- Blog End -->