<?php
#wap in php to show the Exception Handling we will use 
# Exception : DivisionByZeroError
# x/y if y=0 and x>0 or x<0 but x!=0 
$x = readline('Enter the x value:');
$y = readline('Enter the y value:');
$sum = 0;
$minus = 0;
$product = 0;
$division = 0;
try {
    $sum = $x + $y;
    $minus = $x - $y;
    $product = $x * $y;
    $division = $x / $y;
} catch (DivisionByZeroError $e) {
    echo $e->getMessage();
} finally { //Finally will run try and catch
    echo "sum= {$sum} " . PHP_EOL;
    echo "minus= {$minus} " . PHP_EOL;
    echo "product= {$product} " . PHP_EOL;
    echo "division= {$division} " . PHP_EOL;
}


?>