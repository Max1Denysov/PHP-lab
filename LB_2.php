
<?php
for ($i = 1; $i <= 17; $i++) {
    echo "{$i}\n";
}

$i = 1;
while ($i <= 7):
    echo "$i\n";
    $i++;
endwhile;
?>




2.
<?php
$arr = [17, 07, 1995];
$result = 0;
foreach ($arr as $value) {
    $result += $value;
}
echo $result;
?>

3.
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
	$arr = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
  $day=5;
	foreach ($arr as $key => $val) {
		if ($key == 6 or $key == 7){
			echo '<strong>'.$val.'</strong>'.'<br>';
		} else{
			echo $val.'<br>';
		}
    
	}
  $arr = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
	$day = 2;
	foreach ($arr as $key=>$val) {
		if ($key == $day){
			echo '<i>'.$val.'</i>'.'<br>';
		} else{
			echo $val.'<br>';
		}
	}
        ?>
    </body>
</html>



4.


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);
	echo $num.'<br>'.'раз-';
	echo $i.'<br>';
        ?>
    </body>
</html>
