<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    border : none;
    width: 70%;
}

th, td {
    text-align: center;
    padding: 8px;

}

tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color: #ccffcc}
th {
    background-color: #33cc66;
    color: white;
}
</style>

<style>
.button {
    background-color: #33cc66;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body bgcolor = "#f0fff0"><center>

<h2><center>Detail TABLE</center></h2>


<table border=1 >


<!-- <form method="get" action="" style=" right:200px;">
        <input type="text" name="key" size = "30">
        <input type="hidden" name="controller" value="order"  />
        <button type="submit" name="action" value="search"> Search </button>
        <button type="submit" name="action" value="index">Back</button></br>
    </form> -->
    


    
    <br><tr>
        <th>รูปแบบ</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>หน้าที่</th>
        <th>วันเริ่มต้น</th>
        <th>วันสิ้นสุด</th>
        <th>ชื่อบริษัท</th>
        <th>ที่อยู่บริษัท</th>
        <th>ชื่อผู้ประสานงาน</th>
        <th>นามสกุลผู้ประสานงาน</th>
        <th>อีเมล์ผู้ประสานงาน</th>
        <th>เบอร์ผู้ประสานงาน</th>
        <th>ชื่อผู้ออกหนังสืออนุเคราะห์</th>
        <th>นามสกุลผู้ออกหนังสืออนุเคราะห์</th>
        <th>ตำแหน่ง</th>
        <th>สถานะ</th>
        <th>เอกสาร</th>
  
    
<?php foreach($detailrequestList as $detailrequest)
{
        echo "<tr>
        <td>$detailrequest->R_type</td>
        <td>$detailrequest->S_fname</td>
        <td>$detailrequest->S_lname</td>
        <td>$detailrequest->R_position</td>
        <td>$detailrequest->R_sdate</td>
        <td>$detailrequest->R_fdate</td>
        <td>$detailrequest->O_name</td>
        <td>$detailrequest->O_addr</td>
        <td>$detailrequest->C_fname</td>
         <td>$detailrequest->C_lname</td>
          <td>$detailrequest->C_email</td> 
          <td>$detailrequest->C_tel</td>
          <td>$detailrequest->D_fname</td>
          <td>$detailrequest->D_lname,</td>
          <td>$detailrequest->D_position</td>
          <td>$detailrequest->R_status</td>
          <td>$detailrequest->DR_path</td>

          

      
        
        </tr>";

}

echo "</table>";
?>
<br>
</center>

<!-- <center><a class="button" href="?controller=order&action=newOrder">Addnew</a></center> -->



</body>
<br>
<br>
<!-- <center><font size = "4" color = "black">BY น.ส.น้ำผึ้ง กิติกังสดาร 6220502159 </font></center> -->
</html>
