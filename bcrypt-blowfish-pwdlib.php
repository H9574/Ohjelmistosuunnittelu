<?php
require_once '/home/H9574/php-password-lib/PasswordLib.phar';
$lib = new PasswordLib\PasswordLib();
  
$password = "MiuMur";
$hash = $lib->createPasswordHash($password,  '$2a$', array('cost' => 12));
echo "$hash<br>";
  
$boolean = $lib->verifyPasswordHash($password, $hash);
  
if ($boolean) echo "Salasana $password OIKEIN<br>";
  
$koko = strlen($hash);
  
echo $koko;
  
?>