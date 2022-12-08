<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="single-widget">
        <h3><?$APPLICATION->IncludeFile(
            SITE_DIR."include/main/links.php",
            array(),
            array(
                "MODE" => "text"));?></h3>
        <ul>
        	<?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
					continue;
			?>
            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endforeach?>
        </ul>
    </div>
<?endif?>