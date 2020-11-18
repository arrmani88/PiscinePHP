#!/usr/bin/env php
<?php
echo "Enter a number: ";
while(1)
{
	$n = fgets(STDIN);
	$n = trim($n);
	$nb = str_replace("\n", "", $n);
	if (is_numeric($nb))
	{
		if ($nb[strlen($nb) - 1] % 2 != 0)
		echo"The number ".$nb." is odd\n";
		else
		echo"The number ".$nb." is even\n";
	}
	else
	{
		if (feof(STDIN))
		{
			echo "\n";
			exit (0);
		}
		echo "'".$nb."' is not a number\n";
	}
	echo "Enter a number: ";
}
?>