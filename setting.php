<?php
include ("app/database/user.php");
if(!$_SESSION['id'])
{
header('Location:cabinet.php?session=1');
}
$i = 0;
$datatime = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$nameorganization = $_SESSION['nameorganization'];
//  tt($_SESSION);


?>
    <?php if($_SESSION['admin'] == 2): ?>




<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css\style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Медицинская лаборатория ЭС-МЕДЛАБ</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&&display=swap" rel="stylesheet">

    <script type="text/javascript">


</script>
  </head >
  <?php include("header.php"); ?>  
    


<body id = "body">


    <!-- <div class="preview" id = "preview">
        <svg viewBox="0 0 50 50" class="spinner">
                <circle class="ring" cx="25" cy="25" r="22.5" />
                <circle class="line" cx="25" cy="25" r="22.5" />
        </svg>
    </div>    -->
    <h1 class = "admin-cabinet" id ="title-top">ЛИЧНЫЙ КАБИНЕТ ПАРТНЕРА</h1>
    <h4 class = "admin-cabinet_1" id ="title-top">Ваше расширение окна браузера не подходит для отображения личного кабинета</h4>
    <div class = "wrapper-menu">



    <!-- <script>
        
        const loader = document.querySelector('svg.spinner')
        const body = document.querySelector('body')
        let setProperty = (selector, property, value) => {
        loader.style.setProperty(property, value)
        let elements = document.querySelectorAll(selector)
        elements.forEach(element => element.innerHTML = value)
        }

        let toggleDarkness = () => body.classList.toggle('light')
    </script> -->

    



        <div class = "wrapper-menu-header">
                      <div class = "wrapper-menu-header-element" id = "wrapper-menu-header-element1">
                        <a  href="demand.php" onclick = selectlist(0)  class = "" id = "qwerty"><u>Регистрация заявок</u></a>
                      </div>
                      <div class = "wrapper-menu-header-element" id = "wrapper-menu-header-element2">
                          <a href="listresult.php" onclick = selectlist(1) class = "" id = "qwerty1"><u>Просмотр результатов</u></a>
                      </div>
                    <div class = "wrapper-menu-header-element" id = "wrapper-menu-header-element4">
                         <a href="listreport.php" onclick = selectlist(3) class = "" id = "qwerty3"><u>Отчеты</u></a>
                    </div>
                    <div class = "wrapper-menu-header-element" style = "border-bottom-style: none" id = "wrapper-menu-header-element3">
                           <a href="setting.php" onclick = selectlist(5)  class = "" id = "qwerty5"><u>Настройки</u></a>
                    </div>
        </div>

            
            <div id = "list-setting"  class = "wrapper-list-settings-box">
                    
                    <h4 class = "">Пользователь <?php echo $_SESSION["surname"] . " " . $_SESSION["name"] . " " . $_SESSION["middlename"]?></h4>
                    
                <div class = "list-settings-box-size">

                    <span class = "text-box"><p class = "text-setting">Доступы партнера</p>
                    </span>
                    
                    <span class = "text-box"><p class = "text-setting">Добавление новых заявок:</p>
                    <p class = "text-setting-color">Разрешено</p>
                    </span>
                    <span class = "text-box"><p class = "text-setting">Просмотр заявок:</p>
                    <p class = "text-setting-color">Разрешено</p>
                    </span>
                    <span class = "text-box"><p class = "text-setting">Просмотр результатов:</p>
                    <p class = "text-setting-color">Разрешено</p>
                    </span>
                    <span class = "text-box"><p class = "text-setting">Просмотр отчетов:</p>
                    <p class = "text-setting-color">Разрешено</p>
                    </span>
                    <div class = "text-box-password">
                        <p class = "text-setting" >Старый пароль</p>
                        <input class = "" type = "" name = "">
                    </div>
                    <div class = "text-box-password">
                        <p class = "text-setting" >Новый пароль</p>
                        <input class = "" type = "" name = "">
                    </div>
                    <div class = "text-box-password">
                        <p class = "text-setting" >Новый пароль повторно</p>
                        <input class = "" type = "" name = "">
                    </div>
                    <div class = "button-password-click">
                        <a href = "#" ><u>Сменить пароль</u></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   

    <script>
      
        // $("#preview").hide();
        
    </script>  

    
   
        
        
        
</body>


<?php endif; ?>