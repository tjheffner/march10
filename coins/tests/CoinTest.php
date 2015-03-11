<?php

require_once "src/Coin.php";

class CoinTest extends PHPUnit_Framework_TestCase
{
    function test_changeCounter_pennies()
    {
      //Arrange
      $test_CoinAmount = new Coin;
      $input = 0.01;

      //Act
      $result = $test_CoinAmount->changeCounter($input);

      //Assert
      $this->assertEquals([1, 0, 0, 0], $result);
    }

    function test_changeCounter_nickels()
    {
      //Arrange
      $test_CoinAmount = new Coin;
      $input = 0.05;

      //Act
      $result = $test_CoinAmount->changeCounter($input);

      //Assert
      $this->assertEquals([0, 1, 0, 0], $result);
    }

    function test_changeCounter_nickelPenny()
    {
      //Arrange
      $test_Coin = new Coin;
      $input = 0.06;

      //Act
      $result = $test_Coin->changeCounter($input);

      //Assert
      $this->assertEquals([1, 1, 0, 0], $result);
    }

    function test_changeCounter_dime()
    {
      //Arrange
      $test_Coin = new Coin;
      $input = 0.10;

      //Act
      $result = $test_Coin->changeCounter($input);

      //Assert
      $this->assertEquals([0, 0, 1, 0], $result);
    }

    function test_changeCounter_dimeNickelPenny()
    {
      //Arrange
      $test_Coin = new Coin;
      $input = 0.16;

      //Act
      $result = $test_Coin->changeCounter($input);

      //Assert
      $this->assertEquals([1, 1, 1, 0], $result);
    }

    function test_changeCounter_quarters()
    {
      //Arrange
      $test_Coin = new Coin;
      $input = 0.25;

      //Act
      $result = $test_Coin->changeCounter($input);

      //Assert
      $this->assertEquals([0, 0, 0, 1], $result);
    }

    function test_changeCounter_quarterDimeNickelPenny()
    {
      //Arrange
      $test_Coin = new Coin;
      $input = 0.41;

      //Act
      $result = $test_Coin->changeCounter($input);

      //Assert
      $this->assertEquals([1, 1, 1, 1], $result);
    }

}

?>
