<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'teacher' => ['index', 'addAP_request','updateRequest','detailRequest','search'],
    'studentRequest' => ['index', 'detailRequest', 'newRequest','addRequest'],


);

function call($controller, $action)
{
    require_once("./controllers/" . $controller . "_controller.php");

    switch ($controller) {
        case "pages":
            $controller = new PagesController();
            break;



        case "teacher":
            require_once("./models/teacherModel.php");
            $controller = new teacherController();
            break;

        case "studentRequest":
            require_once("./models/studentModel.php");
            require_once("./models/Colabor.php");
            require_once("./models/Data_namedoc.php");
            require_once("./models/Organization.php");
            require_once("./models/Student.php");
            require_once("./models/Doc_Request.php");
            $controller = new studentRequestController();
            break;
    }
    $controller->{$action}();
}
if (array_key_exists($controller, $controllers)) {

    if (in_array($action, $controllers[$controller]))

        call($controller, $action);

    else

        call('pages', 'error');
} else {

    call('pages', 'error');
}
