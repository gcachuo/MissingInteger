/**
Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].
*/

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.
    
    //sort array to loop correctly from least to greatest
    asort($A);
    
    $i=1;   
    foreach($A as $item){
        
        //check if the current index is lower or equal, it needs to be greater than the current and not in the array
        while($item>=$i){
            // detect the lowest number not in the array
            if(!in_array($i,$A)){
                //end the loop if it finds the number
                break;
            }
            $i++;
        }
    }
    return $i;
}
