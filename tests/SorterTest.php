<?php

namespace PPT\Tests;

use \PPT\Sorter;

/**
 * Description of FactorialTest
 *
 * @author cris
 */
class SorterTest extends \PHPUnit_Framework_TestCase
{
    private $sorter;
    
    public function setUp()
    {
        $this->sorter = new Sorter(array(3,2,4,5,1));
        $this->sorter->sort();
    }
    
    public function testSortingArray()
    {
        $sorted = $this->sorter->getSorted();
        $this->assertSame(array(1,2,3,4,5), $sorted);
    }
    
    public function testSortingArrayDoNotChangeInput()
    {
        $input = $this->sorter->getInput();
        $this->assertSame(array(3,2,4,5,1), $input);
    }

    public function testSetArrayChangeInput()
    {
        $this->sorter->setInput(array(2,3,4,1,5));
        $input = $this->sorter->getInput();
        $this->assertSame(array(2,3,4,1,5), $input);
    }
    
    public function testSetArrayCleanSorted()
    {
        $this->sorter->setInput(array(2,3,4,1,5));
        $sorted = $this->sorter->getSorted();
        $this->assertNull($sorted);
    }
    
    public function testSortingSetArray()
    {
        $this->sorter->setInput(array(2,3,4,1,5));
        $this->sorter->sort();
        $sorted = $this->sorter->getSorted();
        $this->assertSame(array(1,2,3,4,5), $sorted);
    }
    
    public function testSortingSetArrayDoNotChangeInput()
    {
        $this->sorter->setInput(array(2,3,4,1,5));
        $this->sorter->sort();
        $input = $this->sorter->getInput();
        $this->assertSame(array(2,3,4,1,5), $input);
    }
    
}

?>