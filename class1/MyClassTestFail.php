<?php
include_once '/usr/local/bin/phpunit';
include_once 'MyClass.php';
/*
 * Dataprovider with Failed test
 * */

class MyClassTestFail extends PHPUnit_Framework_TestCase {

    /**
     * @dataProvider providerPower
     */
    public function testPower($a, $b, $c)
    {
        $my = new MyClass();
        $this->assertEquals($c, $my->power($a, $b));
    }

    public function providerPower ()
    {
        return array (
            array (2, 2, 4),
            array (2, 3, 9),
            array (3, 5, 243)
        );
    }
}