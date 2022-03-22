<?php class studentRequestController
{
    public function index(){
         $studentRequestList=studentRequest::getAll();
        echo "haha";
        require_once('views/studentRequest/index.php');
    }
   

  

   public function detailRequest()
   {
       
       $id=$_GET['R_id'];
       echo $id;
       $studentRequest  = studentRequest::get($id);
       echo $studentRequest->R_id;
      
       require_once('./views/studentRequest/detailRequest.php');
       
   }

   public function newRequest()
   {
       
       require_once('./views/studentRequest/addrequest.php');
       
   }

   public function addRequest()
   {
       
       $R_type = $_GET['R_type'];
       $S_fname = $_GET['S_fname']; 
       $S_lname = $_GET['S_lname'];
       $R_position = $_GET['R_position'];
       $R_cost = $_GET['R_cost'];
       $R_room = $_GET['R_room'];
       $R_sdate = $_GET['R_sdate'];
       $R_fdate= $_GET['R_fdate'];
       $O_name = $_GET['O_name'];
       $O_addr = $_GET['O_addr'];
       $C_fname = $_GET['C_fname'];
       $C_lname = $_GET['C_lname'];
       $C_email = $_GET['C_email'];
       $C_tel = $_GET['C_tel'];
       $D_fname = $_GET['D_fname'];
       $D_lname = $_GET['D_lname'];
       $D_position = $_GET['D_position'];
       studentRequest::Add($R_type,$R_position,$R_cost,$R_room,$R_sdate, $R_fdate);
       Colabor::Add($C_fname,$C_lname,$C_email,$C_tel);
       Student::Add($S_fname,$S_lname);
       Organization::Add($O_name,$O_addr);
       Data_namedoc::Add($D_fname,$D_lname,$D_position);
       studentRequestController::index();
   }

   

}?>