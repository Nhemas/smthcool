<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.css">
</head>
<body>

<?php
echo '<hr>';
//-----------


$dblink = mysqli_init();
if (!$dblink->real_connect('localhost', 'root', 'root', 'chat')) {
  die('Ошибка подключения (' . mysqli_connect_errno() . ') '
          . mysqli_connect_error());
}

$query = 'SELECT * FROM msg';
$result = $dblink->query($query);

foreach ($result as $value) {
  // $line = $value->fetch_array(MYSQLI_ASSOC);
  print_r($value);
  echo '<br>';

}

$time = time();
echo $query1 = "INSERT INTO `msg` (`id`, `time`, `name`, `msg`) VALUES (NULL, '{$time}', '234', '345');";
$dblink->query($query1);

//-----------
echo '<hr>';
?>

  <div class="container">
    <br>
    <h1>Чат</h1>
    <hr>
    <form method="POST" id="form">
      <div class="form-group">
        <label for="inputmsg">Отправить сообщение</label>
        <textarea type="password" class="form-control" id="inputmsg" placeholder="Сообщение"></textarea>
      </div>
      
      <div class="form-group">
        <label for="inputname">Ваше имя</label>
        <input type="name" class="form-control" id="inputname" placeholder="Ваше имя">
      </div>
      <button type="submit" class="btn span4 btn-primary">Отправить</button>
    </form>

    <div id="msg-list">
      <hr>

      <div class="msg">
        <h5><small>12:21</small> Владимир</h5>
        <p>Текст</p>
      </div>
      <hr>
    </div>
    
  </div>

  <script src="/public/jquery/jquery.js"></script>
  <script src="/public/bootstrap/js/bootstrap.js"></script>
</body>
</html>