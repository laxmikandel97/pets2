<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

//session start() wont work if there is space or any echo statement after php or before php
//session_start();

require "vendor/autoload.php";

$f3 = Base::instance();

$f3->route('GET /',function ()
{
//    $view = new Template();//template object
//    echo $view-> render('views/home.html');//use it to render the main page
    echo "<h1>My pets </h1>";
    echo"<a href='order'>Order a pet</a>";

});


$f3->run();