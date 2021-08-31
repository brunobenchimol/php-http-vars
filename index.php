<?php

echo 'I am running on: <b>' . gethostname() . '</b><br><br>'; 

echo '<A HREF="phpinfo.php">Check phpinfo()</A> <br><br>'

echo '---------------- Outputing Server Vars and Headers ----------------';
echo '<br><br>';
  
$headers =  getallheaders();
foreach($headers as $key=>$val){
  echo $key . ': ' . $val . '<br>';
}
echo '<br><br>';
foreach($_SERVER as $key => $value){
  echo $key . ': ' . $value . '<br>';
}
   
?>
