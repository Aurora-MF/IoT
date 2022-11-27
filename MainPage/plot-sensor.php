<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="package-lock.json">

    <script src="https://cdn.plot.ly/plotly-2.16.3.min.js"></script>
    <script src="plotly-2.16.3.min.js"></script>
    <title>Scatter Plot </title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "TilapiaTec");
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $sql = "SELECT id, Celsius, Fahrenheit, reading_time FROM SensorData";
    $query = mysqli_query($conn, $sql);
    $ids . $celsius . $fahrenheit . $dates = array();

    while ($ver = mysqli_fetch_row($query)) {
        $ids[] = $ver[0] * 600000;
        $celsius[] = $ver[1];
        $fahrenheit[] = $ver[2];
        $dates[] = $ver[3];
    }
    ?>

    <script type="text/javascript">
        function CadenaLineal(json) {
            var parsed = JSON.parse(json);
            var arr = [];
            for (var x in parsed) {
                arr.push(parsed[x]);
            }
            return arr;
        }
    </script>
    <div id="grafica">

    </div>
    <div id="tester" style="width:900px;height:700px;">
        <script type="text/javascript">
            var tiempo = CadenaLineal('<?php echo json_encode($ids) ?>');
            var temperatura = CadenaLineal('<?php echo json_encode($celsius) ?>');
            var date = CadenaLineal('<?php echo json_encode($dates) ?>');
            TESTER = document.getElementById('tester');
            var dataC = [{
                x: date,
                y: temperatura,
                mode: "lines+markers",
                type: "scatter"
            }];
            var layout = {
                title: "Celsius vs Tiempo"
            };
            Plotly.newPlot(TESTER, dataC, layout);
        </script>
    </div>

</body>

</html>