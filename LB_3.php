    <?php
 $a = 1 ;
 $b = 1000;
 for($i = $a; $i <= $b; $i++) {
for($j= 2; $j < $i; $j++){
    if($i%$j==0) goto end;
} 
 echo $i.' ';
 end:
 } 
 
?>
