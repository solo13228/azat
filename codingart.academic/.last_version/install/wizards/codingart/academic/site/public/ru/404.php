<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("ОШИБКА");
?>
<div class="event-area two text-center pt-100 pb-145">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <?
                	$props = CIBlockElement::GetProperty($GLOBALS["codingart_block_id"]["general_id"], $GLOBALS["codingart_block_id"]["element_id"], "sort", "asc", array("CODE" => "MINILOGO"));
                	if ($ar_props = $props->GetNext()){   
                    $prop = $ar_props['VALUE'];
                    $file = CFile::GetFileArray($prop);
                    $LOGO_SRC = $file['SRC'];}
                	if($LOGO_SRC != null):?>
                    <img  src="<?=$LOGO_SRC?>" style="max-width: 250px;max-height: 52px;padding-left: 20px;" alt="section-title"><br><br><br>
                	<?endif;?>
                    <h2>Страница не найдена</h2>
                    <a class="default-btn" href="<?=SITE_DIR?>">Главная</a>
                </div><br><br><br><br>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>