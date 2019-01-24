<?php
// andmed htmli poolt
session_start();
require_once 'fnk.php';

if(isset($_SESSION['user'])) {
    echo 'Tere tulemast, '.$_SESSION['user']['last_name']. '!<br>';
    echo '<a href="acts/logout.php">Logi valja</a>';
    
    } else {
        $loginForm = htmlFromFile('session');
        echo $loginForm;
}