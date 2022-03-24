<?php
//เก็บค่า userid ที่ loginเข้ามา
$userid = $_SESSION['userid'];

session_start();

      if (!$_SESSION['userid']) {
           header("Location: index.php");
      } else {

?>

<html>

<head>
  <meta charset="UTF-8">*
  <link rel="stylesheet" href="views/teacher/styleteacher.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body bgcolor="#DDDDDD">
  <br><br><br>

  <!-- set ค่าหน้ากระดาษ -->
  <div class="container">
    <div class="row align-items-start ">
      <div class='col-sm-16 m-auto'>

      <?php echo $userid ?>
      
        <!--start แถบหัว ไม่ต้องไปยุ่งไรกับน้อง-->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ใบคำร้องทั้งหมด</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="page1-tab" data-bs-toggle="tab" data-bs-target="#page1" type="button" role="tab" aria-controls="page1" aria-selected="false">ใบคำร้องที่รอการอนุมัติ</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="page2-tab" data-bs-toggle="tab" data-bs-target="#page2" type="button" role="tab" aria-controls="page2" aria-selected="false">ใบคำร้องที่อนุมัติแล้ว</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="page3-tab" data-bs-toggle="tab" data-bs-target="#page3" type="button" role="tab" aria-controls="page3" aria-selected="false">ใบคำร้องที่ไม่อนุมัติ</button>
          </li>
        </ul>
        <!--จบ-->

        <!--start เนื้องาน-->
        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            ...
          </div>
          <!--หน้า1-->
          <div class="tab-pane fade" id="page1" role="tabpanel" aria-labelledby="page1-tab">
            <p5><?php echo "รอการอนุมัติ"; ?></p5>
            <!--วนลูปแสดงข้อมูล-->
            <?php foreach ($teacher_list as $teacher) { ?>
              <!--เงื่อนไขใครเงื่อนไขมันเลยตามหัวข้อ-->
              <?php if ($teacher->R_status == "รอพิจารณา" && $teacher->DS_id == "ยังไม่ได้อัพเอกสารขอความอนุเคราะห์") { ?>
                <div class="column">
                  <div class="box">

                    <h2><?php echo "$teacher->O_name"; ?></h2>
                    <p5><?php echo "$teacher->R_type $teacher->DR_date"; ?></p5><br>
                    <p5 class="text-danger"><?php echo "by $teacher->S_fname $teacher->S_lname $teacher->S_id"; ?></p5><br>
                    <p5><?php echo "$teacher->R_status"; ?></p5><br>

                    <a href="#" class="btn btn-success" role="button" data-bs-toggle="button">อนุมัติ</a>



                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal">
                      ไม่อนุมัติ
                    </button>

                    <!-- Modal คือการคลิกให้เด้ง pop up ขึ้นมานะเพื่อน-->
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title text-dark" id="addModalLabel">เหตุผลที่ไม่อนุมัติ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                         
                          <form method="get" action="">
                          <div class="modal-body">
                          
                            <!-- ช่องกรอกข้อความ byมายด์ -->
                            <div class="mb-3 text-dark">
                              <label for="exampleFormControlTextarea1" class="form-label">เหตุผลที่ไม่อนุมัติ</label>
                              <textarea class="form-control " id="exampleFormControlTextarea1" aria-label=".form-control-sm example" rows="3" name="AP_note" require></textarea>
                            </div>
                            <!-- ส่งค่าแต่น่าจะส่งผิดน้องยังไม่เข้าเดี่ยวต้องไปเช็คเรื่อง value -->
                            <input  type="hidden"  name="AP_approve" value="ไม่อนุมัติ"/>
                            <input  type="hidden"  name="A_id" value="$teacher->A_id"/>
                            <input  type="hidden"  name="R_id" value="$userid"/>
                            <input  type="hidden"  name="AP_date" value="date("Y-m-d")"/>
                           
                            <input type="hidden" name="controller" value="teacher"/>
                            <button type="submit" class="btn btn-secondary" name="action" value="index" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="action" value="addAP_request">Save</button>
                          </div>
                          </form>


                        </div>
                      </div>
                    </div>
                    <!-- จบ Modal -->
                    <br><br>


                  </div>
                </div>
              <?php } ?>
            <?php } ?>
            <!-- จบ วนลูปข้อมูล -->
          </div>
          <!--จบหน้า1-->

          <!--หน้า2ของเตย-->
          <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
          <!--หน้า2-->
          <?php foreach ($teacher_list as $Approve) { ?>
              <?php if ($Approve->AP_approve == "อนุมัติ" && $Approve->R_status == "พิจารณาแล้ว") { ?>
                
                <div class="column">
                  <div class="box">
                      <div class="row row-cols-3">

                          <div class="col">
                           คอลัม1
                           <h2><?php echo $Approve->O_name; ?></h2>  
                            
                          </div>

                          <div class="col"><center>
                          คอลัม2
                          </center>
                          </div>

                          <div class="col"><br><br><center>
                          <!-- คอลัม3 -->
                          <a href="#" class="btn btn-success" role="button" data-bs-toggle="button">ทดสอบอัพไฟล์</a>

                          </center>
                          </div>

                      </div>
                  </div>
                </div>
                <?php } ?>
            <?php } ?>


          </div>

          <!--หน้า3ของปอ-->
          <div class="tab-pane fade" id="page3" role="tabpanel" aria-labelledby="page3-tab">
            <!--หน้า3-->
            
            <?php foreach ($teacher_list as $NotApprove) { ?>
              <?php if ($NotApprove->AP_approve == "ไม่อนุมัติ" && $NotApprove->R_status == "พิจารณาแล้ว") { ?>
                
                <div class="column">
                  <div class="box">
                      <div class="row row-cols-3">

                          <div class="col">
                            <h2><?php echo $NotApprove->O_name; ?></h2>               
                            <p5><?php  echo "วันที่ส่งเอกสาร $NotApprove->R_sdate";?></p5><br>
                            <p5><?php echo "รูปแบบคำร้อง: $NotApprove->R_type"; ?></p5><br>
                            <p5><?php echo "by"; ?></p5>
                            <p5 class="text-danger"><?php echo "$NotApprove->S_fname $NotApprove->S_lname $NotApprove->S_id"; ?></p5><br>
                            <p4><?php echo "$NotApprove->R_status"; ?></p4><br>
                            
                          </div>

                          <div class="col"><center>
                            <img src="img/file.png" height="100" width="105" ><br>
                            <p5><?php echo "ไฟล์.pdf ดึงจาก doc_request เจ้เกด เจ้ผึ้ง"; ?></p5><br>
                            <p5><?php echo "$NotApprove->DR_path"; ?></p5>
                          </center>
                          </div>

                          <div class="col"><br><br>
                          <center><h2 class="text-danger"><?php echo "$NotApprove->AP_approve"; ?></h2></center>
                          </div>

                      </div>
                  </div>
                </div>

              <?php } ?>
            <?php } ?>


          </div>
        </div>
        <!--จบ-->

      </div>
    </div>
  </div>
</body>
<html>


<?php } ?>