<?php

	$a = readline();
	$b = readline();

	$media = (($a * 3.5)+($b * 7.5))/11;

	$format = number_format($media, 5, '.', '');

	echo "MEDIA = {$format}\n";
