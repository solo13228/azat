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

<div id="recent-posts-2" class="widget widget_recent_entries">		
	<h3 class="widget-title">
		<font style="vertical-align: inherit;">
							
			<font style="vertical-align: inherit;"><?=$arParams["PAGER_TITLE"];?></font>  
		</font>
	</h3>		
	<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
			<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a  href="<?=$arItem["DETAIL_PAGE_URL"]?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?=$arItem["NAME"]?></font></font></a>
			</li>
		<?endforeach;?>
	</ul>
</div>
