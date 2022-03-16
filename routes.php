<?php
$controllers = array('pages'=>['home','error'],'LaboratoryStaff'=>['index','search','newLaboratoryStaff','addLaboratoryStaff','delete','deleteConFirm','updateForm','update'],'Laboratory'=>['index','search','newLaboratory','addLaboratory','delete','deleteConform','updateForm','update'],'CheckRT_PCR'=>['index','search','newCheckRT_PCR','addCheckRT_PCR','delete','deleteConFirm','updateForm','update']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":                   $controller = new PagesController();
                                        break;
        case "LaboratoryStaff":         require_once("./models/LaboratoryStaff.php");
                                        $controller = new LaboratoryStaffController();
                                        break;
                                        
        case "Laboratory":              require_once("./models/Laboratory.php");
                                        require_once("./models/LaboratoryStaff.php");
                                        $controller = new LaboratoryController();
                                        break;

        case "CheckRT_PCR":             require_once("./models/Laboratory.php");
                                        require_once("./models/StaffAgency.php"); 
                                        require_once("./models/AtkTestResult.php");  
                                        require_once("./models/CheckRT_PCR.php");  
                                       
                                        $controller = new CheckRT_PCRController();
                                        break;                             
       
    }
    $controller->{$action}();

}
if(array_key_exists($controller,$controllers)){

    if(in_array($action,$controllers[$controller]))

        call($controller,$action);

    else

        call('pages','error');

}

else{

    call('pages','error');

}


