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

$first = 0;
$last = $totalElements - 1;


$try = 0;

while($first <= $last)
{ 
	$try++;
	$mid = floor(($first + $last) / 2);
	echo "Mid Point ". $mid . PHP_EOL;
	if ($input[$mid] == $target) 
	{
		$found = true;
		echo "Found the target at the index : ". $mid;
		echo PHP_EOL; 
		break;
	}
	else if($input[$mid] < $target) 
 	{
		$first = $mid + 1;
	}
	else if($input[$mid] > $target)
	{
		$last = $mid - 1;
	}
}

if(! $found) 
{
	echo "Target not found";
	echo PHP_EOL; 
}

echo "Number of tries : ". $try;
echo PHP_EOL; 
