<?php

class Anagram
{

    function compareWords($input1, $input2)
    {
        $input2u = strtoupper($input2);
        $input1u = strtoupper($input1);
        $word1 = str_split($input1u);
        $word2 = str_split($input2u);
        $array1 = sort($word1);
        $array2 = sort($word2);

        if ($input1 == $input2) {
            return $input2u." is an anagram of ".$input1u;
        }
        elseif ($word1 !== $word2) {
            return $input2u." is not an anagram of ".$input1u;
        }
        elseif ($array1 == $array2) {
            return $input2u." is an anagram of ".$input1u;
        };
    }


}

?>
