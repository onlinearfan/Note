<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Preper statment</title>
</head>
<body>
    <?php 
    
    $conn = new mysqli('localhost','root','',''); //database connect,

    $sql_select = "SELECT * FROM student WHERE id=?"; //select all info of student 
    $sql = "INSERT into student(fname,lname,address)values(?,?,?)";
    $result = $conn->prepare($sql); // SQL command pass hobe ekhane,

    $result->bind_param('sss','arfan',$lname,$address); //bind param with value,
    $result->bind_param('i',$id); //select er jonno,

    $id = 5; //request theke collect kore show, bind param er por execute korte hobe,

    $fname= "arfan";
    $lname = 'adnan';
    $address = '72/1';

    $result->execute(); //run kora holo, eita off na kora porjonto colte thakbe,

    $result->bind_result($fname,$lname,$address);

    $result->execute(); 

    $result->fetch(); // single line row come in bind_result parameter,

    // while($result->fetch()) while run korbe sob row namanor porjonto,

    //number or row jante, 

    $result->store_result(); // set of row table store korbe,

    $result->num_rows;

    $result->free_result(); // set of row table result free korbe,

    $result->close(); //prepare statment close,
    $conn->close(); //conn close,


    //!CRUD = 

    //C = Create/insert data into table,

    //conn with databese, prepare state of insert sql,
    // ja pass korb ta bind_param korbo, pass kore dibo, execute korbo,

    $sql = "INSERT INTO student(fname,lname)values(?,?)"; // ? word tai bind param kore id pass korbo 

    $result = $conn->prepare($sql); //query ta prepare holo 

    $result->bind_param('ss',$fname,$lname);

    $fname = 'arfan'; $lname= 'khan'; // data gulo dynamic $_Request['fname'] = evabe nibo,

    $result->execute();
    $result->close();
    $conn->close();

    //R = Retrieve data/ collect data form table,
    //connet database,prepare statement of select sql,
    // select id pass korle bind param kore pass krbo, bind_result e var e collect krbo,
    //fetch kore single row te value ber kore anbo,

    $sql = "SELECT * FROM student where id=?"; // ? word tai bind param kore id pass korbo 

    $result= $conn->prepare($sql); //query prepare holo,

    //bind param execute,

    $result->bind_param('i',$id);
    $id = 5;

    $result->execute();
    //-----



    $result->bind_result($fname,$lname,$address); //bind result holo,

    $result->execute();
     
    $result->fetch(); // eita korle single row te $fname e data gulo fetch hobe and while e fetch run kori,

    echo $fname;

    //num row show korte $result->store_result(), $result->free_result(); $result->num_rows;

    $result->store_result(); // set of row store in table,

    $result->num_rows;
    $result->free_result();// free row 

    //loop run after num check,

    if($result->num_rows > 0){
        while($result->fetch()){
            echo $fname;
        }
    }else{
        echo "NO record found";
    }

    //close prepare statement, 
    $result->close();


    //! Delete data by prepare statement,
    //conn database, sql e bind param kore id pass kore delete kore dibo,

    $sql = "DELETE FROM STUDENT WHERE ID=?";

    $result = $conn->prepare($sql);

    $result->bind_param('i',$id);
    $id = 5; 

    $result->execute();

    //!update data into table by prepare statement,
    //conn database, sql e bind para 

    $sql = "UPDATE STUDENT fname=?,lname=? where id=?";

    $result = $conn->prepare($sql);

    $result->bind_param('ssi',$fname,$lname,$id);

    $fname = "arfan"; $lname = "khan"; $id = 5;

    $result->execute();


    











    
    
    
    ?>
</body>
</html>