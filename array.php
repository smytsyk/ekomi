<?php
	/**
		I resolved your Task 2. 
		However your input and output array have different values;

		Your last lines in the Input array:
		array( 16, 17, 18, 19, 20),
		array( 16, 17, 18, 19, 20)

		Your last lines in the Output array:
		array(4, 9, 14, 19, 24),
		array(5, 10, 15, 20, 25)

		But I guess it doesn't matter, so I wrote the function to rotate 
		the arrays so that the rows become the columns.
	*/

	$field1 = array(
	array( 1, 2, 3, 4, 5),
	array( 6, 7, 8, 9, 10),
	array( 11, 12, 13, 14, 15),
	array( 16, 17, 18, 19, 20),
	array( 16, 17, 18, 19, 20)
	);

	$field2 = array(
	array(1, 2),
	array(3, 4)
	);

print_r(array_convert($field1));
print_r(array_convert($field2));

function array_convert($field)
 {
	$field_new = array();

  	$counter = 0;
	foreach ($field as $key => $value)
	 {
	  $counter_internal = 0;
	  foreach ($field[$key] as $key2 => $value2)
	  {
	    $field_new[$counter][] = $field[$counter_internal++][$counter];
	  }
		$counter++;
	 }

	return $field_new;
 }