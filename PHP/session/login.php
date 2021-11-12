<?php 
session_start();

if(!empty($_SESSION['username']) || !empty($_SESSION['password'])){
    echo "<script>location.href='welcome.php';</script>";
}


if(isset($_REQUEST['login'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if(!empty($username) || !empty($password)){
        $_SESSION['username'] = $username;
        $_SESSION['password'] =$password;
        echo "<script>location.href='welcome.php';</script>";
    }
    else{
        echo "Fill the form Properly";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log IN Form</title>
</head>
<body>
    <form action="" method="POST">
        <h2>LOG IN </h2>
        Username : <input type="text" name='username'><br><br>
        password : <input type="password" name='password'><br><br>
        <input type="submit" name='login' value="LOG IN">
    </form>

    <?php 
    //session start, login btn check,value store , seeesion var , redirect to welcome,
    
    
    ?>
</body>
</html>