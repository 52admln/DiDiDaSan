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
    <title>伸援手</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper-main">
    <div class="container-main">
        <div class="user">
            <a href="person.php"><i class="fa fa-user-o" aria-hidden="true"></i>个人中心</a>
            <a href="main.php" class="type-change">切换身份</a>
        </div>
        <div class="content">
            <h3>您好,您现在要去哪里?</h3>
            <div class="input-place">
                    <input type="text" id="neederTarget" placeholder="请输入目的地">
            </div>
        </div>
        <div class="btns">
            <button type="button" id="neederBtn" class="btn btn-main-solid btn-solid disabled" disabled="disabled">
                看谁有伞
            </button>
        </div>
    </div>
</div>
<footer class="main-footer">
    Timu蜗壳工作室
</footer>
<script src="//cdn.bootcss.com/zepto/1.0rc1/zepto.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>