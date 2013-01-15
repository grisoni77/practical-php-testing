<?php

namespace PPT\Tests;

use \PPT\Factorial;
use \PHPUnit_Framework_TestCase;

/**
 * Description of FactorialTest
 *
 * @author cris
 */
class FactorialTest extends PHPUnit_Framework_TestCase
{
    protected $factorial;
    
    public function setUp()
    {
        $this->factorial = new \PPT\Factorial();
    }
    
    public function testEvalFactorial()
    {
        $factorial = $this->factorial->evaluate(5);
        $this->assertTrue($factorial == 120);
        
        $this->assertTrue($this->factorial->evaluate(4) == 24);
        $this->assertTrue($this->factorial->evaluate(3) == 6);
        $this->assertTrue($this->factorial->evaluate(2) == 2);
        $this->assertTrue($this->factorial->evaluate(1) == 1);
    }
    
    public function testEvalFactorialIsNumber()
    {
        $factorial = $this->factorial->evaluate(5);
        $this->assertTrue(is_int($factorial));
    }
    
    public function testEvalFactorialOfZero()
    {
        $this->assertEquals(1, $this->factorial->evaluate(0));
    }
    
}

?>