<?php
//
    $x = 5;
    function First()
    {
        echo "Using variable x inside the function = $x <br>";
    }
    First();
    echo "Using variable x outside the function = $x <br>";
//
    function Second()
    {
        $y = 5;
        echo "Using variable y inside the function = $y <br>";
    }
    Second();
    echo "Using variable y outside the function = $y <br>";
//declaring global
$a = 5;
$b = 10;
function Third()
{
    global $a, $b;
    $sum = $a + $b;
    echo "sum of $a + $b = $sum <br>" ;
}
Third();
//declaring static
function Fourth()
{
    static $c = 0;
    echo "<br>Function call count: ", $c + 1;
    echo "<br>Value of c = $c <br>";
    $c++;
    echo "value of c after increment = $c <br>";
}
Fourth();
Fourth();
Fourth();
?>