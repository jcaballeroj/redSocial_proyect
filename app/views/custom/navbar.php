<head>
  <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/132335/isolated/preview/4af43ce1082231cba5e5aa60fbb03f2f-iconos-de-circulo-de-personal.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #b0b0b0, #e0e0e0);
    }

    .navbar-custom {
      background-color: #007bff;
    }

    .navbar-custom .navbar-nav .nav-link {
      color: white;
    }

    .navbar-custom .navbar-nav .nav-link:hover {
      color: #d1c4e9;
    }

    .navbar-custom .form-control {
      border-radius: 20px;
    }

    .navbar-custom .input-group-text {
      border-radius: 0 20px 20px 0;
    }

    .navbar-custom .btn-custom {
      background-color: #d1c4e9;
      border-radius: 20px;
      color: white;
    }

    .navbar-custom .btn-custom:hover {
      background-color: #b39ddb;
    }

    .post-box {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .post-box img {
      border-radius: 50%;
      width: 50px;
      height: 50px;
    }

    .post-box textarea {
      border: none;
      width: 100%;
      resize: none;
      outline: none;
    }

    .post-box .btn-post {
      background-color: #007bff;
      color: white;
      border-radius: 20px;
    }

    .post-box .btn-post:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-home"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-users"></i> Usuarios</a>
          </li>
        </ul>
        <form class="d-flex">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
          </div>
        </form>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Mensajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notificaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fas fa-user"></i> Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-cog"></i> Configuración</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL_PROYECT ?>/home/logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- <div class="container mt-3">
     Post Box 
    <div class="post-box">
      <div class="d-flex align-items-center mb-3">
        <img src="https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg" alt="Foto de perfil del usuario">
        <textarea class="form-control ms-3" rows="3" placeholder="¿Qué estás pensando?"></textarea>
      </div>
      <div class="d-flex justify-content-end">
        <button class="btn btn-post">Publicar</button>
      </div>
    </div>
  </div> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz1U5KkNtRRzt7nD1rZpH5h4ujp6r+8btTOp5pbb7Isl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6jvKK1B0gKtIPhL2J6pprn3073KE6tl6jvKK1B0gKtIPhL2J6p" crossorigin="anonymous"></script>