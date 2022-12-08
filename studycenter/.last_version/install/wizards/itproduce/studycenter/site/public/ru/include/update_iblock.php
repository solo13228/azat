<?
require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";
require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/iblock_id_link.php");
use Bitrix\Main\Entity;
use Bitrix\Main\Type\DateTime;
CModule::IncludeModule("iblock");
$elementID = $GLOBALS["itproduce_block_id"]["element_id"];
$iblockID = $GLOBALS["itproduce_block_id"]["general_id"];
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


$admin_MAIN_ORDER_WELC = $_POST['admin_MAIN_ORDER_WELC'];
$admin_MAIN_ORDER_WELC = convrt_enc($admin_MAIN_ORDER_WELC);
$admin_MAIN_ORDER_LASTN = $_POST['admin_MAIN_ORDER_LASTN'];
$admin_MAIN_ORDER_LASTN = convrt_enc($admin_MAIN_ORDER_LASTN);
$admin_MAIN_ORDER_CLAS = $_POST['admin_MAIN_ORDER_CLAS'];
$admin_MAIN_ORDER_CLAS = convrt_enc($admin_MAIN_ORDER_CLAS);
$admin_MAIN_ORDER_TEACH = $_POST['admin_MAIN_ORDER_TEACH'];
$admin_MAIN_ORDER_TEACH = convrt_enc($admin_MAIN_ORDER_TEACH);
$admin_MAIN_ORDER_COURS = $_POST['admin_MAIN_ORDER_COURS'];
$admin_MAIN_ORDER_COURS = convrt_enc($admin_MAIN_ORDER_COURS);
$admin_MAIN_ORDER_WAY = $_POST['admin_MAIN_ORDER_WAY'];
$admin_MAIN_ORDER_WAY = convrt_enc($admin_MAIN_ORDER_WAY);





$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_WELC"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_MAIN_ORDER_WELC==$enum_fields["XML_ID"]){$admin_MAIN_ORDER_WELC=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_LASTN"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_MAIN_ORDER_LASTN==$enum_fields["XML_ID"]){$admin_MAIN_ORDER_LASTN=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_CLAS"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_MAIN_ORDER_CLAS==$enum_fields["XML_ID"]){$admin_MAIN_ORDER_CLAS=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_TEACH"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_MAIN_ORDER_TEACH==$enum_fields["XML_ID"]){$admin_MAIN_ORDER_TEACH=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_COURS"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_MAIN_ORDER_COURS==$enum_fields["XML_ID"]){$admin_MAIN_ORDER_COURS=$enum_fields["ID"];}

$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblockID, "CODE"=>"MAIN_ORDER_WAY"));
	while($enum_fields = $property_enums->GetNext())
	   if($admin_MAIN_ORDER_WAY==$enum_fields["XML_ID"]){$admin_MAIN_ORDER_WAY=$enum_fields["ID"];}



	/*
if($admin_MAIN_ORDER_WAY=='2') $admin_MAIN_ORDER_WAY = 104;
if($admin_MAIN_ORDER_WAY=='3') $admin_MAIN_ORDER_WAY = 105;
if($admin_MAIN_ORDER_WAY=='4') $admin_MAIN_ORDER_WAY = 106;
if($admin_MAIN_ORDER_WAY=='5') $admin_MAIN_ORDER_WAY = 107;
if($admin_MAIN_ORDER_WAY=='6') $admin_MAIN_ORDER_WAY = 108;
if($admin_MAIN_ORDER_WAY=='7') $admin_MAIN_ORDER_WAY = 109;
if($admin_MAIN_ORDER_WAY=='8') $admin_MAIN_ORDER_WAY = 110;
if($admin_MAIN_ORDER_WAY=='9') $admin_MAIN_ORDER_WAY = 111;

if($admin_MAIN_ORDER_WELC=='2') $admin_MAIN_ORDER_WELC = 114;
if($admin_MAIN_ORDER_WELC=='3') $admin_MAIN_ORDER_WELC = 115;
if($admin_MAIN_ORDER_WELC=='4') $admin_MAIN_ORDER_WELC = 116;
if($admin_MAIN_ORDER_WELC=='5') $admin_MAIN_ORDER_WELC = 117;
if($admin_MAIN_ORDER_WELC=='6') $admin_MAIN_ORDER_WELC = 118;
if($admin_MAIN_ORDER_WELC=='7') $admin_MAIN_ORDER_WELC = 119;
if($admin_MAIN_ORDER_WELC=='8') $admin_MAIN_ORDER_WELC = 120;
if($admin_MAIN_ORDER_WELC=='9') $admin_MAIN_ORDER_WELC = 121;

if($admin_MAIN_ORDER_CLAS=='2') $admin_MAIN_ORDER_CLAS = 124;
if($admin_MAIN_ORDER_CLAS=='3') $admin_MAIN_ORDER_CLAS = 125;
if($admin_MAIN_ORDER_CLAS=='4') $admin_MAIN_ORDER_CLAS = 126;
if($admin_MAIN_ORDER_CLAS=='5') $admin_MAIN_ORDER_CLAS = 127;
if($admin_MAIN_ORDER_CLAS=='6') $admin_MAIN_ORDER_CLAS = 128;
if($admin_MAIN_ORDER_CLAS=='7') $admin_MAIN_ORDER_CLAS = 129;
if($admin_MAIN_ORDER_CLAS=='8') $admin_MAIN_ORDER_CLAS = 130;
if($admin_MAIN_ORDER_CLAS=='9') $admin_MAIN_ORDER_CLAS = 131;

if($admin_MAIN_ORDER_TEACH=='2') $admin_MAIN_ORDER_TEACH = 174;
if($admin_MAIN_ORDER_TEACH=='3') $admin_MAIN_ORDER_TEACH = 175;
if($admin_MAIN_ORDER_TEACH=='4') $admin_MAIN_ORDER_TEACH = 176;
if($admin_MAIN_ORDER_TEACH=='5') $admin_MAIN_ORDER_TEACH = 177;
if($admin_MAIN_ORDER_TEACH=='6') $admin_MAIN_ORDER_TEACH = 178;
if($admin_MAIN_ORDER_TEACH=='7') $admin_MAIN_ORDER_TEACH = 179;
if($admin_MAIN_ORDER_TEACH=='8') $admin_MAIN_ORDER_TEACH = 180;
if($admin_MAIN_ORDER_TEACH=='9') $admin_MAIN_ORDER_TEACH = 181;

if($admin_MAIN_ORDER_COURS=='2') $admin_MAIN_ORDER_COURS = 134;
if($admin_MAIN_ORDER_COURS=='3') $admin_MAIN_ORDER_COURS = 135;
if($admin_MAIN_ORDER_COURS=='4') $admin_MAIN_ORDER_COURS = 136;
if($admin_MAIN_ORDER_COURS=='5') $admin_MAIN_ORDER_COURS = 137;
if($admin_MAIN_ORDER_COURS=='6') $admin_MAIN_ORDER_COURS = 138;
if($admin_MAIN_ORDER_COURS=='7') $admin_MAIN_ORDER_COURS = 139;
if($admin_MAIN_ORDER_COURS=='8') $admin_MAIN_ORDER_COURS = 140;
if($admin_MAIN_ORDER_COURS=='9') $admin_MAIN_ORDER_COURS = 141;

if($admin_MAIN_ORDER_LASTN=='2') $admin_MAIN_ORDER_LASTN = 144;
if($admin_MAIN_ORDER_LASTN=='3') $admin_MAIN_ORDER_LASTN = 145;
if($admin_MAIN_ORDER_LASTN=='4') $admin_MAIN_ORDER_LASTN = 146;
if($admin_MAIN_ORDER_LASTN=='5') $admin_MAIN_ORDER_LASTN = 147;
if($admin_MAIN_ORDER_LASTN=='6') $admin_MAIN_ORDER_LASTN = 148;
if($admin_MAIN_ORDER_LASTN=='7') $admin_MAIN_ORDER_LASTN = 149;
if($admin_MAIN_ORDER_LASTN=='8') $admin_MAIN_ORDER_LASTN = 150;
if($admin_MAIN_ORDER_LASTN=='9') $admin_MAIN_ORDER_LASTN = 151;

*/
	$admin_main_title = $_POST['admin_main_title'];
	$admin_main_title = convrt_enc($admin_main_title);
	$admin_CLASs_title = $_POST['admin_class_title'];
	$admin_CLASs_title = convrt_enc($admin_CLASs_title);
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
	$admin_general_menu_class = $_POST['admin_general_menu_class'];
	$admin_general_phone = $_POST['admin_general_phone'];
	$admin_general_phone = convrt_enc($admin_general_phone);
	$admin_general_phone_two = $_POST['admin_general_phone_two'];
	$admin_general_phone_two = convrt_enc($admin_general_phone_two);
	$admin_general_mail = $_POST['admin_general_mail'];
	$admin_general_mail = convrt_enc($admin_general_mail);
	$admin_email = $_POST['admin_email'];
	$admin_email = convrt_enc($admin_email);
	$admin_general_wh = $_POST['admin_general_wh'];
	$admin_general_wh = convrt_enc($admin_general_wh);
	$admin_general_fix_text = $_POST['admin_general_fix_text'];
	$admin_general_fix_text = convrt_enc($admin_general_fix_text);
	$admin_main_class_title = $_POST['admin_main_class_title'];
	$admin_main_class_title = convrt_enc($admin_main_class_title);
	$admin_main_class_desc = $_POST['admin_main_class_desc'];
	$admin_main_class_desc = convrt_enc($admin_main_class_desc);
	$admin_main_class_items = $_POST['admin_main_class_items'];
	$admin_main_class_items = convrt_enc($admin_main_class_items);
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



$ELEMENT_ID = $GLOBALS["itproduce_block_id"]["element_id"];
$IBLOCK_ID = $GLOBALS["itproduce_block_id"]["general_id"];
$PROP = array();

$PROP['GEN_COLOR_1']['VALUE'] = $color_1;

$PROP['GEN_COLOR_2']['VALUE'] = $color_2;

$PROP['GEN_COLOR_3']['VALUE'] = $color_3;

$PROP['GEN_COLOR_4']['VALUE'] = $color_4;

$PROP['GEN_COLOR_5']['VALUE'] = $color_5;

$PROP['GEN_COLORS']['ID'] = $colors_id;
$PROP['GENERAL_FIX_MENU']['ID'] = $admin_general_fix_menu_id;


$PROP['MAIN_ORDER_WELC']['ID'] = $admin_MAIN_ORDER_WELC;
$PROP['MAIN_ORDER_LASTN']['ID'] = $admin_MAIN_ORDER_LASTN;
$PROP['MAIN_ORDER_CLAS']['ID'] = $admin_MAIN_ORDER_CLAS;
$PROP['MAIN_ORDER_TEACH']['ID'] = $admin_MAIN_ORDER_TEACH;
$PROP['MAIN_ORDER_COURS']['ID'] = $admin_MAIN_ORDER_COURS;
$PROP['MAIN_ORDER_WAY']['ID'] = $admin_MAIN_ORDER_WAY;





$PROP['PHONE']['VALUE'] = $admin_general_phone;


$PROP['WORK_HOURS']['VALUE'] = $admin_general_wh;


$PROP['ADRESS']['VALUE'] = $admin_general_adres;


$PROP['VK_URL']['VALUE'] = $admin_general_vk;

$PROP['INST_URL']['VALUE'] = $admin_general_inst;

$PROP['YT_URL']['VALUE'] = $admin_general_yt;



$PROP['MAIN_CLASS_DESC']['VALUE']['TEXT'] = $admin_main_class_desc;
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
echo $_POST['admin_general_menu_CLASs'];
foreach($admin_general_menu_CLASs as $values){
 echo $values.'>';
}
echo '))'.$admin_general_menu_CLASs;

/*function console_log($data){ // ñàìà ôóíêöèÿ
    if(is_array($data) || is_object($data)){
		echo("<script>console.log('php_array: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('php_string: ".$data."');</script>");
	}
}

console_log($PROP);*/





//move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER["DOCUMENT_ROOT"].'/upload/tmp/' . $_FILES['file']['name']);




if($admin_main_CLASs_items)
$PROP['MAIN_CLASS_ITEMS']['VALUE'] = $admin_main_CLASs_items;
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
		'GENERAL_MENU_CLASS' => $admin_general_menu_CLASs,
		'MAIN_CLASS_ITEMS' => $admin_main_CLASs_items,
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