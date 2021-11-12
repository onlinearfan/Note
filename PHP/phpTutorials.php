<?php 

    //!comment 
    //, # ,/* */ 
    //!string interpolation 
    //echo "$var {$var_ekshate_text}" . $var;
    //!constant
    //constant value te j kono data pass korte parbo,
    //constant sob jaiga theke access korte parbo, inner outer, sob,
    //constant ekbar define er por ar reassing kora jai na,
    /* define("consName","value");
    echo consName ."<br>";

    function display(){
        echo consName;
        define("innerCons","InnerCon <br>");
    }

    display();
    echo innerCons; */

    //!note oparator of php = 
    //?1)asssigment = ,2)combine +=(.=/*=) assigment $var1 = $var2 = 10; // 234= $var this assing will give error,
    //?3)arithmetic/math(+-*/%) 
    //?4)comparision [>< | >=|<= | == | != | === | !== | <> | ,
    // comparesion oparator != <> 1bar question chance, !== 2bar question chance,
    // == one condition need correct, === two condition need correct
    // "value" == $variable_name; can check equal by last var name,
    //?5)logigal true/false  && || !(false)
    // ( true && true && true && true  = true , (true || false) = true , !(true) = false,
    //echo (true xor true);
    //?6)increment/decr ++1, --1
    //spaceship oparator = <=>, 

     /* $value = 5;
    echo ++$value;
    echo $value; */

    /* $value = 10; eita age ja pabe tai likhbe 11,
    $value = ++$value;
    echo $value;
    echo $value; */

    //!math function
    //rand(),sqrt(),max(),min()

    //!if , elseif,else,nested if, write mood of if,
    //if(true): endif; / if(true){} / naseted if = elseif(), else{};
    //"",'',0,false,null = false / 1,true,any_value = true

    //!string combine .=
    // $value1 = "arfan khan"; $value1 .=is a good boy;

    //!tarnary oparator 
    //tarnary oparetor = echo/ $value =  (false)?"yes true":"false"; [ if statment er moto]
    //!switch Statment 
    //switch statment = [if elseif er moto kaj kore break lagiye,]
    //!for Loop, nested for loop,
     //lessthen + increment --- gatherthan + decrement
    //!while loop, nested while loop,

    //!break and continue 
     //break(stop last will good for code) and continue(skip alway valuer age dibo,) statment,
      //continue dibi age break dibi pore,
    //do loop, nested do loop,
    //loop er bahir kaj kore, na,

    //!array 
    //ARRAY =(numaric, assosiative,) $arrayName["arfan"] = value; array("arfan","shuvo")- numaric, array("key1" => "value1","key2"=>"value");
    //array(2,35,6,3,5,6,3); [3,45,56,3,5,6], array(2,3,array(34,5),23,4);$value[] eita kore dile 1,2,kore asbe,array predefine
    //array show korar age print_r kore dekhe nibo,
    //delete and modify array --- unset($value["arfan"]);$value["arfan"] = "hello boy"; $value["arfan"] = "hello girl";
    //copy array ----$array1 = array(2,3,5,6,7); $array2 = $array1;
    //count($array1); = number of array value will show $i = 0; $i<count($array1); $i++
    //array_keys = eita array key gulo ekta numeric array te rupantor kore, $keys = array_keys($array1);
    //array_keys($array_name,"definite_value",type_check);
    //assosiative array show with forloop and while loop with keys
    //array_values($array1); eita assosiative array keys gulo numeric kore dibe,
    //collection of data item in single name , multiple item use er khetre use kori,
    //3type of array = (numeric, assosiative,) ,multidimansion,singleline , all in one

    //!Numeric array 
    // eita just key gulo number vabe run kore,
    //a[] = 0 .... empty gulo auto fil hobe key 0,1,2,3 but lekhar somoy key diye echo kora lagbe,
    //array string er bitor kaj kore na direct {} bitor dite hoi,

    /* $arfan[0] ="Arfan Khan"; //single line array,
    echo $arfan[0]; */
    

    //!associative array 
    //eitar key gulo word hoye thake $arrayName['keyword'] = 'Value of array';
    //array key name case sensetive, OPPO , oppo alada,
    /* $arrayName['keys'] =  "value of array";

    echo "{$arrayName['keys']}"; */

    //!Array Function 
    //by default key 0 index diye suru kore, na diye index nibe key define korle tai nibe,
    //array(1,2,3,4,5); array("keys" =>"value",....);

    /* $arrayFunction = array("one","two","three"); //numeric array function,
    $arrayFunction2 = array("keys1" =>"Value1","keys2" =>'value2'); //assosiative array function,

    echo $arrayFunction[0] . "<br>";
    echo $arrayFunction2['keys2']; */

    //!Array keys oparator (=>),
    //eita diye key define kore,
    //0 ekhan array te thakbe na 1 theke suru hobe numeric e but assosicativ keys dile 0 theke suru hobe,,
   
    /* $arrayName = array('4'=>"arfan",2,3,4,5); 
    $arrayName2 = array('keys'=>"arfan",2,3,4,5); 

    echo $arrayName[2] ."<br>";
    echo $arrayName[5] ."<br>"; //2 asbe,
    echo $arrayName2[2]; */

    


    //!modify and deleting array,
    //unset($arrayName['keys']); $a[0] ="arfan"; $a[0] ="adnan";

    /* $arrayName = array("modifying" => "Unmodify","delete" =>"Delete Me");

    echo $arrayName['modifying'] . "<br>";
    $arrayName['modifying'] = "Modified";
    echo $arrayName['modifying'] . "<br>";

    echo $arrayName['delete'] . "<br>";
    unset($arrayName['delete']);
    echo $arrayName['delete'] . "<br>";  */

    //!copy array in array 
    //$arfan = array(1,2,3); $adnan = $arfan; $adnan['0'] --> 1;

    //!count function 
    //eita array value koiya ase oita count kore,
    
    //*code 1
    /* $arrayCount = array('fahim','shuvo','shanto');

    echo count($arrayCount); // 3 */

    //*code 2 - all array value run by loop with count function

    /* $arrayCountF = array("arfan","fahim","shuvo");

    for($i = 0; $i<count($arrayCountF);$i++){
        echo $arrayCountF[$i] . "<br>";
    } */

    //*code 3
    /* $arrayMulti = array(1,2,3,4,array(1,2,3,4),5);

    echo count($arrayMulti);
    echo count($arrayMulti[4]); */

    //!forloop,while loop,do loop with numeric array,

    //*code 1 for loop
    /* $numericArrayFor = array('a','b','c');

    for ($i=0; $i <count($numericArrayFor); $i++) { 
        echo $numericArrayFor[$i] . "<br>";
    } */

    //*code 2 while loop 
    /* $numericArrayWhile = array('a','b','c');

    $i = 0;

    while($i<count($numericArrayWhile)){
        echo $numericArrayWhile[$i] ."<br>";
        $i++;
    } */

    //*code 3 do loop 
    //do loop ekta must run korbe as eita ekbar run korar por condition check kore
    /* $numericArrayDo = array('a','b','c');

    $i = 0;

    do{
        echo $numericArrayDo[$i] ."<br>";
        $i++;
    }
    while($i<count($numericArrayDo)); */

    //!array_keys() = key k numeric array kore and array_values() = value k kore, , 
    

    /* $arranName = array('arfan'=>'php','shuvo'=>'java');

    $keys = array_keys($arranName);
    echo $keys[0] . "<br>"; //keys convert to numeric array 

    $values = array_values($arranName);

    echo $values[0]; //php associative convert in numeric */

    //!forloop,while loop,do loop with associative array 
    //keys gulo numeric korbo and oita diye namabo,

    //*code 1 forLoop 
    /* $arrayName = array('a' => 'php','b'=>'java','c'=> 'html');

    $array_keys = array_keys($arrayName);
    // echo $array_keys[0]. "<br>"; //a 

    for ($i=0; $i < count($array_keys); $i++) { 
        $single_keys =  $array_keys[$i];

        echo $single_keys ."=". $arrayName[$single_keys] . "<br>";
    } */

    //* code 2 while loop 

    /* $arrayName = array('a' => 'php','b'=>'java','c'=> 'html');

    $array_keys = array_keys($arrayName);
    // echo $array_keys[0]. "<br>"; //a 

    $i = 0;
    while($i<count($array_keys)){
        $single_keys = $array_keys[$i];
        echo $single_keys . "=" . $arrayName[$single_keys] . "<br>";
        $i++;
    } */
    

    //!foreach loop with numeric array and associative array,
    //foreach() {}, foreach(): code endforeach;  
    //eita array value ekta ekta kore namate thake,
    //* code 1 - numeric, 

    /* $arrayNum = array('keys1'=>'a','b','c');

    foreach($arrayNum as $keys => $value){
        echo $keys."=". $value . "<br>";
    } */

    //!print_r / var_dump();
    //true korle return kore,

    /* $arrayPrint = array('arfan' =>"php",'russel'=>'html','multi'=>array(2,3,4));

    function print__r($value){
      echo '<pre>';
      print_r($value);
      echo '</pre>';
    }

    print__r($arrayPrint);
    $returnPrint = print_r($arrayPrint,true);

    echo $returnPrint; // 

    var_dump($arrayPrint); */


    //!array oparator =
    //? $a+$b = key er common gulo dorbe, == value equal hole true === value equal and type thik and order thik thakle true
    //? != <> value equal na thakle true, !== value and type and order er j kono ekta thik na thakle true 3 bar question korte parbo,
    //j gulo age key asbe oigulo age nibe,

    function ArrayOparatorPlus(){

    $a = array('arfan' => 'php', 'adnan' => 'html', 'shuvo' => 'css');
    $b = array('arfan' => 'bangla', 'adnan' => 'english', 'shuvo' => 'math', 'fahim' => 'accounting');

    $commonArray = $a + $b;
    $commonArray = $b + $a;

    print_r($commonArray);
    }

    // ArrayOparatorPlus();//?call function

    //!multidimansion Array = 
    //numaric multi array, assosiative multi array ase, 2d, 3d
    
    function multidimansionArray(){

        $multiArrayAsso = array(
            'arfan',
            'arfan' => array(
                'php-arfan' => 20,
                'html-arfan' => 90,
                'java-arfan' => 30,
            ),
            'shuvo' => array(
                'php-shuvo' => 20,
                'html-shuvo' => 10,
                'java-shuvo' => 50,
            ),
            'fahim' => array(
                'php-fahim' => 20,
                'html-fahim' => 10,
                'java-fahim' => 50,
            ),
        );
    }

    // multidimansionArray(); //?c alling

    //!foreache run with multi array,

    function multiWithForeach(){
        $multiArrayAsso = array(
            'arfan' => array(
                'php-arfan' => 20,
                'html-arfan' => 90,
                'java-arfan' => 30,
            ),
            'shuvo' => array(
                'php-shuvo' => 20,
                'html-shuvo' => 10,
                'java-shuvo' => 50,
            ),
            'fahim' => array(
                'php-fahim' => 20,
                'html-fahim' => 10,
                'java-fahim' => 50,
            ),
        );

        foreach($multiArrayAsso as $keysName=> $values){
            foreach($values as $keysLanguage=> $data){
                echo "Name = $keysName , Language =  $keysLanguage , Value = $data <br>";
            }
            echo "<br>";
        }
    }
    // multiWithForeach(); //?calling 

    //!extre 
     // echo 5>2 ; = 1
    // echo PHP_VERSION;

    //!forloop with associative array, multidimansion, Numaric Easy Now,
    //numaric korte just 2 bar tar  loop calabo,


    //*code 1 

    /* $multiArray = array(array('arfan','php'),array('adnan','html'),array('shuvo','css'));

    function print__r($value){
      echo '<pre>';
      print_r($value);
      echo '</pre>';
    }   

    print__r($multiArray);
    // echo $multiArray[0][1];

    //outer array 3(0,1,2) var and inner array 2(0,1) bar gurbo,

    for ($i=0; $i < count($multiArray); $i++) { 
        // echo $i . "<br>";
        for ($j=0; $j < count($multiArray[$i]); $j++) { 
        // echo $j . "<br>";
            echo $multiArray[$i][$j] . "<br>";



        }
    } */

    //*code 2 multi array associative by for loop,

 function multiArrayAssosicative(){

    //multi array create, loop e first koibar and inner loop koibar ta dekhbo n,
    // then key gulo uvoyer collect korbo, array_keys(diye), loop e bosabo thik babe and value
    //shuvo php 10, arfan html 100, fahim css 20,

    $multiArrayAsso = array(
        'arfan' => array(
            'php-arfan' => 20,
            'html-arfan' => 90,
            'java-arfan' => 30,
        ),
        'shuvo' => array(
            'php-shuvo' => 20,
            'html-shuvo' => 10,
            'java-shuvo' => 50,
        ),
        'fahim' => array(
            'php-fahim' => 20,
            'html-fahim' => 10,
            'java-fahim' => 50,
        ),
    );

    // echo $multiArrayAsso['arfan']['php-arfan']; //valau will show here.

    $multiArrayAsso_keys = array_keys($multiArrayAsso); //$multiArrayAsso[0] = arfan, 1 = shuvo,2 = fahim
    // print_r($multiArrayAsso_keys);

    for ($i=0; $i < count($multiArrayAsso_keys); $i++) { 
        //0,1,2 = $i 

        $multiArrayAsso_innerArray_keys = array_keys($multiArrayAsso[$multiArrayAsso_keys[$i]]); //$multiArrayAsso_innerArray_keys[0] =arfan-php
        // print_r($multiArrayAsso_innerArray_keys[$i]);
        for ($j=0; $j < count($multiArrayAsso_innerArray_keys); $j++) { 
            echo "Name = {$multiArrayAsso_keys[$i]} Language = {$multiArrayAsso_innerArray_keys[$j]} Value = {$multiArrayAsso[$multiArrayAsso_keys[$i]][$multiArrayAsso_innerArray_keys[$j]]} <br>";
        }

        echo "<br><br>";

        // $multiArrayAsso['arfan']['php-arfan'];

        

    }



 }

//  multiArrayAssosicative(); //*call Funciton







