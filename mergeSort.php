<?php


echo "Problem : Sort the given array - Merge Sort";
echo PHP_EOL; 


$totalElements = readline('Enter array size: ');
 
$input = [];

for($i=0; $i<$totalElements; $i++)
{
	$input[$i] = readline("Enter value for ". $i . " index :");
}


echo PHP_EOL; 
echo "Given Input : ".PHP_EOL;

echo implode(",", $input);

echo PHP_EOL; 


function merge_sort($array)
{

	// // set the break point when we can come out from the recursion
	// // when we have a single element array recursion will get over
	if(count($array) <= 1)
	{
		return $array;
	}


	$mid = floor(count($array) / 2);

	// split the array into two
	$left_array = array_slice($array, 0, $mid);
	$right_array = array_slice($array, $mid); // 3rd element not required when we want the list until the last element


	$left_array = merge_sort($left_array); // make a recursive call until we get a single element array
	$right_array = merge_sort($right_array); // make a recursive call until we get a single element array

	return merge($left_array, $right_array);
}

function merge($left, $right)
{
  
	$final = [];

	while(count($left) > 0 && count($right) > 0)
	{
		if($left[0] > $right[0])
		{
			$final[] = $right[0];
			$right = array_slice($right, 1);
		} else {		
			$final[] = $left[0];
			$left = array_slice($left, 1);
		}
	}


	while(count($left) > 0)
	{
		$final[] = $left[0];
		$left = array_slice($left, 1);
	}

	while(count($right) > 0)
	{
		$final[] = $right[0];
		$right = array_slice($right, 1);
	}

	return $final;
}


echo implode(",", merge_sort($input));
echo PHP_EOL; 
