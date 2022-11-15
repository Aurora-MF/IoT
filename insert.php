<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "Registration");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $id = 1;
        $first_name =  $_REQUEST['nombre'];
        $last_name = $_REQUEST['last_name'];
        $last_name2 = $_REQUEST['last_name2'];
        $email = $_REQUEST['email'];
        $gender =  $_REQUEST['sexo'];
        $password = $_REQUEST['contraseña'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Registros  VALUES ('$id',
            '$first_name','$last_name','$last_name','$email', '$email', '$gender')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</body>

</html>