<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");?>
<?top_line("404 Not Found");?>
<section class="page-404 py-4">
	<div class="container">
		<div class="row  py-5">
			<h1><span style="font-size: 70px;">404</span> <br><span style="font-size: 25px">Страница не найдена</span></h1>
		</div>
		<div class="row ">
		<?$APPLICATION->IncludeComponent("codingart:main.map.juristic2", "site_map", Array(
			"LEVEL" => "3",	// Максимальный уровень вложенности (0 - без вложенности)
				"COL_NUM" => "2",	// Количество колонок
				"SHOW_DESCRIPTION" => "Y",	// Показывать описания
				"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			),
			false
		);?>
	</div>
	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>