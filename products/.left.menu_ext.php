<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => "",
	//"SECTION_PAGE_URL" => "#SECTION_ID#/",
	"SECTION_PAGE_URL" => "", //моя замена для работы Левого меню под ЧПУ (при пустом значении, значение будет браться из параметров инфоблока в админке)
	//"DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_ID#",
	"DETAIL_PAGE_URL" => "", //моя замена для работы Левого меню под ЧПУ (при пустом значении, значение будет браться из параметров инфоблока в админке)
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"DEPTH_LEVEL" => "3", //DEPTH-LEVEL – настройка, регулирующая уровень вложенности
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>





<?/* $aMenuLinksExt=$APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "1",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"ID" => $_REQUEST["ID"],
		"IS_SEF" => "N",
		"SECTION_URL" => ""
	)
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
*/?>