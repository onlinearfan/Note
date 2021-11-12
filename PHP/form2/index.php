<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling</title>
</head>
<body>
    <h1>Form handling:</h1> <hr>
   


    <?php 
        //!html,css,javascript with php,
        //amra ja lekchi php inside html, php html j kono jaiga te php tag add kore lekha jai,

        function phpWithOtherLan(){
            //input a, img egulo printf e use korle valo,
            $var = "var in html";
            echo "<h2>Html inside php :</h2> $var";
            printf("<input type='text' value='geekyshow'>");
            echo "<script>alert('javascript in php');</script>";
        
        }
        // phpWithOtherLan(); //?call


    ?>

<?php 

//!get and post method , 
//form handle e submit alway age check korbo empty diye, isset,

?>
    <form action="" method="GET">
        <input type="text" name="name" id=""><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="submit-normal" id=""><br>
    </form>

    <?php 
    //alada file e nite action = "connect.php" redirect korbo
    //eigulo super global var tai sob page theke access korte parbo,
    //empty check na korle kichu submit na korle error asbe,
    //get method e = url/?name=Arfan+Khan&password=188993&submit=Submit
    //post method e kichu show korbe na, //data $_REQUEST er darao nite pari,
    // $_GET,$_POST,$_REQUEST $_FILES, egulo form hangle e kaj kore, egulo array tai print_r korte parbo,
    //external file e submit e get value show korbe na direct redirect hobe,  
    //  $_GET,$_POST,$_REQUEST,$_SERVER,$GLOBALS,$_FILES,$_ENV,$_SESSION,$_COOKIE
    //name feild e na dibo oigulo array key hisebe kaj korbe and value te ja dibo oigulo array  value hisebe kaj korbe,
   
    //*code 
    /* if(!empty([$_GET['submit-normal']])){
        echo "Name = " . $_GET['name'] . "<br>";
        printf('Password = %s',$_REQUEST['password']);

    }; */

    //!form info correction 
    // if(($_REQUEST['username'])=='arfankhan' && $_REQUEST['pass'] =="password"){echo "true";}

    //!isset($_REQUEST['keys']) 
    //isset "",'',0 k true dore fele, just empty holei dekhabe,
    //empty '',"",0,false,null = false dorbe,

  
    
    ?>

    <!-- handle check box,radio,select, -->

    <form action="" method="POST">
        <h3>Handle Checkbox:</h3>
        PHP:<input type="checkbox" value='php' name="php"><br>
        Html:<input type="checkbox" value='html' name="html"><br>
        Java:<input type="checkbox" value='java' name="java"><br>

        <h3>Handle Radio:</h3>
        male:<input type="radio" value='m' name="gender"><br>
        female:<input type="radio" value='f' name="gender"><br>
        other:<input type="radio" value='o' name="gender"><br>

        <h3>Handle Select box:</h3>
        favourt color 

        <!-- multi niye caile array pass korte hobe and single value nite caile sudu name -->
        <select name="f-color[]" id="" multiple>
            <option value="black">black</option>
            <option value="green">green</option>
            <option value="orange">orange</option>
            <option value="red">red</option>
        </select>

        <input type="submit" value="submit-checkbox" name="submit-checkbox">
    </form>

    <?php 

    //*code

    /* if(!empty($_REQUEST['submit-checkbox'])){
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";

        //*type all value at once,

        foreach($_REQUEST as $values){
            if(is_array($values)){
                foreach($values as $data){
                    echo $data . "<br>";
                }
            }else{
                echo $values . "<br>";
            }
            
        }

    } */
    
    ?>


    <h3>Data Submit:</h3>

    <form action="" method="">
        <input type="date" name="d" id="" value="<?php echo date('d-m-Y'); ?>"><br>
        <input type="submit" name='submit' value="submit">
    </form>

    <?php 
    //date k date() diye thik kore sajeye nibo, date('d-m-Y',strtotime($_REQUEST['d']));
    //*code 

    /* if(!empty($_REQUEST['submit'])){
        $new_date = date('d-m-Y',strtotime($_REQUEST['d']));

        echo $new_date;
    } */
    
    ?>

    <h3>file Handling:</h3>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name='image' ><br>
        <input type="submit" value="submit" name='submit'>
    </form>

    <?php 
    //file handling e post method rakha lagbe,
    //file upload e same name change hoye jabe tai eitar id use kora lagbe,

    /*         $_FILES
(
    [image] => Array
        (
            [name] => Dua.txt
            [type] => text/plain
            [tmp_name] => C:\xampp\tmp\php74B.tmp
            [error] => 0
            [size] => 50778
        )

) */

    //
    //*code 

    /* if(!empty($_REQUEST['submit'])){
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        //file inner info code 



    }

    $moveFile = move_uploaded_file($_FILES['image']['tmp_name'],'files/'.$_FILES['image']['name']);
    $moveFile = move_uploaded_file($_FILES['image']['tmp_name'],'files/name.png'); //custom name;
    
    if($moveFile == true){
        echo "file uploaded";
    } */
    
    ?>


    <h2>form validation:</h2>

    <form action="" method="POST">
        <input type="text" name="user" value="<?php if(!empty($_REQUEST['submit'])) {echo $_REQUEST['user'];} ?>"><br>
        <input type="password" name="pass" value="<?php if(!empty($_REQUEST['submit'])) {echo $_REQUEST['pass'];} ?>"><br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php 

    //*code 

    /* if(!empty($_REQUEST['submit'])){
        //ekhn ar undefine asbe na, karon '' faka string jacche kichu na dile,
        $user = $_REQUEST['user'];
        $password = $_REQUEST['pass'];


        if (strlen($user) <= 8) {
            echo "More than 8 caracter user";
        } elseif (strlen($password) <= 8) {
            echo "More than 8 caracter password";
        } else {
            echo "Successfully done";
        }
    } */
    
    ?>

</body>
</html>