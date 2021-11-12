<?php 
//steps write the form with name and value attibute,
//make a database and table and give info box on it , make info box name same as input name,
//take all the value in connect .php file,
// empty value check of input field.
//4) check connection of database and if connect then insert your data intu php my admin 
//connection add -> conn->prepare = $stmp->bind_param, = execute, show result , close connec and $stmt

if(!empty($_REQUEST['firstName']) && !empty($_REQUEST['lastName']) && !empty($_REQUEST['gender']) && !empty($_REQUEST['email']) && !empty($_REQUEST['password']) && !empty($_REQUEST['number'])){
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $gender = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $number = $_REQUEST['number'];

    $conn = new mysqli('localhost','root','','test');



    $conn = new mysqli('localhost','root','','test'); //connecting database,
    if($conn->connect_error){
        die('connection Failed' . $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(firstName,lastName,gender,email,password,number)values(?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$firstName,$lastName,$gender,$email,$password,$number);
        $stmt->execute();
        echo "registration Successfully Done";
        $stmt->close();
        $conn->close();
    }


}

else{
    echo "Fill the info properly";
}








?>