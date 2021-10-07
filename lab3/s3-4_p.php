<?
$log = $_POST["a"];
$login = array("Nikita", "Ivan_php", "Milana", "Khakimov");
if (in_array($log, $login)){
echo ("Приветствую, ");
switch ($log){
case 'Nikita':
echo ('Nikita');
break;
case 'Ivan_php':
echo ('Ivan');
break;
case 'Khakimov':
echo ('Nikita');
break;
case 'Milana':
echo ('Milana');
break;	
}	
} else {
echo ('Вы не зарегистрированный пользователь!');
}
?>