<?php
function doDB(){
    global $mysqli;
    //connect to server and select database
    $mysqli=mysqli_connect("localhost","root","","testdb");
    //if connection fails then stop scipt execution
    if(mysqli_connect_errno()){
        printf("connection failed:%s\n",mysqli_connect_error());
        exit();
    }
}
?>