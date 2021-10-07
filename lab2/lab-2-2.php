<p>
<?php
$n=rand(3,20);
echo ("Массив из ".$n." элементов, заполненный случайными числами: ");
print('<br>');
for ($i=0;$i<=$n;$i++){
	$array[$i]=rand(10,99);
}
	print_r ($array);
print('<br>');
echo ("Отсортированный массив: ");
print('<br>');
sort($array);
print_r($array);
print('<br>');
echo ("Массив в обратном порядке: ");
print('<br>');
$rez = array_reverse($array);
print_r($rez);
print('<br>');
echo ("Массив после удаления последнего элемента: ");
print('<br>');
array_pop($rez);
print_r($rez);
print('<br>');
echo ("Сумма массива: ");
print('<br>');
$sum = array_sum($rez);
print_r($sum);
print('<br>');
echo ("Количество элементов в массиве: ");
print('<br>');
$count = count($rez);
print_r($count);
print('<br>');
echo ("Среднее арифметическое для элементов массива: ");
print('<br>');
$ss=$sum/$count;
print_r($ss);
print('<br>');
if (in_array(50, $rez)) {
    echo ("Есть число 50");
}
echo ("Массив из уникальных значений: ");
print('<br>');
$uni=array_unique($rez);
print_r($uni);
?>