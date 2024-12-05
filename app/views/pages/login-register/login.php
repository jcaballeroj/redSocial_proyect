<?php
include_once URL_APP . '/views/custom/header.php';
// include_once URL_APP . '/views/custom/navbar.php';
?>

<div class="container-center center">
    <div class="container-content center">
        <div class="content-action center">
            <h4>Iniciar sesion</h4>
            <form action="<?php echo URL_PROYECT ?>/home/login" method="POST">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="contrasena" placeholder="Constraseña" required>
                <button class="btn btn-purple btn-block">Ingresar</button>
            </form>

            <!-- Alerta cuando el registro se completo -->
            <?php if (isset($_SESSION['loginComplete'])) : ?>
                <div class="alert alert-success mt-2 mb-2 alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['loginComplete'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['loginComplete']);
            endif ?>

            <!-- Contraseña o usuario incorrectos -->
            <?php if (isset($_SESSION['errorLogin'])) : ?>
                <div class="alert alert-warning mt-2 mb-2 alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['errorLogin'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['errorLogin']);
            endif ?>


            <div class="contenido-link mt-2">
                <span class="mr-2">¿No tienes cuenta?</span><a href="<?php echo URL_PROYECT ?>/home/register">Registrarme</a>
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