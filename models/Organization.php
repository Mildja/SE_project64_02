<?php

class Organization

{

    public $O_id,$O_name,$O_addr;


    public function __construct($O_id,$O_name,$O_addr)

    {

        $this->O_id = $O_id;

        $this->O_name = $O_name;

        $this->O_addr = $O_addr;


    }


    public static function getAll()

    {
    

        $OrganizationList = [];

        require("connect_database.php");

        $sql = "SELECT * FROM Organization";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $O_id = $my_row[O_id];

            $O_name = $my_row[O_name];

            $O_addr = $my_row[O_addr];


            $OrganizationList[] = new Organization($O_id,$O_name,$O_addr);

        }

        require("connection_close.php");

        return $OrganizationList;
    }

}

?>