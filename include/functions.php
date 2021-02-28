<?php
//Константа для определния пути к лог-файлу вывода отладочной информации функции AddMessage2Log()
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/include/logs_my/log_myfile.txt");

/* Функция форматированного (красивого, стилизованного) распечатывания значения переменной (использует встроенную 
php-функцию var_dump) */
function dump($var, $die = false, $all = false) //обязательный параметр $var и два необязательных параметра, установленных в false
{
	global $USER;
	
	if($USER->IsAdmin() || ($all == true)) {
	//if($USER->IsAdmin()) {
	/* проверка прав пользователя на Администратор (или права всех пользователей, включая незарегистрированных, чтобы 
	можно было воспользоваться распечатыванием значения переменной даже обычному пользователю */
		?>
		<font style="text-align: left; color: red; font-size: 14px"><pre><?var_dump($var)?></pre></font><br>
		<?
	}
	
	/* по значению этой переменной (задаётся в параметре вызова функции fuction dump()) проверяем требуется ли завершить 
	все операции, которые идут после этого скрипта (условия) */
			//if($die) {
	if($die === true) {
		die; //завершение всех операций
	}
};

//Функция форматированного вывода отладочной информации print_r для группы Администраторы
function my_dump($var)
{
	global $USER;
	if($USER->isAdmin()) {?>
		<pre>
			<?print_r($var);?>
		</pre>
	<?}?>
<?}

//Функция форматированного вывода отладочной информации print_r для отдельный пользователей с определенным IP-адресом или определёнными IP-адресами
function my_dump_ip($var)
{
	global $USER;
	global $_SERVER;
	if($_SERVER["REMOTE_ADDR"] == "192.168.0.102" || $_SERVER["REMOTE_ADDR"] == "128.71.94.133") {?>
		<pre>
			<?print_r($var);?>
		</pre>
	<?}?>
<?}

//Функция форматированного вывода отладочной информации print_r по наличию GET-параметра в адресной строке
function my_dump_get($var)
{
	if($_REQUEST["dump"] == "y") {?>
		<pre>
			<?print_r($var);?>
		</pre>
	<?}?>
<?}

/* ПОКА ЭТА ФУНКЦИЯ НЕ РАБОТАЕТ - ВЕРНУТЬСЯ К НЕЙ, КОГДА БУДУ ИЗУЧАТЬ ПОДКЛЮЧЕНИЕ ДАННЫХ В ЭПИЛОГЕ !!! (по всей видимости на этапе подключения Пролога
 * массивы $arParams и $arResult ещё пусты)
 Всегда подключенная Функция форматированного вывода отладочной информации print_r для
$arParams или $arResult (в зависимости от GET-параметра в адресной строке:
dump == p для вывода содержимого $arParams,
dump == r для вывода содержимого $arResult).
Функция подключена всегда (на любой публичной странице сайта) - для вызова достаточно указать в адресной строке браузера соответствующий GET-параметр.

function my_dump_get_always()
{
	global $arParams;
	global $arResult;
	if($_REQUEST["dump"] == "p") {?>
		<pre>
			<?print_r($arParams);?>
		</pre>
	<?} elseif($_REQUEST["dump"] == "r") {?>
		<pre>
			<?print_r($arResult);?>
		</pre>
	<?}?>
<?}

//вызов функции my_dump_get_always()
if($arParams !== [] && $arResult !== []) {
	my_dump_get_always(); //вызов функции
}
*/

//Функция вывода в браузер ключевых слов текущей страницы (ключевые слова принимает в аргументе)
function printKeywords($printKeyword)
{
	global $USER;
	
	if($USER->IsAdmin() && ($printKeyword !== NULL)) {
		//echo '<p>keywords ' . $printKeyword . "</p>";
		?><p>keywords <?=$printKeyword?></p>
		<?
	}
};

//Функция вывода в браузер ключевых слов текущей страницы без аргументов (ключевые слова проверяет на наличие в свойстве keywords объекта APPLICATION)
function printKeyword()
{
	global $USER;
	
	if($USER->IsAdmin() && ($APPLICATION->keywords !== NULL)) {
		echo "<p>keywords: " . $APPLICATION->ShowProperty("keywords") . "</p>";
	}
};
