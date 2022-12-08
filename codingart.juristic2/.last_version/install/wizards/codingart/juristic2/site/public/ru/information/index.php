<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?><?$APPLICATION->SetTitle($company_title);?> <?top_line($company_title); ?> 
<section class="container o-nas o-nas-page ">
<div class="py-5">
	<div class="pattern-layer" style="">
	</div>
	<div class="outer-section">
		<div class="clearfix row">
			<div class="right-column col-md-12 col-12">
				<div class=" pl-0">
					
					 <?$APPLICATION->IncludeComponent(
	"codingart:main.include.juristic2", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_DIR."include/company/information-text.php"
	),
	false
);?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>