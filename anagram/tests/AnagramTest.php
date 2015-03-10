<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords_oneletter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'a';
            $input2 = 'a';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);
        }


    }

?>
