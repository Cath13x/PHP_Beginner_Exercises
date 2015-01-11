<?php

$color = array(
	'color0' => 'white', 
	'green', 
	'purple', 
	'blue', 
	'black'
);

$sentence = 'The memory of that scene for me is like a frame of film forever frozen at that moment: the %s carpet, the %s lawn, the %s house, the leaden sky. The new president and his first lady.';

$output = sprintf($sentence, $color[2], $color[1], $color['color0']);

echo $output;


