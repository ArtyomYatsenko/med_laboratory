<?php
include ("app/database/user.php");
if(!$_SESSION['id'])
{
header('Location:cabinet.php?session=1');
}
$i = 0;
$datatime = date('Y-m-d');

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


  </head >
  <?php include("header.php"); ?>  
    


<body id = "body" onload="send();">


    <div class="preview" id = "preview">
        <svg viewBox="0 0 50 50" class="spinner">
                <circle class="ring" cx="25" cy="25" r="22.5" />
                <circle class="line" cx="25" cy="25" r="22.5" />
        </svg>
    </div>   
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
                
                <div class = "button-demand">

                    <div>
                        <button type="button" class = "button_cabinet" onclick= "window.location.href = 'registerdemand.php';" >Зарегистрировать заявку</button>
                    </div>
                    
                    <div id = "save-div">
                        <button type="button" class = "button_cabinet" id = "save" >Распечатать список</button>
                        <button type="button" class = "button_cabinet" id = "save" onclick="doFunction();">Для разработчиков</button>
                    </div>
                    

                </div>

            </div>

            <div class = "data-demand-list">

                <h5 style = "color:  rgb(155, 75, 55);">Заявки, зарегистрированные на </h5>

                <input id = "dateInput" onchange = "send();" style = "margin-left: 10px; margin-bottom: 5px;" type = "date" value = "<?php echo $datatime; ?>">
            </div>

             <div class = "no-demand" id = "no-demand">

                <p style = "margin: 12px 30px; font-size: 16px; color: rgb(155, 75, 55);" >На выбранную дату не зарегистрировано ни одной заявки.</p>
            </div>

            <div class = "table" id = "wrapper-table">
                    <div class = "header-table">
                            <div class = "created">
                                <!-- <input  class = "check-all" type="checkbox"> -->
                                <a href="#" class = "">Создана</a>
                            </div>
                            <!-- <div class = "register">
                                <a href="#" class = "">Регистрация</a>
                            </div> -->
                            <div class = "demand">
                                <a href="#" class = "">Лаборатория</a>
                            </div>
                            <div class = "demand">
                                <a href="#" class = "">Выполнена</a>
                            </div>
                            <div class = "completed">
                                <a href="#" class = "">Статус</a>
                            </div>
                            <div class = "patient">
                                <a href="#" class = "">Пациент</a>
                            </div>
                            <div class = "comment">
                                <a href="#" class = "">Комментарий</a>
                            </div>
                            <div class = "demand">
                                <a href="#" class = "">Заявка</a>
                            </div>
                            
                    </div>

                    
                    
                </div>




           
        </div>
    </div>
          
    
        
        
</body>


<script>
    function doFunction(){
        window.location.replace("https://esmedlab.ru/registerdemand1.php");
    }
function getdate(){
    
    data = document.getElementById("dateInput").value;

        data2 = new Date(data)
        data2.setDate(data2.getDate() + 1);
        str = data2.toLocaleString().toString();
        // alert(str);
        str = str.replace('.', "");
        str = str.replace('.', '');  
        // alert(str)
        var day = str.slice(0, 2);
        var yar = str.slice(-14, -10);
        var mon = str.slice(2, 4);
        // alert(day)
        // alert(yar)
        // alert(mon)
        data_string = yar + "-" + mon + "-" + day; 

        data1 = new Date(data);
        str1 = data1.toLocaleString().toString();
        str1 = str1.replace('.', "");
        str1 = str1.replace('.', "");
        var day1 = str1.slice(0, 2);
        var yar1 = str1.slice(-14, -10);
        var mon1 = str1.slice(2, 4);
        data_string1 = yar1 + "-" + mon1 + "-" + day1;
        

        var Arr = new Object();
        Arr[0] = data_string1;
        Arr[1] = data_string;
        Arr[2] = '<?php echo $nameorganization?>';
        // alert(Arr[0]);
        // alert(Arr[1]);
                                      
                                        
      
    return Arr;
}
function send() {   
                    mass = getdate();
                    text = mass[0];
                    text1 = mass[1];
                    nameorganization = mass[2];
                    // text_t1 = text_t.replace('-', '.');
                    // text = text_t1.replace('-', '.');
                    
                    // alert(text);
                    // alert(text1);
                    param = "date";
                    $("#preview").show();
                    setTimeout(function() { $("#preview").hide(); 
                    }, 500);
                    //Получаем параметры
                    
                   
                    
                    

                    // Отсылаем паметры
                        $.ajax({    
                                    type: "POST",
                                    url: "/partnerfind.php",
                                    data: "text="+text+"&param="+param+"&text1="+text1+"&nameorganization="+nameorganization,
                                    success: function(data){


                                        var data_pr = data;
                                        var Array = data_pr.split('#');
                                    
                                        //  alert(data_pr);
                                        
                                        for (var i = 0; i < Array.length; i++) {

                                            if(i == 0){
                                                var created = JSON.parse(Array[i]);
                                                
                                            }else if(i == 1){
                                                var completed_status = JSON.parse(Array[i]);

                                            }else if(i == 2){
                                                var demand = JSON.parse(Array[i]);

                                            }else if(i == 3){
                                                var index_registrator = JSON.parse(Array[i]);

                                            }else if(i == 4){
                                                var comment = JSON.parse(Array[i]);

                                            }else if(i == 5){
                                                var patient = JSON.parse(Array[i]);
                                                

                                            }else if(i == 6){
                                                var datalaboratory = JSON.parse(Array[i]);    
                                            }else if (i == 7){
                                                var numbertube = JSON.parse(Array[i]);    
                                            }
                                        }
                                        if (created.length === 0) {
                                            // alert("Пусто");
                                            $("#no-demand").show(); 
                                            $("#wrapper-table").hide();
                                            // $("#save-div").hide();
                                            
                                        }else{
                                            $("#no-demand").hide();
                                            $("#wrapper-table").show();
                                            $("#save-div").show();
                                        }
                                        // alert(patient[0].name);
                                        // alert(created);
                                        // alert(completed_status);
                                        //  alert(demand[4]);
                                        
                                        
                                        

                                        let wrapper_table = document.querySelector('#wrapper-table');
                                        var a = 0;    
                                        // document.getElementById("wrapper-table").remove();
                                        
                                        document.querySelectorAll('.row-table-end').forEach(function(a) {
                                        a.remove()
                                        })
                                        document.querySelectorAll('.row-table').forEach(function(a) {
                                        a.remove()
                                        })
                                        

                                        // for (a = 0; a < created.length; a++) {

                                        //     if(document.getElementById("row-table" + a) != null){ 
                                        //         document.getElementById("row-table" + a).remove();   
                                        //     }
                                            
                                        // }  

                                        // if(document.getElementById("row-table-end") != null){ 
                                        //         document.getElementById("row-table-end").remove();   
                                        //     }
                                            
                                        for (a = 0; a < created.length; a++) {
                                        var div = document.createElement('div');
                                        wrapper_table.appendChild(div);
                                        div.classList.add("row-table");
                                        div.id ="row-table" + a;
                                        for(var b = 0; b < 9; b++){
                                            if(b == 0){
                                                var div_1 = document.createElement('div');
                                                document.getElementById("row-table" + a).appendChild(div_1);
                                                div_1.classList.add("created");
                                                div_1.id = "created" + a;

                                                data2 = new Date(created[a]);
                                                
                                                data2.setDate(data2.getDate());
                                                str = data2.toLocaleString().toString();
                                                str = str.replace(',', "");
                                                
                                                div_1.innerHTML = str;

                                                
                                                 
                                                // var checkbox = document.createElement('input');
                                                // checkbox.type = 'checkbox';
                                                // document.getElementById("created" + a).appendChild(checkbox);
                                                // checkbox.classList.add("check-all");

                                            }
                                            else if(b == 1){
                                                var div_1 = document.createElement('div');
                                                document.getElementById("row-table" + a).appendChild(div_1);
                                                div_1.classList.add("datalaboratory");
                                                div_1.id = "datalaboratory" + a;
                                                div_1.innerHTML = datalaboratory[a];
                                                // var span = document.createElement('span');
                                                // document.getElementById("datalaboratory" + a).appendChild(span);
                                                //   span.innerHTML = datalaboratory[a];

                                            }
                                            else if(b == 3){
                                                var div_1 = document.createElement('div');
                                                document.getElementById("row-table" + a).appendChild(div_1);
                                                div_1.classList.add("completed");
                                                div_1.id = "completed" + a;

                                                var img = document.createElement('img');
                                                if(completed_status[a] == "(Выполнена)"){
                                                    img.src = "/images/green_circle.png?t=" + Math.floor(Math.random( ) * (100000 - 1000 + 1)) + 1000;
                                                    
                                                }else{
                                                    img.src = "/images/yellow_circle.png?t=" + Math.floor(Math.random( ) * (100000 - 1000 + 1)) + 1000;
                                                }
                                                
                                                img.classList.add("circle");
                                                // img.width="32";
                                                // img.height="32";
                                                div_1.appendChild(img);

                                                var span = document.createElement('span');
                                                document.getElementById("completed" + a).appendChild(span);
                                                span.innerHTML = completed_status[a];


                                            }else if(b == 4){
                                                var div_1 = document.createElement('div');
                                                document.getElementById("row-table" + a).appendChild(div_1);
                                                div_1.classList.add("patient");
                                                div_1.id = "patient" + a;
                                                div_1.innerHTML = patient[a].surname + " " + patient[a].name + " " + patient[a].middlename + '<br>' + "(" + patient[a].dateofbirth + ")";
                                                
                                            }else if(b == 2){
                                                var div_1 = document.createElement('div');
                                                document.getElementById("row-table" + a).appendChild(div_1);
                                                div_1.classList.add("demand");
                                                div_1.id = "demand" + a;
                                                div_1.innerHTML = demand[a];

                                                // var span = document.createElement('span');
                                                // document.getElementById("demand" + a).appendChild(span);
                                                // span.innerHTML = demand[a];

                                            }else if(b == 5){
                                                var div_1 = document.createElement('div');
                                                document.getElementById("row-table" + a).appendChild(div_1);
                                                div_1.classList.add("comment");
                                                div_1.innerHTML = comment[a];

                                                

                                            }else if(b == 7){
                                                // var div_1 = document.createElement('div');
                                                // document.getElementById("row-table" + a).appendChild(div_1);
                                                // div_1.classList.add("download-table");
                                                // if(demand[a] == ""){
                                                //     div_1.innerHTML = "";  
                                                // }else{
                                                //     div_1.innerHTML = '<a href="upload6596543123/' + index_registrator[a] + '.pdf" target="_blank" class = "download-table-a" >П</a>';
                                                // }
                                                
                                                if(demand[a] != null){
                                                    
                                                    var ad = document.createElement('a');
                                                    ad.id = "a-download" + a;
                                                    ad.href = "upload6596543123/" + index_registrator[a] + ".pdf";
                                                    ad.download = "upload6596543123/" + index_registrator[a] + ".pdf";
                                                    document.getElementById("row-table" + a).appendChild(ad);
                                                    var img = document.createElement('img');
                                                    document.getElementById("a-download" + a).appendChild(img);
                                                    img.src = "/images/download.png?t=" + Math.floor(Math.random( ) * (100000 - 1000 + 1)) + 1000;      
                                                }
                                            }else if(b == 8){
                                                // var div_1 = document.createElement('div');
                                                // document.getElementById("row-table" + a).appendChild(div_1);
                                                // div_1.classList.add("download-table");
                                                // if(demand[a] == ""){
                                                //     div_1.innerHTML = "";  
                                                // }else{
                                                //     div_1.innerHTML = '<a href="upload6596543123/' + index_registrator[a] + '.pdf" target="_blank" class = "download-table-a" >П</a>';
                                                // }
                                                var img = document.createElement('img');
                                                if(demand[a] != null){
                                                    
                                                    var ad1 = document.createElement('a');
                                                    ad1.id = "a-download_blank" + a;
                                                    ad1.href = "upload6596543123/" + index_registrator[a] + ".pdf?t=" + Math.floor(Math.random( ) * (100000 - 1000 + 1)) + 1000;
                                                    // ad.download = "upload6596543123/'" + index_registrator[a] + ".pdf";
                                                    ad1.target="_blank";
                                                    document.getElementById("row-table" + a).appendChild(ad1);
                                                    var img = document.createElement('img');
                                                    
                                                    document.getElementById("a-download_blank" + a).appendChild(img);
                                                    img.src = "/images/viewing.png?t=" + Math.floor(Math.random( ) * (100000 - 1000 + 1)) + 1000;      
                                                }
                                            }else if(b == 6){
                                                var div_1 = document.createElement('div');
                                                document.getElementById("row-table" + a).appendChild(div_1);
                                                div_1.classList.add("demand");
                                                div_1.innerHTML = numbertube[a];
                                            } 
                                        }
                                    
                                        }

                                        if(a != 0){
                                            var div_2 = document.createElement('div');
                                            document.getElementById("wrapper-table").appendChild(div_2);
                                            div_2.classList.add("row-table-end");
                                            div_2.id ="row-table-end";

                                            var div_2 = document.createElement('div');
                                            document.getElementById("row-table-end").appendChild(div_2);
                                            div_2.classList.add("completed");
                                            div_2.id ="created-end";
                                            div_2.innerHTML = '<span class = ""><b>Всего заявок</b></span>';

                                            var div_2 = document.createElement('div');
                                            document.getElementById("row-table-end").appendChild(div_2);
                                            div_2.classList.add("register");
                                            div_2.id ="register-end";
                                            
                                            var span = document.createElement('span');
                                            document.getElementById("register-end").appendChild(span);
                                            span.innerHTML = '<b>' + a + '<b>';
                                            
                                        }
   

                                    },
                                    error: function(){
                                        alert('Ошибка отправки запроса');
                                    }
                        
        });
        
        
}
    </script>

<script>

$("#preview").hide();

</script>  


<?php endif; ?>