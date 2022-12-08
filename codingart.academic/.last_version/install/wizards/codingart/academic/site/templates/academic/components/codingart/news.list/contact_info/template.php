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
<div class="single-contact mb-65" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="contact-icon">
			<img src="/include/contact1.png" alt="contact">
        </div>
        <div class="contact-add">
			<h3><?=GetMessage("ADDRES")?></h3>
			<p><?echo $GLOBALS["global_info"]["ADRESS"]?></p>         
        </div>
    </div>
<div class="single-contact mb-65" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="contact-icon">
			<img src="/include/contact2.png" alt="contact">
        </div>
        <div class="contact-add">
			<h3>Email</h3>
			<p><?echo $GLOBALS["global_info"]["MAIL"]?></p> 
        </div>
    </div>
	<div class="single-contact mb-65" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="contact-icon">
			<a href="tel:<?echo $GLOBALS["global_info"]["PHONE"]?>"><img src="/include/contact3.png" alt="contact"></a>
        </div>
        <div class="contact-add">
			<a href="tel:<?echo $GLOBALS["global_info"]["PHONE"]?>"><h3><?=GetMessage("PPHONE")?></h3></a>
			<a href="tel:<?echo $GLOBALS["global_info"]["PHONE"]?>"><p><?echo $GLOBALS["global_info"]["PHONE"]?></p></a>         
        </div>
    </div>