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


    function estado_p($id_estado, $basededatosimpmx){

        

        $queryestado=$basededatosimpmx->connect()->prepare("SELECT id, estado FROM tbl_estados WHERE id='$id_estado'");
        $queryestado->execute();

        $resultado=$queryestado->fetch(PDO::FETCH_OBJ);

        return $resultado->estado;

    }

    // echo estado_p($_POST['estado_p'], $basededatosimpmx);


    function categoria_p($id_categoria, $basededatosimpmx){

        

        $queryestado=$basededatosimpmx->connect()->prepare("SELECT id, categoria FROM tbl_categorias WHERE id='$id_categoria'");
        $queryestado->execute();

        $resultado=$queryestado->fetch(PDO::FETCH_OBJ);

        return $resultado->categoria;

    }

    // echo categoria_p($_POST['categoria_p'], $basededatosimpmx);

    

    if(isset($_POST['tipoForm'])){


        $tipoForm = (isset($_POST['tipoForm'])) ? $_POST['tipoForm'] : '';

        $fileName = (isset($_FILES['comprobantepago']['name'])) ? $tokenCompetidor.'_'.$_FILES['comprobantepago']['name'] : '';
        $sourcePath = (isset($_FILES['comprobantepago']['tmp_name'])) ? $_FILES['comprobantepago']['tmp_name'] : '';
        

        $status_pago = 0;

       

        if($tipoForm=='solistas'){
            $targetPath = FOLDER_SOLISTAS.$fileName;
            $categoria_p = categoria_p($_POST['categoria_p'], $basededatosimpmx);
            $estado_p = estado_p($_POST['estado_p'], $basededatosimpmx);

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
                $body = str_replace('$pais_p', $estado_p, $body);
                $body = str_replace('$cod_insc', $tokenCompetidor, $body);
                $body = str_replace('$fecha_registro', $dateregistro, $body);
                $body = str_replace('$categoria_insc', $categoria_p, $body);
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
                $mail->AddAddress($_POST['email_p']);
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

        }if($tipoForm=='parejas'){
            $targetPath = FOLDER_PAREJAS.$fileName;

            $categoria_p = categoria_p($_POST['categoria'], $basededatosimpmx);
            $estado_p1 = estado_p($_POST['estado_p1'], $basededatosimpmx);
            $estado_p2 = estado_p($_POST['estado_p2'], $basededatosimpmx);


            $data = [
                'nombre_p1' => $_POST['nombre_p1'],
                'apellidos_p1' => $_POST['apellidos_p1'],
                'date_birthday_p1' => $_POST['date_birthday_p1'],
                'email_p1' => $_POST['email_p1'],            
                'genero_p1' => $_POST['genero_p1'],
                'estado_p1' => $_POST['estado_p1'],
                'codfullpass_p1' => $_POST['codfullpass_p1'],
                'celular_p1' => $_POST['num_telefono_p1'],
                'nombre_p2' => $_POST['nombre_p2'],
                'apellidos_p2' => $_POST['apellidos_p2'],
                'date_birthday_p2' => $_POST['date_birthday_p2'],
                'email_p2' => $_POST['email_p2'],
                'genero_p2' => $_POST['genero_p2'],
                'estado_p2' => $_POST['estado_p2'],
                'codfullpass_p2' => $_POST['codfullpass_p2'],
                'celular_p2' => $_POST['num_telefono_p2'],
                'categoria' => $_POST['categoria'],
                'idparticipante' => $tokenCompetidor,
                'dateregistro' => $dateregistro,
                'nomcomprobante' => $fileName
            ];
            
            // var_dump($data);
            
            

            
            try{ 
               
                $queryparejas=$basededatosimpmx->connect()->prepare("INSERT INTO `tbl_parejas` (
                    `nombre_p1`,
                    `apellidos_p1`, 
                    `fecha_nacp1`, 
                    `email_p1`, 
                    `genero_p1`, 
                    `estado_p1`, 
                    `nombre_p2`, 
                    `apellidos_p2`, 
                    `fecha_nacp2`, 
                    `email_p2`, 
                    `genero_p2`, 
                    `estado_p2`,
                    `cod_insc`, 
                    `fecharegistro_p`, 
                    `categoria_insc`, 
                    `codfullpass_p1`,
                    `codfullpass_p2`, 
                    `nomcomprobante`,
                    `celular_p1`,
                    `celular_p2`
                    ) VALUES (
                    :nombre_p1, 
                    :apellidos_p1, 
                    :date_birthday_p1, 
                    :email_p1, 
                    :genero_p1, 
                    :estado_p1, 
                    :nombre_p2, 
                    :apellidos_p2, 
                    :date_birthday_p2, 
                    :email_p2, 
                    :genero_p2, 
                    :estado_p2, 
                    :idparticipante, 
                    :dateregistro, 
                    :categoria, 
                    :codfullpass_p1, 
                    :codfullpass_p2, 
                    :nomcomprobante,
                    :celular_p1,
                    :celular_p2
                    )");
                $queryparejas->execute($data);

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
                // $mail->SMTPDebug = 4;
                $mail->setFrom(emailadminimpx, 'Imperio México');
                $body = file_get_contents('../correos/contentparejas.html');
                $body = str_replace('$nombre_p1', $_POST['nombre_p1'], $body);            
                $body = str_replace('$apellidos_p1', $_POST['apellidos_p1'], $body);
        
                $body = str_replace('$nombre_p2', $_POST['nombre_p2'], $body);            
                $body = str_replace('$apellidos_p2', $_POST['apellidos_p2'], $body);
        
                $body = str_replace('$email_p1', $_POST['email_p1'], $body);
                $body = str_replace('$email_p2', $_POST['email_p2'], $body);
        
                $body = str_replace('$fecha_nacp1', $_POST['date_birthday_p1'], $body);
                $body = str_replace('$fecha_nacp2', $_POST['date_birthday_p2'], $body);
        
                $body = str_replace('$pais_p1', $estado_p1, $body);
                $body = str_replace('$pais_p2', $estado_p2, $body);
        
                $body = str_replace('$cod_insc', $tokenCompetidor, $body);
                $body = str_replace('$fecha_registro', $dateregistro, $body);
                $body = str_replace('$categoria_insc', $categoria_p, $body);

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
                $mail->AddAddress($_POST['email_p1'], $_POST['nombre_p1'].' '.$_POST['apellidos_p1']);
                $mail->AddAddress($_POST['email_p2'], $_POST['nombre_p2'].' '.$_POST['apellidos_p2']);
                $mail->addBCC('bryan.martinez.romero@gmail.com');
                $mail->isHTML(true);
        
                $mail->Subject = 'Registro exitoso - '.TAG_EVENT;
                $mail->send();
                
                
                move_uploaded_file($sourcePath, $targetPath);

                $respuesta = array(
                    'respuesta' => 'success'
                );

            }catch( PDOException $e){

                $error=$queryparejas->errorInfo();
                $respuesta = array(
                    'respuesta' => 'error',
                    'mensaje' => $e,
                    'error' => $error
                );

            
            }catch (phpmailerException $e) {
                $respuesta = array(
                    'respuesta' => 'error',
                    'mensaje' => $e->errorMessage()
                );
            }
    

            header('Content-Type: application/json');
            echo json_encode($respuesta);

            
            
        }if($tipoForm=='grupos'){
            $targetPath = FOLDER_GRUPOS.$fileName;

            // var_dump($_POST);
            
            $numintegrantes = $_POST['numintegrantes'];

            // echo $numintegrantes;
            $data = $_POST;

            $salida = array_slice($data, 0, 7);
            
            $data = array();

            for ($i=0; $i < $numintegrantes ; $i++) { 
                
                $data["idnumintegrantes".$i] = $_POST['idnumintegrantes'.$i];
                $data["date_birthday".$i] = $_POST['date_birthday'.$i];
                $data["generoint".$i] = $_POST['generoint'.$i];
                $data["codfullpass".$i] = $_POST['codfullpass'.$i];
            }

            // var_dump($data);
            
                
            $salida['integrantes'] = json_encode($data);
            $salida['fecharegistro'] = $dateregistro;
            $salida['cod_insc'] = $tokenCompetidor;
            $salida['status'] = $status_pago;
            $salida['nomcomprobante'] = $fileName;
            // $salida['invoiceid'] = $_POST['invoiceid'];
            // $salida['cupon'] = $_POST['hotel_num'];
            // $salida['paymenth_method'] = $paymenth_method;

            // var_dump($salida);
            
                
            $categoria_p = categoria_p($_POST['categoria_p'], $basededatosimpmx);
            $estado = estado_p($_POST['estado'], $basededatosimpmx);

            try{
        
                $basededatosimpmx->connect()->prepare("INSERT INTO `tbl_grupos` (`categoria_insc`, `nom_repre`, `celular_repre`, `pais_grupo`, `email_repre`, `nom_grupo`, `integrantes`, `fecharegistro_p`, `cod_insc`, `status`, `numintegrantes`, `nomcomprobante`) VALUES (:categoria_p, :nomrepresentante_p, :numtelrep, :estado, :emailrepresentante_p, :nombregrupo_p, :integrantes, :fecharegistro, :cod_insc, :status, :numintegrantes, :nomcomprobante)")->execute($salida);

                
                
                $nom_repre=$_POST['nomrepresentante_p'];
                $email_repre=$_POST['emailrepresentante_p'];
                $nom_grupo=$_POST['nombregrupo_p'];
                $pais_grupo=$estado;
                $fecha_registro=$dateregistro;
                $cod_insc=$tokenCompetidor;
                $categoria_insc=$categoria_p;

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
                // $mail->SMTPDebug = 4;
                $mail->setFrom(emailadminimpx, NAME_EVENT);
                $body = file_get_contents('../correos/contentgrupos.html');

                $body = str_replace('$nom_repre', $nom_repre, $body);            
                $body = str_replace('$email_repre', $email_repre, $body);

                $body = str_replace('$nom_grupo', $nom_grupo, $body);
                $body = str_replace('$pais_grupo', $pais_grupo, $body);
                $body = str_replace('$cod_insc', $cod_insc, $body);
                $body = str_replace('$fecha_registro', $fecha_registro, $body);
                $body = str_replace('$categoria_insc', $categoria_insc, $body);

                if($status_pago==0){
                    $body = str_replace('$status_pago', 'Pendiente', $body);
                }else{
                    $body = str_replace('$status_pago', 'Completado', $body);
                }

                $body = str_replace('$year_event', YEAR_EVENT, $body);
                $body = str_replace('$name_event', NAME_EVENT, $body);
                $body = str_replace('$contact_event', EMAIL_EVENT_CONTACTO, $body);

                $body = preg_replace('/\\\\/','', $body);
                // $bodyy=utf8_encode($body);
                // echo $bodyy;
                $mail->MsgHTML($body);
                $mail->AddAddress($email_repre, $nom_repre);
                $mail->addBCC('bryan.martinez.romero@gmail.com');
                $mail->isHTML(true);
                
                $mail->Subject = 'Registro exitoso - '.TAG_EVENT;
                $mail->send();

                move_uploaded_file($sourcePath, $targetPath);

                $respuesta = array(
                    'respuesta' => 'success'
                );
        
            }catch( PDOException $e){
                // echo $e;
                // $error=$queryparejas->errorInfo();
                $respuesta = array(
                    'respuesta' => 'error',
                    'mensaje' => $e,
                    // 'error' => $error
                );
            }catch (phpmailerException $e) {
                $respuesta = array(
                    'respuesta' => 'error',
                    'mensaje' => $e->errorMessage()
                );
            }

            header('Content-Type: application/json');
            echo json_encode($respuesta);
        }
    

        
        
    }


?>