<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="views/studentRequest/styleteastudent.css">
</head>
<body bgcolor = "#f0fff0"><center>






<!-- <form method="get" action="" style=" right:200px;">
        <input type="text" name="key" size = "30">
        <input type="hidden" name="controller" value="order"  />
        <button type="submit" name="action" value="search"> Search </button>
        <button type="submit" name="action" value="index">Back</button></br>
    </form> -->
    

    <?php foreach($studentRequestList as $studentRequest){?>
                  
                     <div class="column">
                         <div class="box">
                         
                              <h2><?php echo "$studentRequest->O_name";?></h2>
                              <p5><?php echo "$studentRequest->R_type";?></p5>
                              
                          </div>
                    </div>
                
               <?php }?>
    
    <!-- <br><tr>
        <th>ชื่อบริษัท</th>
        <th>รูปแบบ</th>
 


?>
<br> -->
</center>

<!-- <center><a class="button" href="?controller=order&action=newOrder">Addnew</a></center> -->



</body>
<br>
<br>
<!-- <center><font size = "4" color = "black">BY น.ส.น้ำผึ้ง กิติกังสดาร 6220502159 </font></center> -->
</html>
