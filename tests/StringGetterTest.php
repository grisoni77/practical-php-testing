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
    public function testGetString()
    {
        $sg = new StringGetter('piciu');
        $string = $sg->getString();
        $this->assertEquals('piciu', $string);
    }
    
    public function testGetStringType()
    {
        $sg = new StringGetter('piciu');
        $string = $sg->getString();
        $this->assertTrue(is_string($string));        
    }
}

?>