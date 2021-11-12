<?php 
session_start();

if(!empty($_SESSION['password']) || !empty($_SESSION['username'])){
    echo "<H2>WELCOME TO OUR SITE</H2>";
    echo "<h3>your username:{$_SESSION['username']} and password: {$_SESSION['password']}</h3>";
}
else{
    echo "<script>location.href='login.php';</script>";
}


if(isset($_REQUEST['log_out'])){
    // session_unset();
    session_destroy();
    echo "<script>location.href='login.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" name="log_out" value="LOG OUT" id="">
    </form>
</body>
</html>