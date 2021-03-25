<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $usuario_info=$usuario_obj->deletar_usuario_por_id($_GET['id']);
 
     
 }else{
  header('Location: index.php');
 }
 
 ?>
