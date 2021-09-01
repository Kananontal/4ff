<?php
include ("./control/confix.php");



if($_GET["app"] == "home"){
include ("home.php"); 

}else

if($_GET["app"] == "login"){
     include ("loginUser.php"); 
     }else

if($_GET["app"] == "dashboard"){
      include ("dashboard/index.php"); 
     }else
     

if($_GET["app"] == "show"){
     include ("dashboard/show.php"); 
      }else
if($_GET["app"] == "admin"){
     include ("dashboard/admin.php"); 
     }else

           if($_GET["app"] == "logout"){
               include ("./logout.php"); 
                }else


{
     $_SESSION["swal"] = "notify";
     $title ="กำลังโหลดข้อมูล..";
     $icon ="warning";
     $link = "./?app=home";
}

include ("./control/swal.php");

?>
</center>
</div>
</body>
</html>