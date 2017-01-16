<?php
    $dbnName =  $_POST["dbname"];
    $dbUser = $_POST["dbuser"];
    $dbPwd = $_POST["dbpwd"];
    $dbHost = $_POST["dbhost"];

    $cmdDownload = "wp core download";
    $cmdConfig = "wp core config —dbname=".$dbName." —dbuser=".$dbUser." —dbpass=".$dbPwd." —locale=en_EN";
    $cmdCreateDB = "wp db create";
    $cmdInstall = "wp core install --url=".$siteUrl." --title=".$siteName." --admin_user=".$admUser." --admin_password=".$admPwd." --admin_email=".$admMail." --skip-email";



    var_dump($cmdConfig);
    var_dump($cmdInstall);
    echo exec($cmdConfig);

?>
