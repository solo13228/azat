<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
$APPLICATION->SetTitle("404 ERROR");
?>
<div class="wrapper">
	<div class="error-page">
		<div class="container">
			<div class="error-text">
				<h2><?$APPLICATION->IncludeFile(
                                            SITE_DIR."include/error/wops.php",
                                            array(),
                                            array(
                                                "MODE" => "text"));?></h2>
				<h3><?$APPLICATION->IncludeFile(
                                            SITE_DIR."include/error/notcr.php",
                                            array(),
                                            array(
                                                "MODE" => "text"));?></h3>
				<a href="<?=SITE_DIR?>" title="" class="btn-default"><?$APPLICATION->IncludeFile(
                                            SITE_DIR."include/error/main.php",
                                            array(),
                                            array(
                                                "MODE" => "text"));?> <i class="fa fa-long-arrow-alt-right"></i></a>
				</div><!--error-text end-->
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>