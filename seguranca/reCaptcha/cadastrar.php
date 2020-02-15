<?php

$email = $_POST["inputEmail"];

//var_dump($_POST);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LfXD9kUAAAAAFfCjMMtqIKWSjrFvOSrHI7LHtfO", //copy secret key from google reCaptcha
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptcha);


IF($recaptcha["success"] == true){
    echo "<strong style='color: green;'>OK:</strong> " . $_POST["inputEmail"];
}else{
    header("Location: reCaptcha.php");
}

?>