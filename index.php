<?php?>
<h1>Create your Wordpress Site in 1min!</h1>
<form method="post" action="action.php">
  <p>Name of your database :</p>
  <input type="text" name="dbname"/>
  <p>User :</p>
  <input type="text" name="dbuser" value="">
  <p>Password :</p>
  <input type="text" name="dbpwd" value="">
  <p>Your host data base :</p>
  <input type="text" name="dbhost" value="">
  <p>Database doesn't exist ?</p>
  <input type="checkbox" name="newdb" value="">
  <p>Your website name ?</p>
  <input type="text" name="sitename" value="">
  <p>Site URL ?</p>
  <input type="text" name="wpurl" value="">
  <p>WP admin user :</p>
  <input type="text" name="wpuser" value="">
  <p>WP password :</p>
  <input type="text" name="wpwd" value="">
  <p>Email ?</p>
  <input type="mail" name="email" value="">
  <p>Change Vhost</p>
  <input type="checkbox" name="vhost" value="" checked="chechked"> <br>
  <button type="submit" name="btnexec">Submit</button>
</form>
