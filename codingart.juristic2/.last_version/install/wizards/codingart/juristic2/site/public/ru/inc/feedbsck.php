<?require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_id_link.php");?>
<?

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
use Bitrix\Main\Type\DateTime;

IncludeModuleLangFile(__FILE__);

if($_POST['profile_phone']==''){ 
 print ' ';
}else{

  
  $str_form = str_replace(' ', '', $_POST["feed_form"]);
  $str_form = ltrim($str_form);
  $forms = explode(",", $str_form);
  unset($forms[count($forms) - 1]);
  $arFields = Array(
      "AUTHOR" => $_POST["user_name"],
      "AUTHOR_EMAIL" => $_POST["from_mail"],
      "EMAIL_TO" => $arParams["admin_mail"],
      "TEXT" => $_POST["MESSAGE"],
      "profile_phone" => $_POST["profile_phone"],
      "profile_data" => $_POST["profile_data"],
      "profile_time" => $_POST["profile_time"],
      "profile_select" => $_POST["profile_select"],
      "form_class" => $_POST['form_class'],
      "title" => $_POST['title'],
      "user_name" => $_POST['user_name'],
      "from_mail" => $_POST['from_mail'],
      "admin_mail" => $_POST['admin_mail'],
    );
  foreach ($forms as $key => $value) {
    CEvent::Send("FEEDBACK_FORM", SITE_ID, $arFields, false, $value);    
  }

if($_POST['form_class']=="new_reviews"){
	$coment = $_POST['profile_coment'];
	$name = $_POST['profile_name'];

	$name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
	$coment_utf8 = mb_convert_encoding($coment, LANG_CHARSET, mb_detect_encoding($coment));

    if(CModule::IncludeModule("iblock")){    
        if($_POST["profile_name"]!=""){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['reviews_id'], 
              "PREVIEW_TEXT"	  => $coment_utf8,                // id инфоблока, который вы создали
              "NAME"              => $name_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REVIEWS_NAME_DETAL"      =>   $_POST["profile_phone"]
               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}


if($_POST['form_class']=="form_1"){
	$title = $_POST['title'];
	$phone = $_POST['profile_phone'];


	$title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));

    if(CModule::IncludeModule("iblock")){    
        if($_POST["profile_name"]!=""){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_1'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"      =>   $phone,

               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}

if($_POST['form_class']=="form_2"){
	$title = $_POST['coment'];
	$phone = $_POST['profile_phone'];
	$name = $_POST['profile_name'];


	$name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
	$title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));
	
    if(CModule::IncludeModule("iblock")){    
        if($_POST){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_2'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"      =>  $phone,
                  "REQ_NAME"      =>   $name_utf8,

               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}

if($_POST['form_class']=="form_3"){
	$title = $_POST['profile_name'];
	$phone = $_POST['profile_phone'];
	$name = $_POST['profile_name'];
	$email = $_POST['profile_mail'];
	$messg = $_POST['profile_coment'];

	$name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
	$title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));
	$messg_utf8 = mb_convert_encoding($messg, LANG_CHARSET, mb_detect_encoding($messg));
    if(CModule::IncludeModule("iblock")){    
        if($_POST){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_3'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"      =>  $phone,
                  "REQ_EMAIL"      =>  $email,
                  "REQ_NAME"      =>   $name_utf8,
                  "REQ_MESS"      =>   $messg_utf8
               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}

if($_POST['form_class']=="form_4"){
	$title = $_POST['title'];
	$phone = $_POST['profile_phone'];
	$name = $_POST['profile_name'];

	$name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
	$title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));

    if(CModule::IncludeModule("iblock")){    
        if($_POST["profile_name"]!=""){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_4'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"      =>   $phone,
                  "REQ_NAME"      =>   $name_utf8
               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}

if($_POST['form_class']=="form_5"){
  $title = $_POST['title']; 
  $phone = $_POST['profile_phone'];
  $name = $_POST['profile_name'];
  $coment = $_POST['profile_coment'];

  $name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
  $title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));
  $coment_utf8 = mb_convert_encoding($coment, LANG_CHARSET, mb_detect_encoding($coment));

    if(CModule::IncludeModule("iblock")){    
        if($_POST["profile_name"]!=""){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_5'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"     =>   $phone,
                  "REQ_NAME"      =>    $name_utf8,
                  "REQ_MESS"      =>   $coment_utf8
               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}

if($_POST['form_class']=="form_6"){
  $title = $_POST['title']; 
  $phone = $_POST['profile_phone'];
  $name = $_POST['profile_name'];
  $coment = $_POST['profile_coment'];

  $name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
  $title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));
  $coment_utf8 = mb_convert_encoding($coment, LANG_CHARSET, mb_detect_encoding($coment));

    if(CModule::IncludeModule("iblock")){    
        if($_POST["profile_name"]!=""){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_6'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"     =>   $phone,
                  "REQ_NAME"      =>    $name_utf8,
                  "REQ_COMENT"      =>   $coment_utf8
               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}
if($_POST['form_class']=="form_7"){
  $title = $_POST['title'];
  $phone = $_POST['profile_phone'];
  $name = $_POST['profile_name'];


  $name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
  $title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));
  
    if(CModule::IncludeModule("iblock")){    
        if($_POST){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_7'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"      =>  $phone,
                  "REQ_NAME"      =>   $name_utf8,

               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}
if($_POST['form_class']=="form_9"){
	$title = $_POST['title'];
	$phone = $_POST['profile_phone'];
	$name = $_POST['profile_name'];
	$select = $_POST['profile_select'];
	$data = $_POST['profile_data'];
	$time = $_POST['profile_time'];

	$name_utf8 = mb_convert_encoding($name, LANG_CHARSET, mb_detect_encoding($name));
	$title_utf8 = mb_convert_encoding($title, LANG_CHARSET, mb_detect_encoding($title));
	
    if(CModule::IncludeModule("iblock")){    
        if($_POST){
            echo "";
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
              "MODIFIED_BY"       => $USER->GetID(),    // элемент изменен текущим пользователем
              "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
              "IBLOCK_ID"         => $codingart_block_id['requests_9'], 
              "NAME"              => $title_utf8, // имя пользователя будет именем элемента
              "PROPERTY_VALUES"   => array(
                  "REQ_PHONE"     =>  $phone,
                  "REQ_NAME"      =>  $name_utf8,
 				  "REQ_SELECT"    =>  $select,
 				  "REQ_DATA"      =>  $data,
 				  "REQ_TIME"      =>  $time

               ),
              "ACTIVE"            => "N"             // убираем активность
            
              );  
            if($PRODUCT_ID = $el->Add($arLoadProductArray))
              echo "";
            else
              echo "";
        }else{
            echo "";
        }
    }
}




}

?>