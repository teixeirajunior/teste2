<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $usuario_info=$usuario_obj->ver_usuario_por_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="index.php"  class="button button-purple mt-12 pull-right">Ver lista de usuários</a> 
     
 <h3>Ver usuarios</h3>
       
    
     <hr/>
   
   
 
      
    <label >Nome:</label>
   <?php  if(isset($usuario_info['usuario_nome'])){echo $usuario_info['usuario_nome']; }?>

<br/>
   
          

    <a href="<?php echo 'alterar_usuario.php?id='.$usuario_info["usuario_id"] ?>" class="button button-blue">Editar</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

