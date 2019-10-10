<?php if ($_COOKIE['myCookie']) {header('Location: /script/index.php');}?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>тестовое задание</title>
</head>
<body>
<div class="row h-100 justify-content-center align-items-center">
       <form method="post" action="script/index.php" enctype="multipart/form-data">
        <label>введите e-mail:</label>
        <input placeholder="e-mail" name="email"><br>
        <label>введите пароль:</label>
        <input placeholder="password" name="password"><br>
        <label>введите имя:</label>
        <input placeholder="name" name="name"><br>
        <label>прикрепите фото</label>
        <input type="file" name="photo" accept="image/jpeg"><br>
        <button>accept</button><br>
       </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>