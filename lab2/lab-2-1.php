<p>
<?php
for($n=1; $n<=10; $n++){
$treug[$n]=$n*($n+1)/2;
$kvd[$n]=$n**2;
}
print("Массив «треугольных» чисел"  . '<br>');
echo implode(' ', $treug);
print('<br>');
print("Массив квадратов натуральных чисел" . '<br>');
echo implode(' ', $kvd);
print('<br>');
print("Объединенный массив rez" . '<br>');
$rez=array();
$rez=array_merge($treug,$kvd);
 print_r($rez);
 print('<br>');
print("Отсортированный массив rez" . '<br>');
sort($rez);
 print_r($rez);
print('<br>');
print("Удаленный первый элемент из массива rez" . '<br>');
  array_shift($rez);
   print_r($rez);
print('<br>');
print("Уникальный массив rez1" . '<br>');
	$rez1 = array_unique($rez);
	print_r($rez1);
print('<br>');
?>