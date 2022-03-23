

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="views/studentRequest/styletestudent.css">
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
                            <p5><?php echo "เบอร์ติดต่อ : $studentRequest->C_tel"; ?></p5><br/><br/><br/>
                            
                            <p5><?php echo "ข้อมูลสถานการออกหนังสืออนุเคราะห์"; ?></p5><br/>
                            <p5><?php echo "ชื่อ $studentRequest->D_fname"; ?></p5>
                            <p5><?php echo "  $studentRequest->D_lname"; ?></p5><br/>
                            <p5><?php echo "ตำแหน่ง $studentRequest->D_position"; ?></p5><br/>
                            <p5><?php echo "สถานะ $studentRequest->R_status"; ?></p5><br/><br/><br/>

                            <?php echo '<a class="btn btn-primary btn-xs" href="data:application/pdf;base64,'.base64_encode($studentRequest->DR_path).' " onclick="debugBase64(this.href)"/>ดาวน์โหลด</a>';?>
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
