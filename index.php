<?php
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");

//LIBS
require_once("php/lib/nvg-data.php");
require_once("php/lib/rb.php");
require_once("php/db.php");
require_once("php/controller/controller.php");
?>
<!DOCTYPE HTML>
<html lang='<?=$lang;?>'>
<head>
    <?php include("php/configs/header.phtml");?>
</head>
<body class="bg-white2">
<?php
    include_once "php/controller/index.php";
?>
</body>
</html>