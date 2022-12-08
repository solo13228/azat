<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<?$APPLICATION->IncludeComponent(
	"itproduce:main.feedback",
	"feedback",
	array(
		"EMAIL_TO" => "info@itproduce.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
			1 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "feedback"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
<footer>
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-about">
                        <?
                        $props = CIBlockElement::GetProperty($GLOBALS["itproduce_block_id"]["main_parametrs_id"], $GLOBALS["itproduce_block_id"]["main_settings_element_id"], "sort", "asc", array("CODE" => "LOGO"));
                        if ($ar_props = $props->GetNext()){
                            $prop = $ar_props['VALUE'];
                            $file = CFile::GetFileArray($prop);
                            $LOGO_SRC = $file['SRC'];}
                        if($LOGO_SRC != null):?>
                            <img  src="<?=$LOGO_SRC?>" style="width: 162px;height: 57px;" alt="">
                        <?endif;?>
                        <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/footer/slogan.php",
                                    array(),
                                    array(
                                        "MODE" => "html"));?>
                    </div><!--widget-about end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact">
                        <ul class="contact-add">
                            <li>
                                <div class="contact-info">
                                    <i class="fa fa-phone"></i>
                                    <div class="contact-tt">
                                        <h4><?=GetMessage("SITE_PHONE")?></h4>
                                        <span><?echo $GLOBALS["global_info"]["PHONE"]?></span>
                                    </div>
                                </div><!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info">
                                    <i class="fa fa-clock "></i>
                                    <div class="contact-tt">
                                        <h4><?=GetMessage("SITE_WTIME")?></h4>
                                        <span><?echo $GLOBALS["global_info"]["WORK_HOURS"]?></span>
                                    </div>
                                </div><!--contact-info end-->
                            </li>
                            <li>
                                <div class="contact-info">
                                    <i class="fa fa-map-marker">&nbsp;</i>
                                    <div class="contact-tt">
                                        <h4><?=GetMessage("SITE_ADDRESS")?></h4>
                                        <span><?echo $GLOBALS["global_info"]["ADRESS"]?></span>
                                    </div>
                                </div><!--contact-info end-->
                            </li>
                        </ul>
                    </div><!--widget-contact end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                   <?$APPLICATION->IncludeComponent("itproduce:menu", "botmenu", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                        "ROOT_MENU_TYPE" => "bottom",   // Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                        "MAX_LEVEL" => "1", // Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    ),
                    false
                );?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-iframe">
                        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=ru&amp;q=%D0%9A%D0%B0%D0%B7%D0%B0%D0%BD%D1%8C,%20%D1%83%D0%BB.%20%D0%9F%D1%83%D1%88%D0%BA%D0%B8%D0%BD%D0%B0,%20%D0%B4.1+(Shelly%20School)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div><!--top-footer end-->
        <div class="bottom-footer">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p><?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/footer/copyright.php",
                                    array(),
                                    array(
                                        "MODE" => "text"));?></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <ul class="social-links">
                        <li><a href="<?echo $GLOBALS["global_info"][VK_URL]?>" title=""><i class="fab fa-vk"></i></a></li>
                        <li><a href="<?echo $GLOBALS["global_info"]["YT_URL"]?>" title=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href="<?echo $GLOBALS["global_info"]["INST_URL"]?>" title=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<button class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/jquery.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/isotope.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/html5lightbox.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/slick.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/tweenMax.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/wow.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/scripts.js');
?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/admin_panels.php");?>
</body>

</html>