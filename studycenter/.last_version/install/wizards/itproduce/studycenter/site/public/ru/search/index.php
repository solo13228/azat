<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����");
?><div class="container"><?$APPLICATION->IncludeComponent("itproduce:search.page", "search.page", Array(
	"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"CACHE_TIME" => "3600",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"CHECK_DATES" => "N",	// ������ ������ � �������� �� ���� ����������
		"DEFAULT_SORT" => "rank",	// ���������� �� ���������
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� ������������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� ������������
		"FILTER_NAME" => "",	// �������������� ������
		"NO_WORD_LOGIC" => "N",	// ��������� ��������� ���� ��� ���������� ����������
		"PAGER_SHOW_ALWAYS" => "Y",	// �������� ������
		"PAGER_TEMPLATE" => "",	// �������� �������
		"PAGER_TITLE" => "���������� ������",	// �������� ����������� ������
		"PAGE_RESULT_COUNT" => "10",	// ���������� ����������� �� ��������
		"RESTART" => "Y",	// ������ ��� ����� ���������� (��� ���������� ���������� ������)
		"SHOW_WHEN" => "N",	// ���������� ������ �� �����
		"SHOW_WHERE" => "N",	// ���������� ���������� ������ "��� ������"
		"USE_LANGUAGE_GUESS" => "Y",	// �������� ��������������� ��������� ����������
		"USE_SUGGEST" => "N",	// ���������� ��������� � ���������� �������
		"USE_TITLE_RANK" => "Y",	// ��� ������������ ���������� ��������� ���������
		"arrFILTER" => array(	// ����������� ������� ������
			0 => "no",
		),
		"arrWHERE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"TAGS_SORT" => "NAME",
		"TAGS_PAGE_ELEMENTS" => "150",
		"TAGS_PERIOD" => "",
		"TAGS_URL_SEARCH" => "",
		"TAGS_INHERIT" => "Y",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "000000",
		"COLOR_OLD" => "C8C8C8",
		"PERIOD_NEW_TAGS" => "",
		"SHOW_CHAIN" => "Y",
		"COLOR_TYPE" => "Y",
		"WIDTH" => "100%"
	),
	false
);?></div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>