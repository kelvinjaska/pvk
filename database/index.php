<?php
/**
 * Created by PhpStorm.
 * User: kechsm
 * Date: 2019-01-24
 * Time: 13:07
 */
?>
<?php

require_once 'conf.php';
require_once 'db_fnk.php';

$iktConn = connect_db ( DBHOST, DBUSER,  DBPASS, DBNAME);

echo '<pre>';
print_r($iktConn);