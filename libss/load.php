<?php 

function load_template($name){
    //print("including $name.php");
    //print(__FILE__);
    include "_templates/$name.php"; 
}