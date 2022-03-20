<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connect_connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM Colabor WHERE C_email = '$username' AND password = '$password'";
         $query1 = "SELECT * FROM Student WHERE S_id = '$username' AND s_pass = '$password'";

        $result = mysqli_query($conn, $query);
        $result1 = mysqli_query($conn, $query1);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['C_id'];
            $_SESSION['user'] = $row['C_fname'] . " " . $row['C_lname'];
            $_SESSION['userlevel'] = $row['userlevel'];

           




            if ($_SESSION['userlevel'] == 's') {
                header("Location: admin_page.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: user_page.php");
            }
        } 
        if (mysqli_num_rows($result1) == 1) {

            $row = mysqli_fetch_array($result1);

            $_SESSION['userid'] = $row['S_id'];
            $_SESSION['user'] = $row['S_fname'] . " " . $row['S_lname'];
            $_SESSION['s_userlevel'] = $row['s_userlevel'];

           




            if ($_SESSION['s_userlevel'] == 's') {
                header("Location: admin_page.php");
            }

            if ($_SESSION['s_userlevel'] == 'm') {
                header("Location: user_page.php");
            }
        } 
        else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: index.php");
    }


?>