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
<!-- Event Details Start -->
<div class="event-details-area blog-area pt-150 pb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="event-details">
                    <div class="event-details-img">
                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="event-details">
                        <div class="event-date">
                            <h3><?=FormatDateFromDB($arItem["ACTIVE_FROM"], 'DD M');?></h3>  
                        </div>
                    </div>
                    <div class="event-details-content">
                        <h2><?echo $arResult["NAME"] ?></h2>
                        <ul>
                            <li><span><?=GetMessage("EVENT_BEGIN")?> </span><?=FormatDateFromDB($arItem["ACTIVE_FROM"], 'HH:MI');?></li>
                            <li><span><?=GetMessage("VENUE")?> </span><?echo $arResult["DISPLAY_PROPERTIES"]["ADDRESS"]["VALUE"]?></li>
                        </ul>
                        <p><?echo $arResult['DETAIL_TEXT']?> </p>
                        <div class="speakers-area fix">
                            <h4><?=GetMessage("SPEAKER")?></h4>
                            <div class="single-speaker">
                                <div class="speaker-img">
                                    <img src="<?echo $arResult["DISPLAY_PROPERTIES"]["SPEAKER_PHOTO"]["FILE_VALUE"]["SRC"]?>" style="width: 96px;height: auto;" alt="speaker">
                                </div>
                                <div class="speaker-name">
                                    <h5><?echo $arResult["DISPLAY_PROPERTIES"]["SPEAKER_NAME"]["DISPLAY_VALUE"]?></h5>
                                    <p><?echo $arResult["DISPLAY_PROPERTIES"]["SPEAKER_POSIT"]["DISPLAY_VALUE"]?> </p>
                                </div>
                            </div>                      
                        </div>
                    </div>    
                   <?$APPLICATION->IncludeComponent(
					"codingart:main.feedback", 
					"event", 
					array(
						"COMPONENT_TEMPLATE" => "contact",
						"USE_CAPTCHA" => "Y",
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"EMAIL_TO" => "info@codingart.ru",
						"REQUIRED_FIELDS" => array(
							0 => "NAME",
							1 => "MESSAGE",
						),
						"EVENT_MESSAGE_ID" => array(
							0 => "7",
						)
					),
					false
				);?>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Event Details End -->