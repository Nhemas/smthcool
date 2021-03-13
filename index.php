<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="container">
    <br>
    <h1>Чат</h1>
    <hr>
    <div id="form">
      <div class="form-group">
        <label for="inputmsg">Отправить сообщение</label>
        <textarea type="password" class="form-control" id="inputmsg" placeholder="Сообщение"></textarea>
      </div>
      
      <div class="form-group">
        <label for="inputname">Ваше имя</label>
        <input type="name" class="form-control" id="inputname" placeholder="Ваше имя">
      </div>
      <div type="submit" class="btn span4 btn-primary" onclick="send()">Отправить</div>
    </div>

    <div id="msglist">
      <hr>
    </div>
    
  </div>

  <script src="/public/jquery/jquery.js"></script>
  <script src="/public/bootstrap/js/bootstrap.js"></script>
  <script src="/custom.js"></script>
</body>
</html>