<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Oparation Project:</title>
</head>

<body>
    <?php




    //crud = insert , retrive, update, delete,
    //connet database, insert data into database,
    //data show kora,

    $localhost = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'students';

    $conn = new mysqli($localhost, $username, $password, $db_name);

    if ($conn->connect_error) {
        die('connection fail');
    } else {



    ?>
        <div class="retrive_data">
            <h3>Retrive Data:</h3>
            <table border=1>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Roll</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * from student_info";
                    $students = $conn->query($sql);

                    // echo $students->num_rows; // 2 number,
                    // $students_info = $students->fetch_assoc();

                    if ($students->num_rows > 0) {
                        while ($rows = $students->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['name']; ?></td>
                                <td><?php echo $rows['roll']; ?></td>
                            </tr>
                    <?php

                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>

        <div class="insert_data">
            <h3>Insert Data form</h3>
            <form action="" method="POST">
                Name : <input type="text" name="name"><br>
                Roll : <input type="text" name="roll"><br>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>

    <?php

        if (isset($_REQUEST['submit'])) {
            $name = $_REQUEST['name'];
            $roll = $_REQUEST['roll'];

            if (!empty($name) && !empty($roll)) {
                //$result = $conn->query("insert into tableName('fname','lname','email')Values('value1','value2','value3')")
                $sql = "INSERT INTO student_info(name,roll)VALUES('$name','$roll')";
                $result = $conn->query($sql);
                if ($result) {
                    echo "Inserted Successfully";
                } else {
                    echo "can't insert";
                }
            } else {
                echo "Fill All Information Properly";
            }
        }
        // $delete = "DELETE from student_info WHERE id=5";
        $update = "UPDATE student_info SET name='shuvo',roll=50 WHERE id=6";
        if($conn->query($update)){
            echo "delete";
        }
       

        

        
        
        
    }
    ?>






    <?php

    //insert data into database,


    ?>
    <!-- insert data, = submit check,value empty check, value collect and insert into table query, -->



</body>

</html>