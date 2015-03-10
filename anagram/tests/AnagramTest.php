<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords_oneLetterTrue()
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

        function test_compareWords_oneLetterFalse()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'a';
            $input2 = 'b';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_compareWords_reverseOrder()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'ab';
            $input2 = 'ba';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);
        }
        function test_compareWords_unmatchedInputsMultipleLetters()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = 'cat';
            $input2 = 'dog';
            $input3 = 'snake';

            //Act
            $result = $test_Anagram->compareWords($input1, $input2, $input3);

            //Assert
            $this->assertEquals(false, $result);
        }


    }

?>
