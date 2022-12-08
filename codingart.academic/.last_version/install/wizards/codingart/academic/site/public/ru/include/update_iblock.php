<?
require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";
require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/iblock_id_link.php");
use Bitrix\Main\Entity;
use Bitrix\Main\Type\DateTime;
CModule::IncludeModule("iblock");
$elementID = $GLOBALS["codingart_block_id"]["element_id"];
$iblockID = $GLOBALS["codingart_block_id"]["general_id"];
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

if($_POST['admin_main_order_slider']){
$admin_main_order_slider = $_POST['admin_main_order_slider'];
$admin_main_order_slider = convrt_enc($admin_main_order_slider);
}
if($_POST['admin_main_order_benefits']){
$admin_main_order_benefits = $_POST['admin_main_order_benefits'];
$admin_main_order_benefits = convrt_enc($admin_main_order_benefits);
}
if($_POST['admin_main_order_welcome']){
$admin_main_order_welcome = $_POST['admin_main_order_welcome'];
$admin_main_order_welcome = convrt_enc($admin_main_order_welcome);
}
if($_POST['admin_main_order_cours']){
$admin_main_order_cours = $_POST['admin_main_order_cours'];
$admin_main_order_cours = convrt_enc($admin_main_order_cours);
}
if($_POST['admin_main_order_video']){
$admin_main_order_video = $_POST['admin_main_order_video'];
$admin_main_order_video = convrt_enc($admin_main_order_video);
}
if($_POST['admin_main_order_events']){
$admin_main_order_events = $_POST['admin_main_order_events'];
$admin_main_order_events = convrt_enc($admin_main_order_events);
}
if($_POST['admin_main_order_reviews']){
$admin_main_order_reviews = $_POST['admin_main_order_reviews'];
$admin_main_order_reviews = convrt_enc($admin_main_order_reviews);
}
if($_POST['admin_main_order_blog']){
$admin_main_order_blog = $_POST['admin_main_order_blog'];
$admin_main_order_blog = convrt_enc($admin_main_order_blog);
}



$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_SLIDER"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_slider==$enum_fields["XML_ID"]){$admin_main_order_slider=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_BENEFITS"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_benefits==$enum_fields["XML_ID"]){$admin_main_order_benefits=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_WELCOME"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_welcome==$enum_fields["XML_ID"]){$admin_main_order_welcome=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_COURS"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_cours==$enum_fields["XML_ID"]){$admin_main_order_cours=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_VIDEO"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_video==$enum_fields["XML_ID"]){$admin_main_order_video=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_EVENTS"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_events==$enum_fields["XML_ID"]){$admin_main_order_events=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_REVIEWS"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_reviews==$enum_fields["XML_ID"]){$admin_main_order_reviews=$enum_fields["ID"];}
   
$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_BLOG"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_main_order_blog==$enum_fields["XML_ID"]){$admin_main_order_blog=$enum_fields["ID"];}


if($_POST['admin_main_title']){
	$admin_main_title = $_POST['admin_main_title'];
	$admin_main_title = convrt_enc($admin_main_title);
}
if($_POST['admin_services_title']){
	$admin_services_title = $_POST['admin_services_title'];
	$admin_services_title = convrt_enc($admin_services_title);
}
if($_POST['admin_news_title']){
	$admin_news_title = $_POST['admin_news_title'];
	$admin_news_title = convrt_enc($admin_news_title);
}
if($_POST['admin_company_title']){
	$admin_company_title = $_POST['admin_company_title'];
	$admin_company_title = convrt_enc($admin_company_title);
}
if($_POST['admin_reviews_title']){
	$admin_reviews_title = $_POST['admin_reviews_title'];
	$admin_reviews_title = convrt_enc($admin_reviews_title);
}
if($_POST['admin_contacts_title']){
	$admin_contacts_title = $_POST['admin_contacts_title'];
	$admin_contacts_title = convrt_enc($admin_contacts_title);
}
if($_POST['admin_spec_title']){
	$admin_spec_title = $_POST['admin_spec_title'];
	$admin_spec_title = convrt_enc($admin_spec_title);
}
if($_POST['admin_general_menu_services']){
	$admin_general_menu_services = $_POST['admin_general_menu_services'];
	//$admin_general_menu_services = convrt_enc($admin_general_menu_services);
}

if($_POST['admin_general_phone']){
	$admin_general_phone = $_POST['admin_general_phone'];
	$admin_general_phone = convrt_enc($admin_general_phone);
}
if($_POST['admin_general_phone_two']){
	$admin_general_phone_two = $_POST['admin_general_phone_two'];
	$admin_general_phone_two = convrt_enc($admin_general_phone_two);
}
if($_POST['admin_general_mail']){
	$admin_general_mail = $_POST['admin_general_mail'];
	$admin_general_mail = convrt_enc($admin_general_mail);
}
if($_POST['admin_email']){
	$admin_email = $_POST['admin_email'];
	$admin_email = convrt_enc($admin_email);
}
if($_POST['admin_general_wh']){
	$admin_general_wh = $_POST['admin_general_wh'];
	$admin_general_wh = convrt_enc($admin_general_wh);
}
if($_POST['admin_general_fix_text']){
	$admin_general_fix_text = $_POST['admin_general_fix_text'];
	$admin_general_fix_text = convrt_enc($admin_general_fix_text);
}

if($_POST['admin_main_services_title']){
	$admin_main_services_title = $_POST['admin_main_services_title'];
	$admin_main_services_title = convrt_enc($admin_main_services_title);
}
if($_POST['admin_main_services_desc']){
	$admin_main_services_desc = $_POST['admin_main_services_desc'];
	$admin_main_services_desc = convrt_enc($admin_main_services_desc);
}
if($_POST['admin_main_services_items']){
	$admin_main_services_items = $_POST['admin_main_services_items'];
	$admin_main_services_items = convrt_enc($admin_main_services_items);
}
if($_POST['admin_main_sale_title']){
	$admin_main_sale_title = $_POST['admin_main_sale_title'];
	$admin_main_sale_title = convrt_enc($admin_main_sale_title);
}
if($_POST['admin_main_sale_desc']){
	$admin_main_sale_desc = $_POST['admin_main_sale_desc'];
	$admin_main_sale_desc = convrt_enc($admin_main_sale_desc);
}
if($_POST['admin_main_sale_items']){
	$admin_main_sale_items = $_POST['admin_main_sale_items'];
	$admin_main_sale_items = convrt_enc($admin_main_sale_items);
}
if($_POST['admin_main_spec_block_title']){
	$admin_main_spec_block_title = $_POST['admin_main_spec_block_title'];
	$admin_main_spec_block_title = convrt_enc($admin_main_spec_block_title);
}
if($_POST['admin_main_spec_block_desc']){
	$admin_main_spec_block_desc = $_POST['admin_main_spec_block_desc'];
	$admin_main_spec_block_desc = convrt_enc($admin_main_spec_block_desc);
}
if($_POST['admin_main_spec_block_content']){
	$admin_main_spec_block_content = $_POST['admin_main_spec_block_content'];
	$admin_main_spec_block_content = convrt_enc($admin_main_spec_block_content);
}
if($_POST['admin_main_onas_img']){
	$admin_main_onas_img = $_POST['admin_main_onas_img'];
	$admin_main_onas_img = convrt_enc($admin_main_onas_img);
}
if($_POST['admin_main_onas_title']){
	$admin_main_onas_title = $_POST['admin_main_onas_title'];
	$admin_main_onas_title = convrt_enc($admin_main_onas_title);
}
if($_POST['admin_main_onas_desc']){
	$admin_main_onas_desc = $_POST['admin_main_onas_desc'];
	$admin_main_onas_desc = convrt_enc($admin_main_onas_desc);
}
if($_POST['admin_main_onas_items_adv']){
	$admin_main_onas_items_adv = $_POST['admin_main_onas_items_adv'];
	$admin_main_onas_items_adv = convrt_enc($admin_main_onas_items_adv);
}
if($_POST['admin_main_reviews_title']){
	$admin_main_reviews_title = $_POST['admin_main_reviews_title'];
	$admin_main_reviews_title = convrt_enc($admin_main_reviews_title);
}
if($_POST['admin_main_reviews_desc']){
	$admin_main_reviews_desc = $_POST['admin_main_reviews_desc'];
	$admin_main_reviews_desc = convrt_enc($admin_main_reviews_desc);
}
if($_POST['admin_main_reviews_content']){
	$admin_main_reviews_content = $_POST['admin_main_reviews_content'];
	$admin_main_reviews_content = convrt_enc($admin_main_reviews_content);
}
if($_POST['admin_main_event_title']){
	$admin_main_event_title = $_POST['admin_main_event_title'];
	$admin_main_event_title = convrt_enc($admin_main_event_title);
}
if($_POST['admin_main_event_content']){
	$admin_main_event_content = $_POST['admin_main_event_content'];
	$admin_main_event_content = convrt_enc($admin_main_event_content);
}
if($_POST['admin_main_news_title']){
	$admin_main_news_title = $_POST['admin_main_news_title'];
	$admin_main_news_title = convrt_enc($admin_main_news_title);
}
if($_POST['admin_main_news_desc']){
	$admin_main_news_desc = $_POST['admin_main_news_desc'];
	$admin_main_news_desc = convrt_enc($admin_main_news_desc);
}
if($_POST['admin_main_news_content']){
	$admin_main_news_content = $_POST['admin_main_news_content'];
	$admin_main_news_content = convrt_enc($admin_main_news_content);
}


$ELEMENT_ID = $GLOBALS["codingart_block_id"]["element_id"];
$IBLOCK_ID = $GLOBALS["codingart_block_id"]["general_id"];
$PROP = array();

$PROP['GEN_COLOR_1']['VALUE'] = $color_1;

$PROP['GEN_COLOR_2']['VALUE'] = $color_2;

$PROP['GEN_COLOR_3']['VALUE'] = $color_3;

$PROP['GEN_COLOR_4']['VALUE'] = $color_4;

$PROP['GEN_COLOR_5']['VALUE'] = $color_5;

$PROP['GEN_COLORS']['ID'] = $colors_id;
$PROP['GENERAL_FIX_MENU']['ID'] = $admin_general_fix_menu_id;


$PROP['MAIN_ORDER_SLIDER']['ID'] = $admin_main_order_slider;
$PROP['MAIN_ORDER_BENEFITS']['ID'] = $admin_main_order_benefits;
$PROP['MAIN_ORDER_WELCOME']['ID'] = $admin_main_order_welcome;
$PROP['MAIN_ORDER_COURS']['ID'] = $admin_main_order_cours;
$PROP['MAIN_ORDER_VIDEO']['ID'] = $admin_main_order_video;
$PROP['MAIN_ORDER_EVENTS']['ID'] = $admin_main_order_events;
$PROP['MAIN_ORDER_REVIEWS']['ID'] = $admin_main_order_reviews;
$PROP['MAIN_ORDER_BLOG']['ID'] = $admin_main_order_blog;




$PROP['PHONE']['VALUE'] = $admin_general_phone;

$PROP['PHONE_2']['VALUE'] = $admin_general_phone_two;

$PROP['ADRESS']['VALUE'] = $admin_general_adress;

$PROP['MAIL']['VALUE'] = $admin_general_mail;

$PROP['URL_1']['VALUE'] = $admin_general_url_1;

$PROP['URL_2']['VALUE'] = $admin_general_url_2;

$PROP['URL_3']['VALUE'] = $admin_general_url_3;

$PROP['URL_4']['VALUE'] = $admin_general_url_4;


if($admin_main_services_desc)
$PROP['MAIN_SERVICES_DESC']['VALUE']['TEXT'] = $admin_main_services_desc;
if($admin_main_sale_desc)
$PROP['MAIN_SALE_DESC']['VALUE']['TEXT'] = $admin_main_sale_desc;
if($admin_main_spec_block_desc)
$PROP['MAIN_SPEC_BLOCK_DESC']['VALUE']['TEXT'] = $admin_main_spec_block_desc;
if($admin_main_onas_desc)
$PROP['MAIN_ONAS_DESC']['VALUE']['TEXT'] = $admin_main_onas_desc;
if($admin_main_reviews_desc)
$PROP['MAIN_REVIEWS_DESC']['VALUE']['TEXT'] = $admin_main_reviews_desc;
if($admin_main_news_desc)
$PROP['MAIN_NEWS_DESC']['VALUE']['TEXT'] = $admin_main_news_desc;
if($admin_general_desc)
$PROP['GENERAL_DESC']['VALUE']['TEXT'] = $admin_general_desc;
if($admin_o_nas_main_desc)
$PROP['O_NAS_MAIN_DESC']['VALUE']['TEXT'] = $admin_o_nas_main_desc;
if($admin_o_nas_adevnt_desc)
$PROP['O_NAS_ADEVNT_DESC']['VALUE']['TEXT'] = $admin_o_nas_adevnt_desc;
if($admin_patient_desc)
$PROP['PATIENT_DESC']['VALUE']['TEXT'] = $admin_patient_desc;



CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, $IBLOCK_ID, $PROP);
echo $_POST['admin_general_menu_class'];
foreach($admin_general_menu_class as $values){
 echo $values.'>';
}
echo '))'.$admin_general_menu_class;

/*function console_log($data){ // ñàìà ôóíêöèÿ
    if(is_array($data) || is_object($data)){
		echo("<script>console.log('php_array: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('php_string: ".$data."');</script>");
	}
}

console_log($PROP);*/





//move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER["DOCUMENT_ROOT"].'/upload/tmp/' . $_FILES['file']['name']);




if($admin_main_class_items)
$PROP['MAIN_CLASS_ITEMS']['VALUE'] = $admin_main_class_items;
if($admin_main_sale_items)
$PROP['MAIN_SALE_ITEMS']['VALUE'] = $admin_main_sale_items;
if($admin_main_spec_block_content)
$PROP['MAIN_SPEC_BLOCK_CONTENT']['VALUE'] = $admin_main_spec_block_content;
if($admin_main_reviews_content)
$PROP['MAIN_REVIEWS_CONTENT']['VALUE'] = $admin_main_reviews_content;
if($admin_main_event_content)
$PROP['MAIN_EVENT_CONTENT']['VALUE'] = $admin_main_event_content;
if($admin_main_news_content)
$PROP['MAIN_NEWS_CONTENT']['VALUE'] = $admin_main_news_content;
if($admin_o_nas_adevnt_content)
$PROP['O_NAS_ADEVNT_CONTENT']['VALUE'] = $admin_o_nas_adevnt_content;
if($admin_o_nas_gallery_content)
$PROP['O_NAS_GALLERY_CONTENT']['VALUE'] = $admin_o_nas_gallery_content;

CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, $IBLOCK_ID, array(
		'GENERAL_MENU_CLASS' => $admin_general_menu_class,
		'MAIN_CLASS_ITEMS' => $admin_main_class_items,
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
$PROPERTY_CODE = "GENERAL_MENU_CLASS";  
$PROPERTY_VALUE = $admin_general_menu_CLASs;
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



?>