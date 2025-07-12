<?php
function prime()
{
$n=(int)readline('Enter any number:');
$i; $count=0;
for($i=1; $i<=$n; $i=$i+1)
{
	if ($n%$i==0)
	$count=$count+1;
}
if ($count==2)
echo $n. " is prime number";
else
echo $n. " is odd number";
}
prime()
?>