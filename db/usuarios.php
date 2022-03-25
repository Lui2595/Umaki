<?php session_start();

header('Content-type: application/json');
    include 'conexion.php';
    
    if (isset($_POST['consulta'])){
      //echo $_POST['consulta'];
      $json=json_decode( $_POST['consulta'],true);
      //var_dump ($json);
      if($json["Movimiento"]=="login"){
          $user=$json["user"];
          $pass=$json["pass"];
        $consulta = "Select * from usuarios where correo='$user' and pass=md5('$pass')";
        $array = array();
        if ($resultado = $mysqli->query($consulta)) {
           if (mysqli_num_rows($resultado)!=0){
             while ($row = $resultado->fetch_array (MYSQLI_ASSOC))
             {
               $array[]= $row ;
            }
            $array["status"]="ok";
            $array["Mensaje"]="esto es para logear";
            $id=$array[0]["id"];
            //array_push($array[0],"status","Mensaje"=>"esto es para logear");
            $_SESSION['id_user']=$array[0]["id"];
            $_SESSION['nivel']=$array[0]["nivel"];
            $_SESSION['mail']=$array[0]["correo"];
            echo json_encode($array);
           
            if ($resultado = $mysqli->query("select * from usuarios_datos where id_user '".$id."' limit 1")) {
                if (mysqli_num_rows($resultado)!=0){
                    $row = $resultado->fetch_array (MYSQLI_ASSOC);
                    $_SESSION['id_user']=$row["nombre"];
                }
            }
          } else {
            echo json_encode($array);
          }
        } else {
            $array = array();
          $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
          echo json_encode($array);
        }
        $mysqli->close();

       
      }elseif ($json["Movimiento"]=="registrar") {
        $user=$json["user"];
          $pass=$json["pass"];
        $consulta = "Insert into usuarios  Values(null,'$user',md5('$pass'),3,now())";
        $array = array();
        if ($resultado = $mysqli->query($consulta)) {
           
            
            $array["status"]="ok";
            $array["Mensaje"]="esto es para registrar";
            //array_push($array[0],"status","Mensaje"=>"esto es para logear");
            echo json_encode($array);
           
         
        } else {
            $array = array();
          $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
          echo json_encode($array);
        }
        $mysqli->close();
      }
      elseif ($json["Movimiento"]=="mostrarDatosU") {
        $user=$json["user"];
        $consulta = "Select * from usuarios_datos where id_user='$user' limit 1";
        $array = array();
        if ($resultado = $mysqli->query($consulta)) {
            if (mysqli_num_rows($resultado)!=0){
                while ($row = $resultado->fetch_array (MYSQLI_ASSOC))
                {
                  $array[]= $row ;
               }
            
            $array["status"]="ok";
            $array["Mensaje"]="esto es para consultar datos usuarios";
            //array_push($array[0],"status","Mensaje"=>"esto es para logear");
            echo json_encode($array);
            }else{
                $array["status"]="ok";
                echo json_encode($array);
            }
         
        } else {
            $array = array();
            $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
            echo json_encode($array);
        }
        $mysqli->close();
      }
      elseif ($json["Movimiento"]=="guardarDatos") {
        $user=$json["user"];
        $consulta = "Select * from usuarios_datos where id_user='$user' limit 1";
        $nombre=$json["name"];
        $apellido=$json["apellido"];
        $tel=$json["tel"];
        $dir=$json["dir"];
        $colonia=$json["colonia"];
        $ref=$json["ref"];
        $array = array();
        if ($resultado = $mysqli->query($consulta)) {
            if (mysqli_num_rows($resultado)!=0){
               
                    $update="UPDATE usuarios_datos SET nombre='$nombre', apellido='$apellido',direccion='$dir',colonia='$colonia',referencia='$ref' where id_user='$user'";
                    if($mysqli->query($update)){
                        $array["status"]="ok";
                        $array["Mensaje"]="datos actualizados";
                        echo json_encode($array);
                    }else{
                        $array[]= ["error" => $mysqli->error,"query"=>$update ];
                        echo json_encode($array);
                    }      
               

            }else{
                $add="INSERT INTO usuarios_datos VALUES (null,'$user','$nombre','$apellido','$tel','$dir','$colonia','$ref')";
                if($mysqli->query($add)){
                    $array["status"]="ok";
                    $array["Mensaje"]="datos guardados";
                    echo json_encode($array);
                }else{
                    $array[]= ["error" => $mysqli->error,"query"=>$add ];
                    echo json_encode($array);
                }
               
            }
         
        } else {
            $array = array();
            $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
            echo json_encode($array);
        }
        $mysqli->close();
      }
      else{
        echo('{"status":"error", "Mensaje":"sintaxis incorrecta"}');
      }
    }

?>