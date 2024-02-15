<?php
	define("PI", 3.14159);	

	$value = readline();
	$area = PI * $value * $value;
	$format = number_format($area, 4, '.', '');	
	
	echo "A=$format\n";

