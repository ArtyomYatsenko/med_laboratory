<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css\style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Медицинская лаборатория ЭС-МЕДЛАБ</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&&display=swap" rel="stylesheet">
  </head>
  <body class = "body">
    <?php
    include("header.php");
  ?> 
    <!-- END HEADER -->
 <div class="container reg-form">  
    <form class="row justify-content-center" method="post" action="reg.php">
        <h3>Форма регистрации</h3>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин">
          </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите ваш email" aria-describedby="emailHelp">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Пароль</label>
          <input type="password" class="form-control" placeholder="Введите ваш пароль" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input type="password" class="form-control"  placeholder="Повторите пароль" id="exampleInputPassword2">
          </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="button" class="btn btn-secondary">Регистрация</button>
            <a href="log.php">Войти</a>
        </div>
      </form>
    </div> 
</body>
