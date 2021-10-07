<?php
function text($t){
    if($t==1) print("Дана матрица А(m,n). Найти вектор В(n), каждый элемент которого равен сумме элементов соответствующего столбца матрицы А. 
	Исходный и скорректированный массивы вывести на экран. <br>");
	
}
	$n=3;
	$m=3;
	print("Столбцов N $n строк M $m");
function arr1($a,$b){
    for($i=0; $i<$a; $i++){
        for($j=0; $j<$b; $j++){
            $mas[$i][$j]=rand(0,1);
        }
}
return $mas;
}
function tabl($a,$b,$mas){
    print("<TABLE>");
    for($i=0; $i<$a; $i++){
        print("<tr>");
        for($j=0; $j<$b; $j++){
            print("<td align=center width=40 height=30>");
            print($mas[$i][$j]);
            print("</td>");
        }
      print("</tr>");
}
print("</TABLE> <br>");
} 
$ss=arr1($m,$n);
$p=res2($m,$n,$ss);
echo text(1);
echo tabl ($m,$n,$ss);
echo ("Вектор B(n) равен $p");
		function res2($a,$b,$mas){

	for ($i=0; $i<$a; $i++){
		for($j=0; $j<$b; $j++){
			for($j=0; $j<$b; $j++){
				$s1=$s1+$mas[$i][$j];
			}
			for($j=0; $j<$b; $j++){
				for ($i=0; $i<$a; $i++){
					$s2=$s2+$mas[$i][$j];
				}
			}
			if ($s1==$s2){
						$k=$s1;
					}
						elseif ($s1!=$s2){
							$s1=0;
							$s2=0;
							break;
						}
	}
	}
	return $k;
		}
?>