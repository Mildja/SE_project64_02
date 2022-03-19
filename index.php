
<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];

}else
{
    $controller = 'pages';
    $action = 'home';
}?>

<!DOCTYPE html>
<html lang="en">
<head >
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>INTERSHIP SYSTEM</title>--> 
</head>
<body>    
<nav class="sidebar close"> 

        <header>
          
           <br/>

            <!-- <i class='bx bx-chevron-right toggle'></i> -->
              <i class='bx bx-menu toggle' ></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon' style='color:#000'></i>
                    <input type="text" placeholder="Search...">
                </li>

                
                    <ul class="menu-links">
                    <li class="nav-link">
                        <a href="?controller=teacher&action=index">
                
                            <i class='bx bx-envelope icon' ></i>
                            <span class="text nav-text">ยื่นคำร้อง</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="#">
                       
                            <i class='bx bx-upload icon' ></i>
                            <span class="text nav-text">อัพโหลดไฟล์/นำเสนอ</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                        
                            <i class='bx bx-file-find icon'></i>
                            <span class="text nav-text">ตรวจผลการฝึกงาน</span>
                        </a>
                    </li>

                 

                  

                </ul>  
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
                 <br/>
  <div class="bottom-content">
               

                <li class="mode">
                    <div class="sun-moon">
                     
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                 <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>

            </div>

          

    </nav>
    <h1 class="home" >
   
        <div class="text" ><img src="image/logo.png" ALIGN = "Center" width = "40"  >INTERSHIP SYSTEM
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div  class="dropdown" >
       <a href="" class="dropbtn" >
       
                
                <i class='bx bxs-home icon1' style='color:#fefbfb' ></i>
            
            </a>
   <div class="dropdown-content">
               
               <a href="#" >HOME</a>
            </div>
      </div>
                 

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div  class="dropdown" >
       <a href="" class="dropbtn" >
            <i class='bx bxs-download icon1' style='color:#ffffff'  ></i>
                           
                            
                        </a>
                        <div class="dropdown-content">
               
               <a href="#" >ดาวน์โหลดเอกสารฝึกงาน</a>
            </div>
            </div>
                           
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div  class="dropdown" >
       <a href="" class="dropbtn" >
                        <i class='bx bxs-business icon1'></i>
          
                        
                        </a>

                    
                        <div class="dropdown-content">
               
               <a href="#" >สถานประกอบการ</a>
            </div>
            </div>
                           
                            
                          
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  
     

</h1>
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

<?php require_once("./routes.php");?>


</body>
</html>