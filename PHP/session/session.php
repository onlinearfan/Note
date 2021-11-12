<?php 
//Session ,
//session start krlei id na thkle create ar tkale mathc krte file server er shate

session_start(); //sob file er top e dite hoi,
//$_SESSION['user'] = session var create,
session_unset(); //eita session var sob delete kore dei,
session_destroy(); // eita file delete kore dei,
// unset['sessionname'];  eita single var delete kore,

//!login hit
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

//if log in already
if(!empty($_SESSION['username']) || !empty($_SESSION['password'])){
    echo "<script>location.href='welcome.php';</script>";
}

//if not log in redirect to log in page, 
if(!empty($_SESSION['password']) || !empty($_SESSION['username'])){
    echo "<H2>WELCOME TO OUR SITE</H2>";
    echo "<h3>your username:{$_SESSION['username']} and password: {$_SESSION['password']}</h3>";
}
else{
    echo "<script>location.href='login.php';</script>";
}

//Log out click 
if(isset($_REQUEST['log_out'])){
    // session_unset();
    session_destroy();
    echo "<script>location.href='login.php';</script>";
}

?>