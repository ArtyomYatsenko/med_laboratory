<?php 
    include ("app/database/user.php");
    
    if(isset($_GET['key'])){
        $login = $_GET['key'];
        $existence = selectOne('basa', ['login' => $login]);
        $covid = selectOne('covid', ['id_patient' => $existence['id']]);
        
        if(empty($existence)){
            // echo 'нет';
        }else{
            // tt($existence);
        }
        
    }
    // echo $text;
?>
<style>
    @media only screen and (max-width: 768px) {
  .nav-container{
    display: block !important;
  }
  .nav-header{
    visibility: hidden !important;
  }
}
</style>

<?php include("header.php"); ?>
        

		  
	<meta content="width=device-width, initial-scale=1" name="viewport" />	
		 
    <link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/styles.css">

        
		 
		
		 
		
		
		
		 
		


<!-- 46b9544ffa2e5e73c3c971fe2ede35a5 -->
<link rel="stylesheet" type="text/css" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/calendar.css">
<script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/ru.js.Без названия"></script>
<script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/common.min.js.Без названия"></script>
<link rel="icon" href="https://smedlab.su/favicon.png" type="image/png">

<!--s3_require-->
<script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/lp.core.content.js.Без названия"></script>
<script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/calendar.gen.lp_content.js.Без названия"></script>
<link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/owl.carousel.min.css" type="text/css">
<script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/owl.carousel.min.js.Без названия"></script>
<link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/block_1675461.css" type="text/css">
<link rel="stylesheet" href="./О ЭС-МЕДЛАБ _ г. Воронеж_files/block_97251.css" type="text/css">
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
		 
		<script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/photoswipe-ui-default.min.js.Без названия"></script>
		 
		<script src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/jquery.bxslider.min.js.Без названия" type="text/javascript"></script>
		  
		<script type="text/javascript" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/main.js.Без названия"></script>
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <link rel="manifest" href="/site.webmanifest">
            <link rel="stylesheet" href="css\style.css">
        


    <div class = "container" style = "margin-top: 20px; margin-bottom: 40px;  ">
        <h3 style = "color: rgb(155, 75, 55); margin-bottom: 15px;">
            <b>Проверка справки COVID-19</b>
        </h3>

        <p style = "margin-bottom: 15px;" >Verification of a COVID-19 document</p>
        <hr>

<?php if(!empty($existence)): ?>

        <div style = "display: flex; flex-direction: row;">
            <div>
            <img src="green.png" alt="Логотип">
            </div>
            
            <div style = "display: flex; flex-direction: column; margin-left: 15px;  ">
                <div><b style = "color: rgb(76, 175, 80)">Справка действительна</b></div>
                
                <div><p style = "color: rgb(76, 175, 80)">The document is valid</p></div>
               
            </div>
        </div>
        <hr style = "margin-top: 0px">
        <div  style = "display: flex; flex-direction: column;">
            <div><p>Пациент </p> </div>
            <div><b><p><?php 
            
            $name = $existence['surname'];
            
            $subname_start = mb_substr($name, 0, 1);
            $subname_end = mb_substr($name, -1, 1);
            $name_middle = mb_substr($name, 1);
            $name_middle_1 = mb_substr($name_middle, 0, -1); 
            $lenght = strlen($name_middle_1);
            for($i = 0; $i < $lenght;  $i++){
                
                $name_middle_1[$i] = "*";
                
                
            }
            $name_middle_1 = mb_substr($name_middle_1, ($lenght/2)); 
            $name_1 = mb_substr($existence['name'], 0, 1);
            $middlename_1 = mb_substr($existence['middlename'], 0, 1);
            echo $subname_start . $name_middle_1 . $subname_end . " " . $name_1 . "." . " " . $middlename_1 . "."   ; ?></p></b> </div>
        </div>
        <div  style = "display: flex; flex-direction: column;">
            <div><p>Год рождения </p> </div>
            <div><b><p><?php echo $existence['dateofbirth']?></p></b></div>
        </div>
        <div  style = "display: flex; flex-direction: column;">
            <div><p>Коронавирус, РНК (SARS-CoV-2, ПЦР) мазок, кач. </p> </div>
            <div><b><p>РНК НЕ ОБНАРУЖЕНА (<?php echo $covid['dataqrcode']?>)</p></b></div>
        </div>
        <hr>
        <div  style = "display: flex; flex-direction: column;">
            <div><p>Patient </p> </div>
            <div><b><p><?php 
            
            $name = $existence['surname_ang'];
        
            $subname_start = mb_substr($name, 0, 1);
            $subname_end = mb_substr($name, -1, 1);
            $name_middle = mb_substr($name, 1);
            $name_middle_1 = mb_substr($name_middle, 0, -1); 
            $lenght = strlen($name_middle_1);
            for($i = 0; $i < $lenght;  $i++){
                
                $name_middle_1[$i] = "*";
                
                
            }
            // $name_middle_1 = mb_substr($name_middle_1, ($lenght/2)); 
            $name_1 = mb_substr($existence['name_ang'], 0, 1);
            $middlename_1 = mb_substr($existence['middlename_ang'], 0, 1);
            echo $subname_start . $name_middle_1 . $subname_end . " " . $name_1 . "." . " " . $middlename_1 . "."   ; ?></p></b></div>
        </div>
        <div  style = "display: flex; flex-direction: column;">
            <div><p>Year of birth </p> </div>
            <div><b><p><?php echo $existence['dateofbirth']?></p></b></div>
        </div>
        <div  style = "display: flex; flex-direction: column;">
            <div><p>Coronavirus, RNA (SARS-CoV-2, Real-time PCR) smear, qualitative</p> </div>
            <div><b><p>Negative (<?php echo $covid['dataqrcode']?>)</p></b></div>
        </div>
</div>




<div class="editorElement layer-type-block ui-droppable block-22">
		<div class="editorElement layer-type-block ui-droppable block-23">
			
			<div class="editorElement layer-type-block ui-droppable block-24">
				<div class="layout column layout_43">
					  	<div class="phones-43 widget-19 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget">
		<div class="inner">
			<label class="cell-icon" for="tg-phones-43">
				<div class="icon"></div>
			</label>
			<input id="tg-phones-43" class="tgl-but" type="checkbox">
			<div class="block-body-drop">
				<div class="cell-text">
					<div class="title"><div class="align-elem">Телефон:</div></div>
					<div class="text_body">
						<div class="align-elem">
															<div><a href="tel:+74732920091">+7 (473) 292-00-91</a></div><div><a href="tel:+74737141745">+7(473)714-17-45</a></div><div><a href="tel:89961646060">8-996-164-60-60</a></div><div><a href="tel:84867770012">8-486-777-00-12</a></div>													</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  
				</div>
				<div class="layout column layout_44">
					<div class="editorElement layer-type-block ui-droppable block-25">
						      <div class="address-45 widget-20 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget">
        <div class="inner">
            <label class="cell-icon" for="tg45">
                <div class="icon"></div>
            </label>
            <input id="tg45" class="tgl-but" type="checkbox">
            <div class="block-body-drop">
                <div class="cell-text">
                    <div class="title"><div class="align-elem">Адрес:</div></div>
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
					  	<div class="email-46 widget-21 email-block contacts-block widget-type-contacts_email editorElement layer-type-widget">
		<div class="inner">
			<label class="cell-icon" for="tg-email-46">
				<div class="icon"></div>
			</label>
			<input id="tg-email-46" class="tgl-but" type="checkbox">
			<div class="block-body-drop">
				<div class="cell-text">
					<div class="title"><div class="align-elem">Email:</div></div>
					<div class="text_body">
						<div class="align-elem"><a href="mailto:smedlab@mail.ru%20;%20%20%20smedlabkhohol@mail.ru;%20smedlablivny@.mail.ru">smedlab@mail.ru ;   smedlabkhohol@mail.ru; smedlablivny@.mail.ru</a></div>
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
								   Copyright © 2021 - 2022								<br>
								 
								<br><a href="https://smedlab.su/politika-konfidencialnosti">Политика конфиденциальности</a>
							</div>
							 
						</div>
					</div>
					<div class="layout column layout_49">
						<div class="site-counters widget-23 widget-type-site_counters editorElement layer-type-widget">
							 <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click" target="_blank"><img id="licntFDEC" width="88" height="31" style="border:0" title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/hit" alt=""></a><script>(function(d,s){d.getElementById("licntFDEC").src=
"https://counter.yadro.ru/hit?t17.18;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->
<!--__INFO2022-09-12 15:43:18INFO__-->
 
						</div>
					</div>
					<div class="layout column layout_50">
						  <div class="mega-copyright widget-24  widget-type-mega_copyright editorElement layer-type-widget"><span style="font-size:10px;" class="copyright"><!--noindex-->Создание, разработка сайта - Яценко Артем Викторович</span></div> 
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
var megacounter_key="981cf1e1b8b861221dc3c69051b87690";
(function(d){
    var s = d.createElement("script");
    s.src = "//counter.megagroup.ru/loader.js?"+new Date().getTime();
    s.async = true;
    d.getElementsByTagName("head")[0].appendChild(s);
})(document);
/*]]>*/</script>
<script type="text/javascript">/*<![CDATA[*/
$ite.start({"sid":3106564,"vid":3133535,"aid":3692686,"cp":21,"active":0,"domain":"smedlab.su","lang":"ru","trusted":false,"debug":false});
/*]]>*/</script>
<!-- /assets.bottom -->

 
<div class="lp-popup-wrapper js-popup-wrapper"><div class="lp-popup-overlay"></div><div class="lp-popup-inner js-popup-inner"></div></div></body></html>

<?php else: ?>

    <div style = "display: flex; flex-direction: row;">
            <div>
            <img src="close.png" alt="Логотип">
            </div>
            
            <div style = "display: flex; flex-direction: column; margin-left: 15px; justify-content: space-around;  ">
                
                <div><p style = "color: red; text-align: center; vertical-align: middle; display: table-cell;">Пустой ключ</p></div>
               
            </div>

            
    </div>
    <hr  style = "margin-bottom: 100px;" >    
</div >




<div class="editorElement layer-type-block ui-droppable block-22">
		<div class="editorElement layer-type-block ui-droppable block-23">
			
			<div class="editorElement layer-type-block ui-droppable block-24">
				<div class="layout column layout_43">
					  	<div class="phones-43 widget-19 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget">
		<div class="inner">
			<label class="cell-icon" for="tg-phones-43">
				<div class="icon"></div>
			</label>
			<input id="tg-phones-43" class="tgl-but" type="checkbox">
			<div class="block-body-drop">
				<div class="cell-text">
					<div class="title"><div class="align-elem">Телефон:</div></div>
					<div class="text_body">
						<div class="align-elem">
															<div><a href="tel:+74732920091">+7 (473) 292-00-91</a></div><div><a href="tel:+74737141745">+7(473)714-17-45</a></div><div><a href="tel:89961646060">8-996-164-60-60</a></div><div><a href="tel:84867770012">8-486-777-00-12</a></div>													</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  
				</div>
				<div class="layout column layout_44">
					<div class="editorElement layer-type-block ui-droppable block-25">
						      <div class="address-45 widget-20 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget">
        <div class="inner">
            <label class="cell-icon" for="tg45">
                <div class="icon"></div>
            </label>
            <input id="tg45" class="tgl-but" type="checkbox">
            <div class="block-body-drop">
                <div class="cell-text">
                    <div class="title"><div class="align-elem">Адрес:</div></div>
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
					  	<div class="email-46 widget-21 email-block contacts-block widget-type-contacts_email editorElement layer-type-widget">
		<div class="inner">
			<label class="cell-icon" for="tg-email-46">
				<div class="icon"></div>
			</label>
			<input id="tg-email-46" class="tgl-but" type="checkbox">
			<div class="block-body-drop">
				<div class="cell-text">
					<div class="title"><div class="align-elem">Email:</div></div>
					<div class="text_body">
						<div class="align-elem"><a href="mailto:smedlab@mail.ru%20;%20%20%20smedlabkhohol@mail.ru;%20smedlablivny@.mail.ru">smedlab@mail.ru ;   smedlabkhohol@mail.ru; smedlablivny@.mail.ru</a></div>
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
								   Copyright © 2021 - 2022								<br>
								 
								<br><a href="https://smedlab.su/politika-konfidencialnosti">Политика конфиденциальности</a>
							</div>
							 
						</div>
					</div>
					<div class="layout column layout_49">
						<div class="site-counters widget-23 widget-type-site_counters editorElement layer-type-widget">
							 <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click" target="_blank"><img id="licntFDEC" width="88" height="31" style="border:0" title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня" src="./О ЭС-МЕДЛАБ _ г. Воронеж_files/hit" alt=""></a><script>(function(d,s){d.getElementById("licntFDEC").src=
"https://counter.yadro.ru/hit?t17.18;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->
<!--__INFO2022-09-12 15:43:18INFO__-->
 
						</div>
					</div>
					<div class="layout column layout_50">
						  <div class="mega-copyright widget-24  widget-type-mega_copyright editorElement layer-type-widget"><span style="font-size:10px;" class="copyright"><!--noindex-->Создание, разработка сайта - Яценко Артем Викторович</span></div> 
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
var megacounter_key="981cf1e1b8b861221dc3c69051b87690";
(function(d){
    var s = d.createElement("script");
    s.src = "//counter.megagroup.ru/loader.js?"+new Date().getTime();
    s.async = true;
    d.getElementsByTagName("head")[0].appendChild(s);
})(document);
/*]]>*/</script>
<script type="text/javascript">/*<![CDATA[*/
$ite.start({"sid":3106564,"vid":3133535,"aid":3692686,"cp":21,"active":0,"domain":"smedlab.su","lang":"ru","trusted":false,"debug":false});
/*]]>*/</script>
<!-- /assets.bottom -->

 
<div class="lp-popup-wrapper js-popup-wrapper"><div class="lp-popup-overlay"></div><div class="lp-popup-inner js-popup-inner"></div></div></body></html>

<?php endif; ?>