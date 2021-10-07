<p> Хакимов Н.И. ЭАС-310 
  <title>Хакимов Н.И.</title>
<?php
$n = rand (0,300);
print('<br>');
print ("Натуральное число N: ". $n. '<br>');
print ("Делители числа N: ".'<br>');
   for ($i=1; $i<=$n; $i++){  
if ($n % $i==0)      
  echo "$i <br>";
}
?>