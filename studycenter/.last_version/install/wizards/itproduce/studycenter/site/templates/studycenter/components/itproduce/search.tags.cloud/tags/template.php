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

if(is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):
?><ul>
<?foreach ($arResult["SEARCH"] as $key => $res){?>
	<li>
		<a href="<?=SITE_DIR?>search/index.php/?tags=<?=$res["NAME"]?>" title=""><?=$res["NAME"]?></a>
	</li>
	<?}?>
</ul>
<?endif;?>