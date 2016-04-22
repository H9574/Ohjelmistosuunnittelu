<?php
/*
CREATE TABLE users (
uid VARCHAR(16) NOT NULL,
password VARCHAR(64) NOT NULL,
mainos VARCHAR(10) NULL,
PRIMARY KEY (uid)
);
  
INSERT INTO users
(uid, password, mainos) 
VALUES
('H9574', PASSWORD('taisteluananas'), 'hautaus'),
('H9571', PASSWORD('suklaapupu'), 'lemmikki'),
('ara',  PASSWORD('aramara'), 'urheilu');   
 
*/
  
session_start();
  
$errmsg = '';
if (isset($_POST['uid']) AND isset($_POST['passwd'])) {
require_once('/home/H9574/php-dbconfig/db-init.php');
 
   $uid = $_POST['uid'];
   $passwd = $_POST['passwd'];
  
   $sql = "SELECT uid, password
            FROM users
            WHERE uid = :uid AND password = PASSWORD(:passwd)";
      
    $stmt = $db->prepare($sql);
    $stmt->execute(array($uid, $passwd));
      
    if ($stmt->rowCount() == 1) {
        $_COOKIE['uid'] = $mainonta;
        $_SESSION['app2_islogged'] = true;
        $_SESSION['uid'] = $_POST['uid'];
         header("Location: http://" . $_SERVER['HTTP_HOST']
                                    . dirname($_SERVER['PHP_SELF']) . '/'
                                    . "Etusivu.php");
        exit;
    } else {
        $errmsg = '<span style="background: yellow;">Tunnus/Salasana virheellinen!</span>';
    }
}
?>
  
<title>Kirjautusmislomake</title>
  
<?php
if ($errmsg != '')echo $errmsg;
?>
  
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"
style=color:#000;background-color:#eeeeee>
Tunnus:<br><input type="text" name="uid" size="30"><br>
Salasana:<br><input type="text" name="passwd" size="30"><br>
<input type='submit' name='action' value='Kirjaudu'>
<br></form><br>
<a href='profiili.php'>[Luo tunnukset]</a> 