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
global $arItemGeneral;
?>


<script type="text/javascript">

	this_id = 'bx_1847241719_<?=$arResult['SECTION']['ID']?>';
	while(this_id){ 
	console.log(this_id);
		$('#'+this_id).children('ul').addClass('active');
		this_id = $('#'+this_id).parent('ul').parent('li').attr('id');	
	}	

</script>
<?
	$name = $arResult['NAME'];
	$url = $arResult['DETAIL_PAGE_URL'];
	$img = CFile::GetPath($arResult["PREVIEW_PICTURE"]);
	$arItem = $arResult['PROPERTIES'];

	$fotm_online = $arItem['SERVICES_FORM_ONLINE']['VALUE'];
	$sale_price = $arItem['SERVICES_SALE_PRICE']['VALUE'];
	$spec_all = $arItem['SERVICES_SPEC']['VALUE'];
	if($arItem['SERVICES_DESC_MAIN']['VALUE'])
	$desc_main = htmlspecialcharsBack($arItem['SERVICES_DESC_MAIN']['VALUE']['TEXT']);
	$desc_title = $arItem['SERVICES_DESC_TITLE']['VALUE'];
	if($arItem['SERVICES_DESC_TEXT']['VALUE'])
	$desc_text = htmlspecialcharsBack($arItem['SERVICES_DESC_TEXT']['VALUE']['TEXT']);
	if($arItem['SERVICES_TEXT_CITAT']['VALUE'])
	$text_citat = htmlspecialcharsBack($arItem['SERVICES_TEXT_CITAT']['VALUE']['TEXT']);
	$price_all = $arItem['SERVICES_PRICE']['VALUE'];
	$vopros_all = $arItem['SERVICES_VOPROS']['VALUE'];
	$reviews_all = $arItem['SERVICES_REVIEWS']['VALUE'];
    ?>

   <?php
$number = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31

?>
<h3 class="title_h1">Акции</h3>


   <?if($sale_price){?>

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
		//document.getElementById("countdown").className = "hidden";
      clearInterval(timeinterval);
      return true;
    }

    /*daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);*/

    $("#"+id+" .day .countdown-time").html(t.days);
    $("#"+id+" .hour .countdown-time").html(("0" + t.hours).slice(-2));
    $("#"+id+" .min .countdown-time").html(("0" + t.minutes).slice(-2));
   
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
</script>


<div class="sale-one-carousel owl-carousel owl-theme  sale_price mb-4">
	<?
	$mun_item=0;
	foreach ($sale_price as $elm_id) {
		$res = CIBlockElement::GetByID($elm_id);
		while ($element = $res->GetNextElement()) {
		    $field= $element->GetFields();   
		   	$prop = $element->GetProperties();
		   	$sp_title = $field['NAME'];
		   	$sp_img = CFile::GetPath($field["PREVIEW_PICTURE"]);
		   	$sp_url = $field['DETAIL_PAGE_URL'];
		   	$sp_desc = $field['PREVIEW_TEXT'];
			$data_l = date("M d Y H:i:s", makeTimeStamp($field["ACTIVE_TO"]));
		 	$mun_item++;
			?>
			<div class="services-block-three col-lg-12 col-md-12 col-sm-12 m-0">
				<div class="inner-box row p-lg-2 p-md-2 p-3 m-lg-0 m-md-0 mx-0 mb-2">
					<div class="image col-4 p-0">
							<a href="<?=$sp_url;?>">

									<img src="<?=$sp_img;?>" alt="<?=$sp_title;?>">

							</a>
					</div>
					<div class="lower-content col-8 p-0 ">
						<h4 class="mb-2 mt-1 ml-lg-4 ml-md-4 text-lg-left text-md-left text-sm-center   "><a href="<?=$sp_url;?>"><?=$sp_title;?></a></h4>
						<span class="ml-lg-4 ml-md-4 mx-sm-3 text-lg-left text-md-left text-sm-center d-block"> <?=GetMessage('SALE_END')?>: </span>
						<div class="timer-box ml-lg-4 ml-md-4 mx-sm-3 text-lg-left text-md-left text-sm-center   "> 
							<div id="coun<?=$mun_item?>" class="timer row mt-0 text-center"> 
								<div class="day col"><span class="countdown-time">0</span><span class="children-text"><?=GetMessage('TIMER_DAY')?></span></div>
								<div class="hour col"><span class="countdown-time">0</span><span class="children-text"><?=GetMessage('TIMER_HOUR')?></span></div>
								<div class="min col"><span class="countdown-time">0</span><span class="children-text"><?=GetMessage('TIMER_MIN')?></span></div>
							</div>
						
						</div>
						<?global $arItemGeneral;?>
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
								"FROM_TEMP_LIST" => "servisec",
								"RESULT_NAME" => $sp_title
							),
							false
						);?>
						

						<div class="d-none">
								<script type="text/javascript">
									//var deadline = "January 01 2018 00:00:00 GMT+0300"; //for Ukraine
									/*var deadline = new Date(Date.parse(new Date()) + 1<?=$mun_item?> * 1<?=$mun_item?> * <?=$mun_item?>0 * <?=$mun_item?>0 * 1000);// for endless timer */
var deadline = "<?=$data_l?>";
								initializeClock("coun<?=$mun_item?>", deadline); 
								</script>
						</div>
						
					</div>
				</div>
			</div>
					
		<?}
	}?>	
</div>
<?}?>


<div id="tab-services-mob" class="tab tab-services tab-services-mob accordion-tab d-none">
<div data-tab="tab_1" class="row m-0 col-12  accordion-tab-head active">
	<span class="target-tab"></span>
	<div class="col-md-11 col-10"><b><?=GetMessage('TAB_DESC')?></b></div>
	<div class="accordion-tab-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
</div>
<div data-tab="tab_1" class="accordion-tab-body col-12 mt-3 ">

	<?if($arResult["PREVIEW_PICTURE"]){?>
		<div class="mb-4 img-box">
			<img
				border="0"
				src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
				width="100%"
				height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
				id="image_<?=$arResult["PREVIEW_PICTURE"]["ID"]?>"
				style="display:block;cursor:pointer;cursor: hand;"
			/>
		</div>
	<?}?>
		<p class="mb-4 desc_main"><?=$desc_main?>	</p>	
		<h3 class="mb-4 desc_title"><?=$desc_title?></h3>		
		<p class="mb-4 desc_text"><?=$desc_text?>	</p>	
		<div class=" text_citat row ml-0 my-5 d-none">
			<i class="col-2 icon icon-quote1" lvl_data="1"></i>
			<b class="col-10 text font-italic font-weight-bold"><?=$text_citat?></b>
		</div>	
		
</div>	
<?if($price_all){?>
<div data-tab="tab_2" class="row m-0 col-12  accordion-tab-head">
	<div class="col-md-11 col-10"><b><?=GetMessage('TAB_PRICE')?></b></div>
	<span class="target-tab"></span>
	<div class="accordion-tab-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
</div>
<div data-tab="tab_2" class="accordion-tab-body col-12 mt-3 d-none">	
	<div class="row m-0 services-price price-box accordion">
		<?foreach ($price_all as $elm_id) {
			$res = CIBlockElement::GetByID($elm_id);
			while ($element = $res->GetNextElement()) {
			    $field = $element->GetFields();   
			   	$prop = $element->GetProperties();

			   	$title = $field['NAME'];
			   	$price = $prop['PRICE']['VALUE'];
			   	if($prop['DESC']['VALUE'])
			  	$desc = $prop['DESC']['VALUE']['TEXT'];?>

			  	<div class="row m-0 col-12 item-price accordion-head">
			  		<div class="price-title col-6" style="align-items: center;  display: grid;"><b><?=$title?></b></div>
			  		<div class="price-value col-2 d-flex align-items-center "><?if($price){?><?print_r($price)?> <?=GetMessage('RUB')?><?}?></div>
			  		<div class="price-btn col-3 ">
			  			<a  class="btn" data-toggle="modal" data-target="#modal-sing-online" onclick="modal_sing_content('<?=$title?>')"><?=GetMessage('BTN_ONLINE')?></a>
			  		</div>

			  			
			  		<div class="accordion-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
					<div class="accordion-body price-desc col-12 mt-3 d-none"><?=$desc?></div>	

			  	</div>
			<?}
		}?>
	</div>
</div>
<?}?>
<?if($vopros_all){?>
<div data-tab="tab_3" class="row m-0 col-12  accordion-tab-head">
	<div class="col-md-11 col-10"><b><?=GetMessage('TAB_QUEST')?></b></div>
	<span class="target-tab"></span>
	<div class="accordion-tab-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
</div>	
<div data-tab="tab_3" class="accordion-tab-body col-12 mt-3 d-none">

		
		<div class="row m-0 question question-box accordion">
			<?foreach ($vopros_all as $elm_id) {
				$res = CIBlockElement::GetByID($elm_id);
				while ($element = $res->GetNextElement()) {
				    $field = $element->GetFields();   
				   	$prop = $element->GetProperties();

				   	$title = $field['NAME'];
				   	if($prop['ANSWER']['VALUE'])
				  	$desc = $prop['ANSWER']['VALUE']['TEXT'];?>

				  	<div class="row m-0 col-12 accordion-head">
				  		<div class="question-title col-12"><b><?=$title?></b>
				  			<div class="accordion-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
				  		</div>
						<div class="accordion-body col-12 mt-3 d-none"><?=$desc?></div>						  		
				  	</div>
				<?}
			}?>
		</div>

</div>	
<?}?>
<?if($reviews_all){?>
<div data-tab="tab_4" class="row m-0 col-12  accordion-tab-head">
	<div class="col-md-11 col-10"><b><?=GetMessage('TAB_REVIEWS')?></b></div>
	<span class="target-tab"></span>
	<div class="accordion-tab-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
</div>
<div data-tab="tab_4" class="accordion-tab-body col-12 mt-3 d-none">
	<!-- Testimonial Section --> 
	<div class="row m-0 reviews reviews-box accordion">
		<?foreach ($reviews_all as $elm_id) {
			$res = CIBlockElement::GetByID($elm_id);
			while ($element = $res->GetNextElement()) {
			    $field = $element->GetFields();   
			   	$prop = $element->GetProperties();

				$title = $field['NAME'];
				$img = CFile::GetPath($field["PREVIEW_PICTURE"]);	
				$text = $field['PREVIEW_TEXT'];
				$name_detal = $prop['REVIEWS_NAME_DETAL']['VALUE'];

			  	?>

			  	<div class="row p-0 m-0 col-12 accordion-head">
			  		<div class="col-2 p-0 accordion-img">
			  			<img src="<?=$img?>">
			  		</div>
			  		<div class="col-10 pl-0 py-4 body">
				  		<div class="reviews-title col-12 row m-0">
				  			<b class="col-8 pl-0"><?=$title?></b>
				  			<div class="col-lg-3 col-4 stars text-right">
					  			<i style="color:#000;" class="hover icon icon-star2" lvl_data="1"></i>
					  			<i style="color:#000;" class=" icon icon-star2" lvl_data="2"></i>
					  			<i style="color:#000;" class=" icon icon-star2" lvl_data="3"></i>
					  			<i style="color:#000;" class=" icon icon-star2" lvl_data="4"></i>
					  			<i style="color:#000;" class=" icon icon-star2" lvl_data="5"></i>
					  		</div>
				  		</div>
				  		<div class="name_detal col-12"><?=$name_detal?></div>
						<div class="accordion-body-1 col-12 mt-3">
							<?=leng_text($text, 100, "...");?>
						</div>
						<div class="accordion-body-2 col-12 mt-3 d-none">
							<?=$text;?>
						</div>								  		
					</div>
					<div class="accordion-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
			  	</div>
			<?}
		}?>
	</div>
</div>
<?}?>
</div>
<div id="tab-services" class="tab tab-services ">
	<div class="row btn-box px-2 mb-4">
		<div item-data="1" class="col-3 item item-1 active">
			<?=GetMessage('TAB_DESC')?>
		</div>	
		<?if($price_all){?>
		<div item-data="2" class="col-3 item item-2">
			<?=GetMessage('TAB_PRICE')?>
		</div>	
		<?}?>
		<?if($vopros_all){?>
		<div item-data="3" class="col-3 item item-3">
			<?=GetMessage('TAB_QUEST')?>
		</div>
		<?}?>
		<?if($reviews_all){?>
		<div item-data="4" class="col-3 item item-4">
			<?=GetMessage('TAB_REVIEWS')?>
		</div>
		<?}?>
	</div>
	<div class="row m-0 info-block-box">
		<div block-data="1" class="col-12 p-0 item item-1 active">
			
			<?/*if(is_array($arResult["SECTION"])):?>
				<a href="<?=$arResult["SECTION"]["SECTION_PAGE_URL"]?>"><?=GetMessage("CATALOG_BACK")?></a><br> 
			<?endif*/?>
			<?if($arResult["DETAIL_PICTURE"]){?>
				<div class="mb-4 img-box">
					<img
						border="0"
						src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
						width="100%"
						height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
						title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
						id="image_<?=$arResult["DETAIL_PICTURE"]["ID"]?>"
						style="display:block;cursor:pointer;cursor: hand;"
					/>
				</div>
			<?}?>
				<p class="mb-4 desc_main"><?=$desc_main?>	</p>	
				<h3 class="mb-4 desc_title"><?=$desc_title?></h3>	
				<p class="mb-4 desc_text"><?=$desc_text?>	</p>	
				<div class=" text_citat row ml-0 my-5 d-none">
					<i class="col-2 icon icon-quote1" lvl_data="1"></i>
					<b class="col-10 text font-italic font-weight-bold"><?=$text_citat?></b>
				</div>	
				

		

		</div>	
		<div block-data="2" class="col-12 p-0 item item-2 d-none">
		
			<div class="row m-0 services-price price-box accordion">
				<?foreach ($price_all as $elm_id) {
					$res = CIBlockElement::GetByID($elm_id);
					while ($element = $res->GetNextElement()) {
					    $field = $element->GetFields();   
					   	$prop = $element->GetProperties();

					   	$title = $field['NAME'];
					   	$price = $prop['PRICE']['VALUE'];
					   	if($prop['DESC']['VALUE'])
					  	$desc = $prop['DESC']['VALUE']['TEXT'];?>

					  	<div class="row m-0 col-12 item-price accordion-head">
					  		<div class="price-title col-6" style="align-items: center;  display: grid;"><b><?=$title?></b></div>
					  		<div class="price-value col-2 d-flex align-items-center "><?if($price){?><? print_r($price)?> <?=GetMessage('RUB')?><?}?></div>
					  		<div class="price-btn col-3 ">
					  			<a  class="btn" data-toggle="modal" data-target="#modal-sing-online" onclick="modal_sing_content('<?=$title?>')"><?=GetMessage('BTN_ONLINE')?></a>
					  		</div>

					  			
					  		<div class="accordion-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
							<div class="accordion-body price-desc col-12 mt-3 d-none"><?=$desc?></div>	

					  	</div>
					<?}
				}?>
			</div>
			
		</div>	
		<div block-data="3" class="col-12 p-0 item item-3 d-none">
			
			<div class="row m-0 question question-box accordion">
				<?foreach ($vopros_all as $elm_id) {
					$res = CIBlockElement::GetByID($elm_id);
					while ($element = $res->GetNextElement()) {
					    $field = $element->GetFields();   
					   	$prop = $element->GetProperties();

					   	$title = $field['NAME'];
					   	if($prop['ANSWER']['VALUE'])
					  	$desc = $prop['ANSWER']['VALUE']['TEXT'];?>

					  	<div class="row m-0 col-12 accordion-head">
					  		<div class="question-title col-12"><b><?=$title?></b>
					  			<div class="accordion-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
					  		</div>
							<div class="accordion-body col-12 mt-3 d-none"><?=htmlspecialcharsBack($desc)?></div>						  		
					  	</div>
					<?}
				}?>
			</div>
		</div>
		<div block-data="4" class="col-12 p-0 item item-4 d-none">
			
			<!-- Testimonial Section --> 
			<div class="row m-0 reviews reviews-box accordion">
				<?foreach ($reviews_all as $elm_id) {
					$res = CIBlockElement::GetByID($elm_id);
					while ($element = $res->GetNextElement()) {
					    $field = $element->GetFields();   
					   	$prop = $element->GetProperties();

						$title = $field['NAME'];
						$img = CFile::GetPath($field["PREVIEW_PICTURE"]);	
						$text = $field['PREVIEW_TEXT'];
						$name_detal = $prop['REVIEWS_NAME_DETAL']['VALUE'];

					  	?>

					  	<div class="row p-0 m-0 col-12 accordion-head">
					  		<div class="col-2 p-0 accordion-img">
					  			<img src="<?=$img?>">
					  		</div>
					  		<div class="col-10 pl-0 py-4 body">
						  		<div class="reviews-title col-12 row m-0">
						  			<b class="col-8 pl-0"><?=$title?></b>
						  			<div class="col-lg-3 col-4 stars text-right">
							  			<i style="color:#000;" class="hover icon icon-star2" lvl_data="1"></i>
							  			<i style="color:#000;" class=" icon icon-star2" lvl_data="2"></i>
							  			<i style="color:#000;" class=" icon icon-star2" lvl_data="3"></i>
							  			<i style="color:#000;" class=" icon icon-star2" lvl_data="4"></i>
							  			<i style="color:#000;" class=" icon icon-star2" lvl_data="5"></i>
							  		</div>
						  		</div>
						  		<div class="name_detal col-12"><?=$name_detal?></div>
								<div class="accordion-body-1 col-12 mt-3">
									<?=leng_text($text, 100, "...");?>
								</div>
								<div class="accordion-body-2 col-12 mt-3 d-none">
									<?=$text;?>
								</div>								  		
							</div>
							<div class="accordion-arrow col-1"><i style="" class="icon icon-down-arrow2"></i></div>
					  	</div>
					<?}
				}?>
			</div>
		</div>
	</div>
</div>
<?global $arItemGeneral;?>
<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2",
	"form_6",
	Array(
		"COMPONENT_TEMPLATE" => "form_5",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_EMAIL" => "test@test.ru",
		"DISPLAY_EMAIL_FROM" => "inf@codingart.ru",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"PHONE",),
		"USE_CAPTCHA" => "Y",
		"MSG_TITLE" => $arResult['NAME']
	)
	
);?>
<section class="team-section p-0">
	
	<div class="container p-0">
		 <!-- Sec Title -->
		<div class="section-title mb-2">
			<h3 class="mt-2">
				Специалисты
			</h3>
		</div>
	<div class="team-carousel-services owl-carousel owl-theme">
	<?
	$i=0;
	foreach ($spec_all as $elm_id) {

		$res = CIBlockElement::GetByID($elm_id);
		while ($element = $res->GetNextElement()) {
		    $field= $element->GetFields();   
		   $prop = $element->GetProperties();?>
			<div class="team-block">
			 <!-- Team Block -->
		
				<div class="inner-box">
					<div class="image" style="background: url(<?=CFile::GetPath($field["PREVIEW_PICTURE"]);?>)">
						
						
						<a class="bg-link" href="<?=$field["DETAIL_PAGE_URL"]?>"></a>
					</div>
					<div class="lower-content">
						<div class="icon-box">
	 						<span class="icon">
											<?if($prop['SPEC_VK']['VALUE']){?><a href="<?=$prop['SPEC_VK']['VALUE'];?>" class="icon"><img src="/bitrix/templates/juristic2/assets/images/vk.png" class="mx-auto mb-4 d-block"></a><span class="social-name"></span><?}?>
										</span>
										<span class="icon">
											<?if($prop['SPEC_FB']['VALUE']){?><a href="<?=$prop['SPEC_FB']['VALUE'];?>" class="icon"><img src="/bitrix/templates/juristic2/assets/images/fb.png" class="mx-auto mb-4 d-block"></a><span class="social-name"></span><?}?>
										</span>
										<span class="icon">
											<?if($prop['SPEC_INST']['VALUE']){?><a href="<?=$prop['SPEC_INST']['VALUE'];?>" class="icon"><img src="/bitrix/templates/juristic2/assets/images/ins.png" class="mx-auto mb-4 d-block"></a><span class="social-name"></span><?}?>
										</span>
						</div>
						<h3><a href="<?=$field["DETAIL_PAGE_URL"]?>"><?=$field['NAME'];?></a></h3>
						<p class="designation">
							<?=$prop['SPEC_SPESHEL']['VALUE'];?>
						</p>
						
					</div>
				</div>
			</div>

		<?}
		$i++;
	}?>	
	</div>
	</div>
</section>








