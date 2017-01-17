<?php

    $dbName =  $_POST["dbname"];
    $dbUser = $_POST["dbuser"];
    $dbPwd = $_POST["dbpwd"];
    $dbHost = $_POST["dbhost"];

    $siteUrl = $_POST["wpurl"];
    $siteName = $_POST["sitename"];
    $admUser = $_POST["wpuser"];
    $admPwd = $_POST["wpwd"];
    $admMail = $_POST["email"];

    $cmdDownload = "wp core download";
    $cmdConfig = "wp core config --dbname=".$dbName." --dbuser=".$dbUser." --dbpass=".$dbPwd." --locale=en_EN";
    $cmdCreateDB = "wp db create";
    $cmdInstall = "wp core install --admin_user=".$admUser." --admin_password=".$admPwd." --admin_email=".$admMail." --url=".$siteUrl." --title=".$siteName." --skip-email";

    $newWordpress = false;


    if(isset($dbName) && isset($dbPwd)) {
      exec("mkdir ".$siteName);
      chdir($siteName);
      exec($cmdDownload);
      exec($cmdConfig);
      exec($cmdInstall);
      $newWordpress = true;
    } else{
      echo('fail');
    }

?>
<?php if($newWordpress):?>
<div>
  <h1>Your WP website named <?php echo($siteName);?> have been created with succes!</h1>
</div>
<?php else:?>
<div>
  <h2>Oh oh an error have been occur</h2>
</div>
<?php endif; ?>
