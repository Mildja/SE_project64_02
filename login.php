<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connect_connection.php');
         
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM Admin WHERE A_id = '$username' AND A_pass = '$password'";
         $query1 = "SELECT * FROM Student WHERE S_id = '$username' AND s_pass = '$password'";

        $result = mysqli_query($conn, $query);
        $result1 = mysqli_query($conn, $query1);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['A_id'];
            $_SESSION['user'] = $row['A_fname'] . " " . $row['A_lname'];
            $_SESSION['A_userlevel'] = $row['A_userlevel'];

           



            if ($_SESSION['A_userlevel'] == 'a') {
                header("Location: index_teacher.php");
            }
        } 
        if (mysqli_num_rows($result1) == 1) {

            $row = mysqli_fetch_array($result1);

            $_SESSION['userid'] = $row['S_id'];
            $_SESSION['user'] = $row['S_fname'] . " " . $row['S_lname'];
            $_SESSION['s_userlevel'] = $row['s_userlevel'];

           




            if ($_SESSION['s_userlevel'] == 's') {
                header("Location: index_student.php");
            }

        } 
        else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: index.php");
    }


?>