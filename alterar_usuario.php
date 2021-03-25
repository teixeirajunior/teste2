<?php
include 'header.php';
if (isset($_GET['id'])) {
    $usuario_info = $usuario_obj->ver_usuario_por_id($_GET['id']);
    if (isset($_POST['alterar_usuario']) && $_GET['id'] === $_POST['id']) {
        $usuario_obj->alterar_usuario_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">Ver lista de usuários</a> 
        <h3>Alterar usuários</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($usuario_info['usuario_id'])) {
            echo $usuario_info['usuario_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="usuario_nome">Nome:</label>
                <input type="text" name="usuario_nome" value="<?php if (isset($usuario_info['usuario_nome'])) {
                   echo $usuario_info['usuario_nome'];
        } ?>" id="usuario_nome" class="form-control" required maxlength="50">
            </div>
           

               
            <input type="submit" class="button button-green  pull-right" name="alterar_usuario" value="Alterar"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

