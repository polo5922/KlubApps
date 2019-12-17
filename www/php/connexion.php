<?php
if(isset($_post['pass']))
{
  $pass = $_post['pass'];
  echo "<p>{$pass}</p>";
  $pass_hash = md5($pass);
  $pass_hash = sha1($pass_hash);
  echo "<p>{$pass_hash}</p>";
}
echo "<p>no data</p>";


 ?>
 <form class="" action="" method="post">
   <input type="text" name="pass" value="">
   <input type="submit" name="" value="">
 </form>
