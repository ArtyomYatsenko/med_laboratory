<?php
include ("app/database/user.php");
error_reporting(E_ERROR);
if(isset($_POST['demand'])){

    $mass_vid_issl = selectAll('vid_issl');
    echo json_encode($mass_vid_issl, JSON_UNESCAPED_UNICODE);


}elseif(isset($_POST['row_issl'])){
    $poisk = $_POST['poisk'];
    if($_POST['row_issl'] == "Все"){      
        $mass_issl = selectAllIssl('issl');                 
    }else{
        $id_vid_issl = selectIdVidIssl('vid_issl', $_POST['row_issl']);
        
        $mass_issl = selectIssl('issl', $id_vid_issl[0]['id'], $poisk);  
    }
    // tt($id_vid_issl[0]["id"]);
     
    echo json_encode($mass_issl, JSON_UNESCAPED_UNICODE);

}

?>