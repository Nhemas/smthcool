<?php
$configstr = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/config.json');
if (!$configstr)
  die();
$config = json_decode( $configstr );


function postMSG($time, $name = 'Unknown user', $msg = '') {
  global $config;
  $link = mysqli_init();
  if (!$link->real_connect($config->db->host, $config->db->name, $config->db->pass, $config->db->dbname))
    return FALSE;
  
  $query = "INSERT INTO `msg` (`id`, `time`, `name`, `msg`) VALUES (NULL, '{$time}', '{$name}', '$msg');";
  $result = $link->query($query);
  
  mysqli_close($link);
  return $result;
}

//--------------------

if ($_POST['postMSG'] === 'Y') 
  print_r( postMSG(time(), $_POST['name'], $_POST['msg']) );
else
  echo 0;
