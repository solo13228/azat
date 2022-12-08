<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="navigation-bar d-flex flex-wrap align-items-center">
	<nav>
	    <ul>
	    	<li><a class="active" href="<?=SITE_DIR?>" title=""><?$APPLICATION->IncludeFile(
            SITE_DIR."include/head/main.php",
            array(),
            array(
                "MODE" => "text"));?></a></li>
			<?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
					continue;
			?>
				<?if($arItem["SELECTED"]):?>
					<li><a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a></li>
				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?endif?>
			<?endforeach?>
		</ul>
	</nav>
	<ul class="social-links ml-auto">
	   <li><a href="<?echo $GLOBALS["global_info"][VK_URL]?>" title=""><i class="fab fa-vk"></i></a></li>
                        <li><a href="<?echo $GLOBALS["global_info"]["YT_URL"]?>" title=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href="<?echo $GLOBALS["global_info"]["INST_URL"]?>" title=""><i class="fab fa-instagram"></i></a></li>
	</ul>
</div>
<?endif?>