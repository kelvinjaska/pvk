<?php

$username = $_GET['uname'];
$userpass = $_GET['upass'];

// andmed adnmebaasist
require_once '../database/config.php';
require_once '../database/db_fnk.php';
// loome uhendust andmebaasiga
$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
// kysime kasuatja andmete olmeasolu andmebaasis
$sql = 'SELECT * from user where username="'.$username.'" AND password="'.md5($userpass).'"';

$users = getData($sql, $ikt);
//valjastame adnmed
if ($users !== false) {
    session_start();
    $_SESSION['user'] = $users[0];
    header('Location: /index.php');
} else {
    echo 'Error'
// echo $users[0]['first_name']. ' '.$users[0]['last_name'];