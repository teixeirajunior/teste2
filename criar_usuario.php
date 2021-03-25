<?php
include 'header.php';
if (isset($_POST['criar_usuario'])) {
    $usuario_obj->criar_usuario_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">Ver lista de usuários</a> 
        <h3>Criar usuário</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="usuario_nome">Nome:</label>
                <input type="text" name="usuario_nome" id="usuario_nome" class="form-control" required maxlength="50">
            </div>
         
            <input type="submit" class="button button-green  pull-right" name="criar_usuario" value="Criar"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

