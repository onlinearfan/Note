<?php 
    // ArrayRequest ( [username] =>Value [password] =>Value [language] => Array ( [0] => html ) [submit] => submit )
    
    print_r($_REQUEST);

    if(!empty($_REQUEST['submit'])){
        foreach($_REQUEST as $values){
            if(!is_array($values)){
                echo $values ."<br>";
            }
            else{
                foreach($values as $data){
                    echo "secected data = $data <br>";
                }
            }
        }
    }

    
    ?>