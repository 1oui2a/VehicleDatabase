<?php

const BR = '<br />';

echo multiply(5,6);

function multiply($one, $two) {
	return $one* $two;
}

echo BR;

multiply_print(5,10);

function multiply_print($one, $two) {
	echo $one*$two;
}


?>