<?
$text = $_POST["t"];
echo ("Текст без повторяющихся элементов: ");
echo join(array_unique(str_split($text)));
?> 