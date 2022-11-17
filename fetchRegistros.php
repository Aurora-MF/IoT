<!DOCTYPE html>
<html>

<head>
    <title>Fetch page</title>
</head>

<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "TilapiaTec");
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $mail = $pswd = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["mailLogin"])) {
                echo "No hay nada";
            } else{
                $mail = $_POST["mailLogin"];
            }
            if (empty($_POST["pswdLogin"])) {
                echo "No hay nada";
            } else{
                $pswd = $_POST["pswdLogin"];
            }
        }
        $sql = "SELECT pswd, firstName, firstLast, secondLast, mail, gender, birthday FROM Registros";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $mails[] = $row["mail"];
                $pswds[] = $row["pswd"];
            }
        }
        for($i = 0; $i < count($mails); $i++){
            if($_POST["mailLogin"] == $mails[$i]){
                if($_POST["pswdLogin"] == $pswds[$i]){
                    header("Location: waitingPage.php");
                    exit();
                }
                // MATCH OF EMAIL BUT NOT OF PASSWORD
                // DIDNT MATCH THROW EXCEPTION AND MAKE A 
                // HANDLER FOR WRONG PASSWORD, AND MAKE THE
                // USER TRY AGAIN
                else{
                    echo "<script>
                        setTimeout(myURL, 3000);
                        function myURL(){
                            window.close();
                            window.open('index.php');
                        }
                        </script>";
                // header("Location: index.php");
                    echo "Match email but not password";
                }
            }
        }
        mysqli_close($conn);
    ?>
</body>

</html>