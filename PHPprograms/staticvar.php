<?php
 function keep_track()
 {
  static $count=0;
  $count++;
  print $count;
  print "</br>";
 }
 keep_track();
 keep_track();
 keep_track();
?>