<?php

namespace PPT;

/**
 * Description of Collection
 *
 * @author cris
 */
class Collection extends \ArrayObject
{
    /**
     *
     * @param mixed $value 
     */
    public function add($value)
    {
        $this->offsetSet($value->name, $value);
    }
    
    /**
     *
     * @param string $name
     * @return boolean 
     */
    public function exists($value)
    {
        return $this->offsetExists($value->name);
    }
    
    /**
     *
     * @param string $name
     * @return boolean 
     */
    public function remove($value)
    {
        return $this->offsetUnset($value->name);
    }
}

?>