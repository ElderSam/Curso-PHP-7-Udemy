<?php
/* CRIPTOGRAFIA COM OPENSSL
OBS: A função mcrypt_encrypt() foi removida do php 7.2, 
use o openssl https://www.udemy.com/course/curso-php-7-online/learn/lecture/6339176#questions/3937538
https://www.php.net/manual/en/function.openssl-encrypt.php

A criptografia basicamente funciona da seguinte forma: 
    a mensagem original é tranformada em textos incompreensíveis para quem a intercepta,
    porém somente o Destinatário tem a chave para desencriptografar e saber o conteúdo original
*/

$data = [
    "nome"=>"Elder"
];

//DEFINE 2 CHAVES (KEYS)
define('SECRET_IV', pack('a16', 'senha'));  //define um constante e transforma uma string em outra string de 16 caracteres
define('SECRET', pack('a16', 'senha'));

/* ---------------------------------------------------------------- */
$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,  //KEY, a senha que está no 'cofre'
    0, //0 só encripta e não retorna nada
    SECRET_IV
);

echo $openssl . "<br><br>";

//Descriptografa e mostra mensagem antiga
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump(json_decode($string, true));



/* --------------------- criptografa toda vez retornando uma string aleatória ---------------------------------

//$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
$plaintext = $data['nome']; //message to be encrypted
$cipher = "aes-128-gcm";
if (in_array($cipher, openssl_get_cipher_methods()))
{
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    //criptografa a mensagem
    $ciphertext = openssl_encrypt($plaintext, $cipher, SECRET, $options=0, $iv, $tag);
    
    //mostra mensagem criptografada
    var_dump($ciphertext);

    echo "<br><br>";

    //Descriptografa e mostra mensagem antiga
    //store $cipher, $iv, and $tag for decryption later
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, SECRET, $options=0, $iv, $tag);
    //echo $original_plaintext."\n";
    var_dump($original_plaintext);
}

echo "<br>PHP_VERSION: ";
var_dump(PHP_VERSION);
*/

?>