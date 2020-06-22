<?php

    try{

        $connect = new PDO('mysql:host=localhost:8889;dbname=utez','root','root');
         echo "Conección Establecida";

         echo '<br />';

      /* $resultado = $connect->query('SELECT * FROM usuarios');
       foreach($resultado as $fila)
      {
           echo $fila['id'] . '--' . $fila['nombre'] . '--' . $fila['apellido'] . '<br />';

           
       }
*/


    }catch(PDOException $e){

        echo "Error: " . $e->getMessage();


    }

?>
