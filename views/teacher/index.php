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

    <script>
      function debugBase64(base64URL) {
        var win = window.open();
        win.document.write('<iframe src="' + base64URL + '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>');
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>

  <body bgcolor="#DDDDDD">
    <br><br><br>

    <!-- set ค่าหน้ากระดาษ -->
    <div class="container">
      <div class="row align-items-start ">
        <div class='col-sm-20 m-auto'>

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
                      
                          <center>
                            <img src="img/file.png" height="100" width="105">
                            <?php echo '<a  href="data:application/pdf;base64,' . base64_encode($NotApprove->DR_path) . ' " onclick="debugBase64(this.href)"/>เอกสารคำร้อง</a>'; ?></p5>
                          </center>
                        

                      <form method="get" action="">
                        
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myFunction(<?php echo $teacher->R_id; ?>,'อนุมัติ')">
                        อนุมัติแล้ว
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              อนุมัติเรียบร้อยแล้ว
                              <input type="hidden" name="controller" value="teacher" />
                              <button type="submit" class="btn btn-primary" name="action" value="addAP_request">Save</button>
                            </div>
                              
                          </div>
                        </div>
                      </div>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addModal" onclick="myFunction(<?php echo $teacher->R_id; ?>,'ไม่อนุมัติ')">
                          ไม่อนุมัติ
                        </button>
                        <input type="hidden" name="AP_approve" id="AP_approve" value="ไม่อนุมัติ" />
                        <input type="hidden" name="R_id" id="R_id" value="<?php echo $teacher->R_id; ?>" />
                        <script>
                          function myFunction(test,status) {
                            document.getElementById("R_id").value = test;
                            document.getElementById("AP_approve").value=status;
                          }
                        </script>
                        <!-- Modal คือการคลิกให้เด้ง pop up ขึ้นมานะเพื่อน-->
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title text-dark" id="addModalLabel">เหตุผลที่ไม่อนุมัติ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>


                              <div class="modal-body" id="<?php echo $teacher->R_id; ?>">
                                <!-- ช่องกรอกข้อความ byมายด์ -->
                                <div class="mb-3 text-dark">
                                  <label for="exampleFormControlTextarea1" class="form-label">เหตุผลที่ไม่อนุมัติ</label>
                                  <textarea class="form-control " id="exampleFormControlTextarea1" aria-label=".form-control-sm example" rows="3" name="AP_note" require></textarea>
                                </div>
                                <!-- ส่งค่าแต่น่าจะส่งผิดน้องยังไม่เข้าเดี่ยวต้องไปเช็คเรื่อง value -->
                                
                                <!--<input type="hidden" name="AP_approve" value="ไม่อนุมัติ" />-->
                                <input type="hidden" name="A_id" value="<?php echo $userid; ?>" />
                                <input type="hidden" name="controller" value="teacher" />
                                <button type="submit" class="btn btn-secondary" name="action" value="index" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="action" value="addAP_request">Save</button>
                              </div>

                            </div>
                          </div>
                        </div>
                        <!-- จบ Modal -->

                      </form>
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
                         <!-- คอลัม1 -->
                          <h2><?php echo "$teacher->O_name"; ?></h2>
                          <p5><?php echo "$teacher->R_type $teacher->DR_date"; ?></p5><br>
                          <p5 class="text-danger"><?php echo "by $teacher->S_fname $teacher->S_lname $teacher->S_id"; ?></p5><br>
                          <p5><?php echo "$teacher->R_status"; ?></p5><br>
                          </div>

                        <div class="col">
                          <center>
                           <!-- คอลัม2 -->
                          </center>
                        </div>

                        <div class="col"><br><br>
                          <center>
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
                          <p5><?php echo "วันที่ยื่นคำร้อง $NotApprove->DR_date"; ?></p5><br>
                          <p5><?php echo "รูปแบบคำร้อง: $NotApprove->R_type"; ?></p5><br>
                          <p5><?php echo "by"; ?></p5>
                          <p5 class="text-danger"><?php echo "$NotApprove->S_fname $NotApprove->S_lname $NotApprove->S_id"; ?></p5><br>
                          

                        </div>

                        <div class="col">
                          <center>
                            <img src="img/file.png" height="100" width="105"><br>

                            <?php echo '<a  href="data:application/pdf;base64,' . base64_encode($NotApprove->DR_path) . ' " onclick="debugBase64(this.href)"/>เอกสารคำร้อง</a>'; ?></p5>

                          </center>
                        </div>

                        <div class="col"><br><br>
                          <center>
                            <h2 class="text-danger"><?php echo "$NotApprove->AP_approve"; ?></h2>
                            <a href=?controller=studentRequest&action=detailRequest&<?php echo "R_id=$NotApprove->R_id";?>>รายละเอียด</a>
                          </center>
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