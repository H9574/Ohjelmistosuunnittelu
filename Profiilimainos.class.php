<?php
require_once ("/home/H9574/php-dbconfig/db-init.php");
class mainonta{
    public function profiilimainos($uid){
        $stmt = $db->query("SELECT mainos 
                    FROM users 
                    WHERE uid='$uid'");
                     
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $mainos = "{$row['mainos']}";
    echo $mainos;
}
    }
}
?>