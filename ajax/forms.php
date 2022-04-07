<?php 
    
    
    require("../config/dbconfig.php");
    date_default_timezone_set('America/Mexico_City');
    $dateregistro=date("Y-m-d H:i:s");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../vendor/autoload.php';

    // var_dump($_POST);

    if(isset($_POST['tipoForm'])){


        $tipoForm = (isset($_POST['tipoForm'])) ? $_POST['tipoForm'] : '';

        $fileName = (isset($_FILES['comprobantepago']['name'])) ? $tokenCompetidor.'_'.$_FILES['comprobantepago']['name'] : '';
        $sourcePath = (isset($_FILES['comprobantepago']['tmp_name'])) ? $_FILES['comprobantepago']['tmp_name'] : '';
        $targetPath = FOLDER_SOLISTAS.$tokenCompetidor.'_'.$fileName;

        $status_pago = 0;

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
    
            // var_dump($data);

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

                

                $mail = new PHPMailer();
                $mail->CharSet='UTF-8';
                $mail->Encoding = 'base64';
                $mail->isSMTP();                                        
                $mail->Host       = 'smtp.gmail.com';          
                $mail->SMTPAuth   = true;                               
                $mail->Username   = emailadminimpx;     
                $mail->Password   = passwordadminimpx;                     
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      
                $mail->Port       = 587;                                    
                $mail->setFrom(emailadminimpx, NAME_EVENT);
                $body = file_get_contents('../correos/contentsolista.html');
                $body = str_replace('$nombre_p', $_POST['nombre_p'], $body);            
                $body = str_replace('$apellidos_p', $_POST['apellidos_p'], $body);
                $body = str_replace('$email_p', $_POST['email_p'], $body);
                $body = str_replace('$fecha_nac', $_POST['fecha_nac'], $body);
                $body = str_replace('$pais_p', $_POST['estado_p'], $body);
                $body = str_replace('$cod_insc', $tokenCompetidor, $body);
                $body = str_replace('$fecha_registro', $dateregistro, $body);
                $body = str_replace('$categoria_insc', $_POST['categoria_p'], $body);
                if($status_pago==0){
                    $body = str_replace('$status_pago', 'Pendiente', $body);
                }else{
                    $body = str_replace('$status_pago', 'Completado', $body);
                }

                $body = str_replace('$year_event', YEAR_EVENT, $body);
                $body = str_replace('$name_event', NAME_EVENT, $body);
                $body = str_replace('$contact_event', EMAIL_EVENT_CONTACTO, $body);

                $body = preg_replace('/\\\\/','', $body);
                $bodyy=$body;
                // echo $bodyy;
                $mail->MsgHTML($bodyy);
                // $mail->AddAddress($_POST['email_p']);
                $mail->addBCC('bryan.martinez.romero@gmail.com');
                $mail->isHTML(true);
                
                $mail->Subject = 'Registro exitoso - '.TAG_EVENT;
                $mail->send();

                

                $respuesta = array(
                    'respuesta' => 'success'
                );

                // move_uploaded_file($sourcePath, $targetPath);

                
        
            }catch (phpmailerException $e) {
                $respuesta = array(
                    'respuesta' => 'error',
                    'mensaje' => $e->errorMessage()
                );
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