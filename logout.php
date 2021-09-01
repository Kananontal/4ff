<?php

$n=100; 
    function getName($n) { 
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    }
 $randomtoken = getName($n);
$token = $_SESSION['online'];
$tokenupdate = $conn->query("UPDATE member SET token = '$randomtoken' WHERE token = '$token'");
unset($_SESSION['online']);
$_SESSION["swal"] = "notify";
$title ="ออกจากระบบ";
$text = "กรุณารอสักครู่...";
$icon ="error";
$button = "ตกลง";
$link = "./?app=login";
?>