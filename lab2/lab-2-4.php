<?php
echo 'Создадим массив элементов: ';
$arr = [1,2,3,-1,1,2,3,4,5,0,1,2];
$arr1 = [];
 
$i = 0;
 
foreach($arr as $v){
    if($v > 0){
        $i++;
    }else{
        $arr1[] = $i;
        $i = 0;
    }
}
 echo '<pre>';
print_r($arr);
echo '</pre>';
echo 'Максимальное количество подряд идущих положительных элементов: ' . max($arr1);
?>