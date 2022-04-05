<?php 
    
    
    require("../config/dbconfig.php");
    date_default_timezone_set('America/Mexico_City');
    $dateregistro=date("Y-m-d H:i:s");

    var_dump($_POST);

    if(isset($_POST['tipoForm'])){


        $tipoForm = (isset($_POST['tipoForm'])) ? $_POST['tipoForm'] : '';

        $fileName = (isset($_FILES['comprobantepago']['name'])) ? $_FILES['comprobantepago']['name'] : '';
        $sourcePath = (isset($_FILES['comprobantepago']['tmp_name'])) ? $_FILES['comprobantepago']['tmp_name'] : '';
        $targetPath = FOLDER_SOLISTAS.$fileName;

        if($tipoForm=='solistas'){

            $data = [
                'nombre_p' => $_POST['nombre_p'],
                'apellidos_p' => $_POST['apellidos_p'],
                'fecha_nac' => $_POST['fecha_nac'],
                'email_p' => $_POST['email_p'],            
                'genero_p' => $_POST['genero_p'],
                'estado_p' => $_POST['estado_p'],
                'ciudad_p' => $_POST['ciudad_p'],
                'num_telefono' => $_POST['num_telefono'],
                'categoria_p' => $_POST['categoria_p'],
                'tokenparticipante' => $tokenCompetidor,
                'dateregistro' => $dateregistro,
                'codfullpass' => $_POST['codfullpass'],
                'nomcomprobante' => $fileName
            ];
    
            var_dump($data);

            try{
               
                $basededatosimpmx->connect()->prepare("INSERT INTO 
                `tbl_solistas`( 
                    `nombre_p`, 
                    `apellidos_p`, 
                    `fecha_nac`,
                    `email_p`, 
                    `celular_p`,
                    `categoria_insc`, 
                    `genero_p`, 
                    `estado_p`, 
                    `ciudad_p`, 
                    `fecharegistro_p`, 
                    `cod_insc`,   
                    `nomcomprobante`, 
                    `codfullpass`) 
                VALUES ( 
                    :nombre_p, 
                    :apellidos_p, 
                    :fecha_nac, 
                    :email_p,
                    :num_telefono,
                    :categoria_p, 
                    :genero_p, 
                    :estado_p, 
                    :ciudad_p,
                    :dateregistro, 
                    :tokenparticipante, 
                    :nomcomprobante, 
                    :codfullpass)")->execute($data);

                move_uploaded_file($sourcePath, $targetPath);

                // try{
                //     $mail = new PHPMailer();
                //     $mail->CharSet='UTF-8';
                //     $mail->Encoding = 'base64';
                //     $mail->isSMTP();                                        
                //     $mail->Host       = 'smtp.gmail.com';          
                //     $mail->SMTPAuth   = true;                               
                //     $mail->Username   = emailadmin;     
                //     $mail->Password   = passwordadmin;                     
                //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      
                //     $mail->Port       = 587;                                    
                //     // $mail->SMTPDebug = 4;
                //     $mail->setFrom(emailadmin, 'Euroson Latino');
                //     $body = file_get_contents('../correos/contentsolista.html');
                //     $body = str_replace('$nombre_p', $_POST['nombre_p'], $body);            
                //     $body = str_replace('$apellidos_p', $_POST['apellidos_p'], $body);
                //     $body = str_replace('$email_p', $_POST['email_p'], $body);
                //     $body = str_replace('$fecha_nac', $_POST['fecha_nac'], $body);
                //     $body = str_replace('$pais_p', $_POST['pais_p'], $body);
                //     $body = str_replace('$cod_insc', $idparticipante, $body);
                //     $body = str_replace('$fecha_registro', $dateregistro, $body);
                //     $body = str_replace('$categoria_insc', $_POST['categoria_p'], $body);
                //     $body = preg_replace('/\\\\/','', $body);
                //     $bodyy=$body;
                //     // echo $bodyy;
                //     $mail->MsgHTML($bodyy);
                //     $mail->AddAddress($_POST['email_p']);
                //     $mail->addBCC('bryan.martinez.romero@gmail.com');
                //     $mail->isHTML(true);
                    
                //     $mail->Subject = 'Registro exitoso - #ELWSC2022';
                //     $mail->send();

                // }catch (phpmailerException $e) {
                //     echo $e->errorMessage(); 
                // }

                $respuesta = array(
                    'respuesta' => 'success'
                );

                // move_uploaded_file($sourcePath, $targetPath);

                
        
            }catch( PDOException $e){
                $respuesta = array(
                    'respuesta' => 'error',
                    'mensaje' => $e
                );

            
            }
            
            
            
            header('Content-Type: application/json');
            echo json_encode($respuesta);

        }
    

        
        
    }


?>