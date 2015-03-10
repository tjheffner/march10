<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords_oneletter()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = 'a';

            //Act
            $result = $test_Anagram->compareWords($input);

            //Assert
            $this->assertEquals(true, $result);
        }


    }

?>
