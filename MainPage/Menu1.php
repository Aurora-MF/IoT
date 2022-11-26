<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu1</title>
</head>
<body>
    <?php  
    $conn = mysqli_connect("localhost", "root", "root", "tilapiatec");
    $sql = "SELECT temperatura, tiempo FROM valores";
    $query = mysqli_query($conn,$sql);
    $temperatura=array();
    $tiempo=array();

    while($ver=mysqli_fetch_row($query)) {
        $temperatura[]=$ver[0];
        $tiempo[]=$ver[1]
    }

    $temperatura=json_encode($temperatura);
    $tiempo=json_encode($tiempo);
    ?>

    <div id="grafica"></div> 

    <script type="text/javascript">
        function CadenaLineal(json){
            var parsed = JSON.parse(json);
            var arr = [];
            for(var x in parsed){
                arr.push(parsed[x]);
            }
            return arr;
        }
    </script>

    <script type="text/javascript">

        tiempo=CadenaLineal('<?php echo $tiempo ?>');
        temperatura=CadenaLineal('<?php echo $temperatura ?>');

        var trace1 = {
            x: tiempo,
            y: temperatura,
            type: 'scatter'
        };
        var data = [trace1];

        Plotly.newPlot('grafica', data);
    </script>

</body>
</html>