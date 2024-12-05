<?php
include_once URL_APP . '/views/custom/header.php';

?>
<div class="container-center center">
    <div class="container-content center">
        <div class="content-action center">
            <h4>Registrarme</h4>
            <form action="<?php echo URL_PROYECT ?>/home/register" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="contraseña" placeholder="Constraseña" required>
                <button class="btn btn-purple btn-block">Registrarme</button>
                <!-- Alerta de registro -->
                <?php if (isset($_SESSION['usuarioError'])) : ?>
                    <div class="alert alert-danger mt-2 mb-2 alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['usuarioError'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['usuarioError']);
                endif ?>
            </form>
            <div class="contenido-link mt-2">
                <span class="mr-2">¿Ya tienes cuenta?</span><a href="<?php echo URL_PROYECT ?>/home/login">Iniciar Sesion</a>
            </div>
        </div>
        <div class="content-image center">
            <img src="<?php echo URL_PROYECT ?>/img/vector.png" alt="Hombre sentado en una computadora">
        </div>
    </div>
</div>
<?php
include_once URL_APP . '/views/custom/footer.php';
?>