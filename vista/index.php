<?php 
if( !session_id() )
{
    session_start();
}

if(@$_SESSION['logged_in'] == true){
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" type="text/css" href="../librerias/css/style.css">
<script type="text/javascript" src="../librerias/js/main.js"></script>
<script type="text/javascript" src="../librerias/js/llqrcode.js"></script>    
</head>
<body>
<div style="display:none" id="result"></div>
<div class="selector" id="webcamimg" onclick="setwebcam()" align="left" ></div>
<div class="selector" id="qrimg" onclick="setimg()" align="right" ></div>
<center id="mainbody"><div id="outdiv"></div></center>
<canvas id="qr-canvas" width="800" height="600"></canvas>
<script type="text/javascript">load();</script>
<script src="../librerias/js/jquery-1.11.2.min.js"></script>   
</body>
</html>
