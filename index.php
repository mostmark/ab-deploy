<?php
  echo "I'm version 2";
  echo "<br><br>The time is " . date("h:i:sa");
  echo "<br><br>The hostname is " . gethostname();
  echo "<br><br>My Pod IP is : ".$_SERVER['SERVER_ADDR'];
?>
