<?php
include("app/database/user.php");
?>






<?php if (isset($_SESSION['id'])): ?>
  <script>
    var admin = '<?php echo $_SESSION["admin"]; ?>';
    var status = '<?php echo $_SESSION["status"]; ?>';
    if (status == 1) {
      status = "Выполнена";
    } else {
      status = "В работе";
    };               
  </script>
<?php endif; ?>
<!doctype html>
<html lang="ru">

<head>

  <link rel="stylesheet" href="css\style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Медицинская лаборатория ЭС-МЕДЛАБ</title>

  <!-- Вставка -->
  <meta name="description"
    content="ЭС-МЕДЛАБ контакты, Адрес: г. Воронеж, Телефон: +7(473)292-00-91.                                             Воронежская область, рп. Хохольский, ул. 20 лет Победы, дом 2б, Телефон +7(473)714-17-45.">

  <meta name="keywords" content="эс-медлаб контакты">

  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <meta name="msapplication-tap-highlight" content="no">

  <meta name="format-detection" content="telephone=no">

  <meta http-equiv="x-rim-auto-match" content="none">

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/styles_articles_tpl.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/styles.css">

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/designblock.scss.css">

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/s3_styles.scss.css">

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/site_addons.scss.css">

  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery.min.js.Без названия"></script>

  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/adaptiveimage.js.Без названия"></script>
  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/lightgallery.proxy.to.hs.min.css" media="all" async="">
  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/lightgallery.proxy.to.hs.stub.min.js.Без названия"></script>
  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/lightgallery.proxy.to.hs.js.Без названия" async=""></script>

  <!-- 46b9544ffa2e5e73c3c971fe2ede35a5 -->
  <link rel="stylesheet" type="text/css" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/calendar.css">
  <script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/ru.js.Без названия"></script>
  <script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/common.min.js.Без названия"></script>

  <!--s3_require-->
  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/pages.additional.1.0.css" type="text/css">
  <script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/pages.additional.1.0.js.Без названия"></script>
  <script type="text/javascript" charset="utf-8" async=""
    src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/5-1ce453c69bfa0a3d8940.js.Без названия"></script>
  <script type="text/javascript" charset="utf-8" async=""
    src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/3-47c7ea6a14c5d583a7bc.js.Без названия"></script>
  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/submenu.css" type="text/css">
  <!--/s3_require-->

  <link rel="stylesheet" type="text/css" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/patch.css">

  <link href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery-ui.css" rel="stylesheet" type="text/css">

  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery-ui.min.js.Без названия" type="text/javascript"></script>
  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery.ui.datepicker-ru.js.Без названия"></script>

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery.popover.css">

  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery.popover.min.js.Без названия" type="text/javascript"></script>

  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/s3.form.js.Без названия" type="text/javascript"></script>

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/photoswipe.css">

  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/default-skin.css">

  <script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/photoswipe.min.js.Без названия"></script>

  <script type="text/javascript"
    src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/photoswipe-ui-default.min.js.Без названия"></script>

  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery.bxslider.min.js.Без названия" type="text/javascript"></script>

  <script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/main.js.Без названия"></script>
  <!-- КонецВставки            -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&&display=swap"
    rel="stylesheet">
</head>

<body>

  <?php
  include("header.php");
  ?>

  <div class="cabinet-header">

    <ul class="cabinet-ul">
      <li class="cabinet-li1">
        <h5><a style="color: #fff;" id="cabinet-a-1" href="#" onclick=cabinetheader(1)>Кабинет партнера</a></h5>
      </li>
      <li class="cabinet-li2">
        <h5> <a style="color: #fff;" href="#" onclick=cabinetheader(2)>Результаты анализов</a> </h5>
      </li>
    </ul>

  </div>
  <div class="wrapper-message"></div>
  <div class="wrapper1" id="wrapper1">

    <div class="cabinet-container-text">
      <h1 class="cabinet-text" id="cabinet-text" style="">Вход в личный кабинет</h1>
      <p id="cabinet-text-p">Доступ к регистрации направлений и просмотру результатов в лаборатории "ЭС-МедЛаб"
        для медучреждений и пациентов.<br>
        Для получения доступа или же в случае возникновения проблем, обратитесь к менеджеру по адресу
        smedlab@mail.ru ; smedlabkhohol@mail.ru; smedlablivny@.mail.ru</p>
    </div>

    <div class="registration-cssave">
      <form action="cabinet.php" method="POST">
        <div class="form-group">
          <p><strong id="login">Логин</strong>
          <p>
            <input style="border: 2px solid maroon;" name="login" value="" class="" type="text" name="username"
              maxlength="30" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="" required>
        </div>
        <div class="form-group">
          <p id="passowrd"><strong>Пароль</strong>
          <p>
            <input style="border: 2px solid maroon;" name="password" type="password" class="" placeholder="" required>
        </div>

        <div class="form-group">
          <button name="do_login" type="submit" class="button-log"><strong id="button">Войти</strong></button>
        </div>
      </form>
    </div>
  </div>













  <script>
    function cabinetheader(а) {
      if (а == 1) {
        document.getElementById("cabinet-text").innerHTML = "Вход в личный кабинет";
        document.getElementById("cabinet-text-p").innerHTML = "Доступ к регистрации направлений и просмотру результатов в лаборатории \"ЭС-МедЛаб\" для медучреждений и пациентов.<br>  Для получения доступа или же в случае возникновения проблем, обратитесь к менеджеру по адресу smedlab@mail.ru ; smedlabkhohol@mail.ru; smedlablivny@.mail.ru";
        document.getElementById("login").innerHTML = "Логин";
        document.getElementById("button").innerHTML = "Войти";
      }
      if (а == 2) {
        document.getElementById("cabinet-text").innerHTML = "Результаты анализов";
        document.getElementById("cabinet-text-p").innerHTML = "";
        document.getElementById("login").innerHTML = "Номер заявки";
        document.getElementById("button").innerHTML = "Показать результаты";
      }
    } if (admin == 0) {
      document.getElementById("cabinet-text").innerHTML = "Результаты анализов";
      document.getElementById("cabinet-text-p").innerHTML = "Пациент: " + '<?php echo $_SESSION["surname"]; ?>' + " " + '<?php echo $_SESSION["name"]; ?>' +
        " " + '<?php echo $_SESSION["middlename"]; ?>' + "<br>" + "Статус заявки: " + status + "<br>" + "Результат анализа: "
        + '<a href = "temp/Test.pdf" class = "download-a" download>Cкачать</a>';
    }  
  </script>

  <script>
    session = "<?php echo $_GET["session"]; ?>";
    if (session == "1") {

      const div = document.createElement("div");
      div.classList.add("session");
      div.id = "session"
      const p = document.createElement("div");
      const img = document.createElement('img');
      img.classList.add("session-close");
      img.src = 'close.svg';
      div.appendChild(img);
      const elem = document.createElement('p');
      elem.classList.add("session-p");
      // p.innerHTML = "Время Вашего сеанса истекло. Войдите в систему еще раз.";
      // p.classList.add("session");
      div.appendChild(elem);
      elem.innerHTML = "Ваша сессия истекла. Зайдите в кабинет снова.";

      // div.style.width = "500px";
      // div.style.height = "50px";
      // div.style.background = "green";
      // div.style.color = "white";
      // div.innerHTML = "   Время Вашего сеанса истекло. Войдите в систему еще раз.";
      let target = document.querySelector('#cabinet-text');
      target.insertAdjacentElement('afterBegin', div);

      // document.getElementById("cabinet-text-p").appendChild(div);
      // const cont = getElementById("cabinet-text-p");
      // cont.insertAdjacentElement('beforeBegin', div);

    }

  </script>



  <div class="editorElement layer-type-block ui-droppable block-22">
    <div class="editorElement layer-type-block ui-droppable block-23">
      <div class="editorElement layer-type-block ui-droppable block-27">
        <div
          class="widget-25 horizontal menu-51 wm-widget-menu widget-type-menu_horizontal editorElement layer-type-widget"
          data-screen-button="more" data-responsive-tl="button" data-responsive-tp="button"
          data-responsive-ml="columned" data-more-text="..." data-child-icons="0">

          <div class="menu-button">
            Меню
          </div>

          <div class="menu-scroll">
            <ul>
              <li class="menu-item first-level"><a href="https://esmedlab.ru/index.php"><span
                    class="menu-item-text">Главная</span></a></li>
              <li class="menu-item first-level"><a href="https://esmedlab.ru/o-nas.php"><span class="menu-item-text">О
                    нас</span></a></li>
              <li class="opened active menu-item first-level"><a href="https://esmedlab.ru/kontakty.php"><span
                    class="menu-item-text">Контакты</span></a></li>
              <li class="menu-item first-level"><a href="https://esmedlab.ru/cabinet.php"><span
                    class="menu-item-text">Кабинет</span></a></li>
              <li class="more-button first-level disabled" data-trigger="hover"><a
                  href="https://esmedlab.ru/kontakty.php" onclick="return false;"><span>...</span></a>
                <ul style=""></ul>
              </li>
            </ul>
          </div>

        </div>
      </div>
      <div class="editorElement layer-type-block ui-droppable block-24">
        <div class="layout column layout_43">
          <div
            class="phones-43 widget-19 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget">
            <div class="inner">
              <label class="cell-icon" for="tg-phones-43">
                <div class="icon"></div>
              </label>
              <input id="tg-phones-43" class="tgl-but" type="checkbox">
              <div class="block-body-drop">
                <div class="cell-text">
                  <div class="title">
                    <div class="align-elem">Телефон:</div>
                  </div>
                  <div class="text_body">
                    <div class="align-elem">
                      <div><a href="tel:+74732920091">+7 (473) 292-00-91</a></div>
                      <div><a href="tel:+74737141745">+7(473)714-17-45</a></div>
                      <div><a href="tel:89961646060">8-996-164-60-60</a></div>
                      <div><a href="tel:84867770012">8-486-777-00-12</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="layout column layout_44">
          <div class="editorElement layer-type-block ui-droppable block-25">
            <div
              class="address-45 widget-20 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget">
              <div class="inner">
                <label class="cell-icon" for="tg45">
                  <div class="icon"></div>
                </label>
                <input id="tg45" class="tgl-but" type="checkbox">
                <div class="block-body-drop">
                  <div class="cell-text">
                    <div class="title">
                      <div class="align-elem">Адрес:</div>
                    </div>
                    <div class="text_body">
                      <div class="align-elem">Воронеж, пр. Революции, дом 29А;<br>
                        Воронежская область, рп. Хохольский, ул. 20 лет Победы, дом 2б;<br>
                        Орловская область, г.Ливны,ул.Дзержинского,д.104, пом.48</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="layout column layout_46">
          <div
            class="email-46 widget-21 email-block contacts-block widget-type-contacts_email editorElement layer-type-widget">
            <div class="inner">
              <label class="cell-icon" for="tg-email-46">
                <div class="icon"></div>
              </label>
              <input id="tg-email-46" class="tgl-but" type="checkbox">
              <div class="block-body-drop">
                <div class="cell-text">
                  <div class="title">
                    <div class="align-elem">Email:</div>
                  </div>
                  <div class="text_body">
                    <div class="align-elem"><a
                        href="mailto:smedlab@mail.ru%20;%20%20%20smedlabkhohol@mail.ru;%20smedlablivny@.mail.ru"
                        style="color: #fff;">smedlab@mail.ru ; smedlabkhohol@mail.ru; smedlablivny@.mail.ru</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="editorElement layer-type-block ui-droppable block-26">
        <div class="up-40 widget-18 up_button widget-type-button_up editorElement layer-type-widget" data-speed="900">
          <div class="icon"></div>
        </div>
        <div class="editorElement layer-type-block ui-droppable block-28">
          <div class="layout column layout_48">
            <div class="site-copyright widget-22 widget-type-site_copyright editorElement layer-type-widget">

              <div class="align-elem">
                Copyright © 2021 - 2022 <br>

                <br><a href="https://smedlab.su/politika-konfidencialnosti" style="color: #fff;">Политика
                  конфиденциальности</a>
              </div>

            </div>
          </div>
          <div class="layout column layout_49">
            <div class="site-counters widget-23 widget-type-site_counters editorElement layer-type-widget"
              style="display: none;">
              <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click" target="_blank"><img id="licntFDEC"
                  width="88" height="31" style="border:0"
                  title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
                  src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/hit" alt=""></a>
              <script>(function (d, s) {
                  d.getElementById("licntFDEC").src =
                  "https://counter.yadro.ru/hit?t17.18;r" + escape(d.referrer) +
                  ((typeof (s) == "undefined") ? "" : ";s" + s.width + "*" + s.height + "*" +
                    (s.colorDepth ? s.colorDepth : s.pixelDepth)) + ";u" + escape(d.URL) +
                  ";h" + escape(d.title.substring(0, 150)) + ";" + Math.random()
                })
                  (document, screen)</script><!--/LiveInternet-->
              <!--__INFO2022-09-13 00:22:21INFO__-->

            </div>
          </div>
          <div class="layout column layout_50">
            <div class="mega-copyright widget-24  widget-type-mega_copyright editorElement layer-type-widget"><span
                style="font-size:10px;" class="copyright"><!--noindex-->Создание, разработка сайта - Яценко Артем
                Викторович</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div id="body_user_code">

    <style>
      #body_user_code {
        position: absolute;
        top: -50000px;
        left: -50000px;
      }
    </style>

    <script>
      console.log("Проверка");
    </script>
  </div>
  <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/ors_privacy.scss.css">
  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/ors_privacy.js.Без названия"></script>

  <div class="cookies-warning cookies-block-js">
    <div class="cookies-warning__body">
      Этот сайт использует файлы cookie и метаданные.
      Продолжая просматривать его, вы соглашаетесь на использование нами файлов cookie и метаданных в соответствии
      с <a target="_blank" href="https://smedlab.su/politika-konfidencialnosti">Политикой конфиденциальности</a>. <br>
      <div class="cookies-warning__close gr-button-5 cookies-close-js">
        Продолжить
      </div>
    </div>
  </div>
  <!-- assets.bottom -->
  <!-- </noscript></script></style> -->
  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/site.min.js.Без названия" type="text/javascript"></script>
  <script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/defender.min.js.Без названия" type="text/javascript"></script>
  <script type="text/javascript">/*<![CDATA[*/
    var megacounter_key = "981cf1e1b8b861221dc3c69051b87690";
    (function (d) {
      var s = d.createElement("script");
      s.src = "//counter.megagroup.ru/loader.js?" + new Date().getTime();
      s.async = true;
      d.getElementsByTagName("head")[0].appendChild(s);
    })(document);
/*]]>*/</script>
  <script type="text/javascript">/*<![CDATA[*/
    $ite.start({ "sid": 3106564, "vid": 3133535, "aid": 3692686, "cp": 21, "active": 0, "domain": "smedlab.su", "lang": "ru", "trusted": false, "debug": false });
/*]]>*/</script>
  <!-- /assets.bottom -->
  <div>
    <p>lorem10</p>
  </div>   
</body>