<?php class teacherController
{
    public function index(){
        $teacher_list = teacher::getAll();
        require_once('views/teacher/index.php');
    }
   
}?>