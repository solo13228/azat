<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	//$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}
$str_h1 = '<h1></h1>';
$strReturn .= '<ul class="breadcrumbs bx-breadcrumb " itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">'.$str_h1;

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="icon icon-right-arrow"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="bx-breadcrumb-item s" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					<span itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="bx-breadcrumb-item ">
				'.$arrow.'
				<span>'.$title.'</span>
			</li>';
	}
}
$str_h1_new .= '<h1>'. $title .'</h1>';
$strReturn = str_replace($str_h1, $str_h1_new, $strReturn);
?>

<?
//$strReturn .= '<div style="clear:both"></div></ul>';

return $strReturn;


					