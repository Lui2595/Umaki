<?php session_start();

    header('Content-type: application/json');
    include 'conexion.php'; 
    if (isset($_POST['consulta'])){
         //echo $_POST['consulta'];
        $json=json_decode( $_POST['consulta'],true);
       // var_dump ($json);
        if($json[0]["Movimiento"]=="addPedido"){
            $user=$json[0]["user"];
            $total=$json[0]["total"];
            $estado=$json[0]["estado"];
            $mpago=$json[0]["mPago"];
            $tipo=1;
            if($user=="0"){
                $tipo=0;
            }
            $consulta="insert into pedidos values (null,'$user','$total','$tipo','$mpago','$estado',now(),now()); ";
            $cIdpedido="SELECT LAST_INSERT_ID() as id;";
            //echo $consulta;
            $array = array();
            if ( $mysqli->query($consulta) && $resultado =$mysqli->query( $cIdpedido)) {
                if (mysqli_num_rows($resultado)!=0){
                    $row = $resultado->fetch_array (MYSQLI_ASSOC);  
                    //var_dump($row);           
                    $id_pedido=$row["id"];
                    $consulta2="insert into pedidos_productos values ";
                    $cproductos= count($json[1]["carrito"]);
                    //echo $cproductos;
                    $productos=$json[1]["carrito"];
                    for ($i=0; $i < $cproductos; $i++) { 
                        $id_producto=$productos[$i]["id"];
                        $precio=$productos[$i]["precio"];
                        if($i==0){
                            $consulta2.= "(null,'$id_pedido','$id_producto','1',$precio)";
                        }else{
                            $consulta2.=  ",(null,'$id_pedido','$id_producto','1',$precio)";
                        }
                       
                    } 
                    $consulta3="insert into promo_vendidas values ";
                    $promos=$json[0]["promos"];
                    $cpromos=count($json[0]["promos"]["id"]);
                    for ($i=0; $i < $cpromos; $i++) { 
                        $id_promo=$promos["id"][$i];
                        $precio=$promos["precio"][$i];
                        if($i==0){
                            $consulta3.= "(null,'$id_pedido','$id_promo',$precio)";
                        }else{
                            $consulta3.=  ",(null,'$id_pedido','$id_promo',$precio)";
                        }
                       
                    }
                    if ($resultado = $mysqli->query($consulta2) && $resultado2 = $mysqli->query($consulta3)) {
                        $array["status"]="ok";
                        $array["Mensaje"]="Se ingreso pedido";
                        echo json_encode($array);
                    }else {
                        $array = array();
                      $array[]= ["error" => $mysqli->error,"query"=>$consulta2 ];
                      echo json_encode($array);
                    }
                }
                
            }else {
                $array = array();
              $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
              echo json_encode($array);
            }
            $mysqli->close();
        
             
        }elseif($json[0]["Movimiento"]=="pedidoTrack"){
            $user=$json[0]["user"];
            $consulta="Select * from pedidos where id_user='$user' order by id desc limit 1 ";
            $array = array();
            if ( $resultado=$mysqli->query($consulta)) {
                if (mysqli_num_rows($resultado)!=0){
                  
                    $row = $resultado->fetch_array (MYSQLI_ASSOC);  
                    $array[] = $row;
                    $array["status"]="ok";
                    $array["Mensaje"]="Pedido Guardado";
                    echo json_encode($array);  
                }else{
                    $array["status"]="ok";
                    $array["Mensaje"]="No hay pedidos";
                    echo json_encode($array); 
                }
                
            }else {
                $array = array();
              $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
              echo json_encode($array);
            }
            $mysqli->close();                 
        }
        elseif($json[0]["Movimiento"]=="panelConsulta"){
            
            $consulta="Select * from pedidos where estado>=2 order by id";
            $array = array();
            $array2 = array();
            if ( $resultado=$mysqli->query($consulta)) {
                if (mysqli_num_rows($resultado)!=0){
                    while ($row = $resultado->fetch_array (MYSQLI_ASSOC))
                    {
                        $array2[]= $row ;
                   }
                   $array["pedidos"]=$array2;
                    
                    $array["status"]="ok";
                    $array["Mensaje"]="Pedidos existentes";
                    echo json_encode($array);  
                }else{
                    $array["status"]="ok";
                    $array["Mensaje"]="No hay pedidos";
                    echo json_encode($array); 
                }
                
            }else {
                $array = array();
              $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
              echo json_encode($array);
            }
            $mysqli->close();                 
        }
        elseif($json[0]["Movimiento"]=="datosPedido"){
            $id=$json[0]["id"];
            $consulta="Select * from pedidos where id='$id' order by id desc limit 1 ";
            $array = array();
            $array2 = array();
            if ( $resultado=$mysqli->query($consulta)) {
                if (mysqli_num_rows($resultado)!=0){
                  
                    $row = $resultado->fetch_array (MYSQLI_ASSOC);  
                    $array["pedido"] = $row;
                    $id_user=$row['id_user'];
                    if ( $usuario=$mysqli->query("SELECT * from usuarios_datos INNER JOIN usuarios on usuarios_datos.id_user = usuarios.id where usuarios.id='$id_user'")) {
                        if($id_user!="0"){
                            $array["usuario"]  = $usuario->fetch_array (MYSQLI_ASSOC);
                        }else{
                            $array["usuario"]=["nombre" => "Local",
                            "apellido" => "","direccion"=> "","colonia" => "","referencia" => ""];
                        }
                        
                        
                        if($res2=$mysqli->query("SELECT productos.nombre,pedidos_productos.id, productos.foto ,COUNT(id_producto) cuenta  FROM pedidos_productos INNER JOIN productos on productos.id=pedidos_productos.id_producto where id_pedido='$id' GROUP BY id_producto")){
                            if (mysqli_num_rows($resultado)!=0){
                                while ($row2 = $res2->fetch_array (MYSQLI_ASSOC))
                                {
                                    $array2[]= $row2 ;
                               }
                                
                                $array["productos"]=$array2;
                                $array["status"]="ok";
                                $array["Mensaje"]="Pedido Guardado";
                                echo json_encode($array);  
                            }
                        }else{
                            $array["status"]="ok";
                            $array["Mensaje"]="No hay pedidos";
                            echo json_encode($array); 
                        } 
                    }
                    else{
                        $array["status"]="ok";
                        $array["Mensaje"]="No hay pedidos";
                        echo json_encode($array); 
                    }
                    
                }else{
                    $array["status"]="ok";
                    $array["Mensaje"]="No hay pedidos";
                    echo json_encode($array); 
                }
                
            }else {
                $array = array();
              $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
              echo json_encode($array);
            }
            $mysqli->close();                 
        }
        elseif($json[0]["Movimiento"]=="ActPedido" && $_SESSION['nivel']<=2){
            $id=$json[0]["id"];
            $nivel=$json[0]["nivel"];
            $consulta=" UPDATE pedidos set estado ='$nivel' where id='$id' ";
            $array = array();
            if ( $resultado=$mysqli->query($consulta)) {
                $array["status"]="ok";
                $array["Mensaje"]="Pedido actualizado";
                echo json_encode($array); 
            }
            else{
                $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
                echo json_encode($array);
            }
        }
        elseif($json[0]["Movimiento"]=="EliPedido" && $_SESSION['nivel']<=2){
            $id=$json[0]["id"];
            $msg=$json[0]["razon"];
            $consulta="INSERT into  pedidos_eliminados values(null,'$id','$msg')";
            $array = array();
            if ( $resultado=$mysqli->query($consulta)) {
                
                $array["status"]="ok";
                $array["Mensaje"]="Pedido Eliminado";
                echo json_encode($array); 
            }
            else{
                $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
                echo json_encode($array);
            }
        }
    }
    
?>