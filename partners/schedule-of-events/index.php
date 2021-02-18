<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Расписание мероприятий");
?>Страница в разработке.&nbsp;<br>
А пока здесь структура нашего сайта:<br>
<br>
<img width="439" alt="Site.png" src="/upload/medialibrary/435/435a57a8a5ae57dd2ed11ca14db2913b.png" height="207" title="Site.png"><br>
<br>
&nbsp;&nbsp;
<!-- Выведем унаследованные от корневого раздела свойства - ключевые слова к примеру --> <br>
<p>keywords:<?$APPLICATION->ShowProperty("keywords")?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>