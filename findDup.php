<?php
  function findDup($numbers) {
    $length = count($numbers);
    $first = $numbers[0];

    /* $expectedSum = 0; */
    /* for($i = 0; $i < $length; $i++) { */
    /*   $expectedSum += $first + $i; */
    /* } */

    $expectedSum = (($first+$first+$length-1)*$length)/2;

    /* $expectedSum = ($first*$length)+(($length*$length)/2); */
    echo "expected $expectedSum\n";

    $actualSum = array_sum($numbers);
    $difference = $expectedSum - $actualSum;

    $index = $length - $difference;
    $duplicate = $numbers[$index];

    echo "duplicate $duplicate\n";
  }

  findDup(array(1,2,3,3));
  findDup(array(4,5,6,7,8,9,9,10,11,12,13,14));
?>
