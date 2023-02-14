<?php
include ("app/database/user.php");
if(!$_SESSION['id'])
{
header('Location:cabinet.php?session=1');
}
$i = 0;
$datatime = date('Y-m-d H:i:s');
$id = $_SESSION['id'];
// tt($datatime);
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


  </head >
  <?php include("header.php"); ?>  
    


<body id = "body" onload="send();">


    <!-- <div class="preview" id = "preview">
        <svg viewBox="0 0 50 50" class="spinner">
                <circle class="ring" cx="25" cy="25" r="22.5" />
                <circle class="line" cx="25" cy="25" r="22.5" />
        </svg>
    </div>    -->
    <h1 class = "admin-cabinet" id ="title-top">ЛИЧНЫЙ КАБИНЕТ ПАРТНЕРА</h1>
    <h4 class = "admin-cabinet_1" id ="title-top">Ваше расширение окна браузера не подходит для отображения личного кабинета</h4>
    <div class = "wrapper-menu">



    <script>
        
        const loader = document.querySelector('svg.spinner')
        const body = document.querySelector('body')
        let setProperty = (selector, property, value) => {
        loader.style.setProperty(property, value)
        let elements = document.querySelectorAll(selector)
        elements.forEach(element => element.innerHTML = value)
        }

        let toggleDarkness = () => body.classList.toggle('light')
    </script>

    



        <div class = "wrapper-menu-header">
                      <div class = "wrapper-menu-header-element" style = "border-bottom-style: none" id = "wrapper-menu-header-element1">
                        <a  href="demand.php" onclick = selectlist(0)  class = "" id = "qwerty"><u>Регистрация заявок</u></a>
                      </div>
                      <div class = "wrapper-menu-header-element" id = "wrapper-menu-header-element2">
                          <a href="listresult.php" onclick = selectlist(1) class = "" id = "qwerty1"><u>Просмотр результатов</u></a>
                      </div>
                    <div class = "wrapper-menu-header-element" id = "wrapper-menu-header-element4">
                         <a href="listreport.php" onclick = selectlist(3) class = "" id = "qwerty3"><u>Отчеты</u></a>
                    </div>
                    <div class = "wrapper-menu-header-element" id = "wrapper-menu-header-element3">
                           <a href="setting.php" onclick = selectlist(5)  class = "" id = "qwerty5"><u>Настройки</u></a>
                    </div>
        </div>

            <div id="list-register-demand" class = "wrapper-list-register-demand">
                <form name="contact_form" method="post" id = "myform" action="post.php" onsubmit="return validate_form();">
                    <div >

                    <div class = "no-demand" style = "margin: 30px 0 ">

                        <p style = "margin: 12px 30px; font-size: 16px; color: rgb(155, 75, 55);" >&#10004; Создание новой заявки.</p>
                    </div>
                        
                        <div class = "input-pacient-row">

                            <div>
                                <div >
                                    <p class = "input-date-demand-text">Дата заявки: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span>  </p>
                                </div>

                                <div class = "input-date-div-demand">
                                    <input step="any" class = "input-date-demand" type = "datetime-local" value = "<?php echo $datatime; ?>" name = "calendar" id = "calendar">
                                    <button type="button" id = "time" class = "button_cabinet"  >Сейчас</<button>
                                </div> 
                            </div> 

                           

                            <div  style = "margin-left: 50px">
                                <div >
                                    <p class = "input-date-demand-text">Забор анализа: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> </p>
                                </div>

                                <div class = "input-date-div-demand">
                                    <input  step="any"  class = "input-date-demand" type = "datetime-local" value = "<?php echo $datatime; ?>" name = "dataanaliz" id = "dataanaliz">
                                    <button  type="button" id = "time1" class = "button_cabinet">Сейчас</<button>
                                </div> 
                            </div> 

                        </div>  

                    </div>


                    <script>
                                $('#time').click(function()
                                {
                                    
                                    today = new Date();
                                    str = today.toLocaleString().toString();
                                    a = str.replace(',', "");
                                    a = a.replace('.', "-");
                                    a = a.replace('.', "-");
                                    var day = a.slice(0, 2);
                                    var yar = a.slice(-13, -9);
                                    var time1 = a.slice(11, 19);
                                    var mon = a.slice(2, 6);
                                    
                                    
                                    data_string = yar + mon + day + " " + time1; 
                                    document.getElementById('calendar').value = data_string;
                             
                                });

                                $('#time1').click(function()
                                {
                                    today = new Date();
                                    str = today.toLocaleString().toString();
                                    a = str.replace(',', "");
                                    a = a.replace('.', "-");
                                    a = a.replace('.', "-");
                                    var day = a.slice(0, 2);
                                    var yar = a.slice(-13, -9);
                                    var time1 = a.slice(11, 19);
                                    var mon = a.slice(2, 6);
                                    
                                    
                                    data_string = yar + mon + day + " " + time1; 
                                    document.getElementById('dataanaliz').value = data_string;
                                    
                                });
                            </script>

                    <div class = "input-date-demand-text">
                        Номер заявки: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                    </div>

                    <div class = "input-date-div-demand-number">
                        <div>
                            <input class = "input-date-demand" type="text" name="numberdemand" id = "numberdemand">
                        </div>
                        <div>
                            (номер присвоится автоматически, после сканирования штрих-кода)
                        </div>
                        <input  class = "check-urgently" type="checkbox"> Срочно
                    </div>
                    

                    <div class = "input-pacient">
                        <div>
                            <h5 class = "label-patient">Сведения о пациенте</h5>
                        </div>
                    
                    <div class = "input-box" id = "lol">
                        <div class = "input-pacient-row">


                                <div>
                                    <div>
                                        Фамилия: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                    </div>
                                    <div>
                                        <input class = "input-name" type = "text" id="surname" name = "surname1c">
                                    </div>
                                </div>  
                                
                                <div> 
                                    <div>
                                        Имя: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                    </div>
                                    <div>
                                        <input class = "input-name" type = "text" id="name" name = "name1c">
                                    </div>
                                </div> 

                                <div> 
                                    <div>
                                        Отчество <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                    </div>
                                    <div>
                                        <input class = "input-name" type = "text" id="middlename" name = "middlename1c">
                                    </div>
                                </div> 

                        </div>

                        <div class = "input-pacient-row">
                                <div> 
                                    <div>
                                        Дата рождения: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                    </div>
                                    <div>
                                        <input class = "input-date-demand" type = "date" name = "dateofbirth1c" id = "dateofbirth"  value="2000-01-01">
                                    </div>
                                </div> 

                                <div> 
                                    <div>
                                        Возраст:
                                    </div>
                                    <div>
                                        <input class = "age" type = "text" name = "age">
                                    </div>
                                </div> 

                                <div> 
                                    <div>
                                        Пол: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                    </div>
                                    <select class = "input-department" type = "" name = "sex">
                                            <option value = "Муж">Муж</option>
                                            <option value = "Жен">Жен</option>
                                        </select>
                                </div>

                                <div> 
                                    <div>
                                        <input  class = "check-urgently" type="checkbox" name = "smear" value="cervical"> Cervical
                                    </div>
                                    <div>
                                        <input  class = "check-urgently" type="checkbox" name = "smear" value="vagina"> Vagina
                                    </div>
                                    <div>
                                        <input  class = "check-urgently" type="checkbox" name = "smear" value="uretra"> Uretra
                                    </div>
                                </div>
                        </div>  
                    </div>            

                    
                    <div class = "input-box"> 

                        <div class = "input-pacient-row" style = "flex-wrap: wrap;">     

                                
                                    <div style = "padding-bottom: 20px">
                                        <div>
                                            E-mail:
                                        </div>
                                        <div>
                                            <input class = "input-email" type = "text" name = "email">
                                        </div>
                                    </div>  
                                
                                    <div> 
                                        <div>
                                            Номер телефона:
                                        </div>
                                        <div>
                                            <input class = "input-name" type = "text" name = "phone">
                                        </div>
                                    </div> 

                                    <div>
                                        <div>
                                        Серия <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                        </div>
                                        <div>
                                            <input maxlength="4" class = "sex" type = "text" name = "series" id = "series">
                                        </div>
                                    </div>

                                    <div>
                                        <div>
                                        Номер <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                        </div>
                                        <div>
                                            <input maxlength="6" class = "sex" type = "text" name = "number" id = "number">
                                        </div>
                                    </div>
                                    <div> 
                                    <div >
                                        Примечание:
                                    </div>
                                    <div>
                                        <input class = "input-note" type = "text" name = "note">
                                    </div>
                                </div> 
                                

                                
                        </div>
                               
                    </div>    
                        
                        
                        
                        
                            </div>


                    <fieldset class = "customer-information">
                        <div>
                            <h5 class = "label-patient">Сведения о заказчике</h5>
                        </div>


                        

                            <div class = "customer-information-row">
                                <div> 
                                    <div>
                                        Отделение:
                                    </div>
                                    <div>
                                        <input class = "input-department" type = "text" placeholder = "Отдел травматологии" name = "department">

                                    </div>  
                                </div>

                                <div>
                                    <div>
                                        Врач:
                                    </div>
                                    <div>

                                        <input class = "input-doctor" type = "text" placeholder = "Фамилия" style = "with: 150px" name = "doctorsurname">
                                        <input class = "input-doctor" type = "text" placeholder = "Имя" style = "with: 150px" name = "doctorname">
                                        <input class = "input-doctor" type = "text" placeholder = "Отчество" style = "with: 150px" name = "doctormiddlename">
                                    </div> 
                                </div>

                                <div style = "margin-left: 20px" >
                                    <div>
                                        Тип приема: <span style = "color: red;font-weight:bold; font-size: 15px;">*</span> 
                                    </div>
                                    <div >
                                            <select class = "input-department" type = "" name = "typereception" >
                                                <option value = "Амбулаторный">Амбулаторный</option>
                                                <option value = "Стационарный">Стационарный</option>
                                                <option value = "Диспансеризация">Диспансеризация</option>
                                                <option value = "ПрофОсмотр">Проф. осмотр</option>
                                                <option value = "БезКарты">Без карты</option>
                                            </select>
                                    </div>
                                </div>
                               
                                <div >
                                    <div>
                                        Информация об анализе:
                                    </div>
                                    <div>
                                        <input class = "input-info-analyz" type = "text" style = "" name = "infoanaliz">
                                    </div> 
                                </div>
                                
                            </div>
                           
                        
                    </fieldset>  
                    
                    
                    <h5 class = "label-new-demand" style = "text-align:center;">ЗАКАЗ ИССЛЕДОВАНИЙ</h5>

                    <hr style = "margin-bottom: 4px; color: rgb(152, 145, 145);"></hr>

                    <div  style = "display: flex; flex-direction: row; margin-top: 15px ">
                        <div style = "width: 350px; padding-left: 10px">
                            Группы исследований
                        </div>
                                    
                        <div class = "name-issl" style = "width: 400px; padding-left: 10px">
                            Исследования
                        </div>

                        <div class = "zakaz-issl" style = "width: 400px; padding-left: 10px">
                            Заказанные исследования
                        </div>
                    </div>



                    <hr style = "margin-bottom: 4px; color: rgb(152, 145, 145);" ></hr>

                    <div class = "all-issl" id = "all-issl" style = "display: flex; flex-direction: row; margin-top: 15px; ">
                        <div class = "box-issl" id = "box-issl" style = "height: 350px;">
                                
                                <div class = "row-issl" id = "row-issl">

                                </div>
                        </div>
                                    
                        <div class = "box-issl-res" id = "box-issl-res" style = "width: 400px; overflow-y:scroll; height: 350px;" >

                                <div class = "service" id = "service">

                                </div>
                            
                        </div>

                        <div class = "box-issl-itog" id = "box-issl-itog" style = "width: 400px; height: 350px; overflow-y:scroll;" >

                                <div>

                                        <div class = "itog" id = "itog">
                                        
                                        </div>  
                                        
                                        <img class = "" id = "" src = "icon-close.png">

                                        </img> 

                                </div>
                                    
                        </div>
                    </div>
                       
                     <div style = "margin-top: 50px; margin-bottom: 50px; "> <button type="submit" class = "button_cabinet" id = "save">Сохранить</<button></div>
                </form>
            </div>





           
        </div>
    </div>
          
    <script>

function validate_form()
    {   res_str = res.toString();
        var div = document.createElement('input');
                let box_issl = document.getElementById('lol');
                box_issl.appendChild(div);
                div.id ="input";
                div.innerHTML = "input344343434343434433434";
                div.name = "restyrtyrt";
                document.getElementById("input").value = res_str;

        valid = true;
        calendar
            if ( document.contact_form.name1c.value == "" )
            {       
                    document.getElementById('name').classList.add("input-style-no");
                    
                    
                    valid = false;
            }else{
                    document.getElementById('name').classList.remove("input-style-no");
            }
            if ( document.contact_form.calendar.value == "" )
            {       
                    document.getElementById('calendar').classList.add("input-style-no");
                    
                    
                    valid = false;
            }else{  
                    document.getElementById('calendar').classList.remove("input-style-no");
            }
            if ( document.contact_form.dataanaliz.value == "" )
            {       
                    document.getElementById('dataanaliz').classList.add("input-style-no");
                    
                    valid = false;
            }else{
                    document.getElementById('dataanaliz').classList.remove("input-style-no");
            }
            if ( document.contact_form.surname1c.value == "" )
            {       
                    document.getElementById('surname').classList.add("input-style-no");
                    
                    valid = false;
            }else{
                    document.getElementById('surname').classList.remove("input-style-no");
            }
            if ( document.contact_form.middlename1c.value == "" )
            {       
                    document.getElementById('middlename').classList.add("input-style-no");
                    
                    valid = false;
            }else{
                    document.getElementById('middlename').classList.remove("input-style-no");
            }
            if ( document.contact_form.numberdemand.value == "" )
            {       
                    document.getElementById('numberdemand').classList.add("input-style-no");
                    
                    valid = false;
            }else{
                    document.getElementById('numberdemand').classList.remove("input-style-no");
            }
            if ( document.contact_form.dateofbirth1c.value == "" )
            {       
                    document.getElementById('dateofbirth').classList.add("input-style-no");
                    
                    valid = false;
            }else{
                    document.getElementById('dateofbirth').classList.remove("input-style-no");
            }
            if ( document.contact_form.series.value == "" )
            {       
                    document.getElementById('series').classList.add("input-style-no");
                    
                    valid = false;
            }else{
                    document.getElementById('series').classList.remove("input-style-no");
            }
            if ( document.contact_form.number.value == "" )
            {       
                    document.getElementById('number').classList.add("input-style-no");
                    
                    valid = false;
            }else{
                    document.getElementById('number').classList.remove("input-style-no");
            }
            if ( document.getElementById('research-input').value == "" )
            {
                    document.getElementById('research').classList.add("input-style-no");

                    valid = false;
            }else{
                document.getElementById('research').classList.remove("input-style-no");    
            }

            if ( valid == false )
            {
                    alert("Пожалуйства, заполните выделенные поля.");
            }else{
                


                document.getElementById('research').classList.remove("input-style-no");
                document.getElementById('number').classList.remove("input-style-no");
                document.getElementById('series').classList.remove("input-style-no");
                document.getElementById('dateofbirth').classList.remove("input-style-no");
                document.getElementById('dateofbirth').classList.remove("input-style-no");
                document.getElementById('numberdemand').classList.remove("input-style-no");
                document.getElementById('middlename').classList.remove("input-style-no");
                document.getElementById('surname').classList.remove("input-style-no");
                document.getElementById('dataanaliz').classList.remove("input-style-no");
                document.getElementById('calendar').classList.remove("input-style-no");
                document.getElementById('name').classList.remove("input-style-no");

                                 
                
            }
        
            return valid;
    }


    
        let res = [];    
        
        $(document).ready(function($){
            $('#all-issl').on("click",function(event){
                type_service = false;
                vid_issl = "row-issl";
                service = "service";
                str = String(event.target.id);

                //проверка на вид исследования
                if(str.includes(vid_issl) == true){
  
                    let issl = document.querySelector('#' + str);
                    let issl_name = issl.innerHTML;
                    param = {row_issl: issl_name};
                    // alert(param);
                    $.ajax({    
                                    type: "POST",
                                    url: "/getissl.php",
                                    data: param,
                                    success: function(data){
                                        
                                        //  alert(data);

                                        var vid_iss = JSON.parse(data);  
                                        // alert(vid_iss[0].name);
                                        // alert(vid_iss.length);

                                        
                                        document.querySelectorAll('.service').forEach(function(a) {
                                        a.remove()
                                        }) 
                                            
                                        for (a = 0; a < vid_iss.length; a++) {
                                            
                                            var div = document.createElement('div');
                                            let box_issl = document.querySelector('#box-issl-res');
                                            box_issl.appendChild(div);
                                            div.classList.add("service");
                                            div.id ="service" + a;
                                            div.innerHTML = vid_iss[a].name;
                                            if (res.includes(vid_iss[a].name) == true){
                                                div.style.background = "rgb(223, 122, 122)";
                                            }    
                                            // var div1 = document.createElement('div');
                                            // let row_issl = document.querySelector('#row-table' + a);
                                            // row_issl.appendChild(div1);
                                            // div1.classList.add("con-issl");
                                            // div1.id ="con-issl" + a;
                                            // div1.innerHTML = vid_iss[a].name;
                                            



                                        }
                                        

                                    },
                                    
                                    error: function(){
                                        alert('Ошибка отправки запроса');
                                    }
                        
                            });
                }else if(str.includes(service) == true){

                    let service = document.querySelector('#' + str);
                    service_name = service.innerHTML;

                    if(service.style.background == "rgb(223, 122, 122)"){

                        service.style.background = "rgb(255, 255, 255)";
                        id = "itog" + service_name;
                        el = document.getElementById(id);
                        el.remove();
                          
                        res.pop(service_name);
                        

                    }else{

                        service.style.background = "rgb(223, 122, 122)";

                        var div1 = document.createElement('div');
                        let box_issl1 = document.getElementById('box-issl-itog');
                        box_issl1.appendChild(div1);
                        div1.classList.add("itog");
                        div1.id = "itog" + service_name;
                        div1.innerHTML = service_name;

                        res.push(service_name);
                    }



                }
                    

            });
        });

        $(document).ready(function() {
            $(myform).keydown(function(event){
                if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
        });

        
    </script> 
    
    <script>

    function send() {   
                    
                    param = {demand: 'demand'};
                    // alert(param);
                    // Отсылаем паметры
                        $.ajax({    
                                    type: "POST",
                                    url: "/getissl.php",
                                    data: param,
                                    success: function(data){
                                        
                                        // alert(data);

                                        var vid_iss = JSON.parse(data);  
                                        
                                        // alert(vid_iss.length);

                                        
                                        document.querySelectorAll('.row-issl').forEach(function(a) {
                                        a.remove();
                                        }) 
                                        document.querySelectorAll('.service').forEach(function(a) {
                                        a.remove();
                                        }) 
                                        document.querySelectorAll('.itog').forEach(function(a) {
                                        a.remove()
                                        }) 
                                            
                                        for (a = 0; a < vid_iss.length; a++) {
                                            
                                            var div = document.createElement('div');
                                            let box_issl = document.querySelector('#box-issl');
                                            box_issl.appendChild(div);
                                            div.classList.add("row-issl");
                                            div.id ="row-issl" + a;
                                            div.innerHTML = vid_iss[a].name;
                                            
                                        } 
                                    

                                    },
                                    error: function(){
                                        alert('Ошибка отправки запроса');
                                    }
                        
        });
        
        
}

    

</script>       
        
        
</body>


<?php endif; ?>