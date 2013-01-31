<?php

namespace PPT;

/**
 * Description of AirportTable
 *
 * @author cris
 */
class AirportTable 
{
    /**
     *
     * @var \PDO
     */
    protected $conn;
    
    /**
     *
     * @param \PDO $conn 
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    public function getSequenceNext()
    {
        $stm = $this->conn->query(sprintf('SELECT IFNULL(MAX(id),0) FROM airport'), \PDO::FETCH_COLUMN, 0);
        $id = $stm->fetch();
        return $id+1;
    }
    
    public function insert($name)
    {
        $id = $this->getSequenceNext();
        $stm = $this->conn->query(sprintf('INSERT INTO airport (id, name) VALUES (%d, %s)',
            $id, $this->conn->quote($name)
        ));
        return $this->conn->lastInsertId();
    }
    
    public function selectById($id)
    {
        $stm = $this->conn->query(sprintf('SELECT * FROM airport WHERE id = %d', $id), \PDO::FETCH_ASSOC);
        $record = $stm->fetch();
        return $record;
    }
    
    public function delete($id)
    {
        $stm = $this->conn->query(sprintf('DELETE FROM airport WHERE id = %d', $id));
        return $stm;
    }
}

?>