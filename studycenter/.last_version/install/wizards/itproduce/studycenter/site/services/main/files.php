<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID"))
	return;

if (!defined("WIZARD_SITE_DIR"))
	return;
 
if (WIZARD_INSTALL_DEMO_DATA)
{
	$path = str_replace("//", "/", WIZARD_ABSOLUTE_PATH."/site/public/".LANGUAGE_ID."/"); 
	
	$handle = @opendir($path);
	if ($handle)
	{
		while ($file = readdir($handle))
		{
			if (in_array($file, array(".", "..")))
				continue; 
/*			elseif (
				is_file($path.$file) 
				&& 
				(
					($file == "index.php"  && trim(WIZARD_SITE_PATH, " /") == trim(WIZARD_SITE_ROOT_PATH, " /"))
					|| 
					($file == "_index.php" && trim(WIZARD_SITE_PATH, " /") != trim(WIZARD_SITE_ROOT_PATH, " /"))
				)
			)
				continue; 
*/
			CopyDirFiles(
				$path.$file,
				WIZARD_SITE_PATH."/".$file,
				$rewrite = true, 
				$recursive = true,
				$delete_after_copy = false
			);
		}
		CModule::IncludeModule("search");
		CSearch::ReIndexAll(false, 0, Array(WIZARD_SITE_ID, WIZARD_SITE_DIR));
	}

	WizardServices::PatchHtaccess(WIZARD_SITE_PATH);

	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."about/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."auth/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."blog/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."classes/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."contacts/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."events/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."search/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	WizardServices::ReplaceMacrosRecursive(WIZARD_SITE_PATH."teachers/", Array("SITE_DIR" => WIZARD_SITE_DIR));
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."_index.php", Array("SITE_DIR" => WIZARD_SITE_DIR));

	$arUrlRewrite = array(); 
	if (file_exists(WIZARD_SITE_ROOT_PATH."/urlrewrite.php"))
	{
		include(WIZARD_SITE_ROOT_PATH."/urlrewrite.php");
	}
$arNewUrlRewrite = array(
   array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'desktop_app/router.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'video([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'desktop_app/router.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'bitrix/services/ymarket/index.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'desktop_app/router.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'stssync/calendar/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'bitrix/services/stssync/calendar/index.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'rest/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'bitrix/services/rest/index.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'blog/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'blog/index.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'classes/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'classes/index.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'teachers/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'teachers/index.php',
  ),
  array (
    'CONDITION' => '#^'.WIZARD_SITE_DIR.'events/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => WIZARD_SITE_DIR.'events/index.php',
  ),
);
	
	foreach ($arNewUrlRewrite as $arUrl)
	{
		if (!in_array($arUrl, $arUrlRewrite))
		{
			CUrlRewriter::Add($arUrl);
		}
	}
}

function ___writeToAreasFile($fn, $text)
{
	if(file_exists($fn) && !is_writable($abs_path) && defined("BX_FILE_PERMISSIONS"))
		@chmod($abs_path, BX_FILE_PERMISSIONS);

	$fd = @fopen($fn, "wb");
	if(!$fd)
		return false;

	if(false === fwrite($fd, $text))
	{
		fclose($fd);
		return false;
	}

	fclose($fd);

	if(defined("BX_FILE_PERMISSIONS"))
		@chmod($fn, BX_FILE_PERMISSIONS);
}

CheckDirPath(WIZARD_SITE_PATH."include/");
// phone


$wizard =& $this->GetWizard();

$sitePhone = $wizard->GetVar("sitePhone");
CWizardUtil::ReplaceMacros(WIZARD_ABSOLUTE_PATH."/site/services/iblock/xml/ru/general_s1_s1.xml", Array("SITE_PHONE" => $sitePhone));

___writeToAreasFile(WIZARD_SITE_PATH."include/motto.php", $wizard->GetVar("siteSlogan"));
___writeToAreasFile(WIZARD_SITE_PATH."include/copyright.php", $wizard->GetVar("siteCopy"));

$siteLogo = $wizard->GetVar("siteLogo");
if($siteLogo>0)
{
	$ff = CFile::GetByID($siteLogo);
	if($zr = $ff->Fetch())
	{
		$strOldFile = str_replace("//", "/", WIZARD_SITE_ROOT_PATH."/".(COption::GetOptionString("main", "upload_dir", "upload"))."/".$zr["SUBDIR"]."/".$zr["FILE_NAME"]);
		@copy($strOldFile, WIZARD_SITE_PATH."include/logo.gif");
		___writeToAreasFile(WIZARD_SITE_PATH."include/company_name.php", '<img src="'.WIZARD_SITE_DIR.'include/logo.gif"  />');
		CFile::Delete($siteLogo);
	}
}
elseif(!file_exists(WIZARD_SITE_PATH."include_areas/company_name.php"))
{
	copy(WIZARD_THEME_ABSOLUTE_PATH."/lang/".LANGUAGE_ID."/logo.gif", WIZARD_SITE_PATH."include/bx_default_logo.gif");
	___writeToAreasFile(WIZARD_SITE_PATH."include/company_name.php", '<img src="'.WIZARD_SITE_DIR.'include/bx_default_logo.gif"  />');
}

if (WIZARD_INSTALL_DEMO_DATA)
{ 
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.section.php", array("SITE_DESCRIPTION" => htmlspecialcharsbx($wizard->GetVar("siteMetaDescription"))));
	CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."/.section.php", array("SITE_KEYWORDS" => htmlspecialcharsbx($wizard->GetVar("siteMetaKeywords"))));
}
?>