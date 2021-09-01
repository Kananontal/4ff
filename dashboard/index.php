<?php




$token = $_GET["token"];
$tokencheck = $conn->query("SELECT *FROM member WHERE token = '$token' ");
if($tokencheck->num_rows <= 0){
    $_SESSION["swal"] = "notify";
    $title ="Token ไม่ถูกต้อง";
    $text = "กรุณาลองใหม่อีกครั้ง";
    $icon ="error";
    $button = "ตกลง";
    $link = "./?app=home";
}else{

  $showtoken = $conn->query("SELECT * FROM member WHERE token = '$token' ");
  while ($row = $showtoken->fetch_array()) {
    $name = $row["name"];
    $lastname = $row["lastname"];
    $user_status = $row["user_status"];
  
  }

  $_SESSION['online'] = $token;

  
  
  if($user_status == "admin"){
    $_SESSION["swal"] = "notify";
       $title ="กำลังพาไปยังการจัดการระบบ Admin..";
       $text = "กรุณารอสักครู่...";
       $icon ="settings";
       $link = "./?app=admin&token=$token";
       }else{
  if($user_status == "member"){
    


 

  }

}
  

}

 
  

?>


<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-5">
    <div class="alert alert-info" role="alert"><br>
<center><h3>ยินดีต้อนรับคุณ <?php echo $name;?> <?php echo $lastname;?></h3></center>
</div>

<div class="alert alert-success" role="alert"><br>
  <center><h1 class="alert-heading">ขณะนี้คุณคือ</h1>
  <div id="point"><h2><?php echo $user_status;?></h2></div>
  <br>
  <a href="./?app=logout" class="btn btn-outline-danger btn-lg btn-block" role="button" aria-pressed="true">ออกจากระบบ</a></center><br>


</div>

    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>