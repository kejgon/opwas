<?php

ob_start(); //turning on output buffer ////! its send alot of request at the same time 
session_start();
// session_destroy();




defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASSWARD") ? null : define("DB_PASSWARD", "");
defined("DB_NAME") ? null : define("DB_NAME", "opwas");


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWARD, DB_NAME);

require_once("functions.php"); //now this file is going to be avaible anytime we include it anywhere
require_once("cart.php"); //now this file is going to be avaible anytime we include it anywhere
