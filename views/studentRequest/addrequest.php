

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="views/studentRequest/styleteastudent.css">
    </head>

    <body bgcolor="#f0fff0">
        <center>




            <?php echo $userid ?>

                    <div class="column">
                        <div class="box2">

                            <label><p5>วันที่ส่งเอกสารไฟล์คำร้อง &nbsp;<input type="date" name="date"
                                    value ="<?php echo "$studentRequest->AP_date"; ?>"/></p5></label><br/><br/>


                            <select class="form-select" aria-label="Default select example">
                            <option selected>เลือก</option>
                            <option value="1">ฝึกงาน</option>
                            <option value="2">สหกิจ</option>
                            <p5><?php echo "$studentRequest->R_type"; ?></p5><br/><br/>
                            </select>

                            <br/>
                            <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ">
                                <p5><?php echo " $studentRequest->S_fname"; ?></p5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="นามสกุล" aria-label="นามสกุล">
                                <p5><?php echo " $studentRequest->S_lname"; ?></p5><br/>
                            </div>
                            </div>

                            <div class="col-12">
                                <label for="R_position" class="form-label">ตำแหน่ง</label>
                                <input type="text" class="form-control" name ="R_position" >
                                <p5><?php echo "$studentRequest->R_position"; ?></p5><br/>
                            </div>
                           

                            <div class="row">
                            <div class="col">
                            <label>ค่าตอบแทน</label>
                                <input type="text" class="form-control" > 
                                <p5><?php echo " $studentRequest->R_cost"; ?></p5><br/>
                            </div>
                            <div class="col">
                            <label>ที่พัก</label>
                                <input type="text" class="form-control" >
                                <p5><?php echo " $studentRequest->R_room"; ?></p5><br/>
                            </div>
                            </div>

                            
                            <label><p5>วันเริ่มฝึกงาน &nbsp;<input type="date" name="date"
                                    value ="<?php echo "$studentRequest->R_sdate"; ?>"/></p5></label><br/><br/>
                            
                            <label><p5>วันสิ้นสุดฝึกงาน &nbsp;<input type="date" name="date"
                                    value ="<?php echo "$studentRequest->R_fdate"; ?>"/></p5></label><br/><br/>
                            
                                    
                            
                            <label>ข้อมูลสถานประกอบการ</label>
                            <div class="col-12">
                                <label for="O_name" class="form-label" ></label>
                                <input type="text" class="form-control" name ="O_name"placeholder="ชื่อสถานประกอบการ" aria-label="ชื่อสถานประกอบการ" >
                                <p5><?php echo "$studentRequest->O_name"; ?></p5><br/>
                            </div>


                            <div class="col-12">
                                <label for="O_addr" class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" name ="O_addr" >
                                <p5><?php echo "$studentRequest->O_addr"; ?></p5><br/>
                            </div>

                            <label>ข้อมูลผู้ประสานงาน</label>
                            <br/>
                            <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ">
                                <p5><?php echo " $studentRequest->C_fname"; ?></p5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="นามสกุล" aria-label="นามสกุล">
                                <p5><?php echo " $studentRequest->C_lname"; ?></p5><br/>
                            </div>
                            </div>


                            <div class="col-md-6">
                                <label for="C_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="C_email">
                                <p5><?php echo " $studentRequest->C_email"; ?></p5><br/>
                            </div>


                            <div class="col-12">
                                <label for="C_tel" class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" name ="C_tel" >
                                <p5><?php echo "$studentRequest->C_tel"; ?></p5><br/>
                            </div>

                            
                            <label>ข้อมูลสถานการออกหนังสืออนุเคราะห์</label>
                            <br/>
                            <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ">
                                <p5><?php echo " $studentRequest->D_fname"; ?></p5>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="นามสกุล" aria-label="นามสกุล">
                                <p5><?php echo " $studentRequest->D_lname"; ?></p5><br/>
                            </div>
                            </div>


                            <div class="col-12">
                                <label for="D_position" class="form-label">ตำแหน่ง</label>
                                <input type="text" class="form-control" name ="D_position" >
                                <p5><?php echo "$studentRequest->D_position"; ?></p5><br/>
                            </div>


                            <div class="mb-3">
                                <label for="formFile" class="form-label">เพิ่มไฟล์คำร้อง (เป็น pdf ไฟล์ และตั้งชื่อ file เป็น Request_รหัสนิสิต.pdf เท่านั้น )</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <br/><br/>
                            <button type="button" href="#" class="btn btn-success">ย้อนกลับ</button>

                            <button type="button" href="#" class="btn btn-success">บันทึก</button>
                           
                        </div>
                        


                    </div>

        
        </center>




    </body>
    <br>
    <br>
 

    </html>