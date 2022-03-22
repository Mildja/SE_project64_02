

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="views/studentRequest/styleteastudent.css">
    </head>

    <body bgcolor="#f0fff0">
        <center>




            <?php echo $userid ?>

               
                    <div class="column">
                        <div class="box1">

                  
                            <p5><?php echo "$studentRequest->R_type"; ?></p5><br/>
                            <p5><?php echo "ชื่อ $studentRequest->S_fname"; ?></p5>
                            <p5><?php echo "  $studentRequest->S_lname"; ?></p5><br/><br/>
                           
                            <p5><?php echo "ตำแหน่ง : $studentRequest->R_position"; ?></p5><br/>
                           
                            <p5><?php echo "วันเริ่มฝึกงาน : $studentRequest->R_sdate"; ?></p5><br/>
                            
                            <p5><?php echo "วันสิ้นสุดฝึกงาน : $studentRequest->R_fdate"; ?></p5><br/><br/>
                            
                            <p5><?php echo "ข้อมูลสถานประกอบการ"; ?></p5><br/>
                            <p5><?php echo "$studentRequest->O_name"; ?></p5><br/>
                            <p5><?php echo "ที่อยู่ : $studentRequest->O_addr"; ?></p5><br/>
                            <p5><?php echo "ชื่อ$studentRequest->C_fname"; ?></p5>
                            <p5><?php echo "  $studentRequest->C_lname"; ?></p5><br/>
                            <p5><?php echo "Email : $studentRequest->C_email"; ?></p5><br/>
                            <p5><?php echo "เบอร์ติดต่อ : $studentRequest->C_tel"; ?></p5><br/>
                            
                            <p5><?php echo "ข้อมูลสถานการออกหนังสืออนุเคราะห์"; ?></p5><br/>
                            <p5><?php echo "ชื่อ $studentRequest->D_fname"; ?></p5>
                            <p5><?php echo "  $studentRequest->D_lname"; ?></p5><br/>
                            <p5><?php echo "ตำแหน่ง $studentRequest->R_position"; ?></p5><br/>
                            <p5><?php echo "สถานะ $studentRequest->R_status"; ?></p5><br/><br/><br/>
                            <p5><?php echo "$studentRequest->DR_path"; ?></p5><br/><br/><br/>
                            
                            <a type="button" href="./views/studentRequest/index.php" class="btn btn-success">ย้อนกลับ</a>
                           
                        </div>
                        


                    </div>


            
        
        </center>




    </body>
    <br>
    <br>
 

    </html>
