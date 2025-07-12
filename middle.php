<?php
$a=(int)readline('Enter First number:');
$b=(int)readline('Enter Second number:');
$c=(int)readline('Enter Third number:');
if($a>$b&&$a<$c)||($a<$b&&$a>$c)
echo "The middle number is ".$a;
else if($b>$a&&$b<$c)||($b<$a&&$b>$c)
echo "The middle number is ".$b;
else
echo "The middle number is  ".$c;
?>