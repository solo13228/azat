<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><section class="page-content">
			<div class="container">
				<div class="mdp-map">
					<?$APPLICATION->IncludeComponent("itproduce:map.yandex.view", "map", Array(
	"API_KEY" => "",	// Ключ API
		"CONTROLS" => array(	// Элементы управления
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.78413199436947;s:10:\"yandex_lon\";d:49.11741221240644;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:49.118957164799;s:3:\"LAT\";d:55.78531695581;s:4:\"TEXT\";s:13:\"Shelly School\";}}}",	// Данные, выводимые на карте
		"MAP_HEIGHT" => "460",	// Высота карты
		"MAP_ID" => "",	// Идентификатор карты
		"MAP_WIDTH" => "1170",	// Ширина карты
		"OPTIONS" => array(	// Настройки
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
								</div><!--mdp-map end-->
								<div class="mdp-contact">
									<div class="row">
										<div class="col-lg-8 col-md-7">
											<?$APPLICATION->IncludeComponent(
	"itproduce:main.feedback",
	"contact",
	array(
		"EMAIL_TO" => "info@itproduce.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение отправлено.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "contact"
	),
	false
);?>
						</div>
						<div class="col-lg-4 col-md-5">
							<div class="mdp-our-contacts">
								<h3><?=GetMessage("SITE_OURCONT")?></h3>
								<ul>
									<li>
										<div class="d-flex flex-wrap">
											<div class="icon-v">
												<i class="fa fa-phone"></i>
											</div>
											<div class="dd-cont">
												<h4><?=GetMessage("SITE_PHONE")?></h4>
												<span><?echo $GLOBALS["global_info"]["PHONE"]?></span>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex flex-wrap">
											<div class="icon-v">
												<i class="fa fa-clock "></i>
											</div>
											<div class="dd-cont">
												<h4><?=GetMessage("SITE_WTIME")?></h4>
												<span><?echo $GLOBALS["global_info"]["WORK_HOURS"]?></span>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex flex-wrap">
											<div class="icon-v">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="dd-cont">
												<h4><?=GetMessage("SITE_ADDRESS")?></h4>
												<span><?echo $GLOBALS["global_info"]["ADRESS"]?></span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>