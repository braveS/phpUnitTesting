<?php
include_once '/usr/local/bin/phpunit';
include_once 'MyClass.php';
/*
 * Check the equality
 * */

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
    }
}
