<html>
<head>
<meta charset="utf-8">
<title>JavaScript Alert Box by PHP</title>
<?php  
    function alert($temp){
        if ($temp < 22.0) {
            echo $temp;
            echo '<script type="text/javascript">';
            echo ' alert("Sube la temperatura del agua")';
            echo '</script>';
            header("http://192.168.100.147:90/IoT/MainPage/plot-sensor.php");
        }
        if ($temp > 32.0) {
            echo $temp;
            echo '<script type="text/javascript">';
            echo ' alert("Baja la temperatura del agua")';
            echo '</script>';
            header("http://192.168.100.147:90/IoT/MainPage/plot-sensor.php");
        }
    }
    echo $celsTemp;
    alert($celsTemp);
?>
</head>

<body>
</body>
</html>