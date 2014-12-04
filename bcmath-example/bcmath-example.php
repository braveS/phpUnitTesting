<?php
//source
//http://runnable.com/Ump8m0DsPmY8AABV/add-two-arbitrary-precision-numbers-with-bcadd-function-for-bcmath-and-php-bcmath

$a = '0.1';
$b = '0.7';
$c = '10';
//adding the two numbers
$resultNoDecimals = bcadd($a, $b);
$resultNoDecimals = bcmul($resultNoDecimals, $c);
//adding the two numbers and setting the number of digits after the floating point
$resultWithDecimals = bcadd($a, $b, 3);
$resultWithDecimals = bcmul($resultWithDecimals, $c, 3);

echo '<br /><div style="background-color:green;color:#fff;padding:10px;width:500px;font-size:16px">
Adding ' . $a . ' with ' . $b . ' and multiplying by ' . $c .' will result: ' . $resultNoDecimals . '</b>
<br />* the result is shown with no decimals after the floating point </div><br />';
echo '<br /><div style="background-color:yellow;color:#000;padding:10px;width:500px;font-size:16px">
Adding ' . $a . ' with ' . $b . ' and multiplying by ' . $c .' will result: ' . $resultWithDecimals . '</b>
<br />* the result is shown with decimals after the floating point
</div><br />';