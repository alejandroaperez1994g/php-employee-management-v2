<?php
class FormModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $result = "OK";
    

        try {
            $query = $this->db->connect()->query("INSERT INTO employees (name, last_name, email, gender, age, streetAddress, city, state, postalCode, phoneNumber) VALUES ('" . $data['nameUpdate'] ."','". $data['lastNameUpdate']."','". $data['emailUpdate']."','". $data['genderUpdate']."',". intval($data['ageUpdate']).",". intval($data['streetUpdate']).",'". $data['cityUpdate']."','". $data['stateUpdate']."',". intval($data['postalUpdate']).",". intval($data['phoneUpdate']).");");
            return $result;
        } catch (PDOException $e) {
            return $e;
        }
    }
    
    public function getEmployeeById($id)
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM employees WHERE employee_id = {$id};");
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

    public function updateEmployee ($data, $id)
    {

        $result = "OK";
    

        try {
            $query = $this->db->connect()->query("UPDATE employees SET  
            name='". $data['nameUpdate'] ."',
            last_name='".$data['lastNameUpdate']."',
            email='". $data['emailUpdate'] . "',
            gender='" . $data['genderUpdate'] . "',
            age=".intval($data['ageUpdate']).",
            streetAddress=".intval($data['streetUpdate']).",
            city='".$data['cityUpdate']."',
            state='".$data['stateUpdate']."',
            postalCode=".intval($data['postalUpdate']).",
            phoneNumber=".intval($data['phoneUpdate'])." WHERE  employee_id = {$id}");
            
            return $result;
        } catch (PDOException $e) {
            return $e;
        }

    }
}
