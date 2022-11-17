<!DOCTYPE HTML>
<html>

<head>
    <title>TilapiaTecWaitingLogin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="waitingPage.css">
    <link rel="logo" href="logo.png">

</head>
<div class="containerLogo">
    <img class="waitingLogo" src="Logo.png">
</div>
<script>
    setTimeout(myURL, 2000);

    function myURL() {
        window.close();
        // Here, we need to send to main page
        window.open('https://www.youtube.com/');
    }
</script>;

</html>