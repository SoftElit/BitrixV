<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<!-- ЭТОТ ФАЙЛ ИСПОЛЬЗОВАТЬ ДЛЯ ПОДКЛЮЧЕНИЯ СТИЛЕЙ И ДРУГИХ НЕОБХОДИМЫХ РЕСУРСОВ ПРИ РАЗРАБОТКЕ В ФАЙЛЕ test.php !!! -->

<!-- Подключение таблиц стилей CSS для HTML-шаблона исходного - ВЫНЕСТИ В ОБЩИЙ ФАЙЛ или header.php в .default !!!-->
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/template_style.css");?>
	<!-- <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> меняем путь на папку .default -->
    <!-- <script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script> -->
    
    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-1.8.2.min.js');?><!-- Подключение скриптов и дополнительных стилей через AddHeadScript и SetAdditionalCSS -->
    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/slides.min.jquery.js');?>
    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js');?>
    <?$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/functions.js');?>

<!-- НЕ ПОДКЛЮЧАТЬ ЭПИЛОГ!!! (НЕ будет работать корректно test.php!!!) -->
