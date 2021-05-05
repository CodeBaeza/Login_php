
<html>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "TeleGranjero";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $nombre = $_POST["txtusuario"]; // nombre de la caja 
    $pass = $_POST["txtpassword"]; // nombre de la caja


    $sql = "Select *from granjero where usuario ='" . $nombre . "' and password = '" . $pass . "'";
    $result = $conn->query($sql);

    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);
    }

    if ($result->num_rows > 0) {
        echo "Bienvenido:" . $nombre;
    } else if ($result == 0) {
        header("Location : login.html"); // nombre del html
        echo "Usuario no encontrado ";
    }



    $conn->close();
    ?>
</body>


</html>




