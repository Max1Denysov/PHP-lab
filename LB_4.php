<?php
$myfile = fopen("1.txt", "w") or die("Unable to open file!");
$txt = "Maksym\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("2.txt", "w") or die("Unable to open file!");
$txt = "Igorovich\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("3.txt", "w") or die("Unable to open file!");
$txt = "Denisov\n";
fwrite($myfile, $txt);
fclose($myfile);
  


 $arr = ['1.txt', '2.txt', '3.txt'];
$fail = '';
foreach ($arr as $elem) {

$fail .= file_get_contents($elem);

}
file_put_contents('4.txt', $fail);
echo file_get_contents('4.txt');

mkdir("DenMaxIg", 0700);

$fail = file_get_contents('DenMaxIg/5.txt');
file_put_contents('DenMaxIg/5.txt', $fail + 1);
echo file_get_contents('DenMaxIg/5.txt');
?>
