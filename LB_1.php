<html>
<body>
    <body bgcolor="yellow">

<?php
$script1="-выводит три символа, каждый и вашего имени, фамилии и отчества\n";
echo $script1;
echo"<br>";
    $name= 'Denysov'; 
    echo $name [5];
$sname='Maksym';
    echo $sname [5];
$mname='Igorovych';
    echo $mname [0];

echo"<br>";
$script2="-выводит предложение Меня зовут (ваше имя). Мне (ваше количество лет) года, то есть
(количество) в шестнадцатиричном представлении";
echo"<br>";
$age= 25;
echo"<br>";
 $Sentence = 'My name is - ';
 echo"<br>";
   $Sentence2 = 'My age is - ';
   echo"<br>";
   echo $script2 ;
   echo"<br>";
   echo $Sentence.$sname;
echo"<br>";
   echo $Sentence2.$age."\n";
 $bin = sprintf( "%08d", dechex(25));
   echo $bin."\n";
echo"<br>";
$script3="-выводит данные в разных представлениях точности";
echo$script3;
echo"<br>";

  define("week" ,  300);
 define("month" , 12);
echo "<pre>";
printf("$%12f\n",week/month);
echo"<br>";
printf("$%012f\n",week/month);
echo"<br>";
printf("$%12.2f\n",week/month);
echo"<br>";
printf("$%012.2f\n",week/month);
echo"<br>";
printf("$%'#12.1f\n",week/month);
echo"<br>";
$right='Выводит дату------количество часов , минут,секунд
 название месяца ,номер дня ';
echo $right;
echo"<br>";
$today = date(" H :i:s F j ");
   
   echo $today;
?> 

</body>
</html>
