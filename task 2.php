<?php

$mysqli = new mysqli('localhost', 'root', '', 'gtu_lms');

if($mysqli->connect_error){
  die('შეცდომა მონაცემთა ბაზასთან კავშირისას');
}
else{
  echo 'მონაცემთა ბაზასთან კავშირი წარმატებით დამყარდა';
}

?>