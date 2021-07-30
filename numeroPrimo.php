<?php
 $num = $_POST['numero'];
 $i = $num;
for($num = 1; $num <= $i; $num++)
{
    $divisores = 0;
    for($j = $num; $j >= 1; $j--)
    {
        if (($num % $j) == 0) {
            $divisores++;
        }
    }
    if ($divisores == 2)
    {
        echo $num . ', ';
    }
}