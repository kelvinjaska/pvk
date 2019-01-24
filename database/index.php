<?php
/**
 * Created by PhpStorm.
 * User: kechsm
 * Date: 2019-01-24
 * Time: 13:07
 */
?>
<?php

require_once 'config.php';
require_once 'db_fnk.php';

$iktConn = connect_db ( DBHOST, DBUSER,  DBPASS, DBNAME);

// insert/update tuupi sql testimine
$sql = 'UPDATE user SET last_name="Ebatavaline" where user_id=1';
$result = query($sql, $iktConn);

// select tuupi sql testimine

$sql = 'SELECT * from user';
$res = getData($sql, $iktConn);

echo '<pre>';
print_r($res);

echo 'Tere, ' . $res[0] ['first_name']. ' ' . $res[0] ['last_name']. '<br>';