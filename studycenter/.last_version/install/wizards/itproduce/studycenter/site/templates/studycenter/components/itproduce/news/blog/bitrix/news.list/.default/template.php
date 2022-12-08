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
<div class="blog-section p-0 posts-page">
	<div class="blog-posts">
	<?foreach($arResult["ITEMS"] as $arItem):?><?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
		<div class="blog-post" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="blog-thumbnail">
				<a href="#" title="">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  alt=""  class="w-100">
				</a>
				<span class="category"><? $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
	if($ar_res = $res->GetNext())
	?><?if($ar_res['NAME']):?><?endif;?> 
	<a>
	<? echo $ar_res['NAME'];?>
	</a></span>
					
			</div>
			<div class="blog-info">
				<ul class="meta">
					<li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"]?></a></li>
					<li><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><? echo $arItem["CREATED_USER_NAME"]?></a></li>
					<li><i class="fa fa-tags" aria-hidden="true"></i><a href="#" title=""><? echo $arItem["TAGS"]?></a></li>
				</ul>
				<h3 class="stick"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title=""><? echo $arItem["NAME"] ?></a></h3>
				<p><?echo $arItem["PREVIEW_TEXT"];?></p>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" title="" class="read-more"><?=GetMessage("MRE_DETAIL")?><i class="fa fa-long-arrow-alt-right"></i></a>
			</div>
		</div><!--blog-post end-->
	<?endforeach;?>
		</div>
	<br>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>