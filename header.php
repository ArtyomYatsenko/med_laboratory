<?php 
    // if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
    //     $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    //     header("Location: $redirect_url");
    //     exit();
    // }
?>

<header class="container-fluid">
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <link rel="manifest" href="/site.webmanifest">
            <link rel="stylesheet" href="css\style.css">
            <link rel="stylesheet" href="css\adaptive.css">
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">

        <div class="container">

            <div class="row">

           

                <div class="row-header">  
                    <p class="logo">
                        <a href="/">
                            <img src="399019_8414.webp" alt="Логотип">
                        </a>
                    </p> 

                    
                
                    <nav class="nav-header" id = "nav-header">
                    <ul>
                        <li>
                            <div class="header-menu">
                                <a class="header-menu-a" href="index.php">
                                    ГЛАВНАЯ
                                    </a>
                          </div>
                        </li>    
                
                
                        <!-- <li>
                            <div class="header-menu">
                                    <a class="header-menu-a" href="specialisty.php">
                                    СПЕЦИАЛИСТЫ
                                    </a>

                            </div>
                        </li> -->
                        <li>
                            <div class="header-menu">
                                <a class="header-menu-a"  href="o-nas.php">
                                    О НАС
                                    </a>
                            </div>
                        </li>
                        <li>
                            <div class="header-menu">
                                <a class="header-menu-a" href="kontakty.php">
                                        КОНТАКТЫ
                                    </a>
                            </div>
                        </li>
                        <li>
                          
                                <!-- <?php if($_SESSION['admin'] == 1):?> -->
                                  
                                    <div class="header-menu">
                                        <a class="header-menu-a" href="cabinetpacienta.php">
                                        <?php echo $_SESSION['login']; ?>
                                        </a>
                                 </div>
                                    <ul>  
                                        <!-- <li>
                                                <a class="header-menu-2" href="reg.html">Админ панель</a>
                                        </li> -->
                                        <li>
                                                <a class="header-menu-2" href="<?php echo "logout.php" ?>">Выход</a>
                                        </li>   
                                    </ul>

                                <!-- <?php elseif($_SESSION['admin'] == 2):?>  -->
                                        
                                    <div class="header-menu">
                                <a class="header-menu-a" href="demand.php">
                                <?php echo $_SESSION['login']; ?>
                                </a>
                                 </div>
                                    <ul>  
                                        <!-- <li>
                                                <a class="header-menu-2" href="reg.html">Админ панель</a>
                                        </li> -->
                                        <li>
                                                <a class="header-menu-2" href="<?php echo "logout.php" ?>">Выход</a>
                                        </li>   
                                    </ul>
                                    
                                <!-- <?php elseif($_SESSION['admin'] == 0):?>  -->

                                    <div class="header-menu">
                                        <a class="header-menu-a" href="cabinet.php">
                                            КАБИНЕТ
                                            </a>
                                    </div>
                                    
                                <!-- <?php else: ?> -->

                                    <div class="header-menu">
                                        <a class="header-menu-a" href="cabinet.php">
                                            КАБИНЕТ
                                            </a>
                                    </div>

                                <!-- <?php endif; ?> -->
                               
                            
                        </li>
                    </ul>  
                </nav>
            
                <div class="menu-items" id="menu-items">
                    <li><a href="index.php">ГЛАВНАЯ</a></li>
                    <li><a href="o-nas.php">О НАС</a></li>
                    <li><a href="kontakty.php">КОНТАКТЫ</a></li>
                    <li><a href="cabinet.php">КАБИНЕТ</a></li>
                    <?php if($_SESSION['admin'] == 2):?>
                    <li><a  href="<?php echo "logout.php" ?>">Выход</a></li>   
                    <?php endif; ?> 
                </div>                   
                
                

                <div class="nav-container">

                    <input class="checkbox" type="checkbox" name="" id="rules" />
                    <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                    </div>  

                
                </div>
                
                
            </div> 

        </div>

    </header>


    <script>
        
        $(".checkbox").on("click", function () {
            if ($(this).is(":checked")) {
                
                document.getElementById("menu-items").style.width = "250px";
                
                
            } else {
                document.getElementById("menu-items").style.width = "0";
                document.body.style.backgroundColor = "white";
            }
        })
        document.querySelector('.menu-icon-wrapper').onclick = function(){
        var dark = document.querySelector('.dark')
        document.querySelector('.menu-icon').classList.toggle('menu-icon-active');
        dark.style.marginLeft = (dark.style.marginLeft == '0px')? '-10000000px': '0px'
    }
    </script>


