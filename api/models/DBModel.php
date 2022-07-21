<?php
require_once PROJECT_ROOT_PATH . "/models/Database.php";
 
class BDModel extends Database
{
    public function getRegisters($limit)
    {
        return $this->select("SELECT * FROM prototipo ORDER BY registro_id ASC LIMIT ?", ["i", $limit]);
    }
}