<?php
$configstr = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/config.json');
if (!$configstr)
  die();
$config = json_decode( $configstr );


function getMSG($order = 'time DESC') {
  global $config;
  $link = mysqli_init();
  if (!$link->real_connect($config->db->host, $config->db->name, $config->db->pass, $config->db->dbname))
    return FALSE;
  
  $query = "SELECT * FROM msg ORDER BY {$order};";
  $result = $link->query($query);
  
  mysqli_close($link);
  return $result;
}

//--------------------

if ($_GET['getMSG'] === 'Y') {
  $msglist = getMSG();
  while ($msg = $msglist->fetch_assoc()) {
?>
      <div class="msg">
        <h5><small><?=date( 'H:i:s', intval($msg['time']) )?></small> <?=$msg['name']?></h5>
        <p><?=$msg['msg']?></p>
      </div>
      <hr>
<?php
  }
}
else
  echo 0;