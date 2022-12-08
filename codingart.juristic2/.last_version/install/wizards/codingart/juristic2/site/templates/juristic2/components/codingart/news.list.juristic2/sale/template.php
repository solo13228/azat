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
  var daysSpan = clock.querySelector(".day span");
  var hoursSpan = clock.querySelector(".hour span");
  var minutesSpan = clock.querySelector(".min span");


  function updateClock() {
    var t = getTimeRemaining(endtime);

    if (t.total <= 0) {
      //document.getElementById("countdown").className = "hidden";
      clearInterval(timeinterval);
      return true;
    }

    /*daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);*/

    $("#"+id+" .day span").html(t.days);
    $("#"+id+" .hour span").html(("0" + t.hours).slice(-2));
    $("#"+id+" .min span").html(("0" + t.minutes).slice(-2));
   
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);

}
</script>

<section class="services-page-section sale-section  sale-page-section filters-box">
	<div class="container-fluid p-0">
		<div class="container">
		
		<!--MixitUp Galery-->
        <div class="mixitup-gallery">
            
            <?if($arParams['BASE_MODE'] == 'N'){?>
            <div class="filters text-center clearfix">
            	
            	<ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all"><?=GetMessage('FILTER_ALL')?></li>
                    	<?/*foreach($arResult["ITEMS"] as $arItem):?>
                    		<li class="filter" data-role="button" data-filter=".xray"><?=$arItem['PROPERTIES']['SPEC_SPESHEL']['VALUE'];?></li>
						<?endforeach;*/?>
						<?$IBLOCK_ID = $arResult['ID'];
						$arFilter = Array(
						      'IBLOCK_ID'=>$IBLOCK_ID, 
						      'GLOBAL_ACTIVE'=>'Y');
						$obSection = CIBlockSection::GetTreeList($arFilter);

						while($arCatItem = $obSection->GetNext()){
						   for($i=0;$i<=($arCatItem['DEPTH_LEVEL']-2);$i++)?>
						     <li class="filter" data-role="button" data-filter=".item_<?=$arCatItem['ID'];?>"><?=$arCatItem['NAME'];?></li>
						<?}?>
                </ul> 
            </div>
            <?} else { ?>

            <div class="section-title text-center">
				<h2><?=$arParams['BASE_TITLE']?></h2>
				<p class="text">
					<?=$arParams['BASE_DESC']?>
				</p>
			</div>
			<?}?>
            <div class="filter-list <?if($arParams['BASE_MODE'] == 'Y'){echo 'sale-carousel owl-carousel owl-theme p-0';} else {echo "row";}?>">
            	<?$mun_item = 1; 
				foreach ($arResult["ITEMS"] as  $arItem) { 

						$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
						if($ar_res = $res->GetNext());
						if($ar_res['GLOBAL_ACTIVE']=="Y") {
						
						$section_id = $arItem["IBLOCK_SECTION_ID"];
						$name = $arItem["NAME"];
						$detal_url = $arItem["DETAIL_PAGE_URL"];
						$img = $arItem["PREVIEW_PICTURE"]['SRC'];
						$desc = htmlspecialcharsBack($arItem['PREVIEW_TEXT']);

						$mun_item++;

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
						$number0 = $datetimeTo->diff( $datetimeFrom )->format( '%a' ); # 366 days
						$number1 = $datetimeTo->diff( $datetimeFrom )->format( '%H' ); # 366 days
						$number2 = $datetimeTo->diff( $datetimeFrom )->format( '%i' ); # 366 days
						$number3 = $datetimeTo->diff( $datetimeFrom )->format( '%s' ); # 366 days
						$number = $number0 + $number1 + $number2 + $number3;
						// echo gettype($datetimeFrom)." ".gettype($datetimeTo);
						// echo $datetimeFrom." ".$datetimeTo;
						//$number = $data_sale->diff( $data_now )->format( '%a' ); # 366 days
						//$number = strtotime($data_now) - strtotime($data_sale);
						?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?> 
						
				   		<div  class="services-block-three text-center item-<?=$mun_item?>  <?if($arParams['BASE_MODE'] == 'N'){echo 'team-block all item_'.$section_id.' mix traumatology dental pediatric  col-lg-3 col-md-6 col-sm-12';}?> ">
							<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="inner-box">

								<div class="image">
									<a href="<?=$detal_url?>"><img src="<?=$img?>" alt=""></a>
								</div>
								<h3 class="mb-0"><a href="<?=$detal_url?>"><?=$name?></a></h3>
								<div class="lower-content text-center">
									<div class="icon-box d-none">
										<span class="icon icon-heart1"></span>
									</div>
									<div class="timer-box"> 
										<div class="text"><?=GetMessage('SALE_END')?>:</div>
										<div id="coun<?=$mun_item?>" class="timer row text-center"> 
											<div class="day countdown-time col"><span>0</span><br><?=GetMessage('TIMER_DAY')?></div>
											<div class="hour countdown-time col"><span>0</span><br><?=GetMessage('TIMER_HOUR')?></div>
											<div class="min countdown-time col"><span>0</span><br><?=GetMessage('TIMER_MIN')?></div>
										</div>
										<div class="timer-text row text-center d-none"> 
											<div class="day col"><?=GetMessage('TIMER_DAY')?></div>
											<div class="hour col"><?=GetMessage('TIMER_HOUR')?></div>
											<div class="min col"><?=GetMessage('TIMER_MIN')?></div>
										</div>
									</div>
									<?//timer_custom();?>
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
								"FROM_TEMP_LIST" => "list",
								"RESULT_NAME" => $name
							),
							false
						);?>
									
						<?if($desc){?><a href="<?=$detal_url?>" class="text"><?=$arParams['BASE_BTN_EL_NAME']?></a><?}?>
								</div>
							</div>	
							<div class="d-none">
								<?$data_l = date("M d Y H:i:s", makeTimeStamp($arItem["ACTIVE_TO"]));
								//echo $data_l;?>
								<?=$number?>
								<?=$number0?>
								<?=$number1?>
								<?=$number2?>
								<?=$number3?>
								<?//$ACTIVE_TO=IntVal(makeTimeStamp($arItem['ACTIVE_TO']))?>
								<?//$NOW=IntVal(time())?>
								<?//=IntVal(makeTimeStamp($arResult["ACTIVE_TO"]))-IntVal(time())?>
								<br><?
								$ACTIVE_TO = IntVal(makeTimeStamp($arItem["ACTIVE_TO"]));
								$NOW = IntVal(time());
								$TOTALL = $ACTIVE_TO - $NOW;
								//echo $TOTALL;
								//echo 1637409600 - 1637324989;?>
							<?if($number>0){?>
								<script type="text/javascript">
									//var deadline = "January 01 2018 00:00:00 GMT+0300"; //for Ukraine
								/* var deadline = new Date(Date.parse(new Date()) + <?=(($number0 * 24 * 60 * 60 * 1000) + ($number1 * 60 * 60 * 1000) + ($number2 * 60 * 1000) + ($number3 * 1000))?>);  // * 24 * 60 * 60 * 1000);// for endless timer */
								var deadline = "<?=$data_l?>";
								initializeClock("coun<?=$mun_item?>", deadline); 
								</script>
								<?}?>
						</div>
					</div>

					<?}
				}?>	
		
					
				</div>
				</div>
			</div>
			<?if(($arParams['BASE_BTN_ALL_NAME']) and ($arParams['BASE_BTN_ALL_LINK']) and ($arParams['BASE_MODE']=='Y')){?>
			<div class="col-12 mt-5 text-center">
					<a href="<?=$arParams['BASE_BTN_ALL_LINK']?>" class="btn"><?=$arParams['BASE_BTN_ALL_NAME']?><span class="icon icon-arrow-right"></span></a>
			</div>
			<?}?>
		</div>
	</section>


<section class="services-page-section sale-section d-none">
	<div class="container-fluid">
		<div class="container">
			<div class="section-title text-center">
				<h2><?=$arParams['BASE_TITLE']?></h2>
				<p class="text">
					<?=$arParams['BASE_DESC']?>
				</p>
			</div>
			<div class="row position-relative">
				<div class="pattern-layer-one" style="">
			</div>
				<div class="sale-carousel owl-carousel owl-theme">	
		
				<?$mun_item = 1; 
				if($arItemGeneral['PROPERTIES']['MAIN_SALE_ITEMS']['VALUE']) 
				foreach ($arItemGeneral['PROPERTIES']['MAIN_SALE_ITEMS']['VALUE'] as $elm_id) { 
					$res = CIBlockElement::GetByID($elm_id);
					while ($element = $res->GetNextElement()) {
						$field= $element->GetFields();   
						$prop = $element->GetProperties();
						$sp_title = $field['NAME'];

$sp_title = rtrim(substr(strip_tags($sp_title), 0,80), "");
$sp_title = substr($sp_title, 0, strrpos($sp_title, ' '))."...";

					    $sp_img = CFile::GetPath($field["PREVIEW_PICTURE"]);
					   	$sp_url = $field["DETAIL_PAGE_URL"];
					   	$sp_desc = htmlspecialcharsBack($field['PREVIEW_TEXT']);

					   	$mun_item++;

					   	$data_now = date("d.m.Y");
					   	$time_now = date("H:i:s");
					   	$data_now_1 = explode(".", 	$data_now);
						$data_now_2 = explode(" ", $data_now_1[2]);
						$time_now_3 = explode(":", $time_now);

					   	$data_sale = $field['ACTIVE_TO'];
					   	$data_sale_1 = explode(".", $data_sale);
						$data_sale_2 = explode(" ", $data_sale_1[2]);
						$time_sale_3 = explode(":", $data_sale_2[1]);

						$dateFrom = $data_sale_2[0]."-".$data_sale_1[1]."-".$data_sale_1[0];
						$dateTo = $data_now_2[0]."-".$data_now_1[1]."-".$data_now_1[0];

						$datetimeFrom = DateTime::createFromFormat( 'Y-m-d', $dateFrom );
						$datetimeTo = DateTime::createFromFormat( 'Y-m-d', $dateTo );

						$number = $datetimeFrom->diff( $datetimeTo )->format( '%a' ); # 366 days

		   				?>
				   		<div class="services-block-three text-center item-<?=$mun_item?>">
							<div class="inner-box">

								<div class="image">
									<a href="<?=$sp_url?>"><img src="<?=$sp_img?>" alt=""></a>
								</div>
								<h3 class="mb-0"><a href="<?=$sp_url?>"><?=$sp_title;?></a></h3>
								<div class="lower-content text-center">
									<div class="icon-box d-none">
										<span class="icon icon-heart1"></span>
									</div>
									<div class="timer-box"> 
										
										
										<div class="text"><?=GetMessage('SALE_END')?></div>
										<div id="coun<?=$mun_item?>" class="timer row text-center"> 
											<div class="day countdown-time col"><span>0</span><br><?=GetMessage('TIMER_DAY')?></div>¶
<div class="hour countdown-time col"><span>0</span><br><?=GetMessage('TIMER_HOUR')?></div>
<div class="min countdown-time col"><span>0</span><br><?=GetMessage('TIMER_MIN')?></div>
</div>
<div class="timer-text row text-center d-none">
<div class="day col"><?=GetMessage('TIMER_DAY')?></div>
<div class="hour col"><?=GetMessage('TIMER_HOUR')?></div>
<div class="min col"><?=GetMessage('TIMER_MIN')?></div>
</div>
</div>
									<? global $arItemGeneral; ?>
									<?$APPLICATION->IncludeComponent(
										"codingart:main.feedback.juristic2", 
										"form_1", 
										array(
											"COMPONENT_TEMPLATE" => "form_1",
											"EMAIL_TO" => $arItemGeneral['PROPERTIES']['GENERAL_MAIL']['VALUE'],
											"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
											"OK_TEXT" => "Спасибо, ваше сообщение принято.",
											"REQUIRED_FIELDS" => array(
												0 => "NAME",
												1 => "PHONE",
											),
											"USE_CAPTCHA" => "Y",
											"FORM_TITLE" => "Забронировать",
											"FROM_TEMP_LIST" => "list",
											"RESULT_NAME" => $name,
										),
										false
									);?>
									
									<?if($sp_desc){?><a href="<?=$sp_url?>" class="desc-link"><?=GetMessage('MORE_TEXT')?></a><?}?>
								</div>
							</div>	
							<div class="d-none">
								<?if($number>0){?>
								<script type="text/javascript">
									//var deadline = "January 01 2018 00:00:00 GMT+0300"; //for Ukraine
								var deadline = new Date(Date.parse(new Date()) + <?=$number?> * 24 * 60 * 60 * 1000);// for endless timer
								initializeClock("coun<?=$mun_item?>", deadline); 
								</script>
								<?}?>
							</div>
						</div>

					<?}
				}?>	
				</div>
			</div>
		</div>
	</div>
</section>


