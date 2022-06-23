<?php

include_once ENTITIES . "/Employees.php";

class BoardModel extends Model
{

    function __construct()
    {
        parent::__construct();
        echo "<p>BoardModel.php</p>";
    }

    public function getAllEmployees()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM employees;");
            while ($row = $query->fetch()) {
                $item = new Employees();

                $item->id = $row['employee_id'];
                $item->name = $row['name'];
                $item->last_name = $row['last_name'];
                $item->email = $row['email'];
                $item->gender = $row['gender'];
                $item->age = $row['age'];
                $item->streetAddress = $row['streetAddress'];
                $item->city = $row['city'];
                $item->state = $row['state'];
                $item->postalCode = $row['postalCode'];
                $item->phoneNumber = $row['phoneNumber'];


                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            echo $e;
        }
    }







    public function getEmployeeById()
    {
        echo "obtener el dato del trabajador de la base de datos";
    }
}
