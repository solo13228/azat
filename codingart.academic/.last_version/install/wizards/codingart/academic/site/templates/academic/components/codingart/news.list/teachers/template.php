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
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="col-md-3 col-sm-4 col-xs-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="single-teacher">
				<div class="single-teacher-img">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PHOTO"]["FILE_VALUE"]["SRC"]?>" alt="teacher"></a>  
				</div>
				<div class="single-teacher-content text-center">
					<h2 style="padding-left: 20px; padding-right: 20px"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><? echo $arItem["NAME"] ?></a></h2>
					<h4 style="padding-left: 20px; padding-right: 20px"><?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?></h4>
					<ul>
						<li><a href="<?=$arItem["DISPLAY_PROPERTIES"]["SLINK1"]["DISPLAY_VALUE"]?>"><i class="<?=$arItem["DISPLAY_PROPERTIES"]["SLINKICO1"]["DISPLAY_VALUE"]?>"></i></a></li>
						<li><a href="<?=$arItem["DISPLAY_PROPERTIES"]["SLINK2"]["DISPLAY_VALUE"]?>"><i class="<?=$arItem["DISPLAY_PROPERTIES"]["SLINKICO2"]["DISPLAY_VALUE"]?>"></i></a></li>
						<li><a href="<?=$arItem["DISPLAY_PROPERTIES"]["SLINK3"]["DISPLAY_VALUE"]?>"><i class="<?=$arItem["DISPLAY_PROPERTIES"]["SLINKICO3"]["DISPLAY_VALUE"]?>"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
    	<?endforeach;?>
