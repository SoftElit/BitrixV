<?
/* Закомментировал исходный код файла до изменения
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пользователь");
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); */?>

<?
//Этот код заготовлен лектором (откуда - неизвестно)
define("NEED_AUTH", true); /* константа NEED_AUTH определяет авторизованного пользователя (которая ??? в случае неавторизованного пользователя
                            * подключает компонент авторизации стандартный).
                            * Ядро, если встречает эту константу, подключает:
                            * - компонент авторизации, если пользователь НЕавторизован,
                            * - иной компонент (например, компонент восстановления забытого пароля) или страницу, если пользователь авторизован. 
                            * В адресной строке браузер виидно, что это одна и та же страница, для которой ядро подключает тот или другой компонент в зависимости
                            * от GET-параметра в адресной строке (от того, авторизован ли пользователь).*/
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) //если будутна страницу переданы определенные GET-параметры, то может подключаться компонент регистрации или компонент забытого пароля
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?>
<p>Вы зарегистрированы и успешно авторизовались.</p> <!-- Если пользователь авторизован, ему выводится сообщение об успешной авторизации -->
 
<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>