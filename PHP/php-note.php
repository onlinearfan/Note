<?php 

    //new mysqli('localhost','root','','databaseName');

/* $connet = new mysqli('localhost','root','','databasename');

if($connet->connect_errno){
    die('connet error'."<br>". $connet->connect_errno);
}
else{
    $stmt = $connet->prepare(insert into tableName()values());
    $stmt->bind_param('sssssi',$tablecol1,$tablecol2);
    $stmt->execute();
    $stmt->close();
    $connet->close();

   
} */


 //1)database connect,2)error check,3)insert which table and value, bind param, 4)execute,5)close,
//$conn->connect_error(); error check; $stmt = $conn->prepare(insert into tableName()values()); bind_param, execute, close,
//onno page e get show kore na. only same page e kaj kore,



//!note oparator of php = 1)asssigment = ,2)combine +=(.=/*=) assigment
// $assigment_oparator = "value"; //int,stint,array, $variable,object,function, everything can be stored,

//>< >= <= == === != !== <> // VALUE/array, tulona korte parbo
//space ship oparator = <=> = $a <=> $b = -1,0,1
// array oparator +(key common) , ==(data) ===(value,type,order,) !=(value) !==(value,type,order,) <>


// kono a tag e link pass er somoy printf use kora valo,
//constant access korte parbo j kono jaiga theke but local var parbo na

//! 3)arithmetic/math +- 4)comparision [>< | >=|<= | == | != | === | !== | <> | <=> ,5)logigal true/false 6)increment/decr ++1, --1
// $_varibale $varibla $varibal_name $variableName, {$variable} echo ("text") . 234 ;
// heredoc/nowdoc('') last space delete, echo <<<name (text) name;
//if(true): endif; / if(true){} / naseted if = elseif(), else{};
//print value in page = echo , print, printf,heredoc, print_r(),var_dump();
//$arfan = $shuvo = fahim = 10; ++1, for($i = 5, %i>0, --1){}, foreach ($array as $value){}
//define("constant_name","any value can be here"); echo constant_name;
// echo "arfan khan for is{$roll} ekshate dite kaj kore," math kichu function ache,
// echo 23434 . "is a number"; (. or , diye add korte pari string);
// '' single qoute string e $varible kaj kore na, simple text string eita,
//$value = 10; echo "$value english name is \$ten"; scape $ sign
// comment #// /* */
//"",'',0,false,null = false / 1,true,any_value = true
//echo (23+10) -5 ; value will be 28
//data type of php = integer (1503), float(234.2523), string('text or in quatoTExt'),
//array(multiple,value)[0] , object,null,booolen(true/false),
//variable of php = 1) local var- assing in function , 2)globar var - assing in global sign, 3)static var - alway be static,
//nasted = if,forloop, foreach,while,function  can be nasted
// function funName()/($para1,$para2,$para3=null){ echo "it will print"}; call = funName()/(23,"arfan");
// function value assign thakle seta ar na dileo error ase na,
// php output true = 1 show and false = nothing will display,
// comparesion oparator != <> 1bar question chance, !== 2bar question chance,
// == one condition need correct, === two condition need correct
// "value" == $variable_name; can check equal by last var name,
// 234= $var this assing will give error,
// echo 5>2 ; = 1
//lessthen + increment --- gatherthan + decrement
//continue dibi age break dibi pore,
//break(stop last will good for code) and continue(skip alway valuer age dibo,) statment,
//tarnary oparetor = echo/ $value =  (false)?"yes true":"false"; [ if statment er moto]
//switch statment = [if elseif er moto kaj kore break lagiye,]

// $value1 = 'hello'; $value2 = "hi". $value1;
// $value1 = "arfan khan"; $value1 .=is a good boy;
// echo PHP_VERSION;
// ( true && true && true && true  = true , (true || false) = true , !(true) = false,
//echo (true xor true);
/* $value = 5;
    echo ++$value;
    echo $value; */
/* $value = 10; eita age ja pabe tai likhbe 11,
    $value = ++$value;
    echo $value;
    echo $value; */

//ARRAY =(numaric, assosiative,) $arrayName["arfan"] = value; array("arfan","shuvo")- numaric, array("key1" => "value1","key2"=>"value");
//array(2,35,6,3,5,6,3); [3,45,56,3,5,6], array(2,3,array(34,5),23,4);$value[] eita kore dile 1,2,kore asbe,array predefine
//array show korar age print_r kore dekhe nibo,
//delete and modify array --- unset($value["arfan"]);$value["arfan"] = "hello boy"; $value["arfan"] = "hello girl";
//copy array ----$array1 = array(2,3,5,6,7); $array2 = $array1;
//count($array1); = number of array value will show $i = 0; $i<count($array1); $i++
//array_keys = eita array key gulo ekta numeric array te rupantor kore, $keys = array_keys($array1);
//array_keys($array_name,"definite_value",type_check);
//print_r = eita info print kore, result na, print_r(array(2,3),true) = true dile return kore,
//assosiative array show with forloop and while loop with keys
//array_values($array1); eita assosiative array keys gulo numeric kore dibe,
//string lekha jai 4 way te = "",'',heredoc(""),nowdoc(''),
//string function learn
//data show kora jai echo,print,printf,
//printf("my name is arfan"); printf("my name is %s",'arfan') %s,%d,%f,%x, %% = % position = %3\$d
//sign specify = %+d korle asbe - auto asbe,
// %s %d %f %x ,
//position (%2\$s), tpye(%s %f) ,width(%8s) align (%-8s) dekha jai na khali te, padding (%06d / %'*-6s),
//sprintf = return kore value, $var e nite parbo
//access caracter = $name = arfan; echo $name[0]; = a
//"my "name" is arfan"; 'my 'name' is arfan'; both wrong use singe to dobble, beshi lagle \ scape use korbo
//is_array($array1) = array checked
/*    $array1 = array("arfan" =>"php","shuvo"=>"css","fahim"=>"html","russel"=>"java","pollard"=>"jquery","tasfia"=>"C++");

$keys = array_keys($array1);
for($i= 0; $i<=(count($array1)-1); $i++){
echo "Keys = $keys[$i]" . "Values = " . $array1[$keys[$i]] . "<br>";
}
foreach($array1 as $keys=>$values){
echo $keys ."=" . $values;
} */

// array keys and value show korbo ek loop e for diye,
//multidimansion numaric and associative array show with forloop and while loop ,

//array oparator = $a+$b = key er common gulo dorbe, == value equal hole true === value equal and type thik and order thik thakle true
// != <> value equal na thakle true, !== value and type and order er j kono ekta thik na thakle true 3 bar question korte parbo,

//function tutorials = function name insensitive,diclare er age call kora jabe,
//default arrument always last or last er guloy dite hobe , arg null pass korte pari,
//use null as default value to avoid fatal error in page,  if($para1==NULL || $para2==NULL){
//return value of function echo $arfankha_info = display(); echo korte hoi multiple return hoi na,
//type declaration[int,float,string,bool,array,], gettype($a)
//coreasive mode convert korar ceste kore strict moda kore na,//declare(strict_types = 1)
// function display(int $a,int $b) :int {
//     return ($a+$b);
// }
// pass by value funciton = eita function er bitor value changle korleo bahire ager define kore tai thakbe,
/* $a = 5;
echo "value of A = $a";

function displyaA($a){
    echo "Value of A in Function $a";
    $a = 4;
    echo "value of A in Function after change $a";
}

displyaA($a);
echo "value of A = $a"; */
// pass by reference = eita argument jetai pass korbo oitar value change hole tar o hoye jabe,
//eikhabe variable name pass korai tar bitor er ta dara change hoye jai, address pase kore dai
/* $Arfan = 10;

function displayArfan(&$para){
    echo "value of para is $para<br>";
    $para = 20;

    echo "value of para after change is $para<br>";
}

displayArfan($Arfan);
// echo "Value of Arfan in outside without referennce $Arfan";
echo "Value of Arfan in outside with referennce $Arfan"; // $Arfan = after change para value; */

//pass array in function and return array form function 

/* $arrayName = array("arfan","shuvo","fahim");
function displayArray(&$para){
    echo "<pre>";
    print_r($para);
    echo "</pre>";

    $para[2] = "russel";


}

displayArray($arrayName);

echo $arrayName[2]; //pass by reference bitor tai jai change korbo bahire oitai value show korbe, */

//return array form function 
/* function returnArray($a,$b,$c,$d){
    $arrayOfelements = array($a,$b,$c,$d);

    return $arrayOfelements;
}

print_r(returnArray("arfan","fahim","shuvo","russel"));

$storedArray = returnArray("shuvo",23,254,"arfan");

echo $storedArray[3]; */


//sum = 0add,1milti substruct, 


/* function resultOfSum($a,$b){
    $add = $a+$b;
    $sub = $a-$b;
    $multi = $a*$b;
    $div = $a/$b;

    $result = array("add" =>$add,"sub" =>$sub,"multi" =>$multi,"div" =>$div);
    return $result;
    //$result['add];
}


echo resultOfSum(10,15)['multi'] . "<br><br>"; */


//foreach er dara addition korse, pass array kore,


/* $mark = array(10,20);

function addition($paraArray){

    $sum = 0;
    foreach ($paraArray as $value){
        $sum = $sum + $value;

    }
    return $sum;
}

echo addition($mark); */

//LOcal variable function er bitor er var ja bahire access kora jai na, 
//globar hocche function er bahir er var hoita global keyword diye access kora jai,

/* $NOAccesVar = "arfan khan";
function displyaLocalVar(){
   global $NOAccesVar; //global access
   $localVar = "local Var"; //can't access outside of function;
   echo $NOAccesVar;
}

displyaLocalVar(); */

//static hocche value ja change hobe oitai store kore nei function er bitor kaj kore sudu,

/* function displayStaticVar(){

    static $staticVar = 10; //value restore kore bar bar,
    echo $staticVar . "<br>";
    $staticVar++;
    

}

displayStaticVar();
displayStaticVar(); */



//die('massage') = eitar porer code ar run korbe na and eita debug e kaj kore,
/* echo "arfan khan is learning php";
die("massage");
echo "Last massage"; */

//increment er ta direct assing korelei buja jai,

/* $a = 10;

echo $a++ ."<br>";
echo $a++ ."<br>";
echo $a++ ."<br>";
echo $a; */

//super $GLOBALS['array'];
/* $a = "arfan";
function displya(){
   $b= 20;
   echo $GLOBALS['a'];
}

displya(); */



//condition function eikhan age call korle error khabo, pore call kora lagbe,
/* display(); //age call function
if (true) {
    function display()
    {
        echo "Hello world";
    }
}

if(true){
    display();
} */

//variable function  = ektane function name ta ekta var e store kore kaj kore,

/* function dis(){
    echo "variable function";
}

$variable_function = "dis"; //store function name in var

$variable_function(); */

//nasted function = outer function call na kore inner call korte parbo na,

/*     function outerFunction(){
    echo "Ourter Function <br>";

    function innerFunction()
    {
        echo "inner Function <br>";
    }
}

outerFunction(); //outerFunction calling first
innerFunction(); //inner calling after outer call in mandatory */

//array sting er vitor dite parbo na,
//nameless function is annymous function , Anonymou funciton semi colon diye off kora lagbe,
// use keyword use kore outer var access korte parbo
//outer var 3 way te access global key, $GLOBALS['array'] , use key word on anonymous func.
//recursive function e condition use korte hobe and eita condition false na hoye porjonto loop
/* function displayRecur($a){

    if($a<=10){
        echo "$a";
        displayRecur($a+1);
    }
}

displayRecur(2); */

//simple function , function with para,variable pass, array pass, array collect,closur,
//recursive,global,local,static var,return value,nested function,name store in var,pass by value,reference
//use key in closer func, type check, stick and coersive,super global,
//recursive function work like forloop, $i = $para, condition = if in innner functin, incre/decrement = recursive call,
//static er vitor variable data deya jabe na,




    
    
    ?>