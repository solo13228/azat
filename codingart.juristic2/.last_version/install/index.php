<?
global $MESS;
$strPath2Lang = str_replace("\\", "/", __FILE__);
$strPath2Lang = substr($strPath2Lang, 0, strlen($strPath2Lang)-strlen("/install/index.php"));
include(GetLangFileName($strPath2Lang."/lang/", "/install/index.php"));

Class codingart_juristic2 extends CModule
{
	var $MODULE_ID = "codingart.juristic2";
	var $MODULE_VERSION = "0.10.4";
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME = "Juristic2";
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $MODULE_GROUP_RIGHTS = "Y";

	function codingart_juristic2()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = GetMessage("SCOM_INSTALL_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("SCOM_INSTALL_DESCRIPTION");
		$this->PARTNER_NAME = GetMessage("SPER_PARTNER");
		$this->PARTNER_URI = GetMessage("PARTNER_URI");
	}


	function InstallDB($install_wizard = true)
	{
		global $DB, $DBType, $APPLICATION;

		RegisterModule("codingart.juristic2");
		RegisterModuleDependences("main", "OnBeforeProlog", "codingart.juristic2", "CJuristic2", "ShowPanel");
		
		/*$strSql = "UPDATE b_option SET VALUE = 'Y' WHERE NAME = 'form_element_105'";
		$DB->Query($strSql, false, $err_mess.__LINE__);

		$strSql = "UPDATE b_user_option SET VALUE = 'Y' WHERE NAME = 'combined_list_mode'";
		$DB->Query($strSql, false, $err_mess.__LINE__);*/

		
		return true;
	}

	function UnInstallDB($arParams = Array())
	{
		global $DB, $DBType, $APPLICATION;

		UnRegisterModuleDependences("main", "OnBeforeProlog", "codingart.juristic2", "CJuristic2", "ShowPanel"); 
		UnRegisterModule("codingart.juristic2");
		


		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{	

		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/components/", $_SERVER['DOCUMENT_ROOT']."/bitrix/components/", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/wizards", $_SERVER["DOCUMENT_ROOT"]."/bitrix/wizards", true, true);
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/wizards/codingart/juristic2/site/templates/juristic2/", $_SERVER['DOCUMENT_ROOT']."/bitrix/templates/juristic2/", true, true);
		return true;
	}

	function InstallPublic()
	{
	}

	function UnInstallFiles()
	{
		DeleteDirFilesEx("/bitrix/wizards/codingart/juristic2");
		return true;
	}

	function DoInstall()
	{
		global $APPLICATION, $step;

		$this->InstallFiles();
		$this->InstallDB(false);
		$this->InstallEvents();
		$this->InstallPublic();

		$APPLICATION->IncludeAdminFile(GetMessage("SCOM_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/codingart.juristic2/install/step.php");
	}

	function DoUninstall()
	{
		global $APPLICATION, $step;

		$this->UnInstallDB();
		$this->UnInstallFiles();
		$this->UnInstallEvents();
		$APPLICATION->IncludeAdminFile(GetMessage("SCOM_UNINSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/codingart.juristic2/install/unstep.php");
	}
}
?>