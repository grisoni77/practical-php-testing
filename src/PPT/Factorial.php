<?php

namespace PPT;

/**
 * Description of Factorial
 *
 * @author cris
 */
class Factorial 
{
    public function __construct()
    {
        
    }
    
    /**
     *
     * @param int $number 
     */
    public function evaluate($number)
    {
        $res = 1;
        for ($i=2; $i <= $number; $i++) {
            $res *= $i;
        }
        return $res;
    }
}

?>