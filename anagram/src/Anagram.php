<?php

class Anagram
{

    function compareWords($input1, $input2)
    {
        $word1 = str_split($input1);
        $word2 = str_split($input2);
        $array1 = sort($word1);
        $array2 = sort($word2);

        if ($input1 == $input2) {
            return true;
        }
        elseif ($word1 !== $word2) {
            return false;
        }
        elseif ($array1 == $array2) {
            return true;
        };
    }


}

?>
