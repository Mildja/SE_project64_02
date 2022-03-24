<?php class teacherController
{
    public function index(){
        $teacher_list = teacher::getAll();
        require_once('views/teacher/index.php');
    }
    public function addAP_request()
    {
        
        $AP_date = date("Y-m-d");
        $AP_approve= $_GET['AP_approve'];
        $AP_note= $_GET['AP_note'];
        $A_id= $_GET['A_id'];
        $R_id= $_GET['R_id'];
    

        teacher::addAP_request($AP_date,$AP_approve,$AP_note,$A_id,$R_id);
        
        teacherController::index();
        
    }
    public function updateRequest()
    {   
        $R_id = $_GET['R_id'];
        $R_status= $_GET['R_status'];
        teacher::updateRequest($R_id,$R_status);
        teacherController::index();
    }
    
   
}?>