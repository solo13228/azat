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
<!-- Teacher Start -->
<div class="teacher-details-area pt-150 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="teacher-details-img">
                    <img src="<?echo $arResult["DISPLAY_PROPERTIES"]["PHOTO"]["FILE_VALUE"]["SRC"]?>" style="width: 489; height: auto;" alt="teacher">  
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="teacher-details-content ml-50">
                    <h2><? echo $arResult["NAME"] ?></h2>
                    <h5><?echo $arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?></h5>
                    <h4><?=GetMessage("ABOUT")?></h4>
                    <p><?=$arResult["DISPLAY_PROPERTIES"]["DESCR"]["DISPLAY_VALUE"]?> </p>
                    <ul>
                        <li><span><?=GetMessage("DEGREE")?> </span><?=$arResult["DISPLAY_PROPERTIES"]["EDUCATION"]["VALUE"]?></li>
                        <li><span><?=GetMessage("HOBBIES")?> </span><?=$arResult["DISPLAY_PROPERTIES"]["HOBBIES"]["VALUE"]?></li>
                        <li><span><?=GetMessage("FACULTY")?> </span><?=$arResult["DISPLAY_PROPERTIES"]["FACULTY"]["VALUE"]?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="teacher-contact">
                    <h4><?=GetMessage("CINFO")?></h4>
                    <p><span><?=GetMessage("EMAIL")?> </span><?echo $arResult["DISPLAY_PROPERTIES"]["EMAIL"]["VALUE"]?></p>
                    <p><span><?=GetMessage("PHONE")?> </span><?=$arResult["DISPLAY_PROPERTIES"]["PHONE"]["VALUE"]?></p>
                    <p><span><?=GetMessage("SKYPE")?> </span> <?=$arResult["DISPLAY_PROPERTIES"]["SKYPE"]["VALUE"]?></p>
                    <ul>
                        <li><a href="<?echo $arResult["DISPLAY_PROPERTIES"]["SLINK1"]["VALUE"]?>"><i class="<?echo $arResult["DISPLAY_PROPERTIES"]["SLINKICO1"]["VALUE"]?>"></i></a></li>
                        <li><a href="<?echo $arResult["DISPLAY_PROPERTIES"]["SLINK2"]["VALUE"]?>"><i class="<?echo $arResult["DISPLAY_PROPERTIES"]["SLINKICO2"]["VALUE"]?>"></i></a></li>
                        <li><a href="<?echo $arResult["DISPLAY_PROPERTIES"]["SLINK3"]["VALUE"]?>"><i class="<?echo $arResult["DISPLAY_PROPERTIES"]["SLINKICO3"]["VALUE"]?>"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="skill-area">
                    <h4><?=GetMessage("SKILLS")?></h4>
                </div>  
                <div class="skill-wrapper">     
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span><?=GetMessage("LANGUAGE")?></span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: <?=$arResult["DISPLAY_PROPERTIES"]["LANGUAGE"]["VALUE"]?>%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <p class="proc"><?=$arResult["DISPLAY_PROPERTIES"]["TLEADER"]["VALUE"]?>%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span><?=GetMessage("TLEADER")?></span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: <?=$arResult["DISPLAY_PROPERTIES"]["TLEADER"]["VALUE"]?>%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <p class="proc"><?=$arResult["DISPLAY_PROPERTIES"]["TLEADER"]["VALUE"]?>%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span><?=GetMessage("DEVELOP")?></span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: <?=$arResult["DISPLAY_PROPERTIES"]["DEVELOPMENT"]["VALUE"]?>%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <p class="proc"><?=$arResult["DISPLAY_PROPERTIES"]["TLEADER"]["VALUE"]?>%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span><?=GetMessage("DESIGN")?></span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: <?=$arResult["DISPLAY_PROPERTIES"]["DESIGN"]["VALUE"]?>%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <p class="proc"><?=$arResult["DISPLAY_PROPERTIES"]["TLEADER"]["VALUE"]?>%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span><?=GetMessage("INNOVAT")?></span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: <?=$arResult["DISPLAY_PROPERTIES"]["INNOVATION"]["VALUE"]?>%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <p class="proc"><?=$arResult["DISPLAY_PROPERTIES"]["TLEADER"]["VALUE"]?>%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="skill-bar-item">
                                <span><?=GetMessage("COMMUN")?></span>
                                <div class="progress">
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: <?=$arResult["DISPLAY_PROPERTIES"]["COMMUNICATION"]["VALUE"]?>%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="50%" class="progress-bar wow fadeInLeft">
                                        <p class="proc"><?=$arResult["DISPLAY_PROPERTIES"]["TLEADER"]["VALUE"]?>%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>     
            </div>
        </div>
    </div>
</div>
<!-- Teacher End -->