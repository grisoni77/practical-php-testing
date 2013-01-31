<?php

namespace PPT\Tests;

use PPT\StringGetter;

/**
 * Description of StringGetterTest
 *
 * @author cris
 */
class StringGetterTest extends \PHPUnit_Framework_TestCase
{
    protected $sg;
    
    public function setUp()
    {
        $this->sg = new StringGetter('piciu');
    }
    
    public function testGetString()
    {
        $string = $this->sg->getString();
        $this->assertEquals('piciu', $string);
    }
    
    public function testGetStringType()
    {
        $string = $this->sg->getString();
        $this->assertTrue(is_string($string));        
    }
}

?>