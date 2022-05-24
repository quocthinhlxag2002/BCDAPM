<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie != null){
        echo '<a href="#">'.$checkCookie['fullname'].'</a>
        <a href="/shoe/backend/logoutCookie.php">Đăng Xuất</a>';
    }
    else{
        echo '<a href="auth/login/index.php">Login & Regiser</a>';
    }
?>