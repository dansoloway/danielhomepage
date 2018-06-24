<?php
$userRequest = $_SERVER['REQUEST_URI'];
if (strpos($userRequest, '/heb/') !== false) {
    $userLanguage = 'he';
}
else{
    $userLanguage = 'en';
}
// echo "USER LANGUGE " . $userLanguage;
?>
<head>
<!DOCTYPE html>
<html lang="<?php echo $userLanguage ?>">
  <meta charset="utf-8">
  <title>Daniel Soloway</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo WEB_PATH ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo WEB_PATH ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo WEB_PATH ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo WEB_PATH ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo WEB_PATH ?>lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo WEB_PATH ?>css/style.css" rel="stylesheet">
</head>
  <?php
    if($userLanguage == "he"){
        echo '
            <style>
                body{
                    direction: rtl;
                }
            </style>
        ';
    }
  ?>
