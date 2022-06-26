<?php
class FormModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        echo "insert nuevo trabajador";
    }
    public function update()
    {
        echo "update nuevo trabajador";
    }
}
