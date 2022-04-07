<?php 

    //  var_dump($_POST);

    require("../config/dbconfig.php");


    if(isset($_POST['codFullPass'])){

        // var_dump($_POST);
        $token=$_POST['codFullPass'];

        try{

            $query=$basededatos->connect()->prepare('SELECT * FROM `tbl_pases_impmx` WHERE `token`="'.$token.'"');
            $query->execute();

            $numToken=$query->rowCount();
            
            $respuesta = array(
                'respuesta' => 'success',
                'numToken' => $numToken
            );


        }catch(PDOException $e){
            $respuesta = array(
                'respuesta' => 'error',
                'mensaje' => $e
            );
        }
    }

    header('Content-Type: application/json');
    echo json_encode($respuesta);


?>