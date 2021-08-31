<?php

echo 'I am running on: <b>' . gethostname() . '</b><br><br><br>'; 


$headers =  getallheaders();
foreach($headers as $key=>$val){
  echo $key . ': ' . $val . '<br>';
}
echo '<br><br>';
foreach($_SERVER as $key => $value){
  echo $key . ': ' . $value . '<br>';
}
   
?>
