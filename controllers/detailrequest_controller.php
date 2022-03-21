<?php class detailrequestController
{
    public function index(){
         $detailrequestList=detailrequest::getAll();
        require_once('views/detailrequest/index.php');
    }
  
}?>