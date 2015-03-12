<?php

    require_once "src/LetterValue.php";

    class LetterValueTest extends PHPUnit_Framework_TestCase
    {
        function test_SimpleValueAssignment()
        {

            //Arrange
            $test_LetterValue = new LetterValue;
            $input = "a";

            //Act
            $result = $test_LetterValue->assignLetterValue($input);

            //Assert
            $this->assertEquals(1, $result);

        }
    }



?>
