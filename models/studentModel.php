<?php

class studentRequest

{

    public $O_name,$R_type,$S_id;



    public function __construct($S_id,$O_name,$R_type)

    {
        $this->S_id = $S_id;
        $this->O_name = $O_name;
        $this->R_type = $R_type;
    }


    public static function getAll()

    {
    

        $studentRequestList = [];

        require("connect_connection.php");

        $sql = "SELECT Request.S_id, Organization.O_name,Request.R_type
        FROM Request INNER JOIN Data_namedoc ON Request.D_id=Data_namedoc.D_id
        INNER JOIN Organization ON Organization.O_id =Data_namedoc.O_id";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            $S_id = $my_row[S_id];
            $O_name= $my_row[O_name];
            $R_type = $my_row[R_type];
           

            $studentRequestList[] = new studentRequest($S_id,$O_name,$R_type);

        }

        require("connection_close.php");

        return $studentRequestList;

    }

}
