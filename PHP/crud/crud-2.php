<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud 2 - (prepare statement)</title>
    <style>
        section.crud .container {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <?php
    //!PHP code starts
    //db_name = workers , table_name = worker_info;


    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'workers';

    //connection create
    $conn = new mysqli($host, $username, $password, $db_name);

    //connection error check 

    if ($conn->connect_error) {
        die('connection fail');
    }

    //run code connect successfully 
    echo "Database Connect Successfully";

    ?>
    <h2>Crud 2 - prepare statement</h2>

    <section class="crud">
        <div class="container">
            <div class="form">
                <h2>Form For Insert and Update Data</h2>
                <?php

                
                //?Edit and update data into table,

                if (isset($_REQUEST['edit'])) {

                    $edit_id = $_REQUEST['edit_id'];
                    $sql = "SELECT * FROM worker_info WHERE id = ?";
                    $result = $conn->prepare($sql);
                    $result->bind_param('i', $edit_id);
                    $result->execute();
                    if ($result) {

                        $result->bind_result($id, $fname, $lname, $address);
                        $result->execute();
                        $result->fetch();
                        $result->close(); //close edit bind param
                    }
                }

                ?>
                <form action="" method="GET">
                    First Name: <input type="text" name='fname' value='<?php if (isset($fname)) {
                                                                            echo $fname;
                                                                        } ?>'><br><br>
                    Last Name: <input type="text" name='lname' value='<?php if (isset($lname)) {
                                                                            echo $lname;
                                                                        } ?>'><br><br>
                    Address: <input type="text" name='address' value='<?php if (isset($address)) {
                                                                            echo $address;
                                                                        } ?>'><br><br>
                    <input type="submit" name='insert' value='INSERT DATA'>
                    <form action="" method="GET">
                        <input type="hidden" name='update_id' value='<?php if (isset($id)) {
                                                                            echo $id;
                                                                        } ?>'>
                        <input type="submit" name='update' value="UPDATE DATA">
                    </form>

                </form>
            </div>


            <div class="table">
                <h2>Collection of Table DATA:</h2>

                <?php


                //? Retrieve Data successfully 
                $sql = "SELECT * FROM worker_info";
                $result = $conn->prepare($sql);

                $result->bind_result($id, $fname, $lname, $address); //table data bind result kore var a assing
                $result->execute();

                $result->store_result();
                if ($result->num_rows > 0) {

                    echo "<table border='1'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th>First Name</th>";
                    echo " <th>Last Name</th>";
                    echo "<th>Address</th>";
                    echo "<th colspan='2'>Action</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo " <tbody>";
                    //  outer Loop Up
                    while ($result->fetch()) {
                        // table tr loop here $id,fname,$lname,address,
                        echo "<tr>";
                        echo "<td>{$id}</td>";
                        echo " <td>{$fname}</td>";
                        echo " <td>{$lname}</td>";
                        echo " <td>{$address}</td>";
                        echo "<td>
                                <form action='' method='GET'>
                                <input type='hidden' name='edit_id' value='{$id}'>
                                <input type='submit' name='edit' value='EDIT'>
                                </form>
                                </td>";

                        echo "<td>
                                <form action='' method='GET'>
                                <input type='hidden' name='delete_id' value='{$id}'>
                                <input type='submit' name='delete' value='DELETE'>
                                </form>
                                </td>";
                        echo "</tr>";
                    }
                    //outer loop down 
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "NO Result Found";
                }
                $result->free_result();
                $result->close();


                //?insert data by form value passing,

                if (isset($_REQUEST['insert'])) {
                    $fname = $_REQUEST['fname'];
                    $lname = $_REQUEST['lname'];
                    $address = $_REQUEST['address'];
                    if (empty($fname) || empty($lname) || empty($address)) {
                        echo "<h3>Fill the form properly</h3>";
                    } else {


                        $sql = "INSERT INTO worker_info(fname,lname,address)VALUES(?,?,?)"; //? = bind param korte hobe,
                        $result = $conn->prepare($sql);
                        if ($result) {
                            $result->bind_param('sss', $fname, $lname, $address); //bind param with variable

                            // $fname = "Shuvo"; $lname  = "khan"; $address='dhaka';

                            $result->execute(); //exetute er satei data cole jabe and ei off na kora porjonto run korate parbo,
                            echo "<h3>Data Inserted Successfully</h3>";
                            $result->close();
                        }
                    }
                }

                //?|Delete data by Pressing delete button

                if (isset($_REQUEST['delete'])) {

                    $delete_id = $_REQUEST['delete_id'];
                    $sql = "DELETE FROM worker_info WHERE id= ?";
                    $result = $conn->prepare($sql);
                    if ($result) {
                        $result->bind_param('i', $delete_id);
                        echo "<h3>Delete Data Successfully</h3>";
                        $result->execute();
                        $result->close();
                    }
                }


                //?Update data by update button click
                if (isset($_REQUEST['update'])) {
                    //fname=Shuvo&lname=khan&address=dhaka&update_id=2&update=UPDATE+DATA
                    $update_id = $_REQUEST['update_id'];
                    $fname = $_REQUEST['fname'];
                    $lname = $_REQUEST['lname'];
                    $address = $_REQUEST['address'];

                    $sql = "UPDATE worker_info SET fname=?,lname=?,address=? where id=?";
                    $result = $conn->prepare($sql);


                    if ($result) {
                        $result->bind_param("sssi", $fname, $lname, $address, $update_id);
                        $result->execute();
                        echo "<h3>Update Successfully</h3>";
                        $result->close();
                    }
                }

                ?>

            </div>









        </div>
    </section>
</body>

</html>