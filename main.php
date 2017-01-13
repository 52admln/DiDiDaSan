<?php
session_start();

if(!isset($_SESSION['username'])) {
    echo "<script>window.location.href = './index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="logo">
            <i class="fa fa-umbrella" aria-hidden="true"></i>
            <p>和近的人 更近一点</p>
        </div>
        <div class="btns">
            <a href="needer.php" type="button" class="btn btn-solid">求帮助</a>
            <a href="helper.php" type="button" class="btn opacity btn-opacity">伸援手</a>
        </div>
    </div>
</div>
<footer>
    Timu蜗壳工作室
</footer>
</body>
</html>