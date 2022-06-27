<?php

include_once ENTITIES . "/Users.php";

class MainModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function autenticate()
    {
        
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM users;");
            while ($row = $query->fetch()) {
                $item = new Users();

                $item->email = $row['email'];
                $item->password = $row['password'];
                
                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            echo $e;
        }

    }
}
