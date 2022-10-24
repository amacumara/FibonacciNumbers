<?php
$n = 10;

if ($n==0) {}
elseif ($n==1) {echo 0;}
else {

	$num0 = 0;
	$num1 = 1;
    $fibo = [0, 1];

	for ($i = 3; $i <= $n; $i++) {
        $num2 = $num0 + $num1;

        $num0 = $num1;
        $num1 = $num2;

        $fibo[]=$num2;
    }

echo implode(" ", $fibo);
}
