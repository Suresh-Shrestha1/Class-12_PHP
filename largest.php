<?php
$a=(int)readline('Enter First number:');
$b=(int)readline('Enter Second number:');
$c=(int)readline('Enter Third number:');
if($a>$b&&$a>$c)
echo "The largest number is ".$a;
else if($b>$a&&$b>$c)
echo "The largest number is ".$b;
else
echo "The largest number is  ".$c;
?>