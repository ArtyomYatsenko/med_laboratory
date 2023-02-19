<?php
include ("app/database/user.php");
if(!$_SESSION['id'])
{
header('Location:index.php');
}
//динамические массивы для хранения данных
$created = [];
$completed_status = [];
$demand = [];
$index_registrator = [];
$patient = [];
$allanaliz = [];
$id = $_SESSION['id'];
$patient_tests = selectAll('patient_tests', ['id_patient' => $id]);
$i = 0;
$qwe = 0;
// tt($patient_tests);
    // if(count($patient_tests) == 0){
    //     $_SESSION['created'] = $patient_tests['created'];
    //     $_SESSION['completed_status'] = $patient_tests['completed_status'];
    //     $_SESSION['demand'] = $patient_tests['demand'];
    //     if($_SESSION["completed_status" . $i] == 1){
    //       $_SESSION["completed_status" . $i] = "(Выполнена)";
    //     }else{
    //       $_SESSION["completed_status" . $i] = "(В процессе)";
    //     }   
    // }else{   
        foreach($patient_tests as $value){
                // echo "i=".$i;
            
            foreach($value as $qwerty){
                // echo $qwe;

                $allanaliz[] = $qwerty; 


                if($qwe == 0){
                    $created[$i] = $allanaliz[$qwe];

                }elseif($qwe == 1){

                    $completed_status[$i] = $allanaliz[$qwe];
                    if($completed_status[$i] == 1){
                        $completed_status[$i] = "(Выполнена)"; 
                    }else{
                        $completed_status[$i] = "(В процессе)";
                    }
                }elseif($qwe == 2){

                    $demand[$i] = $allanaliz[$qwe];

                }elseif($qwe == 7){

                    $index_registrator[$i] = $allanaliz[$qwe];

                    

                }

                $qwe++;
                if($qwe == 12){ $qwe = 0;
                  unset($allanaliz); }

            } 
                
        $i++;    

        }
    // }
//Файлы с анализами
//  tt($created);
//  tt($completed_status);
//  tt($demand);
//  tt($index_registrator);
?>




<?php if($_SESSION['admin'] == 1):?>



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
                  <li class = "cabinet-li1">
                    <div >
                        <h5> <a href="#" onclick = "">Результаты анализов</a> </h5>
                    </div>
                  </li>
                </ul>
                <div class = "cabinet-container-text">
                      <h1 class = "cabinet-text" id = "cabinet-text">ИСТОРИЯ АНАЛИЗОВ</h1>
                </div>
              </div>
            <div class = "wrapper-table" id = "wrapper-table">
              <div class = "header-table">
                      <div class = "created">
                          <!-- <input  class = "check-all" type="checkbox"> -->
                        <a href="#" class = "">Создана</a>
                      </div>
                      <!-- <div class = "register">
                          <a href="#" class = "">Регистрация</a>
                      </div> -->
                      <div class = "completed">
                         <a href="#" class = "">Статус</a>
                    </div>
                    <div class = "patient">
                         <a href="#" class = "">Пациент</a>
                    </div>
                      <div class = "demand">
                           <a href="#" class = "">Выполнена</a>
                    </div>
            </div>
            
            <?php if($i > 1):?>
                

              <script>
                // Передача массивов из php в js
                var createdstring = String(<?php echo json_encode($created); ?>);
                let created = createdstring.split(',');

                var completed_statusstring = String(<?php echo json_encode($completed_status); ?>);
                let completed_status = completed_statusstring.split(',');

                var demandstring = String(<?php echo json_encode($demand); ?>);
                let demand = demandstring.split(',');

                var index_registratorstring = String(<?php echo json_encode($index_registrator); ?>);
                let index_registrator = index_registratorstring.split(',');
                // alert(created[0]);
                // alert(completed_status[0]);
                // alert(demand[0]);
                // alert(index_registrator[0]);
                // ==================================
                let wrapper_table = document.querySelector('#wrapper-table');
                for (var a = 0; a < <?php echo $i?>; a++) {
                  var div = document.createElement('div');
                  wrapper_table.appendChild(div);
                  div.classList.add("row-table");
                  div.id ="row-table" + a;
                  for(var b = 0; b < 6; b++){
                      if(b == 0){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table" + a).appendChild(div_1);
                          div_1.classList.add("created");
                          div_1.id = "created" + a;

                          // var checkbox = document.createElement('input');
                          // checkbox.type = 'checkbox';
                          // document.getElementById("created" + a).appendChild(checkbox);
                          // checkbox.classList.add("check-all");

                          var span = document.createElement('span');
                          document.getElementById("created" + a).appendChild(span);
                          span.innerHTML = created[a];
                      }
                      // else if(b == 1){
                      //     var div_1 = document.createElement('div');
                      //     document.getElementById("row-table" + a).appendChild(div_1);
                      //     div_1.classList.add("register");
                      //     div_1.id = "register" + a;

                      //     var span = document.createElement('span');
                      //     document.getElementById("register" + a).appendChild(span);
                      //     if(a < 1){
                      //       span.innerHTML = '<?php echo str_replace("-", ".", $_SESSION["register"])?>';
                      //     }else{
                      //       span.innerHTML = '<?php echo str_replace("-", ".", $_SESSION["register" . $index])?>';
                      //     }
                      // }
                      else if(b == 2){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table" + a).appendChild(div_1);
                          div_1.classList.add("completed");
                          div_1.id = "completed" + a;

                          var span = document.createElement('span');
                          document.getElementById("completed" + a).appendChild(span);
                          span.innerHTML = completed_status[a];


                      }else if(b == 3){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table" + a).appendChild(div_1);
                          div_1.classList.add("patient");
                          div_1.id = "patient" + a;

                          var span = document.createElement('span');
                          document.getElementById("patient" + a).appendChild(span);
                          span.innerHTML = '<?php echo $_SESSION["surname"] . " " . $_SESSION["name"] . " " . $_SESSION["middlename"] . '<br>' . str_replace("-", ".", $_SESSION["dateofbirth"]); ?>';
                          
                      }else if(b == 4){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table" + a).appendChild(div_1);
                          div_1.classList.add("demand");
                          div_1.id = "demand" + a;

                          var span = document.createElement('span');
                          document.getElementById("demand" + a).appendChild(span);
                          span.innerHTML = demand[a];

                      }else if(b == 5){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table" + a).appendChild(div_1);
                          div_1.classList.add("download-table");
                          if(demand[a] == ""){
                            div_1.innerHTML = "";  
                          }else{
                            div_1.innerHTML = '<a href="upload6596543123/' + index_registrator[a] + '.pdf" target="_blank" class = "download-table-a" >Просмотр</a>';
                          }


                          var div_2 = document.createElement('div');
                          document.getElementById("row-table" + a).appendChild(div_2);
                          div_2.classList.add("download-table");
                          if(demand[a] == ""){
                            div_2.innerHTML = ""; 
                          }else{
                            div_2.innerHTML = '<a href="upload6596543123/' + index_registrator[a] + '.pdf" class = "download-table-a" download>Скачать</a>';
                          }

                      } 
                  }
                  
                }
                if(<?php echo $i?> != 0){
                    var div_2 = document.createElement('div');
                    document.getElementById("wrapper-table").appendChild(div_2);
                    div_2.classList.add("row-table-end");
                    div_2.id ="row-table-end";

                    var div_2 = document.createElement('div');
                    document.getElementById("row-table-end").appendChild(div_2);
                    div_2.classList.add("created");
                    div_2.id ="created-end";
                    div_2.innerHTML = '<span class = ""><b>Всего заявок</b></span>';

                    var div_2 = document.createElement('div');
                    document.getElementById("row-table-end").appendChild(div_2);
                    div_2.classList.add("register");
                    div_2.id ="register-end";
                    
                    var span = document.createElement('span');
                    document.getElementById("register-end").appendChild(span);
                    span.innerHTML = '<b><?php echo $i ?><b>';
                    
                  }
                  
              </script>









            <? else: ?>
              <script>
                // Передача массивов из php в js
                var createdstring = String(<?php echo json_encode($created); ?>);
                let created = createdstring.split(',');

                var completed_statusstring = String(<?php echo json_encode($completed_status); ?>);
                let completed_status = completed_statusstring.split(',');

                var demandstring = String(<?php echo json_encode($demand); ?>);
                let demand = demandstring.split(',');

                var index_registratorstring = String(<?php echo json_encode($index_registrator); ?>);
                let index_registrator = index_registratorstring.split(',');
                // ==============================================================
                let wrapper_table = document.querySelector('#wrapper-table');
                  var div = document.createElement('div');
                  wrapper_table.appendChild(div);
                  div.classList.add("row-table");
                  div.id ="row-table";
                  for(var b = 0; b < 6; b++){
                      if(b == 0){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table").appendChild(div_1);
                          div_1.classList.add("created");
                          div_1.id = "created";
                          // var checkbox = document.createElement('input');
                          // checkbox.type = 'checkbox';
                          // document.getElementById("created" + a).appendChild(checkbox);
                          // checkbox.classList.add("check-all");
                          var span = document.createElement('span');
                          document.getElementById("created").appendChild(span);
                          span.innerHTML = created[0];
                      }
                      // else if(b == 1){
                      //     var div_1 = document.createElement('div');
                      //     document.getElementById("row-table" + a).appendChild(div_1);
                      //     div_1.classList.add("register");
                      //     div_1.id = "register" + a;

                      //     var span = document.createElement('span');
                      //     document.getElementById("register" + a).appendChild(span);
                      //     if(a < 1){
                      //       span.innerHTML = '<?php echo str_replace("-", ".", $_SESSION["register"])?>';
                      //     }else{
                      //       span.innerHTML = '<?php echo str_replace("-", ".", $_SESSION["register" . $index])?>';
                      //     }
                      // }
                      else if(b == 2){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table").appendChild(div_1);
                          div_1.classList.add("completed");
                          div_1.id = "completed";

                          var span = document.createElement('span');
                          document.getElementById("completed").appendChild(span);
                          span.innerHTML = completed_status[0];
               

                      }else if(b == 3){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table").appendChild(div_1);
                          div_1.classList.add("patient");
                          div_1.id = "patient";

                          var span = document.createElement('span');
                          document.getElementById("patient").appendChild(span);
                          span.innerHTML = '<?php echo $_SESSION["surname"] . " " . $_SESSION["name"] . " " . $_SESSION["middlename"] . '<br>' . str_replace("-", ".", $_SESSION["dateofbirth"]); ?>';
                          
                      }else if(b == 4){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table").appendChild(div_1);
                          div_1.classList.add("demand");
                          div_1.id = "demand";

                          var span = document.createElement('span');
                          document.getElementById("demand").appendChild(span);
                          span.innerHTML = demand[0];

                      }else if(b == 5){
                          var div_1 = document.createElement('div');
                          document.getElementById("row-table").appendChild(div_1);
                          div_1.classList.add("download-table");
                          if(demand[0] == ""){
                            div_1.innerHTML = "";  
                          }else{
                            div_1.innerHTML = '<a href="upload6596543123/' + index_registrator[0] + '.pdf" class = "download-table-a">Просмотр</a>';
                          }

                          var div_2 = document.createElement('div');
                          document.getElementById("row-table").appendChild(div_2);
                          div_2.classList.add("download-table");
                          if(demand[0] == ""){
                            div_2.innerHTML = "";  
                          }else{
                            div_2.innerHTML = '<a href="upload6596543123/' + index_registrator[0] + '.pdf" class = "download-table-a" download>Скачать</a>';
                          };


                      } 
                  }
                  
                if(<?php echo $i?> != 0){
                    var div_2 = document.createElement('div');
                    document.getElementById("wrapper-table").appendChild(div_2);
                    div_2.classList.add("row-table-end");
                    div_2.id ="row-table-end";

                    var div_2 = document.createElement('div');
                    document.getElementById("row-table-end").appendChild(div_2);
                    div_2.classList.add("created");
                    div_2.id ="created-end";
                    div_2.innerHTML = '<span class = ""><b>Всего заявок</b></span>';

                    var div_2 = document.createElement('div');
                    document.getElementById("row-table-end").appendChild(div_2);
                    div_2.classList.add("register");
                    div_2.id ="register-end";
                    
                    var span = document.createElement('span');
                    document.getElementById("register-end").appendChild(span);
                    span.innerHTML = '<b><?php echo $i ?><b>';
                    
                  }
              </script> 
            <?php endif; ?> 
  </body>
  
  <?php endif; ?>