<?php

namespace PPT;

/**
 * Description of StringGetter
 *
 * @author cris
 */
class StringGetter 
{
    protected $string;
    
    public function __construct($string)
    {
        $this->string = $string;
    }
    
    public function getString()
    {
        return $this->string;
    }
}

?>