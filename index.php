<?php
/**
 * Write a function:
 *
 * function solution($A);
 *
 * that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.
 *
 * For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.
 *
 * Given A = [1, 2, 3], the function should return 4.
 *
 * Given A = [−1, −3], the function should return 1.
 *
 * Write an efficient algorithm for the following assumptions:
 *
 * N is an integer within the range [1..100,000];
 * each element of array A is an integer within the range [−1,000,000..1,000,000].
 */

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A)
{
    // write your code in PHP7.

    $i = 1;
    $A = array_flip($A);
    foreach ($A as $item => $key) {
        //check if the current index is lower or equal, it needs to be greater than the current and not in the array
        while ($item >= $i) {
            // detect the lowest number not in the array
            if (!isset($A[$i])) {
                //end the loop if it finds the number
                break;
            }
            $i++;
        }
    }
    return $i;
}

$A = [];
for ($i = 1; $i < 100000; $i++) {
    $A[] = $i;
}
//$A = [1, 3, 6, 4, 1, 2];

$start = microtime(true);
echo $start . '<br>';
echo solution($A) . '<br>';
echo round(microtime(true) - $start, 5) . '<br>';