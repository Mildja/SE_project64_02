<?php class studentRequestController
{
    public function index(){
         $studentRequestList=studentRequest::getAll();
        echo "haha";
        require_once('views/studentRequest/index.php');
    }
  
}?>