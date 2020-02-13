<?php
/*  ENVIO DE EMAIL USANDO PHPMAILER (com gmail)
    para funcionar você precisa permitir apps menos seguros na sua conta google: 
    https://support.google.com/accounts/answer/6010255
    vai te redirecionar para esse link -> https://myaccount.google.com/lesssecureapps, aí é só permitir. OBS: LEMBRE-SE DE DESATIVAR DEPOIS PARA NÃO TER PROBLEMAS DE SEGURANÇA COM SUA CONTA GOOGLE.

*/
require_once('vendor/autoload.php');

//Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'verify_self_signed' => true
    )
);

//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;


//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'eldersamuel98@gmail.com';

//Password to use for SMTP authentication
$mail->Password = '*******';

//Set who the message is to be sent from
$mail->setFrom('eldersamuel98@gmail.com', 'PHP7TESTE');

//Set an alternative reply-to address
//$mail->addReplyTo('eldersamuel98@gmail.com', 'PHP7TESTE');

//Set who the message is to be sent to
$mail->addAddress('eldersamuel98@gmail.com', 'Elder S.');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}