<?php

namespace PPT\Tests;

/**
 * Description of CollectionTest
 *
 * @author cris
 */
class CollectionTest extends \PHPUnit_Framework_TestCase
{
    private $collection;
    private $value;
    
    public function setUp() 
    {
        if (!isset($this->collection)) {
            $this->collection = new \PPT\Collection();
        }
        $this->value = new \ArrayObject(array("name" => "Pippo",     "city" => "Topolinia"),  \ArrayObject::ARRAY_AS_PROPS);
    }
    
    
    public function testAddItem()
    {
        $this->collection->add($this->value);
        $this->assertTrue($this->collection->exists($this->value));
        return $this->collection;
    }
    
    /**
     * @depends testAddItem
     */
    public function testCountAfterAdd($collection)
    {
        $this->assertEquals(1, $collection->count());
        
    }
    
    /**
     * @depends testAddItem
     */
    public function testContains($collection)
    {
        $this->assertTrue($collection->exists($this->value));
    }
    
    /**
     * @depends testAddItem
     */
    public function testRemove($collection)
    {
        $collection->remove($this->value);
        $this->assertFalse($collection->exists($this->value));
        return $collection;
    }
    
    /**
     * @depends testRemove
     */
    public function testCountAfterRemove($collection)
    {
        $this->assertEquals(0, $collection->count());
        
    }
}

?>