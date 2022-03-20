<html>

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body bgcolor="#DDDDDD">
  <br><br><br><br><br><br>


  <div class="container">
    <div class="row align-items-start ">
      <div class='col-sm-16 m-auto'>



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
        <div class="tab-content" id="myTabContent">
          
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            ...
          </div>

          <div class="tab-pane fade" id="page1" role="tabpanel" aria-labelledby="page1-tab">
            ...
          </div>

          <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
            ...
          </div>

          <div class="tab-pane fade" id="page3" role="tabpanel" aria-labelledby="page3-tab">
            ...
          </div>

        </div>
      
      </div>
    </div>
  </div>
</body>

<html>