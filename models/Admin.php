<?php

class Admin

{

    public $A_id,$A_pass,$A_fname,$A_lname,$A_position,$A_userlevel;


    public function __construct($A_id,$A_pass,$A_fname,$A_lname,$A_position,$A_userlevel)

    {

        $this->A_id = $A_id;

        $this->A_pass = $S_pass;

        $this->A_fname = $A_fname;

        $this->A_lname = $A_lname;

        $this->A_position = $A_position;

        $this->A_userlevel = $A_userlevel;


    }


    public static function getAll()

    {
    

        $AdminList = [];

        require("connect_database.php");

        $sql = "SELECT * FROM Admin";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $A_id= $my_row[A_id];

            $A_pass = $my_row[A_pass];

            $A_fname = $my_row[A_fname];

            $A_lname = $my_row[A_lname];

            $A_position = $my_row[A_position];

            $A_userlevel = $my_row[A_userlevel];

            $AdminList[] = new staff($A_id,$A_pass,$A_fname,$A_lname,$A_position,$A_userlevel);

        }

        require("connection_close.php");

        return $AdminList;
    }

}

?>