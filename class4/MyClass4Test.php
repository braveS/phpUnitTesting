<?php
include_once '/usr/local/bin/phpunit';
include_once 'MyClass4.php';
/*
 * Practical Test
 * */

class MyClass4Test extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerYear
     */
    public function testDateFromYear ($expectedAnswer, $provideYear)
    {
        $my = new MyClass4();
        $this->assertEquals($expectedAnswer, $my->dateFromYear($provideYear));
    }

    public function providerYear()
    {
        return array(
            array("Error: Valuable dates only 1900-2099", 100500),
            array("Error: input just integer", "abc123"),
            array("Day: 20 April 2014", 2014),
            array("Day: 2 April 2010", 2010)
        );
    }
}
