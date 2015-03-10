<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords_onelettertrue()
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

        function test_compareWords_oneletterfalse()
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

        function test_compareWords_reverseorder()
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

    }

?>
