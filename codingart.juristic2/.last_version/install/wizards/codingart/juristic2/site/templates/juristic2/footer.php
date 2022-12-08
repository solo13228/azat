<?if($result_ip == "Y"){?>
<?
$general_menu_fotter_title = $arItemGeneral['PROPERTIES']['GENERAL_MENU_FOTTER']['VALUE'];

$general_time_work_fotter_title = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_TITLE']['VALUE'];
$general_time_work_fotter_1 = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_1']['VALUE'];
$general_time_work_fotter_2 = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_2']['VALUE'];
$general_time_work_fotter_3 = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_3']['VALUE'];
$general_time_work_fotter_4 = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_4']['VALUE'];
$general_time_work_fotter_5 = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_5']['VALUE'];
$general_time_work_fotter_6 = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_6']['VALUE'];
$general_time_work_fotter_7 = $arItemGeneral['PROPERTIES']['GENERAL_TIME_WORK_FOTTER_7']['VALUE'];

$general_fix_text = $arItemGeneral['PROPERTIES']['GENERAL_FIX_TEXT']['VALUE'];

if($arItemGeneral['PROPERTIES']['GENERAL_COPYRIGHT']['VALUE'])
$general_copyright = htmlspecialcharsBack($arItemGeneral['PROPERTIES']['GENERAL_COPYRIGHT']['VALUE']['TEXT']);
$general_vk = $arItemGeneral['PROPERTIES']['GENERAL_VK']['VALUE'];
$general_fb = $arItemGeneral['PROPERTIES']['GENERAL_FB']['VALUE'];
$general_inst = $arItemGeneral['PROPERTIES']['GENERAL_INST']['VALUE'];
$general_vk_name = $arItemGeneral['PROPERTIES']['GENERAL_VK']['NAME'];
$general_fb_name = $arItemGeneral['PROPERTIES']['GENERAL_FB']['NAME'];
$general_inst_name = $arItemGeneral['PROPERTIES']['GENERAL_INST']['NAME'];
?>

 <?$APPLICATION->IncludeComponent(
	"codingart:search.form.juristic2", 
	"search_medicart", 
	array(
		"COMPONENT_TEMPLATE" => "search_medicart",
		"PAGE" => SITE_DIR."search/index.php",
		"USE_SUGGEST" => "N"
	),
	false
);?>

<?if ($GLOBALS["APPLICATION"]->GetCurPage() != "/"){?>
		</div>
	</div>
</section>
<?}?>

<div id="footer"><?/*$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/copyright.php"),
			Array(),
			Array("MODE"=>"html")
		);*/?> </div>

	<!--Main Footer-->
    <footer class="main-footer" style="">
    
		<div class="container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row m-0">
					
					<!-- Logo Widget-->
					<div class="footer-column col-lg-6 col-md-12 px-lg-3 px-md-5">
						<div class="footer-widget logo-widget">
							<div class="logo">
								<a href="<?=SITE_DIR?>"><img src="<?=CFile::GetPath($general_logo);?>" alt="" /></a>
							</div>
							<p class="text"><?=$general_desc?></p>
							<ul class="list-style-two">
								<li style="    position: relative; left: -30px;">
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
										"PATH" => SITE_DIR."include/fotter_content_add.php" 	
									),
									false
								);?></li>
													
								<li><a class="general_adres_link" href="<?=SITE_DIR?>contacts/" target="_blank" ><span class="icon  flaticon-map-pin-marked"></span><?=$general_adres?></a></li>
								<li><a href="tel:<?=$general_phone?>"><span class="icon flaticon-phone"></span><?=$general_phone?></a></li>
								<li><a href="mailto:<?=$general_mail?>"><span class="icon flaticon-mail"></span><?=$general_mail?></a></li>
								<li><a href="<?=$general_vk?>" target="_blank" ><span class="icon icons-vk2"></span><?=$general_vk_name?></a></li>
								<li><a href="<?=$general_fb?>"><span class="icon icons-facebook2"></span><?=$general_fb_name?></a></li>
								<li><a href="<?=$general_inst?>"><span class="icon icons-instagram2"></span><?=$general_inst_name?></a></li>
											

											<script type="text/javascript">
											/*	window.location = "https://yandex.ru/maps/?text=<?=$general_adres?>";
												function general_adres(){
													window.location = "https://yandex.ru/maps/?text="+<?=$general_adres_link?>;
												}*/
												/*
												adres_link = $('.general_adres_link').html();
												var adres_link_e = adres_link.split('</span>')[1];
												$('.general_adres_link').attr('href',"https://yandex.ru/maps/?text="+adres_link_e);
												

												window.location = "https://yandex.ru/maps/?text="+<?=$general_adres?>;

												*/
											</script>				
							</ul>
						</div>
					</div>
					
					<!-- Links Widget-->
					<div class="footer-column col-lg-3 col-md-6 px-lg-3 px-md-5">
						<div class="footer-widget link-widget">
							<h2 class="mb-5"><?$APPLICATION->IncludeComponent(
								"codingart:main.include.juristic2", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"EDIT_TEMPLATE" => "",
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/menu_fotter_title.php" 	
								),
								false
							);?></h2>
							<ul class="footer-list">
								<?$APPLICATION->IncludeComponent(
									"codingart:menu.juristic2", 
									"vertical_multilevel", 
									array(
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "left",
										"COMPOSITE_FRAME_MODE" => "A",
										"COMPOSITE_FRAME_TYPE" => "AUTO",
										"DELAY" => "N",
										"MAX_LEVEL" => "1",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_TYPE" => "N",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "bottom",
										"USE_EXT" => "N",
										"COMPONENT_TEMPLATE" => "vertical_multilevel"
									),
									false
								);?>
							<?if($arItemGeneral['PROPERTIES']['MAIN_SERVICES_ITEMS']['VALUE'])
								foreach ($arItemGeneral['PROPERTIES']['MAIN_SERVICES_ITEMS']['VALUE'] as $elm_id) {
								$res = CIBlockSection::GetByID($elm_id);
								while ($arSection = $res->GetNext()) {
									$array_sections = $arSection;
								   if ($arSection['DEPTH_LEVEL'] == 1){ ?>
										<li>
											<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="elementskit-dropdown-has root-item"><?=$arSection['NAME'];?></a>
										</li>
								<?}}
							}?>
							</ul>
						</div>
					</div>
					
					<!-- Links Widget-->
					<div class="footer-column col-lg-3 col-md-6 px-lg-0 px-md-5">
						<div class="footer-widget times-widget">
							<h2 class="mb-5">
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
									"PATH" => SITE_DIR."include/time_work_fotter_title.php" 	
								),
								false
							);?>
							</h2>
							<ul class="time-list">
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
										"PATH" => SITE_DIR."include/time_work_fotter_content.php" 	
									),
									false
								);?>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="clearfix">
					
					<div class="pull-left">
						<!-- Copyright -->
						<p class="copyright">
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
									"PATH" => SITE_DIR."include/copyright.php" 	
								),
								false
							);?>	
							</p>
					</div>
					
					<div class="pull-right">
						<ul class="social-box">
							<li><a href="<?=SITE_DIR?>company/" ><?=GetMessage('FOOTER_LINK_1')?></a></li>
							<li><a href="<?=SITE_DIR?>information/questions_and_answers.php"><?=GetMessage('FOOTER_LINK_2')?></a></li>
							<li><a href="<?=SITE_DIR?>include/privacy-policy.php"><?=GetMessage('FOOTER_LINK_3')?></a></li>
									
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		
	</footer>
	
</div>  
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon icon-chevron-up"></span></div>

<!-- sidebar cart item -->
<?global $arItemGeneral;?>

<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_7", 
	array(
		"COMPONENT_TEMPLATE" => "form_7",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => GetMessage('SUCCESS_TEXT'),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => GetMessage('FORM_7_TITLE')
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_2", 
	array(
		"COMPONENT_TEMPLATE" => "form_2",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => GetMessage('SUCCESS_TEXT'),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => GetMessage('FORM_2_TITLE')
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_9", 
	array(
		"COMPONENT_TEMPLATE" => "form_9",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => GetMessage('SUCCESS_TEXT'),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_SELECT_IBLOCK_ID" => $codingart_block_id['services_id'],
		"FORM_TITLE" => GetMessage('FORM_9_TITLE'),
		"MODAL_MOD" => "Y",
		"FORM_TITLE_2" => ""
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_new_reviews", 
	array(
		"COMPONENT_TEMPLATE" => "form_new_reviews",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => GetMessage('SUCCESS_TEXT'),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => GetMessage('FORM_REV_TITLE')
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_5", 
	array(
		"COMPONENT_TEMPLATE" => "form_5",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => GetMessage('SUCCESS_TEXT'),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => GetMessage('FORM_5_TITLE')
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_2", 
	array(
		"COMPONENT_TEMPLATE" => "form_2",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => GetMessage('SUCCESS_TEXT'),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => GetMessage('FORM_2_TITLE')
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_4", 
	array(
		"COMPONENT_TEMPLATE" => "form_4",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => GetMessage('SUCCESS_TEXT'),
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_TITLE" => GetMessage('FORM_4_TITLE')
	),
	false
);?>

<!-- xs modal -->
<!-- Modal  New review-->
<div class="modal fade modal-success" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"> <?=GetMessage('SUCCESS_TITLE')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p> <?=GetMessage('SUCCESS_TEXT')?></p>
      </div>
    </div>
  </div>
</div>
<!-- xs modal -->
<!-- End xs modal -->
<!-- end language switcher strart -->




<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/admin_panels.php");?>

<?}?>

 <?if($result_ip == "Y"){?>


<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/popper.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery-ui.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.fancybox.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/owl.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/mixitup.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/paroller.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/wow.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/nav-tool.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery-ui.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/appear.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.maskedinput.min.js"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/script.js"></script>

<script type="text/javascript">
	jQuery(function($){
   $('input[type="tel"]').mask("+7 (999) 999-99-99");
   });
</script>
		
      		
<script type="text/javascript">
	function modal_spec_content(title,speshel){
		$('.modal-spec .value input[type="hidden"][name="coment"]').val(title);
		$('.modal-spec .value input[type="hidden"][name="speshel"]').val(speshel);
	}
	function modal_sing_content(title){
		$('.modal-sing-online .value input[type="hidden"][name="coment"]').val(title);
	}

	
</script>
<script type="text/javascript">
	
function success_on(){
	$('.modal').modal("hide");
	$('.modal-backdrop').remove();
	$('#modal-success').modal("show");
	$('.input-container input').val('');
	$('.form-group input').val('');
	$('[name="profile_coment"]').val('');

}

$("form.form_post").submit(function(){ 
    var form_data = $(this).serialize();
  
    $.ajax({
            type: "POST", 
            url: "<?=SITE_DIR?>inc/feedbsck.php", 
            data: form_data,
            success: function(data) {
	             
            	
            	
				/*data0=data;
	            data_title=data0.split("title=")[1];
	            data_title=data_title.split(";")[0];

	            data_name=data0.split("names=")[1];
	            data_name=data_name.split(";")[0];*/
	            success_on();
	        } 
    });
	return false;
});
function menu_fixed_anim() {
	$('.elementskit-menu-toggler').click(function() {
		$('.general-fix-main').removeClass('fadeInDown animated');
		
		$('body').css('overflow-y','hidden');
	});

	$('.elementskit-menu-close').click(function(){
		$('body').css('overflow-y','auto');
	});
	$('.elementskit-menu-overlay').click(function(){
		$('body').css('overflow-y','auto');
	});
	scroll_num = $( window ).scrollTop();
	if(scroll_num>100){
		if(!$('.general-fix-main').hasClass('fixed')){
			$('.general-fix-main').addClass('fixed fadeInDown animated');
			
			
			
			/*menu_height = $('.general-fix-main').height() + "px";
			menu_height = "131px";
			$('body').css('padding-top',menu_height);*/

		} 
	}
	if(scroll_num<100){
		$('.general-fix-main').removeClass('fixed fadeInDown animated');
		$('body').css('padding-top','0px');

	}
}
menu_fixed_anim();
$( window ).scroll(function() {
	menu_fixed_anim();
	
});



</script>
<script type="text/javascript">
	$('.accordion-tab-head').click(function() {
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			tab_num = $(this).attr('data-tab');
			$('.accordion-tab-body[data-tab="'+tab_num+'"]').addClass('d-none');
			this_target = $('.accordion-tab-head[data-tab="1"]').children('.target-tab');
			$.scrollTo(this_target, 400); 
		} else { 
			$('.accordion-tab-head').removeClass('active');
			$('.accordion-tab-body').addClass('d-none');
			$(this).addClass('active');
			tab_num = $(this).attr('data-tab');
			$('.accordion-tab-body[data-tab="'+tab_num+'"]').removeClass('d-none');
			this_target = $(this).children('.target-tab');			
			$.scrollTo(this_target, 400); 
		}
	});

if(document.body.clientWidth<1200){
	$('li.elementskit-dropdown-has').append('<div class="menu-mob-ul-open"></div>');
} else { 
	$('li.elementskit-dropdown-has .menu-mob-ul-open').remove();
}
$('li.elementskit-dropdown-has .menu-mob-ul-open').click(function() {
	$('.elementskit-dropdown-has ul.elementskit-dropdown > li').addClass('fadeInLeft animated');
	li_height_null = '35px';
	if($(this).hasClass('active')){
		$(this).removeClass('active');
		
		ul_block = $(this).parent('li.elementskit-dropdown-has').children('ul.elementskit-dropdown');
		
		li_this = $(this).parent('li.elementskit-dropdown-has');
		li_height = li_this.height();
		li_this.height(li_height_null);
		setTimeout(
			function li_this_close(){ 
				li_this.height('auto');
				ul_block.css('display','none');
				li_this.removeClass('active');
			}, 1000);
		
	}else{

		$(this).addClass('active');
		$(this).parent('li.elementskit-dropdown-has').addClass('active');
		ul_block = $(this).parent('li.elementskit-dropdown-has').children('ul.elementskit-dropdown');
		ul_block.css('display','contents');

		li_this = $(this).parent('li.elementskit-dropdown-has');
		li_height = li_this.height();
		/*li_this.height(li_height_null);
		li_this.height(li_height);*/

	}
});

function owl_carousel_row(){
	if(document.body.clientWidth>1200){
		$(".owl-carousel:not(.banner-carousel) .owl-stage-outer").each(function() {
			con = $(this).find('.owl-item').length;
			if(con<4)$(this).addClass('row justify-content-center');
		});
	} else {
		$(".owl-carousel:not(.banner-carousel) .owl-stage-outer").each(function() {
			if($(this).hasClass('.row')){
				$(this).removeClass('row');
			}
		});
		
		
	}
}
function tab_serv_mob(){

	if(document.body.clientWidth<1200){
		$('#tab-services').addClass('d-none');
		$('#tab-services-mob').removeClass('d-none');
	} else {
		$('#tab-services-mob').addClass('d-none');
		$('#tab-services').removeClass('d-none');
	}
}
function menu_contact_mob(){
	$('.elementskit-nav-identity-panel').append('<div class="phone_mob_menu"></div>');
	phone_mob_html = $('.phone_mob').html();
	$('.phone_mob_menu').html(phone_mob_html);

	$('.phone_mob_menu').append('<a data-toggle="modal" data-target="#modal-spec" class="theme-btn submit-btn btn"><?=GetMessage('FORM_2_TITLE')?></a>');

	$('.elementskit-menu-toggler').click(function(){
		$('header').addClass('z_index_999');
	});
	function close_menu_left() {
		setTimeout(
			function(){ 
				$('header').removeClass('z_index_999');
			}, 1000);
	}
	$('.elementskit-menu-close').click(function(){
		close_menu_left();
	});
	$('.elementskit-menu-overlay').click(function(){
		close_menu_left();
	});
}
owl_carousel_row();
tab_serv_mob();
menu_contact_mob();
$(window).resize(function() {
	tab_serv_mob();
	owl_carousel_row();
	menu_contact_mob();
});
	
</script>

<script type="text/javascript">
//$(".services-section-two .team-carousel-three .owl-stage").css('transform','translate3d(-1110px, 0px, 0px)');


</script>

<style>
.services-section-two .team-carousel-three .owl-stage {
    left: 220px;
}
::-webkit-scrollbar-button {
	background-image:url('');
	background-repeat:no-repeat;
	width:7px;
	height:0px
}

::-webkit-scrollbar-track {
	background-color:#ecedee
}

::-webkit-scrollbar-thumb {
	-webkit-border-radius: 0px;
	border-radius: 0px;
	background-color:#babdc2;
}

::-webkit-scrollbar-thumb:hover{
	background-color:#777f8c;
}

::-webkit-resizer{
	background-image:url('');
	background-repeat:no-repeat;
	width:6px;
	height:0px
}
::-webkit-scrollbar {
    width: 17px;
}

.admin_panel_body::-webkit-scrollbar {
    width: 7px;
}
.admin_panel_body select::-webkit-scrollbar, .admin_panel_body textarea::-webkit-scrollbar {
    width: 7px;
}
.z_index_999{
	z-index: 999;
}
</style>

<?if($arItemGeneral['PROPERTIES']['GENERAL_CUSTOM_FOOTER_HTML']['VALUE'])
echo htmlspecialcharsBack($arItemGeneral['PROPERTIES']['GENERAL_CUSTOM_FOOTER_HTML']['VALUE']['HTML']);?>


<?}?>
</body>
</html>