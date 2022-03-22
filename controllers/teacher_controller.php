<?php class teacherController
{
    public function index(){
        $teacher_list = teacher::getAll();
        require_once('views/teacher/index.php');
    }
    public function addAP_request()
    {
        $RH_ID = $_GET['RH_ID'];
        $RH_Name = $_GET['RH_Name'];
        $RH_Date= $_GET['RH_Date'];
        teacher::addAP_request($AP_id,$AP_date,$AP_approve,$AP_note,$A_id,$R_id);
        teacherController::index();
    }
   
}?>