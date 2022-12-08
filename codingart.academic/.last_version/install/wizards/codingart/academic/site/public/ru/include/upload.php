<?php
if ( 0 < $_FILES['file']['error'] ) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else {
    // move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
    // echo 'да';
    // var_dump($_FILES['file']);
    // //move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER["DOCUMENT_ROOT"].'/upload/tmp/' . $_FILES['file']['name']);
	require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";
	require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/iblock_id_link.php");

	$IBLOCK_ID = $GLOBALS["codingart_block_id"]["general_id"];
	$ELEMENT_ID = $GLOBALS["codingart_block_id"]["element_id"];

	CModule::IncludeModule("iblock");

	if(!empty($_FILES['file'])){ 
		$url_img = CFile::GetPath($_POST['sortpic']);
		$arFile = CFile::MakeFileArray($url_img);
		CIBlockElement::SetPropertyValueCode($ELEMENT_ID, "LOGO", $_FILES['file']);
	}
}
?>
