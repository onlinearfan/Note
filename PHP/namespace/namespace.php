<?php 

//! 1)Namespace and Defining Namespace in PHP (Hindi)

// name space ekta php file laptop.php er bitor foldar banale ta namespace and file hocche class,fun,,constant,
//alada folder e jmon same name file thakte pare but ek folder e thakte pare na ,tmn e namespace 
//kaj kore thake,

//namespace folder ekadik single file e banate pari but eita na kore, include kore separet file baniye korbo,
// namespace file er top e tkhte hobe, 
// same file er gulo direct echo korte pari, echo const; display(); but alada ta echo product\const; krte hobe,
//namespace e class,fun,const tkale sei file anno file e access krte caile sudu include krtei hobe na,but namespace na tkle hobe 
//kintu tokhon same name er class,fun,cost banate parbo na,
//namespace {} er bitor lekhle tar bitor e echo krte hobe,
//normally file global namespace e thake tai include kre direct access korte pari but pore nij teke baniye namespace dile 
//tar jonno sei namediye access krte hoi,
// declare(encoding='UTF8');
//folder structure onujai namesape banabo and class name file name same rakhbo,

//* eita diye parbo na,ek file e 2ta type er namespace deya jbe na,
/* namespace Product{

}

namespace mobile; */


//*code 2 

//!Laptop.php 

// namespace Product{

//     const Mobile="lg";
//     function display(){
//         echo "Namespace function";
//     }
//     class ProductClass{

//         function __construct()
//         {
//             echo "Namespace Class By constructor";
//         }
//     }

//     // echo Mobile; //inner access code,

// }

//!Index.php 

// require('Laptop.php');

//echo Product\Mobile;

/* namespace NamespaceName;

function displya(){
    echo "Namespace From namespace file";
} */


//!Sub Namespace video,

//sub name space , namespace Product\india create, echo product\india\laptop,example product folder,
// name space folder wise korbo and class name anujai file name banabo,
//sub name space e folder banai file structure thik rakhte shudu jate bujte pari ,
//

//!Multi namespace video,

//multi name space banate just simple namespaceName1,namespaceName2, kore banate pari,
//same file e 2nd namespace banano porjonto 1st er file gulo access korte pari,

//!Global namespace using 

/* namespace product1{
    const product1 = 'product1';
    echo product1;
    
}

namespace product2{
    
}

namespace{
    echo \product1\product1;
} //global namespace for external code,
 */

 //! /zone/datetime(); | datetime() | /datetime(); = buildin,



//external file e namespace gulo dekhe use korbo,

//!namespace with built in class,function,const name,
//built name class er khetre amra namespase e local kore baniye nibo,
//DateTime(); zone/DateTime();

/* namespace Zone;
//name space na banale asto 
//ERROR: Cannot declare class DateTime, because the name is already in use in 

class DateTime{
    public $property = 10;
    function __construct()
    {
        echo "Our Local Datetime function"; 
    }

    function disp(){
        echo "disp function";
    }
}

$obj1 = new \Zone\DateTime(); //DateTime();
$obj2 = new \DateTime(); //accessing built in datetime \ sign 
echo "<br>";
print_r($obj1);
echo "<br>";
print_r($obj2); */


//!Use key word for namespace, see index.php

/* namespace zone;
const hello = "const use keyword<br>";

class timezone{
    function disp(){
        echo "disp use keyword<br>";
    }
}

function outerFun(){
    echo "outerfun use kyeword<br>";
} */












?>