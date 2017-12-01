<?php

/**You are given an array of *n* integers, *a~0~,a~1~,…,a~n-1~* ,
 * and a positive integer, *k*. Find and print the number of *(i,j)*
 * pairs where *i < j* and *a~i~ + a~j~* is divisible by *k*.
 * - Falua Temitope Oyewole
 * - Akinyokun Victor
 * - Ogunlade Oluwasayo
 *  01-12-2017
 * @param array $input
 * @param $k
 * @param bool $display_pair
 */

function discrete($input = [], $k, $display_pair = false ) {

    $length = count($input);
    $output = []; /**To store the output of the execution*/

    $bigArray = []; /**The bigArray stores the pair */
    $finalArray = []; /** the finalArray store and output the count of the pairs */

    for($i = 0; $i < $length; $i++) {
        for($j = 0; $j < $length; $j++) {
            if($i < $j) { $bigArray[] = array($i ,$j); }   
        }
    }
    foreach($bigArray as $ba) {
        if ( ($input[$ba[0]] + $input[$ba[1]]) % $k === 0 ) {
            $finalArray[]= array($input[$ba[0]] ,$input[$ba[1]]) ;
        }

    }
    if ($display_pair) {
        echo $output[] = "(i,j) array is =>>".json_encode($bigArray) ."\n". "number of discrete pairs ". count($finalArray);
    } else {
        echo "The Number of discrete pairs: ". count($finalArray);
    }

}

$array = [1, 3, 2, 6, 1, 2];
$k = 3;
discrete($array, $k);



