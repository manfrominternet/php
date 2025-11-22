<?php

echo "First PhP script ";

#print returns 1 at the end

$name = "Gio ";

echo $name;

#Variables are assigned by value

$f = 1;
$s = $f;
$f = 4;

echo "$s ";
#By reference

$fx = 1;
$sx = &$fx;
$fx = 4;

echo "Concatenate with dot " .$sx;

#There is a difference between single and double quotes

#Define constants

define('NAME_OF_VAR', 'value');
const DEFINE_CONST = 'const defined during compile not runtime';

echo "NAME_OF_CONSTANT ".NAME_OF_VAR;
echo defined('NAME_OF_VAR');


#magic constants PHP_* or __

#Variable variable, you can get the name of variable, by using this trick
$some = "var";

$$some ="some";

echo $some, $var;