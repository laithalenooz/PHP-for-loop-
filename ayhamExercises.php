<?php
echo "<hr>";
echo "Exercise 1: <br>";
echo implode("-", range(1, 10)) . "<hr><br>";

echo "Exercise 2: <br>";
for ($i = 1; $i <= 30; $i++) {
    echo "$i" . "<br>";
}
echo "<hr><br>";
echo "Exercise 3.c: <br>";
for ($abc = 1; $abc <= 5; $abc++) {
    for ($letter = "A"; $a <= "E"; $a++) {
        echo str_repeat("A", 5 - $abc) . str_repeat($letter, $abc) . "<br>";
        if ($abc++ > $abc) {
            break;
        }
    }

}

echo "<hr><br>";
echo "Exercise 3.b: <br>";
for ($abc = 1; $abc <= 5; $abc++) {
    for ($a = 1; $a <= 5; $a++) {
        echo str_repeat(1, 5 - $abc) . str_repeat($a, $abc) . "<br>";
        if ($abc++ > $abc) {
            break;
        }
    }

}

echo "<hr><br>";
echo "Exercise 4: <br>";
for ($num = 5; $num >= 1; $num--) {
    for ($a = 1; $a <= 5; $a++) {
        echo str_repeat(0, 5 - $num) . $a . str_repeat(0, 5 - $a) . "<br>";
        if ($num-- < $num) {
            break;
        }
    }

}

echo "<hr><br>";
echo "Exercise 5: <br>";
//$num = 5;
//$factorial = 1;
//for ($x=$num; $x>=1; $x--)
//{
//    $factorial = $factorial * $x;
//}
//echo $factorial;

function fact($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fact($n - 1);
    }
}

echo fact(5);

echo "<hr><br>";
echo "Exercise 6: <br>";
$i = 0;
$g = 0;
$f = 0;

while ($i <= 5) {
    $i++;

    while ($f <= 5) {
        $g += $i; // 1 - 3
        echo $g . '<br>'; // 1 - 3
        $i += $g; // 2 - 5
        echo $i . '<br>'; // 2 - 5
        $f++;
    }
}


echo "<hr><br>";

echo "مشان الله, تعبت :("

?>