<?php 
require ('./product/Laptop.php');
require ('./product/bangladesh/Laptop.php');
require ('./product/india/Laptop.php');

// const num = "arfan";
// echo num;

//namespace accessing by properly,

//const accessing 
echo Product\num;
echo \Product\India\num;
echo \Product\Bangladesh\num;

//function accessing 

Product\disp();
\Product\India\disp();
\Product\Bangladesh\disp();

//class accessing 
$obj = new Product\className();
$obj2 = new \Product\India\className();
$obj3 = new \Product\Bangladesh\className();
$obj->classFun();
$obj2->classFun();
$obj3->classFun();




?>