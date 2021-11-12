<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Core - Geeky Show</title>
</head>

<body>
    <h1>Basic of PHP:</h1>
    <?php 
    //!php filteing (validation \ sanitization):
    //filter_var('value',filter_sanitize_email,array('option'=>'funName')); funciton_callback,
    //filter_has_var('post_input','email'); 
    //sanitize carater delete krbe unwanted gulo and validate hole true noy false dibe,
    // alway user input nile ta filter kore nibo,

    //!exeption try(condition), throw new Exception("Error Processing Request", 1)(else throw );,catch(exeption $e) , finally
    // $e->getMessage(); 

    //! 

    // use conts PRODUCT\{name1 as sname1,name2,name3}
    // use fun PRODUCT\{name1 as sname1,name2,name3}
    // use PRODUCT\{name1 as sname1,name2,name3}
    
    


    //?basic stucture,
    //?development environment -> xamm,vs code, browser,
    //!variable in php,
    //?$_varibale $varibla $varibal_name $variableName, {$variable} echo ("text") . 234 ;
    //?without value var will null $var = '';
    //?variable of php = 1) local var- assing in function , 2)globar var - assing in global sign, 3)static var - alway be static,
    //!Data types, 
    //?data type of php = integer (1503), float(234.2523), string('text or in quatoTExt'),
    //?array(multiple,value)[0] , object,null,booolen(true/false),
    //!echo Statment 
    //?echo "value"; ("value"); "value $var"; ("value of $var"); "{$var}";
    //?echo "one" . "two"; //, . diye add kora jai,
    //?echo "<h2>html lekha jai dubble quote e</h2>";

    //!print Statment 
    //? eita echo motoi return kore an d multiple parameter nay na dei na,
 /*    $arfan = 10; $b = 20;
    print("arfan khan $arfan $b" . "hellow"); */
    
    //!heredoc 
    //?here doc e dobble quote er moto kaj kora ja,
    //? heredoc/nowdoc('') last space delete, echo <<<name (text) name;
    //?variable , html tag sob e kaj kore herer doc e,
    //?eita variable e store krte parbo,

   /*  echo <<<hereDoc
    bangladehs<br> aafasf
hereDoc; */

    //!now doc
    //?eita single '' er moto kaj kore,

   /*  echo <<<'nowDoc'
    now doc is here
nowDoc; */

    //!string 
    //?echo "value"; ("value"); "value $var"; ("value of $var"); "{$var}";
    //?echo "one" . "two"; //, . diye add kora jai,
    //?echo "<h2>html lekha jai dubble quote e</h2>";
    //?single quote normal show kore and dubble quote Var {Array} run korte pare,

    //!string caracter asscess like array,

    /* $name = "arfan khan";

    echo $name[0]; */

    //!string Function ase onk gulo,
    //?strlen("arfan") = caracter koita count korbe, strupper(),strlower(),

    /* echo strlen('arfan'); */

    //! escape space ,
    //?"my "name" is arfan"; 'my 'name' is arfan'; both wrong use singe to dobble, beshi lagle \ scape use korbo
    //! printf("string");
    //?data show kora jai echo,print,printf,
    //?printf("my name is arfan"); printf("my name is %s",'arfan') %s,%d,%f,%x, %% = % position = %3\$d
    //?sign specify = %+d korle asbe - auto asbe,
    //? %s %d %f %x ,
    //?position (%2\$s), tpye(%s %f) ,width(%8s) align (%-8s) dekha jai na khali te, padding (%06d / %'*-6s),
    //?sprintf = return kore value, $var e nite parbo
    //?access caracter = $name = arfan; echo $name[0]; = a

    function printFrun(){
        printf("%f <br>",45.32); // dot er por default 6 ta asbe, dot shudu float e kaj korbo,
        printf("%.2f <br>",45.32);
        printf("%08d <br>",45); //padding specifier,
        printf("%'*8d <br>",45); //padding specifier,
        printf("%'*-8d <br>",45); //padding specifier, with align
        printf("%08.2f <br>",45.32);
        printf("%.3s","GeekyShow");
        echo "<br>"; //3 ta access korbe shudu
        printf("%'*8.2s","GeekyShow");
    }
    // printFrun(); //?call fun

    //!sprintf() eita return kore 
    // $store = sprintf('value');

    

    ?>
    


    <h1>Function Tutorials:</h1>
    <hr>
    <?php

    //?function is a opation of a sepecific task, easy to debug,

    //!basic function 
    //?function can call before write, case INsensative, 
    /* display();
    echo "hello Bro<br>";
    function display(){
        echo "Basic Function Calling<br>";
    }

    display(); */

    //!function with parameter
    //?function parameter and default parameter pass korte pari, default gulo last e hobe sob somoy,
    //?parameter hisebe array,variable,int,float,string, etc data can be pass,
    //?jodi kom para pass kore tobe too  few argument show krbe,

    /* function displayWithPara($para1,$para2){
        echo "Para 1 = $para1<br> Para 2 = $para2";
    }

    displayWithPara(10,20);
    displayWithPara('arfan','adnan');
    $a = "Var 1";
    $b = "Var 2";

    displayWithPara($a,$b); */

    //!function with default Argument 
    //?default argument alway last e dibo , etai null dite pari(too few error) error avoid er jonno,
    //?($para1,$para2,$para3=null,$para4) wrong way of writing default para, default para abr rewrite korte pari 
    //?para te null pass kore condition use korte parbo if

    /* function displayDefaultPara($para1,$para2,$para3=null){
        echo "Para 1 = $para1 <br>";
        echo "Para 2 = $para2 <br>";
        echo "Para 3 = $para3 <br>";
    }

    displayDefaultPara(10,20); //few para pass as there is default para  */

    //!Return Function 
    //?eita 1tai value return kore multiple na, j kono kichu return korte pare (int,null,boolen,array,obj,data type,);
    //? return (1+2) write return(1,2) wrong multiple value way 
    //?return korle echo korte hoi eita ekta store value return fuciton store korte pari var e.

    /* $varA = 10; $varB= 20;
    function displayReturn($a,$b){

        $sum = $a+$b;

        return $sum;
    }

    $storeReturn =  displayReturn($varA,$varB);
    echo $storeReturn; */

    //!Fuction Type declaration 
    //?auto set na diye amr iccha onujai type er value asbe,
    //?function er parameter and Return e Type set korte pari ki type value dibo, 
    //?2mood ase coersive(try to convert) and requsite(fully strict), 
    //?gettype diye type dekhte parbo,
    //?Valid type = int,float,string,array,bool,self,iterable,interface/class name 

    /* function typeDeclaration1(int $para1,int $para2){

        $result = $para1+$para2;

        return $result;
    }

    echo typeDeclaration1(5.5,6); */ //?normally 11.5 but type int er jonno 11 asbe sudu float ta bad dibe, int e convert hoye jabe,


    //!Scalar Type declaration function - coersive
    //? Scalar Type = 1) coersive 2)strict
    //?coresive = int type check 2tai (10,"10") "10" string k int e convert kore kaj korbe, joto ta pare,
    //?sting type j kono value convert korte pare but int,float, sudu number k e pare, 
    //?type diye condition e kaj korte pari,

    //*code1
    /* function coersiveType(int $para1,int $para2){
        
        echo "Para 1 type = " .gettype($para1);
        echo "Para 2 type = " .gettype($para2);
    }

    coersiveType(10,12.5); //can convert
    echo "<br>";
    coersiveType(10,"10"); //can convert
    coersiveType(10,"10 hellow"); //can't convert */

    //*code2
    //?return type stirng e convert koreche , string j kono kichu convert hoi,

    /* function coresiveType(int $para1,int $para2): string{
        echo "Para 1 type = " .gettype($para1) . "<br>";
        echo "Para 2 type = " .gettype($para2) . "<br>";
        
        return ($para1+$para2);
    }

    $returnStore =  coresiveType(10,20);
    echo "returnStore type = " .gettype($returnStore) . "<br>";
    echo $returnStore; */

    //!Strict Mode 
    //?eita exact j type disi oita hote hobe noito error asbe,
    //?  declare(strict_types=1); //alway firts line of code 

    /* function strictType(int $para1,int $para2):int{
        
        echo "Para 1 type = " .gettype($para1);
        echo "Para 2 type = " .gettype($para2);

        return ($para1+$para2);
    }

    strictType(10,12.5); //can't convert
    echo "<br>";
    strictType(10,"10"); //can't convert
    strictType(10,"10 hellow"); //can't convert */

    //!Return Type declaration 
    //?eita ki type er value return korbo oita age theke set korte pari, stict e int parameter thakle return o int korte hobe,
    //?coersive mode return type o convert korar cesta korbe,

    /* function returnType(int $para1,int $para2): string{
        echo "Para 1 type = " .gettype($para1) . "<br>";
        echo "Para 2 type = " .gettype($para2) . "<br>";
        
        // return ($para1+$para2); //int return kortese,
        return ("$para1+$para2"); 
    }

    $returnStore =  returnType(10,20);
    echo "returnStore type = " .gettype($returnStore) . "<br>";
    echo $returnStore; */

    //!Pass by Value 
    //?eita simple j agument gulo pass kori oi guloi by default thake function e,

    //*code1
    /* function passByvalue1($para1,$para2){

        echo "your pass By value data is $para1 and $para2";
    }

    passByvalue1(10,20); //value hisebe = array,all type of data pathate pari, */

    //*code2 

    /* $a = 10;
    echo "Upper variable =  $a<br>";
    function passByvalue2($para1){
        echo "pass By value (2) = $para1<br>";
        $para1 = 20;
        echo "pass By value (2) = $para1<br>";
    }

    passByvalue2($a);
    echo "after function variable = $a<br>"; */

    //!passby reference 
    //?eita fully address ta cole tai j para send korbo tar bitor j change hobe oigulo sob bahir er value teo change hobe,
    //? eikane amr simple data or array o pathiye reference hisebe change korte pari,
    //?& sign diye kaj kore, eita,

    //*code1 = simple value send

    /* $a = 10;
    echo "Upper variable =  $a<br>";
    function passByref1(&$para1){
        echo "pass By ref (1) = $para1<br>";
        $para1 = 20;
        echo "pass By ref (1) = $para1<br>";
    }

    passByref1($a);
    echo "after function variable = $a<br>"; */


    //*code2 = array value change as reference 
    //?shuvo k reference hisebe change korbo $a[2],
    //?function er parai jai change korbo oitai main e change hobe,

    /* $a = array("arfan","adnan","shuvo");
    echo "Upper Array Value" .  $a[2] . "<br>"; //shuvo

    function passByref2(&$para1){
        echo "pass By ref (2) = $para1[2]<br>";
        $para1[2] = "Raju";
        echo "pass By ref after change = $para1[2]<br>";
    }

    passByref2($a);
    echo "after function variable = " . $a[2]; */

    //!Passing Array to function 
    //array pass and return sob e korte parbo,

    //*code 1 simple array passing,

    /* $passingArray = array(10,20,30);


    function passingArray($paramArray){
        foreach($paramArray as $value){
            echo "$value .<br>";
        }
    }

    passingArray($passingArray); */

    //*code 2 - math my array passing,

    /*  $a = 10;
    $b = 20;
    $c = 30;

    $passingArray = array($a,$b,$c);

    function passingArrayAddition($paramArray){
        $sum = 0;

        foreach($paramArray as $value){
            $sum = $sum + $value;
        }

        return $sum;
    }

    echo passingArrayAddition($passingArray); */

    //!Return Array From Function 
    //simple way + complecated way parameter diye return neye pare,

    //*code 1 = simple way,

    /* function returnArray($a,$b,$c){

        $Convert_Array = array($a,$b,$c);
        return $Convert_Array;
    }

    $storeValue = returnArray(10,20,30); // array

    echo $storeValue[0]; */

    //*code 2 simple caltulator for +-*/% 
    //2 ta value and ki korbo oita arrya key ta thakbe,


    /* function returnArrayMath($value1,$value2){
        $add = $value1 + $value2;
        $sub = $value1 - $value2;

        $result = array("add" =>$add,"sub" =>$sub);

        return $result;
    }

   $mathName =  returnArrayMath(10,20);

   echo $mathName['add']; */

    //!local variable
    //eita sudu function er bitor er var k bujai eita bahire access kora jai na,

    /* function localVar(){
        $localVar = "Local variable is here<br>";
        echo "$localVar . <br>";
    }

    localVar();
    echo  $localVar; // undefine bolbe, */

    //!Global Variable, 
    //?eita vahirer normal var k bujai function er bitor access korte parbo  na,
    //? global key diye or $_GLOBAL['varName'] kore function er bitor access korte parbo sudu

    /* $globarVar = "Global Variable <br>";
    echo $globarVar;

    function globalVar(){

        $localVar = "local Var";
        
        echo $localVar . "<br>";
        // echo $globalVar; //normal echo not work
        //global key use
        global $globarVar;
        echo $globarVar . "<br>";

        echo $GLOBALS['globarVar'] . "<br>";
    }
    

    globalVar(); */

    //!static Variable 
    //?eita function er bitor use hoi and man change kore incease kore, kore,
    //?value remain save rekhte caile parbo,
    //*code 1

    /* function staticVar(){
        static $staticVariable = 10; //eita increment or decrement korte pare man
        // $staticVariable = 10; //eita increment or decrement korte pare na
        echo $staticVariable . "<br>";
        $staticVariable++;
    }

    staticVar();
    staticVar();
    staticVar(); */

    //*code 2 

    /* function staticVar(){
        static $staticVariable = "arfan"; //eita increment or decrement korte pare man // change man store korte pare,
        // $staticVariable = 10; //eita increment or decrement korte pare na
        echo $staticVariable . "<br>";
        $staticVariable = "adnan";
       
    }

    staticVar();
    staticVar();
    staticVar(); */


    //!super Global Variable 
    //?super global var =  ($_REQUEST,$_POST,$_GET,$_FILES),$GLOBALS,$_SERVER,$_ENV,$_COOKIE,$_SESSION,
    //?agulo hocche ek ek ta array , print_r kore sob somoy dekhe kaj korbo,
    //? print_r($_REQUEST); value array info show korbe,
    //?egulo alada file thekeo access korte parbo,

    //*code 1

    /* $a = "arfan khan";
    $b = "adnan khan";
    $c = "shuvo khan";

    print_r($GLOBALS);
    echo "<br>" . $GLOBALS['a']; */

    //*code 2 

    /* $a = "arfan <br>";
    function superGlobalVar(){
        echo $GLOBALS['a'];
       
    }

    superGlobalVar();
    superGlobalVar();
    superGlobalVar(); */

    //!condition function 
    //?function k run korte pari condition er upor depend koriye or call ko korte pari 
    //?condition function er por call korte hobe age korle error asbe,
    //? conditionFunction(); // error asbe upore call korai

    /* if (true) {
        function    conditionFunction()
        {
            echo "condition function it is <br>";
        }
    }


    conditionFunction(); */

    //!calling with condition 

    /* if (true) {
        function    conditionFunction()
        {
            echo "condition function it is <br>";
        }
    }

    if (true) {

        conditionFunction();
    } */


    //!variable Funciton 
    //?function name k variable e store kore take function er moto call kora,


    /*  function variableFunction(){
        echo "variableFunction";
    }

    $variableF = "variableFunction";

    $variableF(); */

    //!nasting of function 
    //?nasting function e outer call na kore inner call kora jabe na,
    //?innner var outer e call kora jabe na outer bar inner e call kora jabe na,,


    /* function outerFunction(){
        echo $outerVar = "outerVar<br>";
        function innerFunction(){
            echo $innerVar = "innerVar<br>";
            // echo $GLOBALS['outerVar']; //can call,
            global $outerVar;
            echo $outerVar;
        }
        
    }

    // innerFunction(); //undefine funciton
    outerFunction();
    innerFunction(); */


    //!Recursive Function 
    //?eita forloop er moto kaj korate pari funciton er dara, 
    //?function paramenter hocche assingn value $i = 0 ,recursive call hocche increment or decrement I++
    //?condition will give in if condition 
    //?break use korte hole loop or swithe e thaka lagbe,

    /* function recursiveFuntion($para){
        if($para<=10){
            echo $para , "<br>";
            recursiveFuntion($para+1);
        }
        
    }

    recursiveFuntion(1); */


    //! Returning error form function 
    //?die("massage"); //return false mane error funciton, (false hobe / empty,"",0,null,'')
    //?die er pore ar code run korbe na,

    //*code 1

    /* echo "Upper Text of function <br>";

    function errorCheck(){
        return true;
    }

    errorCheck() or die('error found in function');

    echo "rest of the code"; */

    //*code2 
    //?die use korle amder ekta reture use korai lagbe. na korle by default return false asbe,

    /* echo "upper text of function <br>";
    function errorcheck2($a, $b)
    {
        if ($a > $b) {
            echo "inner text of A<br>";
            return true;
        } else {
            echo "inner text of B <br>";
            return false;
        }
    }

    errorcheck2(10,5) or die("error found<br>");

    echo "rest of the code"; */


    //!Anonymous function / closur 
    //? variable e store kora lage, use key use kore outer variable pass korte pari, 
    //?semi clon diye off korte hobe,
    //?use kye word er var () er nibo
    //?anonymous funciton data hisebe pass o kora jai, return o kora jai,

    /* $outerVar = "outer var";
    $anonymous = function ($para1) use ($outerVar) {
        echo "Anonymous Function<br>";
        echo "$para1<br>";
        echo "$outerVar<br>";
    };

    $anonymous("main para"); */

    //*code 2 pass anonymour function 
    //?anonymous function pass er  age banate hobe,

    /* $passingAnonymousF = function ($innerPara){
        echo "passingAnonymous Value $innerPara <br>";
    };

    function normalFunction($para){
        $para("10");

    }

    normalFunction($passingAnonymousF); */

    //*code 3 return anonymous function,
    //?outer normal funciton er bitor anonymous thake tar para gulo use key diye access korte parbo,
    //?outer send e full call kore tarpor return korbo,

    /* function normalFunction($para1){

        $anonymousFunction = function()use($para1){
            return " $para1 anonymous Function";
        };

        return $anonymousFunction();
        // return $anonymousFunction;
    }

    echo normalFunction(10);
    // normalFunction()(); */


    ?>
</body>

</html>