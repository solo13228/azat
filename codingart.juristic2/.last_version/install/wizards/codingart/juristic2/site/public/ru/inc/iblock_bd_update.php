

<?
require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";
require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."inc/iblock_id_link.php");
global $DB;
$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['services_id']."' WHERE CODE = 'GENERAL_MENU_SERVICES' AND IBLOCK_ID = '".$codingart_block_id['general_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);

$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['sale_id']."' WHERE CODE = 'SERVICES_SALE_PRICE' AND IBLOCK_ID = '".$codingart_block_id['services_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);

$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['specialists_id']."' WHERE CODE = 'SERVICES_SPEC' AND IBLOCK_ID = '".$codingart_block_id['services_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);

$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['price_id']."' WHERE CODE = 'SERVICES_PRICE' AND IBLOCK_ID = '".$codingart_block_id['services_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);

$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['questions_and_answers_id']."' WHERE CODE = 'SERVICES_VOPROS' AND IBLOCK_ID = '".$codingart_block_id['services_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);

$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['reviews_id']."' WHERE CODE = 'SERVICES_REVIEWS' AND IBLOCK_ID = '".$codingart_block_id['services_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);


$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['icons_svg_id']."' WHERE CODE = 'SPEC_ICON' AND IBLOCK_ID = '".$codingart_block_id['specialists_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);

$strSql = "UPDATE b_iblock_property SET LINK_IBLOCK_ID = '".$codingart_block_id['icons_svg_id']."' WHERE CODE = 'ADVENT_ICON_AR' AND IBLOCK_ID = '".$codingart_block_id['advantages_id']."'";
$DB->Query($strSql, false, $err_mess.__LINE__);

?>