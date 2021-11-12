<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Project</title>
    <style>
        .flex {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>

<body>

    <div class="flex">
        <div class="form">
            <form action="" method="GET">
                Name : <input type='text' name='name' value='<?php if (isset($row['name'])) echo $row['name']; ?>'><br>
                Address : <input type='text' name='address' value='<?php if (isset($row['address'])) echo $row['address']; ?>'><br>
                <input type="submit" name='insert_data' value='INSERT DATA'>
                <form action="" method="GET">
                    <input type="hidden" name='update_id' value='<?php if (isset($row['id'])) echo $row['id']; ?>'>
                    <input type="submit" name='update_data' value='UPDATE DATA'>
                </form>
            </form>
        </div>
        <div class="table">
            <?php

            $host = 'localhost';
            $username = 'root';
            $password = '';
            $db_name = 'office_employee_info';

            $conn = new mysqli($host, $username, $password, $db_name);

            if ($conn->connect_error) {
                die('connection fail');
            }
            echo "Database connected";

            //Data Retrtive code 
            $sql = "SELECT * FROM employee_info";
            $result = $conn->query($sql);

            //  print_r($result);

            if ($result->num_rows > 0) {

                //outer of retrtive data
                echo "<table border='2'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Address</th>";
                echo "<th colspan='2'>Action</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                //outer loop up code
                while ($row = $result->fetch_assoc()) {
                    //row,id,name,address
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['address']}</td>";
                    echo "<td>
                    <form action='' method='GET'>
                    <input type='hidden' value='{$row['id']}' name='edit_id'>
                    <input type='submit' name='edit' value='EDIT'>
                    </form>
                </td>";

                    echo "<td>
                    <form action='' method='GET'>
                    <input type='hidden' value='{$row['id']}' name='delete_id'>
                    <input type='submit' name='delete' value='DELETE'>
                    </form>
                </td>";

                    echo "</tr>";
                }
                //outer loop down code
                echo "</tbody>";
                echo "</table>";
            }

            //insert data code,
            if (isset($_REQUEST['insert_data'])) {
                $name = $_REQUEST['name'];
                $address = $_REQUEST['address'];

                if (empty($name) || empty($address)) {
                    echo "Fill The Form Properly";
                } else {
                    $sql = "INSERT INTO employee_info (name, address)VALUES ('$name','$address')"; //command

                    if ($conn->query($sql)) {

                        echo "<h3>Data Inserted Successfully</h3>";
                    } else {
                        echo "Data Can't Inserted";
                    }
                }
            }

            //Delete Data form Table 

            if (isset($_REQUEST['delete'])) {
                $delete_id = $_REQUEST['delete_id'];
                $sql = "DELETE FROM employee_info WHERE id='$delete_id'";

                if ($conn->query($sql)) {
                    echo "<h3>Delete Successfully</h3>";
                }
            }
       

            //Update Data From Table,



            //*Data retrive by edit click button

            if (isset($_REQUEST['edit'])) {
                $edit_id = $_REQUEST['edit_id'];
                $sql = "SELECT * FROM employee_info WHERE id='$edit_id'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            }

            //update button click update data,
            if (isset($_REQUEST['update_data'])) {

                $update_name = $_REQUEST['name'];
                $update_address = $_REQUEST['address'];
                $update_id = $_REQUEST['update_id'];

                

                $sql = "UPDATE employee_info SET name='$update_name',address='$update_address' WHERE id='$update_id'";

                if ($conn->query($sql)) {
                    echo "<h3>Data Update Successfully</h3>";
                }
            }
            ?>

        </div>
    </div>

    <?php
    
    //?Crud Demo Code,
    //!Insert data into table,
    /* $sql = "INSERT INTO employee_info (name, address)VALUES ('Shuvo','India')"; //command

    if ($conn->query($sql)) {
        echo "Data Inserted Successfully";
    } */

    //!Rettrive Data from Table 

    /* $sql = "SELECT * FROM employee_info";
    $result = $conn->query($sql);

    print_r($result);

    if ($result->num_rows > 0) {
        //outer loop
        while ($row = $result->fetch_assoc()) {
            echo "{$row['id']}<br>";
        }

        //inner loop
    } */

    //!delete data form table,

    //delete if take by form delte btn 

    /* $sql = "DELETE FROM employee_info WHERE id=2";

    if ($conn->query($sql)) {
        echo "Delete Successfully";
    } */


    //!Update Data form table,

    $sql = "UPDATE employee_info SET name='Fahim',address='India' WHERE id='1'";

    if ($conn->query($sql)) {
        echo "Update Data";
        
    }

    ?>
</body>

</html>