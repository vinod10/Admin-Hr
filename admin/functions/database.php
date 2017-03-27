<?php
//
//$connection = pg_connect("host=localhost port=5432 dbname=hr_db user=postgres password=sachin10db");
//
//function query($query){
//
//    global $connection;
//    return pg_query($connection, $query);
//}
//
//function row_count($result){
//
//    return pg_num_rows($result);
//}
//
//function escape($string){
//
//    global $connection;
//    return pg_escape_string($connection, $string);
//}
//
//function confirm($result){
//
//    global $connection;
//    if (!$result){
//
//        die("Query failed " . pg_result_error($connection));
//    }
//}
//
//function fetch_array($result){
//
//    global $connection;
//    return pg_fetch_array($connection, $result);
//}

$con = mysqli_connect('localhost', 'root', 'sachin10', 'login_db');

function row_count($result){
    return mysqli_num_rows($result);
}


function escape($string){
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function query($query){
    global $con;
    return mysqli_query($con, $query);
}

function fetch_array($result){
    global $con;

    return mysqli_fetch_array($result);
}