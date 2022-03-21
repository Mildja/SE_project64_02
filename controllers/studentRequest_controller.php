<?php class studentRequestController
{
    public function index(){
         $studentRequestList=studentRequest::getAll();
        echo "haha";
        require_once('views/studentRequest/index.php');
    }
   

    public function detailRequest(){
         echo "123";
        $studentRequestList=studentRequest::getAll();
       
       require_once('./views/studentRequest/detailRequest.php');
   }
}?>