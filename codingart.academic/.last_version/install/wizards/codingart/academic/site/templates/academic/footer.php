<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<!-- Subscribe Start -->
<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback", 
	"newsletter", 
	array(
		"COMPONENT_TEMPLATE" => "newsletter",
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => "Спасибо Вам за подписку на нашу рассылку!",
		"EMAIL_TO" => "info@codingart.ru",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		)
	),
	false
);?>
<!-- Subscribe End -->
<!-- Footer Start -->
        <footer class="footer-area">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <a href="index.html">
                                        <?
                                        $props = CIBlockElement::GetProperty($GLOBALS["codingart_block_id"]["general_id"], $GLOBALS["codingart_block_id"]["element_id"], "sort", "asc", array("CODE" => "LOGO"));
                                        if ($ar_props = $props->GetNext()){   
                                            $prop = $ar_props['VALUE'];
                                            $file = CFile::GetFileArray($prop);
                                            $LOGO_SRC = $file['SRC'];}
                                        if($LOGO_SRC != null):?>
                                        <img  src="<?=$LOGO_SRC?>" style="height: 46px;" alt="eduhome">
                                        <?endif;?>
                                    </a>
                                </div>
                                <p><?$APPLICATION->IncludeFile(
                                SITE_DIR."include/main/slogan.php",
                                array(),
                                array(
                                    "MODE" => "text"));?></p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="//<?echo $GLOBALS["global_info"]["URL_1"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_1"]?>"></i></a></li>
                                        <li><a href="//<?echo $GLOBALS["global_info"]["URL_2"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_2"]?>"></i></a></li>
                                        <li><a href="//<?echo $GLOBALS["global_info"]["URL_3"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_3"]?>"></i></a></li>
                                        <li><a href="//<?echo $GLOBALS["global_info"]["URL_4"]?>"><i class="<?echo $GLOBALS["global_info"]["ICON_4"]?>"></i></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12"></div>
						<div class="col-md-2 col-sm-6 col-xs-12">
							<?$APPLICATION->IncludeComponent("codingart:menu", "bot", Array(
		
								),
								false
							);?>
						</div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3><?$APPLICATION->IncludeFile(
            SITE_DIR."include/main/contactus.php",
            array(),
            array(
                "MODE" => "text"));?></h3>
                                <p><?echo $GLOBALS["global_info"]["ADRESS"]?></p>
                                <p><?echo $GLOBALS["global_info"]["PHONE"]?><br><?echo $GLOBALS["global_info"]["PHONE_2"]?></p>
                                <p><?echo $GLOBALS["global_info"]["MAIL"]?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <?$APPLICATION->IncludeFile(
            SITE_DIR."include/main/copyright.php",
            array(),
            array(
                "MODE" => "text"));?>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>
        <!-- Footer End -->
        <?
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery-1.12.0.min.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.meanmenu.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.magnific-popup.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/ajax-mail.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-2.8.3.min.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.maskedinput.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.mb.YTPlayer.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.nicescroll.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/plugins.js');
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');
        ?>
		<script type="text/javascript">
		jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ) {
      this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  }
};</script>
		<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/admin_panels.php");?>
    </body>
</html>