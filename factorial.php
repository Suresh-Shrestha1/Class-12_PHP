<?php
function factorial()
{
	$n=(int)readline('Enter any number:');
	$fact=1;
	for($i=1; $i<=10; $i=$i+1)
	{
	$fact=$fact*$i;
	}
	echo "The factorial of ".$n." is ".$fact;
}
factorial();
?>