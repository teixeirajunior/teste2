<?php
include 'header.php';
$usuario_lista = $usuario_obj->usuario_lista();
?>
<div class="container " > 
    <div class="row content">
        <a  href="criar_usuario.php"  class="button button-purple mt-12 pull-right">Criar usuário</a> 
        <h3>Lista de usuários</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                   
                    <th class="text-right">Ação</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($usuario_lista->num_rows > 0) {
  while ($row = $usuario_lista->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["usuario_nome"] ?></td>
                
                <td class="text-right">
                    <a  href="<?php echo 'deletar_usuario.php?id=' . $row["usuario_id"] ?>" class="button button-red">Deletar</a>  
                    <a  href="<?php echo 'alterar_usuario.php?id=' . $row["usuario_id"] ?>" class="button button-blue">Editar</a>  
                    <a href="<?php echo 'ver_usuario.php?id=' . $row["usuario_id"] ?>" class="button button-green">Ver</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

