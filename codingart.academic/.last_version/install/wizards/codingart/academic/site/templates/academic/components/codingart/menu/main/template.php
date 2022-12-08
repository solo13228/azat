<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="main-menu">
    <nav>
     	<ul>
            <li><a href="<?=SITE_DIR?>"><?=GetMessage("MENU_MAIN")?></a>
            </li>
            <?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
					continue;
			?>
            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endforeach?>
        </ul>
    </nav>
</div>
<?endif?>
<!--Search Form Start-->
    <div class="search-btn">
        <?$APPLICATION->IncludeComponent("codingart:search.form", "top", Array(

            ),
            false
        );?>
    </div>
<!--End of Search Form-->

