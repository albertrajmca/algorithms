<?php


echo "Problem : Find the index of the number from given array ";
echo PHP_EOL; 


$totalElements = readline('Enter array size: ');
 
$input = [];

for($i=0; $i<$totalElements; $i++)
{
	$input[$i] = readline("Enter value for ". $i . " index :");
}


$target = readline('Enter target value: ');

echo PHP_EOL; 
echo "Given Input : ".PHP_EOL;
for($i=0; $i<$totalElements; $i++)
{ 
	echo $input[$i] . " ";
}

echo PHP_EOL; 
echo "Target Value : ".$target;
echo PHP_EOL; 

$found = false;

for($i=0; $i<$totalElements; $i++)
{ 
	if ($input[$i] == $target) 
	{
		$found = true;
		echo "Found the target at the index : ". $i;
		echo PHP_EOL; 

	}
}

if(! $found) 
{
	echo "Target not found";
	echo PHP_EOL; 

}
