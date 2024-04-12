
<?php 
    session_start(); ?>
    <hmtl>
        <head></head>
        <body>
            <?php// Bắt đầu phiên
    if(!isset($_SESSION['username']))
        header("Location: dangki.php"); 
?>

        <div> Trang chủ </div>
</body>
</html>