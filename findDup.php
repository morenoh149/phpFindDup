<?php
  function findDup($numbers) {
    $length = count($numbers);
    $first = $numbers[0];

    /* for-loop summation
     $expectedSum = 0;
     for($i = 0; $i < $length; $i++) {
       $expectedSum += $first + $i;
     }
     */

    // analytical approach
    $expectedSum = (($first+$first+$length-1)*$length)/2;

    /* $expectedSum = ($first*($length+1))+(($length*$length)/2); */
    echo "expectedSum $expectedSum\n";

    $actualSum = array_sum($numbers);
    $difference = $expectedSum - $actualSum;

    $index = $length - $difference;
    $duplicate = $numbers[$index];

    echo "duplicate $duplicate\n";
  }

  findDup(array(1,2,3,3));
  findDup(array(4,5,6,7,8,9,9,10,11,12,13,14));
?>
