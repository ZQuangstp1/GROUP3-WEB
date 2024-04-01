<?php  
session_start();
require_once "db_module.php";
require_once "users_module.php";

if(isset($_POST)){
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $_username = $_POST["username"];
        $_password = $_POST["password"];

        $link = null;
        taoKetNoi($link);

        if(dangnhap($link, $_username, $_password)) {
            giaiPhongBoNho($link, true);
            header("Location: TTKH.php");
            exit(); // Exit to prevent further execution
        } else {
            giaiPhongBoNho($link, true);
            header("Location: dangnhap.php?msg=login-fail");
            exit(); // Exit to prevent further execution
        }
           
    
    }
}

giaiPhongBoNho($link, true);
header("Location: dangnhap.php");
exit(); // Exit to prevent further execution
?>


