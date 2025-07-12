<?php
$n=array(8,6,3,9,4,5,1,7,2,0);
$large=$n[0];
for($i=0; $i<10; $i=$i+1)
{
	if($large<$n[$i])
	$large=$n[$i];
}
echo "The largest number among 10 different number is ".$large;
?>