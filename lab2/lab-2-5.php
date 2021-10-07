<?php
echo ("Вариант 4");
print('<br>');
$a=rand(-50,50);
$b=rand(-50,50);
print ("Число a= $a Число b= $b" . '<br>');
print('<br>');
$z = fun($a-pow($b,2),($b-$a) + fun(($a),$b-pow($a,2)));
print("Значение переменной z: ". '<br>');
print("z = fun(a-b^2,b-a) + fun(a,b-a^2) = $z" . '<br>');
function fun($u, $t){
    if($u>=0 and $t>=0){
        $f = $u;
        return $f;
    }
    elseif ($u<0 and $t>=0){
        $f = $t;
        return $f;
    }
    elseif ($u>=0 and $t<0){
        $f = $u - 2*$t;
        return $f;
    }
	elseif ($u<0 and $t<0){
        $f = $u*$t + 3*$t;
        return $f;
    }
}
?>