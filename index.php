<?php

echo 'I am running on: <b>' . gethostname() . '</b><br><br>'; 

$content = file_get_contents('composer.json');
$content = json_decode($content,true);
echo 'Build Version: <b>' . $content['version'] . '</b><br><br>';

echo 'Operational System Environment Variables<br>';
echo 'TZ = ' . getenv("TZ") . '<br>';
echo 'CUSTOM_VAR = ' . getenv("CUSTOM_VAR") . '<br>';
echo 'SECRET_VAR = ' . getenv("SECRET_VAR") . '<br>';
echo '<br><br>';
echo '<A HREF="phpinfo.php">Click for -> phpinfo()</A> <br><br>';
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
