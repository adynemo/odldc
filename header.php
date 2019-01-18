<?php
session_start();
include('function.php');
$query = $bdd->query("SELECT value FROM odldc_admin WHERE param = 'isMaintaining'")->fetch(PDO::FETCH_ASSOC);
if ($query['value'] == TRUE) {
    include('maintaining.php');
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DCTrad - Ordre de lecture DC</title>
        <link rel="icon" href="assets/img/icon_dct.png" type="image/png" sizes="16x16">
        <link rel="icon" href="assets/img/icon_dct.png" type="image/png" sizes="32x32">
        <link rel="stylesheet" href="assets/css/general.css?1.1.0">
        <link rel="stylesheet" href="assets/css/style.css?1.4.5">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js?2.2.0"></script>
    <head>
    <body>
        <main>
            <header id="up">
                <?php displayHeader(); ?>
            <a href="index.php" id="header"></a>
            </header>
<?php
logout();
?>