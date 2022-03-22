<?php

class Data_namedoc

{

    public $D_id,$D_fname,$D_lname,$D_position,$O_id;


    public function __construct($D_id,$D_fname,$D_lname,$D_position,$O_id)

    {

        $this->D_id = $D_id;

        $this->D_fname = $D_fname;

        $this->D_lname = $D_lname;

        $this->D_position = $D_position;

        $this->O_id = $O_id;

    }


    public static function getAll()

    {
    

        $Data_namedocList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM Data_namedoc";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $D_id = $my_row['D_id'];

            $D_fname = $my_row['D_fname'];

            $D_lname = $my_row['D_lname'];

            $D_position = $my_row['D_position'];

            $O_idr = $my_row['O_id'];


            $Data_namedocList[] = new Data_namedoc($D_id,$D_fname,$D_lname,$D_position,$O_id);

        }

        require("connection_close.php");

        return $Data_namedocList;
    }

    public static function Add($D_fname,$D_lname,$D_position)

    { 

       require("connect_connection.php");

      

       $sql = "INSERT INTO `Data_namedoc` (`D_fname`, `D_lname`, `D_position`) VALUES ('$D_fname', '$D_lname', '$D_position')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }

}

?>