<?php
// Function to find element 
// occurring odd number of times
function getOddOccurrence(&$arr, $arr_size)
{
    $count = 0;

    // cal number of odd numbers
    for ($i = 0;
         $i < $arr_size; $i++)
    {
        if ($arr[$i] % 2 != 0)
            $count++;
    }

    // display min & max
    echo(max($array));
    echo("\n");
    echo(min($array));

    return $count;
}
?>