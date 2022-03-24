<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="views/studentRequest/styletestudent.css">
</head>

<body bgcolor="#f0fff0">
    <center>




        <?php echo $userid ?>

        <div class="column">
            <div class="box2">
                <form method="POST" action="?controller=studentRequest&action=addRequest" enctype="multipart/form-data">
                    <select class="form-select" name="R_type" aria-label="Default select example" required="กอรกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">
                        <option selected>เลือก</option>
                        <option value="ฝึกงาน">ฝึกงาน</option>
                        <option value="สหกิจ">สหกิจ</option>
                        <br /><br />
                    </select>

                    <br />
                    <div class="row">
                        <div class="col">             
                          <p5 value="<?php echo $studentRequest->S_fname; ?>" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ" name="S_fname" required="กอรกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง"><?php echo $studentRequest->S_fname; ?></p5>        
                          <input name="S_fname" type="hidden" value="<?php echo "$studentRequest->S_fname";?>" >
                        </div>
                        <div class="col">
                        <p5 value="<?php echo $studentRequest->S_lname; ?>" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ" name="S_lname" required="กอรกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง"><?php echo $studentRequest->S_lname; ?></p5>
                        <input name="S_lname" type="hidden" value="<?php echo "$studentRequest->S_lname";?>" >

                        </div>
                    </div>

                    <div class="col-12">
                        <label for="R_position" class="form-label">ตำแหน่ง</label>
                        <input type="text" class="form-control" name="R_position" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">
                        <br />
                    </div>


                    <div class="row">
                        <div class="col">
                            <label>ค่าตอบแทน</label>
                            <input type="text" class="form-control" name="R_cost" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">
                            <br />
                        </div>
                        <div class="col">
                            <label>ที่พัก</label>
                            <input type="text" class="form-control" name="R_room" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">
                            <p5><?php echo " $studentRequest->R_room"; ?></p5><br />
                        </div>
                    </div>


                    <label>
                        <p5>วันเริ่มฝึกงาน &nbsp;<input type="date" name="R_sdate" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง" /></p5>
                    </label><br /><br />

                    <label>
                        <p5>วันสิ้นสุดฝึกงาน &nbsp;<input type="date" name="R_fdate" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง" /></p5>
                    </label><br /><br />


                    <script>
                        function opendiv(val) {
                            if (val == 'other') {
                                document.getElementById('myDiv').style.display = 'block';
                            } else {
                                document.getElementById('myDiv').style.display = 'none';
                            }
                        }
                    </script>

                    <div class="col-12">
                        <label>สถานประกอบการ</label>
                        <select name="O_name" onchange="opendiv(this.value)" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">
                            <?php foreach ($OrganizationList as $a) {
                                echo "<option value = $a->O_id>
                                $a->O_name</option>";
                            } ?>
                            <option value="other">อื่นๆ</option>
                        </select><br /><br />
                        <div id="myDiv" style="display:none">
                        <div class="col-12">โปรดระบุชื่อสถานที่ &nbsp;&nbsp;<input type="text" name="O_name2"> </div>

                        </div>
                    </div><br />



                  
                    <br /><br />
                    <div class="col-12">
                        <label for="D_position" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" name="O_addr" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                    </div>

               
                    <!-- <div class="col-12">
                        <label for="O_addr" class="form-label">ที่อยู่</label>
                        <input type="text" class="form-control" name="O_addr" required="กอรกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                    </div> -->

                    <label>ข้อมูลผู้ประสานงาน</label>
                    <br />
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ" name="C_fname" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="นามสกุล" aria-label="นามสกุล" name="C_lname" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="C_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="C_email" name="C_email" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                    </div>


                    <div class="col-12">
                        <label for="C_tel" class="form-label">Tel</label>
                        <input type="text" class="form-control" name="C_tel" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                    </div>


                    <label>ข้อมูลสถานการออกหนังสืออนุเคราะห์</label>
                    <br />
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ" name="D_fname" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="นามสกุล" aria-label="นามสกุล" name="D_lname" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                        </div>
                    </div>


                    <div class="col-12">
                        <label for="D_position" class="form-label">ตำแหน่ง</label>
                        <input type="text" class="form-control" name="D_position" required="กรอกข้อมูลไม่ครบ โปรดตรวจสอบข้อมูลอีกครั้ง">

                    </div>


                    <div class="mb-3">
                        <label for="formFile" class="form-label">เพิ่มไฟล์คำร้อง (เป็น pdf ไฟล์ และตั้งชื่อ file เป็น Request_รหัสนิสิต.pdf เท่านั้น )</label>
                        <input class="form-control" type="file" name="DR_path" required="ยังไม่ได้เพิ่มไฟล์คำร้อง โปรดตรวจสอบอีกครั้ง">
                    </div>

                    <br /><br />

                    <a type="button" href="?controller=studentRequest&action=index" class="btn btn-success">ย้อนกลับ</a>
                    <button type="submit" class="btn btn-success" name="action" value="addRequest">Save</button>

                </form>

            </div>
        </div>



    </center>




</body>
<br>
<br>


</html>