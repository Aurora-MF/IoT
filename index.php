<!DOCTYPE HTML>
<html>

<head>
    <title>TilapiaTecLogin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="register" href="register.html">
    <link rel="prueba" href="prueba.html">
    <link rel="fetch" href="fetchRegistros.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Suwannaphum&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Container of the menu-->

    <form action="fetchRegistros.php" method="post">
        <div class="mainContainer">
            <div>
                <p>Tilapia Tec</p>
            </div>
            <div class="correoElect">
                <label for="mailLogin"></label>
                <input type="email" id="mailLogin" name="mailLogin" placeholder="Correo Electronico" required>
            </div>
            <div class="password">
                <label for="pswdLogin"></label>
                <input type="password" id="pswdLogin" name="pswdLogin" placeholder="Contraseña" required>
            </div>
            <button class="login" type="submit">
                <p>Login</p>
            </button>
            <div class="register">
                <a href="register.html">
                    <p>Register</p>
                </a>
            </div>
        </div>
    </form>
    </div>
</body>

</html>