<?php
//require mysql
require ('database/DBController.php');

require ('database/Product.php');

require ('database/Cart.php');

$db=new DBController();

$product=new Product($db);

//cart object

$Cart=new Cart($db);
$product_shuffle= $product->getData();


$Cart = new Cart($db );
