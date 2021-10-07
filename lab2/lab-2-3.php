<p>
<?php
$cust = array (
    'cnum' => 2001,
    'cname' => 'Hoffman',
    'city' => 'London',
    'snum' => 1001
);
echo ('Сортировка массива по значениям: ');
asort($cust);
print('<br>');
print_r($cust);
print('<br>');
echo ('Добавление ключа rating со значением 100 в массив: ');
print('<br>');
$cust['rating'] = 100;
print_r($cust);
print('<br>');
echo ('Сортировка массива по ключам: ');
print('<br>');
ksort($cust);
print_r($cust);
print('<br>');
echo ('Отсортированный массив: ');
print('<br>');
sort($cust);
print_r($cust);
?>