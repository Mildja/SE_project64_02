

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="views/studentRequest/styletestudent.css">
    </head>
    <body bgcolor="#f0fff0">
        <center>

            

               
                    <div class="column">
                        <div class="box1">
                            <center>
                            <br><h2><b><?php echo "รายละเอียดใบคำร้อง"; ?></b></h2><br><br>
                            </center>
                            
                            <p5><?php echo "รูปแบบคำร้อง : $studentRequest->R_type"; ?></p5><br>
                            <p5><?php echo "ชื่อ : $studentRequest->S_fname"; ?></p5>
                            <p5><?php echo "  นามสกุล : $studentRequest->S_lname"; ?></p5>
                            <p5><?php echo "  รหัสนิสิต : $studentRequest->S_id"; ?></p5><br><br>
                           
                            <p5><?php echo "ยื่นฝึกงานตำแหน่ง : $studentRequest->R_position"; ?></p5><br>

                            <p5><?php echo "วันเริ่มต้นการฝึกงาน : $studentRequest->R_sdate"; ?></p5><br>
                            
                            <p5><?php echo "วันสิ้นสุดการฝึกงาน : $studentRequest->R_fdate"; ?></p5><br><br>
                            
                            <p5><?php echo "ข้อมูลสถานประกอบการ"; ?></p5><br>
                            <p5><?php echo "ชื่อบริษัท : $studentRequest->O_name"; ?></p5><br>
                            <p5><?php echo "ที่อยู่ : $studentRequest->O_addr"; ?></p5><br>
                            <p5><?php echo "ชื่อ HR : $studentRequest->C_fname"; ?></p5>
                            <p5><?php echo "นามสกุล : $studentRequest->C_lname"; ?></p5><br>
                            <p5><?php echo "Email : $studentRequest->C_email"; ?></p5><br>
                            <p5><?php echo "เบอร์โทรติดต่อ : $studentRequest->C_tel"; ?></p5><br><br><br>
                            
                            <p5><?php echo "ข้อมูลชื่อออกหนังสือขอความอนุเคราะห์"; ?></p5><br/>
                            <p5><?php echo "ชื่อ : $studentRequest->D_fname"; ?></p5>
                            <p5><?php echo "นามสกุล : $studentRequest->D_lname"; ?></p5><br/>
                            <p5><?php echo "ตำแหน่ง : $studentRequest->D_position"; ?></p5><br><br><br>

                            <?php if ($studentRequest->R_status ==  "พิจารณาแล้ว" ) { 
                                  echo "สถานะใบคำร้อง: $studentRequest->AP_approve <br/>";
                                 if ($studentRequest->AP_approve ==  "ไม่อนุมัติ" ) { 
                                   echo "เหตุผล:  $studentRequest->AP_note";
                                  }
                            }
                            else {
                              echo "สถานะใบคำร้อง:  $studentRequest->R_status";

                        
                             } ?>
                          <br>
                          <br><br>
                           
                            <img src="img/file.png" height="100" width="105">
                            <?php echo '<a  href="data:application/pdf;base64,' . base64_encode($studentRequest->DR_path) . ' " onclick="debugBase64(this.href)"/>เอกสารคำร้อง</a>'; ?></p5>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="img/file.png" height="100" width="105">
                            <?php echo '<a  href="data:application/pdf;base64,' . base64_encode($studentRequest->DS_path) . ' " onclick="debugBase64(this.href)"/>เอกสารส่งตัว</a>'; ?></p5>

                           <br><br>
          
                            <a type="button" href="?controller=studentRequest&action=index" class="btn btn-success">ย้อนกลับ</a>
                        
                        </div>
                        


                    </div>


            
        
        </center>




    </body>
    <br>
    <br>
 <script>
function debugBase64(base64URL){
    var win = window.open();
    win.document.write('<iframe src="' + base64URL  + '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>');
}
</script>
    </html>
