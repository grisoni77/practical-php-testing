<?php

namespace PPT;

/**
 * Description of Sorter
 *
 * @author cris
 */
class Sorter 
{
    private $input;
    private $sorted;
    
    public function __construct($input)
    {
        $this->setInput($input);
    }
    
    public function setInput($input)
    {
        $this->input = $input;
        $this->sorted = null;
    }
    
    public function getInput()
    {
        return $this->input;
    }
    
    public function getSorted()
    {
        return $this->sorted;
    }
    
    public function sort()
    {
        $this->sorted = $this->input;
        sort($this->sorted);
    }
}

?>