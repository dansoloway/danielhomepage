<?
require_once('../config.php');
$userFields = $_POST;

$to = "dansoloway@gmail.com";
$subject = "Mail from MY Website!! :)";

$message = "
<html>
    <head>
        <title>Someone is into you!</title>
    </head>
    <body>
        <h2>Name: ".$userFields['name']."</h2>
        <h2>Email: ".$userFields['email']."</h2>
        <h2>Message: ".$userFields['message']."</h2>
    </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers

if(mail($to,$subject,$message,$headers)){
    $location = 'location: ' . WEB_PATH . '/contactSuccess';
    header($location);

}
else{
    die("Mail not sent, sorry :(");
}


?>
