<?php
 $programmingLanguages = ["Rust ", "Swift ", "TypeScript ", "PHP "];

$newElement = "Python";
$programmingLanguages[$newElement] = "Java";
// echo '<pre>';
    print_r($programmingLanguages);
// echo '<pre>';
echo count($programmingLanguages);
