<?php

class Request

{

    public $R_id,$R_type,$R_position,$R_sdate,$R_fdate,$R_cost,$R_room,$R_status,$S_id,$C_id,$D_id;


    public function __construct($R_id,$R_type,$R_position,$R_sdate,$R_fdate,$R_cost,$R_room,$R_status,$S_id,$C_id,$D_id)

    {

        $this->R_id = $R_id;

        $this->R_type = $R_type;

        $this->R_position = $R_position;

        $this->R_sdate = $R_sdate;

        $this->R_fdate = $R_fdate;

        $this->R_cost = $R_cost;

        $this->R_room = $R_room;

        $this->R_status = $R_status;

        $this->S_id = $S_id;

        $this->C_id = $C_id;

        $this->D_id = $D_id;
    }


    public static function getAll()

    {
    

        $RequestList = [];

        require("connect_database.php");

        $sql = "SELECT * FROM Request";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $R_id= $my_row[R_id];

            $R_type = $my_row[R_type];

            $R_position = $my_row[R_position];

            $R_sdate = $my_row[R_sdate];

            $R_fdate = $my_row[R_fdate];

            $R_cost= $my_row[R_cost];

            $R_room = $my_row[R_room];

            $R_status = $my_row[R_status];

            $S_id = $my_row[S_id];

            $C_id = $my_row[C_id];

            $D_id = $my_row[D_id];

            $RequestList[] = new staff($R_id,$R_type,$R_position,$R_sdate,$R_fdate,$R_cost,$R_room,$R_status,$S_id,$C_id,$D_id);

        }

        require("connection_close.php");

        return $RequestList;
    }

}

?>