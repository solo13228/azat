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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<div class="mdp-pagiation">
	<nav aria-label="Page navigation example">
		<ul class="pagination">
<?if($arResult["bDescPageNumbering"] === true):?>

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<li>
				<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
				?>=<?= $arResult["NavPageCount"] ?>"><i class="fa fa-angle-double-left"></i></a>
			</li>
			<li>
				<a rel="prev"
				   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
				   ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><i class="fa fa-angle-left"></i></a>
			</li>
		<?else:?>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><i class="fa fa-angle-double-left"></i></a>
		</li>
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<li>
					<a rel="prev" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
					?>"><i class="fa fa-angle-left"></i></a>
				</li>
			<?else:?>
				<li>
					<a rel="prev"
					   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
					   ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><i class="fa fa-angle-left"></i></a>
				</li>
			<?endif?>
		<?endif?>
	<?else:?>
		<li class="disabled">
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><i class="fa fa-angle-double-left"></i></a>
		</li>
		<li class="disabled">
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><a href="#"><i class="fa fa-angle-left"></i></a>
		</li>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<li class="active">
			<a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><?= $NavRecordGroupPrint ?></a>
		</li>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<li>
				<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
				?>=<?= ($arResult["NavPageNomer"]) ?>"><?= $NavRecordGroupPrint ?></a>
			</li>
		<?else:?>
			<li>
				<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
				?>=<?= $arResult["nStartPage"] ?>"><?= $NavRecordGroupPrint ?></a>
			</li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<li>
			<a rel="next"
			   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			   ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><i class="fa fa-angle-right"></i></a>
		</li>
		<li>
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=1"><i class="fa fa-angle-double-right"></i></a>
		</li>
	<?else:?>
		<li class="disabled">
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=1"><?= GetMessage("PAGINATION_NEXT") ?></a>
		</li>
		<li class="disabled">
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=1"><?= GetMessage("PAGINATION_END") ?></a>
		</li>

	<?endif?>

<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
		<li class="page-item">
			<a class="page-link" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=1"><i class="fa fa-angle-double-left"></i></a>
		</li>
		<li class="page-item">
			<a class="page-link" rel="prev"
			   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			   ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><i class="fa fa-angle-left"></i></a>
		</li>
		<?else:?>
		<li class="page-item">
			<a class="page-link" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><i class="fa fa-angle-double-left"></i></a>
		</li class="page-item">
			<?if ($arResult["NavPageNomer"] > 2):?>
		<li class="page-item">
			<a class="page-link" rel="prev"
			   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			   ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><i class="fa fa-angle-left"></i></a>
		</li>
			<?else:?>
		<li class="page-item">
			<a class="page-link" rel="prev"
			   href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			   ?>"><i class="fa fa-angle-left"></i></a>
		</li>
			<?endif?>
		<?endif?>

	<?else:?>
		<li class="disabled">
			<a class="page-link" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><i class="fa fa-angle-double-left"></i></a>
		</li>
		<li class="disabled">
			<a class="page-link" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull
			?>"><i class="fa fa-angle-left"></i></a>
		</li>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<li class="active">
			<a class="page-link active" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
		</li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
		<li>
			<a class="page-link" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
		</li>
		<?else:?>
		<li>
			<a class="page-link" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
		</li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<li class="page-item">
			<a class="page-link" rel="next"
			   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			   ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><i class="fa fa-angle-right"></i></a>
		</li>
		<li class="page-item">
			<a class="page-link" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["NavPageCount"] ?>"><i class="fa fa-angle-double-right"></i></a>
		</li>
	<?else:?>
		<li class="disabled">
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["NavPageCount"] ?>"><i class="fa fa-angle-right"></i></a>
		</li>
		<li class="disabled">
			<a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"]
			?>=<?= $arResult["NavPageCount"] ?>"><i class="fa fa-angle-double-right"></i></a>
		</li>
	<?endif?>

<?endif?>

	</ul>
</div>