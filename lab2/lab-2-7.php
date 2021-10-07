<p> Гришанова Н.А. ЭАС-310
<p>
<?php
$n=rand(5,10);
$m=rand(5,10);
function txt($t){
    if($t==8) print("В матрице К(n,n) присвоить каждому диагональному элементу разность между суммами
элементов соответствующих строки и столбца <br>");
  /*  if($t==13) print("Найти сумму элементов A(i,j) массива A(m,n), имеющих заданную разность индексов i-j=k.
Число k целое, но не обязательно положительное <br>");*/
}
function arr1($a,$b){
    for($i=0; $i<$a; $i++){
        for($j=0; $j<$b; $j++){
            $mas[$i][$j]=rand(-10,10);
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
$s=arr1($n,$n);
$ss=arr1($m,$n);
$r=res1($n,$n,$s);
$p=res2($m,$n,$ss);
echo txt(8);
echo tabl($n,$n,$s);
echo tabl($n,$n,$r);
echo txt(13);
echo tabl ($m,$n,$ss);
echo ("Сумма элементов массива $p");
function res1($a,$b,$mas){
	for ($i=0; $i<$a; $i++){
        for($j=0; $j<$b; $j++){
            $s[$j]=$s[$j]+$mas[$i][$j];
			$s1[$i]=$s1[$i]+$mas[$i][$j];
        }
	}
		 for($i=0; $i<$a; $i++){
           for ($j=0; $j<$b; $j++){
			   if ($i==$j){
				   $mas[$i][$j]=-$s[$i]+$s1[$i];
			   }
		   }
        }
		return $mas;
	} 
function res2($a,$b,$mas){
	$sum=0;
	for ($i=0; $i<$a; $i++){
        for($j=0; $j<$b; $j++){
           if ($i-$j==$k)
		   {			   $sum=$sum+$mas[$i][$j];
		   }
        }
	}
		return $sum;
	}
	
?>