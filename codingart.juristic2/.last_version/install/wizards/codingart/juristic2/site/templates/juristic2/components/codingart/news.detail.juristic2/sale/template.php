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
<style>.sec.col {
    width: 30%;
    margin: 0px 5px !important;
}
    /* border: 1px solid rgba(102, 102, 102, 0.4); */
    /* border-top: 1px solid #d2d2d2;
</style>
<script type="text/javascript">
							function getTimeRemaining(endtime) {
							  var t = Date.parse(endtime) - Date.parse(new Date());
							  var seconds = Math.floor((t / 1000) % 60);
							  var minutes = Math.floor((t / 1000 / 60) % 60);
							  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
							  var days = Math.floor(t / (1000 * 60 * 60 * 24));
							  return {
							    total: t,
							    days: days,
							    hours: hours,
							    minutes: minutes,
							    seconds: seconds
							  };
							}

							function initializeClock(id, endtime) {
							  var clock = document.getElementById(id);
							  var daysSpan = clock.querySelector(".day");
							  var hoursSpan = clock.querySelector(".hour");
							  var minutesSpan = clock.querySelector(".min");

							  function updateClock() {
							    var t = getTimeRemaining(endtime);

							    if (t.total <= 0) {
							      document.getElementById("countdown").className = "hidden";
							      clearInterval(timeinterval);
							      return true;
							    }

							    /*daysSpan.innerHTML = t.days;
							    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
							    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);*/

							     $("#"+id+" .day").html(t.days);
    $("#"+id+" .hour").html(("0" + t.hours).slice(-2));
    $("#"+id+" .min").html(("0" + t.minutes).slice(-2));
    $("#"+id+" .sec").html(("0" + t.seconds).slice(-2));

							  }

							  updateClock();
							  var timeinterval = setInterval(updateClock, 1000);
							}
							</script>
<? $mun_item = 1;
						$data_now = date("d.m.Y H:i:s");
					  $time_now = date("H:i:s");
					  $data_now_1 = explode(".", 	$data_now);
						$data_now_2 = explode(" ", $data_now_1[2]);
						$time_now_3 = explode(":", $time_now);

					  $data_sale = $arItem['ACTIVE_TO'];
						
					  $data_sale_1 = explode(".", $data_sale);
						$data_sale_2 = explode(" ", $data_sale_1[2]);
						$time_sale_3 = explode(":", $data_sale_2[1]);

						$dateFrom = $data_sale_2[0]."-".$data_sale_1[1]."-".$data_sale_1[0]." ".$time_now_3[0].":".$time_now_3[1].":".$time_now_3[2];
						$dateTo = $data_now_2[0]."-".$data_now_1[1]."-".$data_now_1[0]." ".$time_sale_3[0].":".$time_sale_3[1].":".$time_sale_3[2];
						
						//$datetimeFrom = date(strtotime($arItem['ACTIVE_TO']));
						//$datetimeTo = date('Y.m.d H:i:s');
						$datetimeFrom = DateTime::createFromFormat( 'Y-m-d H:i:s', $dateFrom );
						$datetimeTo = DateTime::createFromFormat( 'Y-m-d H:i:s', $dateTo );
//$number = $data_now->getTimestamp() - $data_sale->getTimestamp();
						/* $number0 = $datetimeTo->diff( $datetimeFrom )->format( "%a" ); # 366 days
						$number1 = $datetimeTo->diff( $datetimeFrom )->format( "%H" ); # 366 days
						$number2 = $datetimeTo->diff( $datetimeFrom )->format( "%i" ); # 366 days
						$number3 = $datetimeTo->diff( $datetimeFrom )->format( "%s" ); # 366 days
						$number = $number0 + $number1 + $number2 + $number3; */
?>

	<? 
	$section_id = $arResult["IBLOCK_SECTION_ID"];
	$name = $arResult["NAME"];
	$name_title = str_replace(" ","-",$arResult["NAME"]);
	$img = $arResult["PREVIEW_PICTURE"]['SRC'];
   	$sp_url = $arResult['DETAIL_PAGE_URL'];
   	$sp_desc = $arResult['DETAIL_TEXT'];
	?>
	<?top_line($name);?>
	<?$APPLICATION->SetTitle($name_title);?>
	<!-- Doctor Single Section -->
	<section class="sale-detail-page py-5">
		<div class="container">
			<div class="row">
				
				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="images">
							<img width="100%" src="<?=$img?>" alt="" />
						</div>
					</div>
				</div>
				<div class="timer-box" style="display: none"> 
										<div class="text"><?=GetMessage('SALE_END')?>:</div>
										<div id="coun<?=$mun_item?>" class="timer row text-center"> 
											<div class="day countdown-time col">0</div>
											<div class="hour countdown-time col">0</div>
											<div class="min countdown-time col">0</div>
										</div>
										<div class="timer-text row text-center"> 
											<div class="day col"><?=GetMessage('TIMER_DAY')?></div>
											<div class="hour col"><?=GetMessage('TIMER_HOUR')?></div>
											<div class="min col"><?=GetMessage('TIMER_MIN')?></div>
										</div>
									</div>
<?//timer_custom();?>
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="mb-4"><?=$name_title?></h1>
						<div class="desc mb-4">
							<?=$sp_desc?>
						</div>
						<span class=""><b> <?=GetMessage('SALE_END')?>:</b> </span>
						<div class="timer-box pt-2"> 
							<div id="moun<?=$mun_item?>" class="timer pl-0 col-lg-7 col-md-7 col-12 row mt-0 text-center"> 
								<div class="day col"><span class="countdown-time">0</span></div>
								<div class="hour col"><span class="countdown-time">0</span></div>
								<div class="min col"><span class="countdown-time">0</span></div>
								<div class="sec col"><span class="countdown-time">0</span></div>
							</div>
							<div class="timer-text row text-center" style="margin: 0px 360px 0px 1px;"> 
											<div class="day col" style=" border: none; border-top: none;"><?=GetMessage('TIMER_DAY')?></div>
											<div class="hour col" style=" border: none; border-top: none;"><?=GetMessage('TIMER_HOUR')?></div>
											<div class="min col" style=" border: none; border-top: none;"><?=GetMessage('TIMER_MIN')?></div>
											<div class="min col" style=" border: none; border-top: none;">секунд</div>
										</div>
						</div>
		<? global $arItemGeneral; ?>
						<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_1", 
	array(
		"COMPONENT_TEMPLATE" => "form_1",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => "Забронировать",
		"FROM_TEMP_LIST" => "detal",
		"RESULT_NAME" => $name,
	),
	false
);?>
						<div class="d-none 7777">
								<?=$number?>
								<?=$number0?>
								<?=$number1?>
								<?=$number2?>
								<?=$number3?>
								<?$data_l = date("M d Y H:i:s", makeTimeStamp($arResult["ACTIVE_TO"]));?>
								<?=$data_l;?>
							<?//if($number>0){?>
								<script type="text/javascript">
									//var deadline = "January 01 2018 00:00:00 GMT+0300"; //for Ukraine
								/* var deadline = new Date(Date.parse(new Date()) + <?=(($number0 * 24 * 60 * 60 * 1000) + ($number1 * 60 * 60 * 1000) + ($number2 * 60 * 1000) + ($number3 * 1000))?>);  // * 24 * 60 * 60 * 1000);// for endless timer */
								var deadline = "<?=$data_l?>";
								initializeClock("coun<?=$mun_item?>", deadline); 
								initializeClock("moun<?=$mun_item?>", deadline); 
								</script>
						<?//}?>
					</div>

				</div>

			</div>
		</div>
		</div>
	</section>