<?php class teacherController
{
    public function index(){
        $teacher_list = teacher::getAll();
        require_once('views/teacher/index.php');
    }
    public function addAP_request()
    {
        $AP_date = $_GET['AP_date'];
        $AP_approve= $_GET['AP_approve'];
        $AP_note= $_GET['AP_note'];
        $A_id= $_GET['A_id'];
        $R_id= $_GET['R_id'];
        teacher::addAP_request($AP_date,$AP_approve,$AP_note,$A_id,$R_id);
        teacherController::index();
    }
    public function updateRequest()
    {   
        $RH_ID = $_GET['RH_ID'];
        $RH_Name = $_GET['RH_Name'];
        $RH_Date= $_GET['RH_Date'];
        updateRequest::updateRequest($RH_ID,$RH_Name,$RH_Date);
        updateRequestController::index();
    }
   
}?>