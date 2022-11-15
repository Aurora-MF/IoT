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
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $name = $last_name = $last_name2  = $email = $gender = $password = $birthday = "";
    $nameErr = $last_nameErr = $last_name2Err  = $emailErr = $genderErr = $passwordErr = $birthdayErr = "";
    $errors = array($nameErr, $last_nameErr, $last_name2Err, $emailErr, $genderErr, $passwordErr, $birthdayErr);

    $id = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nombre"])) {
            $nameErr = "Name is required";
        } else {
            $name = trim(htmlspecialchars(($_POST["nombre"])));
        }
        if (empty($_POST["last_name"])) {
            $last_nameErr = "Last name is required";
        } else {
            $last_name = trim(htmlspecialchars($_POST["last_name"]));
        }

        if (empty($_POST["last_name2"])) {
            $last_name2Err = "Last name is required";
        } else {
            $last_name2 = trim(htmlspecialchars($_POST["last_name2"]));
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = trim(htmlspecialchars($_POST["email"]));
        }

        if (empty($_POST["sexo"])) {
            $genderErr = "Sex is required";
        } else {
            $gender = trim(htmlspecialchars($_POST["sexo"]));
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = trim(htmlspecialchars($_POST["password"]));
        }

        if (empty($_POST["birthday"])) {
            $birthdayErr = "Birthday is required";
        } else {
            $birthday = trim(htmlspecialchars($_POST["birthday"]));
        }
        $id++;
    }
    for ($i = 0; $i < count($errors); $i++) {
        if (strlen($errors[$i]) > 0) {
            echo $errors[$i];
        }
    }
    // Check how to make an infinite counter of ids

    $sql = "INSERT INTO Registros  VALUES ('$id',
            '$password','$name','$last_name','$last_name2', '$email', '$gender', '$birthday')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$name\n $last_name\n "
            . "$gender\n $email");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);
    ?>
</body>

</html>