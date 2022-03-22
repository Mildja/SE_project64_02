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
      //$studentRequestList=studentRequest::getAll();
       require_once('./views/studentRequest/detailRequest.php');
       
   }
}?>