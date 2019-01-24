<?php
/**
 * Created by PhpStorm.
 * User: kechsm
 * Date: 2019-01-24
 * Time: 13:08
 */
?>
<?php
function connect_db($hostName, $dbUser, $dbPass, $dbName) {
    $conn = mysqli-connect($hostName, $dbUser, $dbPass, $dbName);

    if(!$conn) {
        echo 'Unable to connect to MySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }

    return $conn;
}
