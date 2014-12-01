<?php
/*
 * Practical Usage
 * */
class MyClass4
{
    public function dateFromYear($year)
    {
        if (!is_int($year))
        {
            return "Error: input just integer";
        }
        if ($year > 2099 || $year < 1900)
        {
            return "Error: Valuable dates only 1900-2099";
        }

        $a = $year % 19;
        $b = $year % 4;
        $c = $year % 7;

        $m = 24;
        $n = 5;

        $d = (19 * $a + $m) % 30;
        $e = ($n + 2 * $b + 4 * $c + 6 * $d) % 7;

        $u = $d + $e - 9;

        if ($u == 25 && $d == 28 && $e == 6) {
            return "Day: 18 April ".$year;
        } else if ($u >= 1 && $u <= 25) {
            return "Day: " . $u . " April ".$year;
        } else if ($u > 25) {
            $u -= 7;
            return "Day: " . $u . " April ".$year;
        } else {
            $u = 22 + $d + $e;
            return "Day: " . $u . " March ".$year;
        }
    }
}