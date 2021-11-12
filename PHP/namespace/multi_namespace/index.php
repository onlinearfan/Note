<?php 
include('./product/laptop.php');
include('./product/bangladesh/laptop.php');
include('./product/india/laptop.php');



//product accessing,

echo \Product1\product_const;
echo \Product2\product_const;
echo \Product3\product_const;

//product/bangladesh

echo Product\Bangladesh1\product_const;
echo Product\Bangladesh2\product_const;
echo Product\Bangladesh3\product_const;

//product/india 

echo Product\India1\product_const;
echo Product\India2\product_const;
echo Product\India3\product_const;



?>