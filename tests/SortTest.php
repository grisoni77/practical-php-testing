<?php

namespace PPT\Tests;

/**
 * Description of SortTest
 *
 * @author cris
 */
class SortTest extends \PHPUnit_Framework_TestCase
{
    protected $numArray;
    protected $charArray;
    
    public function setUp()
    {
        $this->numArray = array('2', '5', '1', '3', '4');
        $this->charArray = array('a', 'c', 'f', 'b', 'e');
    }
    
    public function tearDown()
    {
        $this->numArray = array('2', '5', '1', '3', '4');
        $this->charArray = array('a', 'c', 'f', 'b', 'e');
    }
    
    public function testSortingStringsReturnsTrue()
    {
        $sorted = sort($this->charArray);
        $this->assertTrue($sorted);
    }
    
    public function testSortingStrings()
    {
        $array = $this->charArray;
        $sorted = sort($array);
        $this->assertSame(array('a', 'b', 'c', 'e', 'f'), $array);
    }
    
    public function testSortingStringsNumerically()
    {
        $array = $this->charArray;
        $sorted = sort($array, SORT_NUMERIC);
        $this->assertNotSame(array('a', 'b', 'c', 'e', 'f'), $array);
    }
    
    public function testSortingNumberStringsRegularly()
    {
        $array = $this->numArray;
        $sorted = sort($array, SORT_REGULAR);
        $this->assertSame(array('1', '2', '3', '4', '5'), $array);
    }
    
    public function testSortingNumberStringsNumerically()
    {
        $array = $this->numArray;
        $sorted = sort($array, SORT_NUMERIC);
        $this->assertSame(array('1', '2', '3', '4', '5'), $array);
    }
    
    public function testSortingNumbers()
    {
        $array = array_map(function($value) {
            return intval($value);
        }, $this->numArray);
        $sorted = sort($array);
        $this->assertSame(array(1, 2 ,3 ,4, 5), $array);
    }
    
    
}

?>