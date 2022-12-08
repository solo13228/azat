<section class="book-form py-5">
	<div class="team-pattern-layer-two" style="">
	</div>
	<div class="container">
		<div class="row m-0">
			<div class="text-form col-lg-6 col-12 d-lg-block d-md-none d-none">
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
		"PATH" => "include/main-form24.php"
	),
	false
);?>
			
			</div>
			<div class="box-form col-lg-6 col-12">
<?global $arItemGeneral;?>
<?$APPLICATION->IncludeComponent(
	"codingart:main.feedback.juristic2", 
	"form_9", 
	array(
		"COMPONENT_TEMPLATE" => "form_9",
		"EMAIL_TO" => $arItemGeneral['PROPERTIES']['EMAIL']['VALUE'],
		"EVENT_MESSAGE_ID" => array(0=>"#FORM_ID#",),
		"OK_TEXT" => "",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"FORM_SELECT_IBLOCK_ID" => $codingart_block_id["services_id"],
		"MODAL_MOD" => "N",
		"FORM_TITLE" => "Записаться на консультацию"
	),
	false
);?>
			</div>
		</div>
	</div>
</section>