<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html Form</title>
</head>

<body>



    <?php
    //!retrive data in same page without any error massage.
    // !empty / isset check for avoiding error.

    // echo $_REQUEST['username']; //normally error asbe,
    //eita kaj korbe,

    //amra form er info thik na thakle form dekhabe noy to info show korbe,
    if (!empty($_REQUEST['username']) || !empty($_REQUEST['password'])) {
        echo $_REQUEST['username'];
    } else {
    ?>

        <!-- <form action="" method="GET">
        <input type="text" name="username" value="">
        <input type="password" name="password" value="">
        <input type="submit" name="submit" value="submit">
    </form> -->

    <?php
    }

    //!form validation by strlen("arfan");

    /* if(!empty($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if(strlen($username) >= 8){
        echo "Login Successful";
    }
    else{
        echo "Type more than 8 caracter";
    }
}
 */


    ?>
    <!-- form banabo and strlet diye check kore validation korbo -->
    <!--  <form action="" method="GET">
        <input type="text" name="username" value="">
        <input type="password" name="password" value="">
        <input type="submit" name="submit" value="submit">
    </form> -->



    <!-- Retrive data at once -->

    <!--  <form action="" method="GET">
        <input type="text" name="username"><br>
        <input type="pass" name="password"><br>
        <select name="language[]" id="">
            <option value="php">php</option>
            <option value="html">html</option>
            <option value="java">java</option>
        </select>

        <input type="submit" value="submit">

    </form> -->

    <!-- data all collecting -->

    <?php
    // ArrayRequest ( [username] =>Value [password] =>Value [language] => Array ( [0] => html ) [submit] => submit )

    // print_r($_REQUEST);


    /*    foreach($_REQUEST as $values){
            if(!is_array($values)){
                echo $values ."<br>";
            }
            else{
                foreach($values as $data){
                    echo "secected data = $data <br>";
                }
            }
        } */





    ?>


    <h2>DateTime Handle:</h2>
    <!-- datetime form  -->
    <!--  <form action="">
        <input type="date" name="d" value="">
        <input type="submit" name="submit" value="submit">
    </form> -->

    <!-- date collect by php code -->
    <?php

    /*  if(isset($_REQUEST['submit'])){
        $new_date = date('d-m-y',strtotime($_REQUEST['d']));

        echo $new_date;
    } */

    ?>
    <!-- //file upload e enctype dibo and get method use korte parbo na, -->
    <h2>File Upload:</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="files">
        <input type="submit" name="submit" value="submit">

    </form>

    <?php 
    
    function print__r($value){
      echo '<pre>';
      print_r($value);
      echo '</pre>';
    }

    print__r($_FILES);


/* $_FILES(
    [files] => Array
        (
            [name] => 20190608_051732.ico
            [type] => image/x-icon
            [tmp_name] => C:\xampp\tmp\php4195.tmp
            [error] => 0
            [size] => 73356
        )

) */
    //file path of this upload
    // move_uploaded_file($_FILES['files']['tmp_name'],"../outer/".$_FILES['files']['name']); 
    // move_uploaded_file($_FILES['files']['tmp_name'],"../outer/hello.png"); //custom name

    //file with replace if upload in same name,

 
    
    ?>


</body>

</html>