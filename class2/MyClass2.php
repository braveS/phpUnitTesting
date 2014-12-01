<?php
class MathException extends Exception {};
/*
 * Throw the exception
 * */

class MyClass2
{
    public function divide($x, $y)
    {
        if (!(boolean)$y)
        {
            throw new MathException('Division by zero');
        }
        return $x / $y;
    }
}
