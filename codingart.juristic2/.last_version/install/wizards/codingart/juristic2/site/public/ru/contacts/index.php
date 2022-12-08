<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?>
 <section class="contact-page-section pt-5" style="padding: 0 !important">
<div class="pattern-layer" style="">
</div>

<div class="container">
	<div class="row">
		 <!-- Info Column -->
		<div class="info-column col-lg-7 col-md-12 col-sm-12">
			<div class="inner-column">
				 <!-- Sec Title -->
				<div class="section-title">
					<h2><?=$contacts_title?></h2>
					<p class="text">
						
					</p>
				</div>
				<div class="row">
					 <!-- Column -->
					<div class="column col-lg-6 col-md-6 col-sm-12">
						<div class="contact-address">
							<div class="inner">
								
								<?$APPLICATION->IncludeComponent(
								"codingart:main.include.juristic2", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"EDIT_TEMPLATE" => "",
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/contacts_adres.php",
									"GEN_TEXT" => $general_adres	
								),
								false
							);?>
								
							</div>
						</div>
					</div>
					 <!-- Column -->
					<div class="column col-lg-6 col-md-6 col-sm-12">
						<div class="contact-address">
							<div class="inner">
								
								<?$APPLICATION->IncludeComponent(
								"codingart:main.include.juristic2", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"EDIT_TEMPLATE" => "",
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/contacts_phone.php",
									"GEN_TEXT" => $general_phone
								),
								false
							);?>
								
							</div>
						</div>
					</div>
					 <!-- Column -->
					<div class="column col-lg-6 col-md-6 col-sm-12">
						<div class="contact-address">
							<div class="inner">
								
								<?$APPLICATION->IncludeComponent(
								"codingart:main.include.juristic2", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"EDIT_TEMPLATE" => "",
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/contacts_time_work.php",
									"GEN_TEXT" => $general_time_work
								),
								false
							);?>
								
							</div>
						</div>
					</div>
					 <!-- Column -->
					<div class="column col-lg-6 col-md-6 col-sm-12">
						<div class="contact-address">
							<div class="inner">
								
								<?$APPLICATION->IncludeComponent(
								"codingart:main.include.juristic2", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"EDIT_TEMPLATE" => "",
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/contacts_mail.php",
									"GEN_TEXT" => $mail
								),
								false
							);?>
								
							</div>
						</div>
					</div>
					<?
					$general_vk = $arItemGeneral['PROPERTIES']['GENERAL_VK']['VALUE'];
					$general_fb = $arItemGeneral['PROPERTIES']['GENERAL_FB']['VALUE'];
					$general_inst = $arItemGeneral['PROPERTIES']['GENERAL_INST']['VALUE'];
					$general_vk_name = $arItemGeneral['PROPERTIES']['GENERAL_VK']['NAME'];
					$general_fb_name = $arItemGeneral['PROPERTIES']['GENERAL_FB']['NAME'];
					$general_inst_name = $arItemGeneral['PROPERTIES']['GENERAL_INST']['NAME'];
					?>
					<?if(!empty($general_inst)){?>
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<div class="contact-address">
								<div class="inner">
									<a href="<?=$general_inst?>">
										<div class="icon-box">
											<span class="icon icons-instagram2"></span>
										</div>
										<h4><?=$general_inst_name?></h4>
									</a>
								</div>
							</div>
						</div>
					<?}?>
					<?if(!empty($general_fb)){?>
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<div class="contact-address">
								<div class="inner">
									<a href="<?=$general_fb?>">
										<div class="icon-box">
											<span class="icon icons-facebook2"></span>
										</div>
										<h4><?=$general_fb_name?></h4>
									</a>
								</div>
							</div>
						</div>
					<?}?>
					<?if(!empty($general_vk)){?>
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<div class="contact-address">
								<div class="inner">
									<a href="<?=$general_vk?>">
										<div class="icon-box">
											<span class="icon icons-vk2"></span>
										</div>
										<h4><?=$general_vk_name?></h4>
									</a>
								</div>
							</div>
						</div>
					<?}?>
				</div>
			</div>
		</div>
		<div class="form-column col-lg-5 col-md-12 col-sm-12">
			<?global $arItemGeneral;?>
			<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_3", 
	array(
		"COMPONENT_TEMPLATE" => "form_3",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => "Напишите нам"
	),
	false
);?>
		</div>
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.81423118716863;s:10:\"yandex_lon\";d:49.21530055056301;s:12:\"yandex_scale\";i:8;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:49.130998447133;s:3:\"LAT\";d:55.7813370679;s:4:\"TEXT\";s:9:\"CodingArt\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "constructor%3A5006cfb50fe740fb05c6428b3ea59a88657a3afaf81a6b121d55673d038168ce",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>