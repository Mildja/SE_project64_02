<!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="views/teacher/styleteacher.css">
        <script>
            function debugBase64(base64URL) {
                var win = window.open();
                win.document.write('<iframe src="' + base64URL + '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>');
            }
        </script>
    </head>

    <body bgcolor="#f0fff0">
        <center>

            <?php echo $userid ?>
               
                    <div class="column">
                        <div class="box2">


                            <p5><?php echo "$teacher->R_type"; ?></p5><br/>
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
                            <p5><?php echo "เบอร์ติดต่อ : $studentRequest->C_tel"; ?></p5><br/><br/><br/>
                            
                            <p5><?php echo "ข้อมูลสถานการออกหนังสืออนุเคราะห์"; ?></p5><br/>
                            <p5><?php echo "ชื่อ $studentRequest->D_fname"; ?></p5>
                            <p5><?php echo "  $studentRequest->D_lname"; ?></p5><br/>
                            <p5><?php echo "ตำแหน่ง $studentRequest->D_position"; ?></p5><br/>

                            <?php if ($studentRequest->R_status ==  "พิจารณาแล้ว" ) { 
                                   echo "สถานะ $studentRequest->AP_approve"; 
                            }
                            else {

                              echo "สถานะ $studentRequest->R_status";

                            
                             } ?>
                          <br/>
                        

                            <center>
                            <img src="img/file.png" height="100" width="105"><br>

                            <?php echo '<a  href="data:application/pdf;base64,' . base64_encode($NotApprove->DR_path) . ' " onclick="debugBase64(this.href)"/>เอกสารคำร้อง</a>'; ?></p5>


                          </center>

                      
             
                            <a type="button" href="?controller=teacher&action=index" class="btn btn-success">ย้อนกลับ</a>
                     
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