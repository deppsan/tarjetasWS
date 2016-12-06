<?php
include('crypt/Crypt/RSA.php');

$privatekey = file_get_contents('json_prom.php');

$rsa = new Crypt_RSA();
$rsa->loadKey($privatekey);

$plaintext = new Math_BigInteger('aaaaaa');
echo $rsa->_exponentiate($plaintext)->toBytes();
?>