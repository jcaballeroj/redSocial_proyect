<?php
include_once URL_APP . '/views/custom/header.php';
// include_once URL_APP . '/views/custom/navbar.php';
?>
<style>
    body {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        background: linear-gradient(135deg, #b0b0b0, #e0e0e0);
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .login-form {
        padding: 20px;
    }

    .login-form h2 {
        font-size: 30px;
        margin-bottom: 10px;
        color: #000000;
        font-family: 'Lobster', cursive;
    }

    .container {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        max-width: 600px;
        width: 100%;
    }

    .btn-primary {
        background-color: #000000;
        border: none;
        border-radius: 30px;
        padding: 15px 20px;
        width: 100%;
        font-size: 18px;
    }

    .btn-primary:hover {
        background-color: #007bff;
    }

    h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 30px;
        color: #6c757d;
    }

    .custom-file-label {
        font-size: 0.9rem;
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "Seleccionar una foto";
    }

    .illustration {
        text-align: center;
    }

    .illustration h1 {
        font-size: 70px;
        margin-bottom: 20px;
        color: #007bff;
        font-family: 'Lobster', cursive;
    }

    .illustration img {
        max-width: 200px;
        border-radius: 20px;
    }
</style>
</head>

<body>
    <div class="container text-center">
        <div class="login-form">
            <h2>Completa tu perfil</h2>
            <p>Antes de continuar, por favor completa tu perfil subiendo tu primer foto</p>

            <form action="<?php echo URL_PROYECT ?>/home/insertarRegistrosPerfil" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado']; ?>">
                <div class="mb-4">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                </div>
                <div class="mb-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-imput" id="imagen" name="imagen" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar Datos</button>
            </form>
            <div class="illustration">
                <h1>LensConnect</h1>
                <img src="https://img.freepik.com/vector-premium/icono-aislado-aplicacion-camara-fotos-digital_8071-7026.jpg" alt="Illustration of people interacting with a large mobile phone displaying a social media app">
            </div>
        </div>

</body>
<?php
include_once URL_APP . '/views/custom/footer.php';
?>