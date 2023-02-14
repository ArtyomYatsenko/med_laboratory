<?php
include ("app/database/user.php");
?>
<?php if($_SESSION['admin'] == 2):?>



<!doctype html>
<html lang="ru">
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
            
              <div class = "cabinet-header">
                
                <ul class = "cabinet-ul">
                  <li class = "cabinet-li2">
                    <div >
                        <h5> <a href="#" onclick = "">Выход</a> </h5>
                    </div>
                  </li>
                </ul>
                <div class = "cabinet-container-text">
                <h1 class = "cabinet-text" id = "cabinet-text">ИСТОРИЯ АНАЛИЗОВ</h1>

                  </div>
              </div>
  </body>

  <?php endif; ?>