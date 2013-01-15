<?php

namespace PPT\Tests;

/**
 * Description of SortTest
 *
 * @author cris
 */
class SortTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }
    
    public function testSortingStringsReturnsTrue()
    {
        $array = array('a', 'c', 'f', 'b', 'e');
        $sorted = sort($array);
        $this->assertTrue($sorted);
    }
    
    public function testSortingStrings()
    {
        $array = array('a', 'c', 'f', 'b', 'e');
        $sorted = sort($array);
        $this->assertSame(array('a', 'b', 'c', 'e', 'f'), $array);
    }
    
    public function testSortingStringsNumerically()
    {
        $array = array('a', 'c', 'f', 'b', 'e');
        $sorted = sort($array, SORT_NUMERIC);
        $this->assertNotSame(array('a', 'b', 'c', 'e', 'f'), $array);
    }
    
    public function testSortingNumberStringsRegularly()
    {
        $array = array('2', '5', '1', '3', '4');
        $sorted = sort($array, SORT_REGULAR);
        $this->assertSame(array('1', '2', '3', '4', '5'), $array);
    }
    
    public function testSortingNumberStringsNumerically()
    {
        $array = array('2', '5', '1', '3', '4');
        $sorted = sort($array, SORT_NUMERIC);
        $this->assertSame(array('1', '2', '3', '4', '5'), $array);
    }
    
    public function testSortingNumbers()
    {
        $array = array(2, 5, 1, 3, 4);
        $sorted = sort($array);
        $this->assertSame(array(1, 2 ,3 ,4, 5), $array);
    }
    
    
}

?>