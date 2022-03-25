<?php 
    header('Content-type: application/json');
     include 'conexion.php';

    if (isset($_GET['categoria'])) {
        $consulta = "Select * from categorias";
        $array = array();
        if ($resultado = $mysqli->query($consulta)) {
           if (mysqli_num_rows($resultado)!=0){
             while ($row = $resultado->fetch_array (MYSQLI_ASSOC))
             {
               $array[]= $row ;
            }
            echo json_encode($array);
          } else {
            echo json_encode($array);
          }
        } else {
            $array = array();
          $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
          echo json_encode($array);
        }
        $mysqli->close();
    }elseif(isset($_GET['productos']))
    {   $id_categoria=$_GET['productos'];
        $filtro="SELECT * from categorias where id='$id_categoria'";
        if(mysqli_num_rows($mysqli->query($filtro))!=0){
            $consulta = "Select productos.id, productos.nombre, productos.descripcion, productos.precio, productos.foto, GROUP_CONCAT(promo_productos.id_promo) id_promo, GROUP_CONCAT(promo.precio) promo_precio,GROUP_CONCAT(promo.cantidad) promo_cant,GROUP_CONCAT(promo.nombre) promo_nombre from productos LEFT OUTER JOIN promo_productos on productos.id=promo_productos.id_producto LEFT OUTER JOIN promo on promo.id =promo_productos.id_promo where id_categoria ='$id_categoria' GROUP BY productos.nombre order by productos.id";
            $array = array();
        if ($resultado = $mysqli->query($consulta)) {
           if (mysqli_num_rows($resultado)!=0){
             while ($row = $resultado->fetch_array (MYSQLI_ASSOC))
             {
               $array[]= $row ;
            }
            echo json_encode($array);
          } else {
            echo json_encode($array);
          }
        } else {
            $array = array();
          $array[]= ["error" => $mysqli->error,"query"=>$consulta ];
          echo json_encode($array);
        }

        } else {
          
            $array = array();
            $array[]= ["error" => "La categoría no existe","query"=>$id_categoria ];
            echo json_encode($array);
          }
    }

?>