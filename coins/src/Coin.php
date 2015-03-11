<?php

  class Coin
  {

    function changeCounter($change)
    {
       $change_array = array(0,0,0,0);

       $quarters = floor($change/0.25);
       $change_array[3] = $quarters;
       $change -= ($quarters * 0.25);

       $dimes = floor($change/0.10);
       $change_array[2] = $dimes;
       $change -= ($dimes * 0.10);

       $nickles = floor($change / 0.05);
       $change_array[1] = $nickles;
       $change -= ($nickles * 0.05);

       $change_array[0] = ($change / 0.01);

       return $change_array;
    }

  }

?>
