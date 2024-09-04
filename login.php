<?php

include "./components/sql_data.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $password = $_POST["pswd"];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (($password == $row["password"])) {
            $_SESSION["username"] = $username;
            if($row["is_admin"] == true){
                $_SESSION["is_admin"] = true;
                header("Location: admin.php");
                exit;
            } else {
                $_SESSION["is_admin"] = false;
                header("Location: index.php");
                exit;
            }
        } else {
            header("Location: index.php");
        }
    } else {
        header("Location: index.php");
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/login/login.css">
</head>
<body>
    <?php 
        include 'menu.php';
        get_active("adm"); 
    ?>
    <div class="espacio_menu"></div>
    <div class="form-holder">
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <div><p>User</p></div>
        <input type="text" name="user" required>
        <div><p>Password</p></div>
        <input type="text" name="pswd" required>
        <input type="submit" value="Submit">

    </form>

    </div>
</body>
</html>