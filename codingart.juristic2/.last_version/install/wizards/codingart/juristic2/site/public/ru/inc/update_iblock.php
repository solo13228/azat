<?
require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";
require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_id_link.php");
use Bitrix\Main\Entity;
use Bitrix\Main\Type\DateTime;
CModule::IncludeModule("iblock");
$colors_id="0";
$iblockID = $codingart_block_id["general_id"];
function convrt_enc($this_str){ 
	$this_str = mb_convert_encoding($this_str, LANG_CHARSET, mb_detect_encoding($this_str));
	return $this_str;
}

$colors = $_POST['colors'];
$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"GEN_COLORS"));
while($enum_fields = $property_enums->GetNext())
	if($colors==$enum_fields["XML_ID"]){$colors_id=$enum_fields["ID"];}


$admin_general_fix_menu = $_POST['admin_general_fix_menu'];
$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"GENERAL_FIX_MENU"));
while($enum_fields = $property_enums->GetNext())
	if($admin_general_fix_menu==$enum_fields["XML_ID"]){$admin_general_fix_menu_id=$enum_fields["ID"];}


$color_1 = $_POST['color_1'];
$color_2 = $_POST['color_2'];
$color_3 = $_POST['color_3'];
$color_4 = $_POST['color_4'];
$color_5 = $_POST['color_5'];


$admin_main_order_serv = $_POST['admin_main_order_serv'];
$admin_main_order_serv = convrt_enc($admin_main_order_serv);
$admin_main_order_sale = $_POST['admin_main_order_sale'];
$admin_main_order_sale = convrt_enc($admin_main_order_sale);
$admin_main_order_spec = $_POST['admin_main_order_spec'];
$admin_main_order_spec = convrt_enc($admin_main_order_spec);
$admin_main_order_form = $_POST['admin_main_order_form'];
$admin_main_order_form = convrt_enc($admin_main_order_form);
$admin_main_order_onas = $_POST['admin_main_order_onas'];
$admin_main_order_onas = convrt_enc($admin_main_order_onas);
$admin_main_order_revi = $_POST['admin_main_order_revi'];
$admin_main_order_revi = convrt_enc($admin_main_order_revi);
$admin_main_order_even = $_POST['admin_main_order_even'];
$admin_main_order_even = convrt_enc($admin_main_order_even);
$admin_main_order_news = $_POST['admin_main_order_news'];
$admin_main_order_news = convrt_enc($admin_main_order_news);




$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_SERV"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_serv==$enum_fields["XML_ID"]){$admin_main_order_serv=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_SALE"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_sale==$enum_fields["XML_ID"]){$admin_main_order_sale=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_SPEC"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_spec==$enum_fields["XML_ID"]){$admin_main_order_spec=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_FORM"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_form==$enum_fields["XML_ID"]){$admin_main_order_form=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_ONAS"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_onas==$enum_fields["XML_ID"]){$admin_main_order_onas=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_REVI"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_revi==$enum_fields["XML_ID"]){$admin_main_order_revi=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_EVEN"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_even==$enum_fields["XML_ID"]){$admin_main_order_even=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_NEWS"));
while($enum_fields = $property_enums->GetNext())
	if($admin_main_order_news==$enum_fields["XML_ID"]){$admin_main_order_news=$enum_fields["ID"];}

$admin_main_title = $_POST['admin_main_title'];
$admin_main_title = convrt_enc($admin_main_title);
$admin_services_title = $_POST['admin_services_title'];
$admin_services_title = convrt_enc($admin_services_title);
$admin_news_title = $_POST['admin_news_title'];
$admin_news_title = convrt_enc($admin_news_title);
$admin_company_title = $_POST['admin_company_title'];
$admin_company_title = convrt_enc($admin_company_title);
$admin_reviews_title = $_POST['admin_reviews_title'];
$admin_reviews_title = convrt_enc($admin_reviews_title);
$admin_contacts_title = $_POST['admin_contacts_title'];
$admin_contacts_title = convrt_enc($admin_contacts_title);
$admin_spec_title = $_POST['admin_spec_title'];
$admin_spec_title = convrt_enc($admin_spec_title);
$admin_general_menu_services = $_POST['admin_general_menu_services'];
	//$admin_general_menu_services = convrt_enc($admin_general_menu_services);

$admin_general_phone = $_POST['admin_general_phone'];
$admin_general_phone = convrt_enc($admin_general_phone);
$admin_general_mail = $_POST['admin_general_mail'];
$admin_general_mail = convrt_enc($admin_general_mail);
$admin_email = $_POST['admin_email'];
$admin_email = convrt_enc($admin_email);
$admin_email_from = $_POST['admin_email_from'];
$admin_email_from = convrt_enc($admin_email_from);
$admin_general_time_work = $_POST['admin_general_time_work'];
$admin_general_time_work = convrt_enc($admin_general_time_work);
$admin_general_fix_text = $_POST['admin_general_fix_text'];
$admin_general_fix_text = convrt_enc($admin_general_fix_text);

$admin_main_services_title = $_POST['admin_main_services_title'];
$admin_main_services_title = convrt_enc($admin_main_services_title);
$admin_main_services_desc = $_POST['admin_main_services_desc'];
$admin_main_services_desc = convrt_enc($admin_main_services_desc);
$admin_main_services_items = $_POST['admin_main_services_items'];
$admin_main_services_items = convrt_enc($admin_main_services_items);
$admin_main_sale_title = $_POST['admin_main_sale_title'];
$admin_main_sale_title = convrt_enc($admin_main_sale_title);
$admin_main_sale_desc = $_POST['admin_main_sale_desc'];
$admin_main_sale_desc = convrt_enc($admin_main_sale_desc);
$admin_main_sale_items = $_POST['admin_main_sale_items'];
$admin_main_sale_items = convrt_enc($admin_main_sale_items);
$admin_main_spec_block_title = $_POST['admin_main_spec_block_title'];
$admin_main_spec_block_title = convrt_enc($admin_main_spec_block_title);
$admin_main_spec_block_desc = $_POST['admin_main_spec_block_desc'];
$admin_main_spec_block_desc = convrt_enc($admin_main_spec_block_desc);
$admin_main_spec_block_content = $_POST['admin_main_spec_block_content'];
$admin_main_spec_block_content = convrt_enc($admin_main_spec_block_content);
$admin_main_onas_img = $_POST['admin_main_onas_img'];
$admin_main_onas_img = convrt_enc($admin_main_onas_img);
$admin_main_onas_title = $_POST['admin_main_onas_title'];
$admin_main_onas_title = convrt_enc($admin_main_onas_title);
$admin_main_onas_desc = $_POST['admin_main_onas_desc'];
$admin_main_onas_desc = convrt_enc($admin_main_onas_desc);
$admin_main_onas_items_adv = $_POST['admin_main_onas_items_adv'];
$admin_main_onas_items_adv = convrt_enc($admin_main_onas_items_adv);
$admin_main_reviews_title = $_POST['admin_main_reviews_title'];
$admin_main_reviews_title = convrt_enc($admin_main_reviews_title);
$admin_main_reviews_desc = $_POST['admin_main_reviews_desc'];
$admin_main_reviews_desc = convrt_enc($admin_main_reviews_desc);
$admin_main_reviews_content = $_POST['admin_main_reviews_content'];
$admin_main_reviews_content = convrt_enc($admin_main_reviews_content);
$admin_main_event_title = $_POST['admin_main_event_title'];
$admin_main_event_title = convrt_enc($admin_main_event_title);
$admin_main_event_content = $_POST['admin_main_event_content'];
$admin_main_event_content = convrt_enc($admin_main_event_content);
$admin_main_news_title = $_POST['admin_main_news_title'];
$admin_main_news_title = convrt_enc($admin_main_news_title);
$admin_main_news_desc = $_POST['admin_main_news_desc'];
$admin_main_news_desc = convrt_enc($admin_main_news_desc);
$admin_main_news_content = $_POST['admin_main_news_content'];
$admin_main_news_content = convrt_enc($admin_main_news_content);
$admin_general_desc = $_POST['admin_general_desc'];
$admin_general_desc = convrt_enc($admin_general_desc);
$admin_general_adres = $_POST['admin_general_adres'];
$admin_general_adres = convrt_enc($admin_general_adres);
$admin_ime_work_fotter_title = $_POST['admin_ime_work_fotter_title'];
$admin_ime_work_fotter_title = convrt_enc($admin_ime_work_fotter_title);
$admin_general_time_work_fotter_1 = $_POST['admin_general_time_work_fotter_1'];
$admin_general_time_work_fotter_1 = convrt_enc($admin_general_time_work_fotter_1);
$admin_general_time_work_fotter_2 = $_POST['admin_general_time_work_fotter_2'];
$admin_general_time_work_fotter_2 = convrt_enc($admin_general_time_work_fotter_2);
$admin_general_time_work_fotter_3 = $_POST['admin_general_time_work_fotter_3'];
$admin_general_time_work_fotter_3 = convrt_enc($admin_general_time_work_fotter_3);
$admin_general_time_work_fotter_4 = $_POST['admin_general_time_work_fotter_4'];
$admin_general_time_work_fotter_4 = convrt_enc($admin_general_time_work_fotter_4);
$admin_general_time_work_fotter_5 = $_POST['admin_general_time_work_fotter_5'];
$admin_general_time_work_fotter_5 = convrt_enc($admin_general_time_work_fotter_5);
$admin_general_time_work_fotter_6 = $_POST['admin_general_time_work_fotter_6'];
$admin_general_time_work_fotter_6 = convrt_enc($admin_general_time_work_fotter_6);
$admin_general_time_work_fotter_7 = $_POST['admin_general_time_work_fotter_7'];
$admin_general_time_work_fotter_7 = convrt_enc($admin_general_time_work_fotter_7);
$admin_general_menu_fotter = $_POST['admin_general_menu_fotter'];
$admin_general_menu_fotter = convrt_enc($admin_general_menu_fotter);
$admin_general_copyright = $_POST['admin_general_copyright'];
$admin_general_copyright = convrt_enc($admin_general_copyright);
$admin_general_vk = $_POST['admin_general_vk'];
$admin_general_vk = convrt_enc($admin_general_vk);
$admin_general_fb = $_POST['admin_general_fb'];
$admin_general_fb = convrt_enc($admin_general_fb);
$admin_general_inst = $_POST['admin_general_inst'];
$admin_general_inst = convrt_enc($admin_general_inst);
$admin_o_nas_main_img = $_POST['admin_o_nas_main_img'];
$admin_o_nas_main_img = convrt_enc($admin_o_nas_main_img);
$admin_o_nas_main_desc = $_POST['admin_o_nas_main_desc'];
$admin_o_nas_main_desc = convrt_enc($admin_o_nas_main_desc);
$admin_o_nas_sert_title = $_POST['admin_o_nas_sert_title'];
$admin_o_nas_sert_title = convrt_enc($admin_o_nas_sert_title);
$admin_o_nas_sert_item = $_POST['admin_o_nas_sert_item'];
$admin_o_nas_sert_item = convrt_enc($admin_o_nas_sert_item);
$admin_o_nas_sert_bg = $_POST['admin_o_nas_sert_bg'];
$admin_o_nas_sert_bg = convrt_enc($admin_o_nas_sert_bg);
$admin_o_nas_adevnt_title = $_POST['admin_o_nas_adevnt_title'];
$admin_o_nas_adevnt_title = convrt_enc($admin_o_nas_adevnt_title);
$admin_o_nas_adevnt_desc = $_POST['admin_o_nas_adevnt_desc'];
$admin_o_nas_adevnt_desc = convrt_enc($admin_o_nas_adevnt_desc);
$admin_o_nas_adevnt_content = $_POST['admin_o_nas_adevnt_content'];
$admin_o_nas_adevnt_content = convrt_enc($admin_o_nas_adevnt_content);
$admin_o_nas_gallery_title = $_POST['admin_o_nas_gallery_title'];
$admin_o_nas_gallery_title = convrt_enc($admin_o_nas_gallery_title);
$admin_o_nas_gallery_content = $_POST['admin_o_nas_gallery_content'];
$admin_o_nas_gallery_content = convrt_enc($admin_o_nas_gallery_content);
$admin_patient_title = $_POST['admin_patient_title'];
$admin_patient_title = convrt_enc($admin_patient_title);
$admin_patient_desc = $_POST['admin_patient_desc'];
$admin_patient_desc = convrt_enc($admin_patient_desc);







$ELEMENT_ID = $codingart_block_id["element_id"];  // код элемента
$IBLOCK_ID = $codingart_block_id["general_id"];
$PROP = array();

$PROP['GEN_COLOR_1']['VALUE'] = $color_1;

$PROP['GEN_COLOR_2']['VALUE'] = $color_2;

$PROP['GEN_COLOR_3']['VALUE'] = $color_3;

$PROP['GEN_COLOR_4']['VALUE'] = $color_4;

$PROP['GEN_COLOR_5']['VALUE'] = $color_5;

$PROP['GEN_COLORS']['ID'] = $colors_id;
$PROP['GENERAL_FIX_MENU']['ID'] = $admin_general_fix_menu_id;


$PROP['MAIN_ORDER_SERV']['ID'] = $admin_main_order_serv;
$PROP['MAIN_ORDER_SALE']['ID'] = $admin_main_order_sale;
$PROP['MAIN_ORDER_SPEC']['ID'] = $admin_main_order_spec;
$PROP['MAIN_ORDER_FORM']['ID'] = $admin_main_order_form;
$PROP['MAIN_ORDER_ONAS']['ID'] = $admin_main_order_onas;
$PROP['MAIN_ORDER_REVI']['ID'] = $admin_main_order_revi;
$PROP['MAIN_ORDER_EVEN']['ID'] = $admin_main_order_even;
$PROP['MAIN_ORDER_NEWS']['ID'] = $admin_main_order_news;



$PROP['MAIN_TITLE']['VALUE'] = $admin_main_title;
$PROP['SERVICES_TITLE']['VALUE'] = $admin_services_title;
$PROP['NEWS_TITLE']['VALUE'] = $admin_news_title;
$PROP['COMPANY_TITLE']['VALUE'] = $admin_company_title;
$PROP['REVIEWS_TITLE']['VALUE'] = $admin_reviews_title;
$PROP['CONTACTS_TITLE']['VALUE'] = $admin_contacts_title;
$PROP['SPEC_TITLE']['VALUE'] = $admin_spec_title;
$PROP['GENERAL_PHONE']['VALUE'] = $admin_general_phone;
$PROP['GENERAL_MAIL']['VALUE'] = $admin_general_mail;
$PROP['EMAIL']['VALUE'] = $admin_email;
$PROP['EMAIL_FROM']['VALUE'] = $admin_email_from;
$PROP['GENERAL_TIME_WORK']['VALUE'] = $admin_general_time_work;
$PROP['GENERAL_FIX_TEXT']['VALUE'] = $admin_general_fix_text;
$PROP['MAIN_SERVICES_TITLE']['VALUE'] = $admin_main_services_title;
$PROP['MAIN_SALE_TITLE']['VALUE'] = $admin_main_sale_title;
$PROP['MAIN_SPEC_BLOCK_TITLE']['VALUE'] = $admin_main_spec_block_title;

$PROP['MAIN_ONAS_TITLE']['VALUE'] = $admin_main_onas_title;

$PROP['MAIN_REVIEWS_TITLE']['VALUE'] = $admin_main_reviews_title;
$PROP['MAIN_EVENT_TITLE']['VALUE'] = $admin_main_event_title;
$PROP['MAIN_NEWS_TITLE']['VALUE'] = $admin_main_news_title;
$PROP['GENERAL_ADRES']['VALUE'] = $admin_general_adres;
$PROP['IME_WORK_FOTTER_TITLE']['VALUE'] = $admin_ime_work_fotter_title;
$PROP['GENERAL_TIME_WORK_FOTTER_1']['VALUE'] = $admin_general_time_work_fotter_1;
$PROP['GENERAL_TIME_WORK_FOTTER_2']['VALUE'] = $admin_general_time_work_fotter_2;
$PROP['GENERAL_TIME_WORK_FOTTER_3']['VALUE'] = $admin_general_time_work_fotter_3;
$PROP['GENERAL_TIME_WORK_FOTTER_4']['VALUE'] = $admin_general_time_work_fotter_4;
$PROP['GENERAL_TIME_WORK_FOTTER_5']['VALUE'] = $admin_general_time_work_fotter_5;
$PROP['GENERAL_TIME_WORK_FOTTER_6']['VALUE'] = $admin_general_time_work_fotter_6;
$PROP['GENERAL_TIME_WORK_FOTTER_7']['VALUE'] = $admin_general_time_work_fotter_7;
$PROP['GENERAL_MENU_FOTTER']['VALUE'] = $admin_general_menu_fotter;

$PROP['GENERAL_VK']['VALUE'] = $admin_general_vk;
$PROP['GENERAL_FB']['VALUE'] = $admin_general_fb;
$PROP['GENERAL_INST']['VALUE'] = $admin_general_inst;

$PROP['O_NAS_SERT_TITLE']['VALUE'] = $admin_o_nas_sert_title;

$PROP['O_NAS_ADEVNT_TITLE']['VALUE'] = $admin_o_nas_adevnt_title;
$PROP['O_NAS_GALLERY_TITLE']['VALUE'] = $admin_o_nas_gallery_title;
$PROP['PATIENT_TITLE']['VALUE'] = $admin_patient_title;

$PROP['GENERAL_COPYRIGHT']['VALUE']['TEXT'] = $admin_general_copyright;
$PROP['MAIN_SERVICES_DESC']['VALUE']['TEXT'] = $admin_main_services_desc;
$PROP['MAIN_SALE_DESC']['VALUE']['TEXT'] = $admin_main_sale_desc;
$PROP['MAIN_SPEC_BLOCK_DESC']['VALUE']['TEXT'] = $admin_main_spec_block_desc;
$PROP['MAIN_ONAS_DESC']['VALUE']['TEXT'] = $admin_main_onas_desc;
$PROP['MAIN_REVIEWS_DESC']['VALUE']['TEXT'] = $admin_main_reviews_desc;
$PROP['MAIN_NEWS_DESC']['VALUE']['TEXT'] = $admin_main_news_desc;
$PROP['GENERAL_DESC']['VALUE']['TEXT'] = $admin_general_desc;
$PROP['O_NAS_MAIN_DESC']['VALUE']['TEXT'] = $admin_o_nas_main_desc;
$PROP['O_NAS_ADEVNT_DESC']['VALUE']['TEXT'] = $admin_o_nas_adevnt_desc;
$PROP['PATIENT_DESC']['VALUE']['TEXT'] = $admin_patient_desc;



CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, $IBLOCK_ID, $PROP);


$PROP['MAIN_SERVICES_ITEMS']['VALUE'] = $admin_main_services_items;
$PROP['MAIN_SALE_ITEMS']['VALUE'] = $admin_main_sale_items;
$PROP['MAIN_SPEC_BLOCK_CONTENT']['VALUE'] = $admin_main_spec_block_content;
$PROP['MAIN_REVIEWS_CONTENT']['VALUE'] = $admin_main_reviews_content;
$PROP['MAIN_EVENT_CONTENT']['VALUE'] = $admin_main_event_content;
$PROP['MAIN_NEWS_CONTENT']['VALUE'] = $admin_main_news_content;
$PROP['O_NAS_ADEVNT_CONTENT']['VALUE'] = $admin_o_nas_adevnt_content;
$PROP['O_NAS_GALLERY_CONTENT']['VALUE'] = $admin_o_nas_gallery_content;

CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, $IBLOCK_ID, array(
	'GENERAL_MENU_SERVICES' => $admin_general_menu_services,
	'MAIN_SERVICES_ITEMS' => $admin_main_services_items,
	'MAIN_SALE_ITEMS' => $admin_main_sale_items,
	'MAIN_SPEC_BLOCK_CONTENT' => $admin_main_spec_block_content,
	'MAIN_REVIEWS_CONTENT' => $admin_main_reviews_content,
	'MAIN_EVENT_CONTENT' => $admin_main_event_content,
	'MAIN_NEWS_CONTENT' => $admin_main_news_content,
	'O_NAS_ADEVNT_CONTENT' => $admin_o_nas_adevnt_content,
	'O_NAS_GALLERY_CONTENT' => $admin_o_nas_gallery_content,
	'MAIN_ONAS_ITEMS_ADV' => $admin_main_onas_items_adv,
	'O_NAS_SERT_ITEM' => $admin_o_nas_sert_item,
)
);


/*
$PROPERTY_CODE = "GENERAL_MENU_SERVICES";  
$PROPERTY_VALUE = $admin_general_menu_services;
CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, $IBLOCK_ID, array($PROPERTY_CODE => $PROPERTY_VALUE));*/



if($admin_o_nas_main_img){ 
	$url_img = CFile::GetPath($admin_o_nas_main_img);
	$arFile = CFile::MakeFileArray($url_img);
	CIBlockElement::SetPropertyValueCode($ELEMENT_ID, "O_NAS_MAIN_IMG", $arFile);
}

if($admin_o_nas_sert_bg){ 
	$url_img = CFile::GetPath($admin_o_nas_sert_bg);
	$arFile = CFile::MakeFileArray($url_img);
	CIBlockElement::SetPropertyValueCode($ELEMENT_ID, "O_NAS_SERT_BG", $arFile);
}

if($admin_main_onas_img){ 
	$url_img = CFile::GetPath($admin_main_onas_img);
	$arFile = CFile::MakeFileArray($url_img);
	CIBlockElement::SetPropertyValueCode($ELEMENT_ID, "MAIN_ONAS_IMG", $arFile);
}

if($admin_general_logo){ 
	$url_img = CFile::GetPath($admin_general_logo);
	$arFile = CFile::MakeFileArray($url_img);
	CIBlockElement::SetPropertyValueCode($ELEMENT_ID, "GENERAL_LOGO", $arFile);
}
CIBlock::clearIblockTagCache($IBLOCK_ID);
?>