<?php
include_once '/usr/local/bin/phpunit';
include_once 'MyClass2.php';
/*
 * Testing the exceptions
 * */

class MyClass2Test extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException MathException
     */
    public function testDivision1()
    {
        $my = new MyClass2();
        $my->divide (8, 0);
    }

    // OR

    public function testDivision2 ()
    {
        $this->setExpectedException('MathException');
        $my = new MyClass2();
        $my->divide(8, 0);
    }
}

