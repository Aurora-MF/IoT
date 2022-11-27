<?php
// Keep this API Key value to be compatible with the ESP32 code provided in the project page. 
// If you change this value, the ESP32 sketch needs to match
$api_key= $sensor = $location = $celsius = $fahrenheit = "";
$server_name = "localhost";
$dbname = "TilapiaTec";
$username = "root";
$password = "";
$port = 90;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sensor = test_input($_POST["sensor"]);
        $location = test_input($_POST["location"]);
        $celsius = test_input($_POST["celsius"]);
        $fahrenheit = test_input($_POST["fahrenheit"]);

        // Create connection
        $conn = new mysqli($server_name, $username, $password, $dbname, $port);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $celsTemp = floatval($celsius);
        $fahrTemp = floatval($fahrenheit);
        if($celsTemp < 22.0 || $celsTemp > 32.0){
            include "warning.php";
        }

        $sql = "INSERT INTO SensorData (Sensor, Location, Celsius, Fahrenheit)
        VALUES ('" . $sensor . "', '" . $location . "', '" . $celsius . "', '" . $fahrenheit . "')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $con->close();
}
if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "se hace get";
}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}