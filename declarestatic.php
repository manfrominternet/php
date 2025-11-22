<?php
declare(strict_types=1);
#4 scalar types
#bool
#int
#float
#string

#4 compound types
#array
#object
#callable
#iterable

#special types
#resource,
#null


# will not work $sum = '2' + 3;
$sum = (string)(2 + 3);

#echo $sum;
var_dump($sum);