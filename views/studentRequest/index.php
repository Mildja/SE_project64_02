<?php

$userid = $_SESSION['userid'];


session_start();

if (!$_SESSION['userid']) {
    header("Location: index.php");
} else {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="views/studentRequest/styletestudent.css">
    </head>

    <body bgcolor="#f0fff0">
        <center>



        <a class="btn btn-success" href=?controller=studentRequest&action=newRequest&<?php echo "S_id=$userid";?>>AddRequest</a></br></br>


            <!-- <form method="get" action="" style=" right:200px;">
        <input type="text" name="key" size = "30">
        <input type="hidden" name="controller" value="order"  />
        <button type="submit" name="action" value="search"> Search </button>
        <button type="submit" name="action" value="index">Back</button></br>
    </form> -->
       
            <?php foreach ($studentRequestList as $studentRequest) { ?>
                <?php if ($studentRequest->S_id ==  $userid ) { ?>
                    <div class="column">
                        <div class="box">

                            <h2><?php echo "$studentRequest->O_name"; ?></h2>
                            <p5><?php echo "$studentRequest->R_type"; ?></p5><br/>
                            <p5><?php echo "$studentRequest->AP_date"; ?></p5><br/>
                            <?php if ($studentRequest->R_status ==  "พิจารณาแล้ว" ) { 
                           echo $studentRequest->AP_approve; 
                            }
                            else {

                              echo "$studentRequest->R_status";

                            
                             } ?>
                          <br/>

                            <a class="btn btn-success " style="background-color:crimson;border-color:crimson" href=?controller=studentRequest&action=detailRequest&<?php echo "R_id=$studentRequest->R_id";?>>รายละเอียด</a>
                           
                        </div>
                        <!-- ?controller=studentRequest&action=detailRequest -->


                    </div>

                <?php } ?>

            <?php } ?>
            <!-- <br><tr>
        <th>ชื่อบริษัท</th>
        <th>รูปแบบ</th>
 


?>
<br> -->
        </center>

        <!-- <center><a class="button" href="?controller=order&action=newOrder">Addnew</a></center> -->
     


    </body>
    <br>
    <br>
    <!-- <center><font size = "4" color = "black">BY น.ส.น้ำผึ้ง กิติกังสดาร 6220502159 </font></center> -->

    </html>
<?php } ?>