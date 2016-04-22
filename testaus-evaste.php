<?php
require_once ("/home/H9574/php-dbconfig/db-init.php");
 
$mainonta = $_COOKIE['uid'];
 
$stmt = $db->query("SELECT mainos 
                    FROM users 
                    WHERE uid='$mainonta'");
                     
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $mainos = "{$row['mainos']}";
    echo $mainos;
}
?>