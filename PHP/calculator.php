<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Of PHP</title>
</head>

<body>
    <!-- 
        Steps: 1)make a form of code with 2 input and select oparation and submit btn 
                2)write php code and check is everything not empty 
                3)if not empty then collet all the value of code and 
                4)write oparation check add do sum by if or switch stetment,
                5)check everything Properly . should not see any error by doing anything wrong.
     -->


    <h2>Calculator Of PHP:</h2>
    <form action="" method="get">
        <input type="number" name="num1" placeholder="Type your first number">
        <hr>
        <input type="number" name="num2" placeholder="Type your second number">
        <hr>
        <select name="oparation" id="oparation">
            <option value="Do Your Math">Do Your Math</option>
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="multi">Multi</option>
            <option value="div">Division</option>
        </select>
        <hr>
        <input type="submit" name="submit" value="Submit">
        <hr>
    </form>

    <h3>
        <?php

        //empty check, value gula catch korbo,
        //variable e value gulo set kore bosiye dibo condition e

        if (!empty($_REQUEST['submit']) && !empty($_REQUEST['num1']) && !empty($_REQUEST['num2']) && !empty($_REQUEST['oparation'])) {
            $num1 = $_REQUEST['num1'];
            $num2 = $_REQUEST['num2'];
            $oparation = $_REQUEST['oparation'];

            //php?num1=10&num2=15&oparation=add&submit=submit+sum

            // echo $num1 . $num2 . $oparation;
            //Made by switch statment
            /* switch(true){
                case ($oparation=='add'):
                    $sum = $num1+$num2;
                    echo "the result of sum is $sum";
                    break;
                case ($oparation=='sub'):
                    $sum = $num1-$num2;
                    echo "the result of sum is $sum";
                    break;
                case ($oparation=='multi'):
                    $sum = $num1*$num2;
                    echo "the result of sum is $sum";
                    break;
                case ($oparation=='div'):
                    $sum = $num1/$num2;
                    echo "the result of sum is $sum";
                    break;
                default:
                    echo "Write Properly Everything";
            } */

            //Made by If else Statment 
            if ($oparation == 'add') {
                $sum = $num1 + $num2;
                echo "the result of your math is $sum";
            } elseif ($oparation == 'sub') {
                $sum = $num1 - $num2;
                echo "the result of your math is $sum";
            } elseif ($oparation == 'multi') {
                $sum = $num1 * $num2;
                echo "the result of your math is $sum";
            } elseif ($oparation == 'div') {
                $sum = $num1 / $num2;
                echo "the result of your math is $sum";
            } else {
                echo "Write Properly everything";
            }
        } else {
            echo "Fill All The Value Of code";
        }


        ?>

    </h3>




</body>

</html>