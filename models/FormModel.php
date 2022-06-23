<?php
class FormModel extends Model
{

    function __construct()
    {
        parent::__construct();
        echo "<p>FormModel.php</p>";
    }

    public function insertForm()
    {
        echo "insert nuevo trabajador";
    }
    public function updateForm()
    {
        echo "update nuevo trabajador";
    }
}
