<?php

namespace PPT\Tests;

use PPT\AirportTable;

/**
 * AirportTableTest
 * Testing the Table Truncation TearDown Pattern
 *
 * @author cris
 */
class AirportTableTest extends \PHPUnit_Framework_TestCase
{
    protected static $conn;
    protected $table;

    /**
     * establish connection to db
     * and create table
     */
    public static function setUpBeforeClass()
    {
        self::$conn = new \PDO('sqlite::memory:');
        self::$conn->query('CREATE TABLE airport (
            id int(20) NOT NULL PRIMARY KEY,
            name varchar(128) NOT NULL,
            UNIQUE(name)
        )');
    }
    
    /**
     * 
     */
    public function setUp()
    {
        $this->table = new AirportTable(self::$conn);
    }
    
    /**
     * Truncate table 
     */
    public function tearDown()
    {
        self::$conn->query('TRUNCATE airport');
    }
    
    public function testGetSequenceNextOnEmptyTable()
    {
        $id = $this->table->getSequenceNext();
        $this->assertEquals(1, $id);
    }
    
    public function testInsertRecordReturnCorrectLastInsertId()
    {
        $name = 'Milano Malpensa';
        $insertid = $this->table->insert($name);
        $this->assertEquals(1, $insertid);
    }
    
    /**
     * @depends testInsertRecordReturnCorrectLastInsertId
     */
    public function testGetSequenceNextOnNonEmptyTable()
    {
        $id = $this->table->getSequenceNext();
        $this->assertEquals(2, $id);
    }
    
    
    public function testInsertRecord()
    {
        $name = 'Milano Malpensa';
        $insertid = $this->table->insert($name);
        $record = $this->table->selectById($insertid);
        $this->assertEquals($name, $record['name']);
        return $insertid;
    }
    
    /**
     * @depends testInsertRecord
     */
    public function testDeleteRecord($insertid)
    {
        //$name = 'Milano Malpensa';
        //$insertid = $this->table->insert($name);
        $this->table->delete($insertid);
        $record = $this->table->selectById($insertid);
        $this->assertEquals(false, $record);
    }
}

?>