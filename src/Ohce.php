<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    // TODO: Ohce Kata
    public function ohce(string $chain): string
    {
        $words = explode(" ", $chain);
        $name = $words[1];
        $time = $this->whatTimeIsIt();
        if($time>=20 && $time<=23 && $time>=0 && $time<6){
            return "¡Buenas noches ".$name."!";
        }
        else if($time>=6 && $time<12){
            return "¡Buenas tardes ".$name."!";
        }
        return "¡Buenos días ".$name."!";
    }

    public function whatTimeIsIt(): int{
        return rand(0, 24);
    }
}
