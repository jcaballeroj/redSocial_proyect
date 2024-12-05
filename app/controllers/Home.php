<?php

/**
 * @property mixed $usuario
 * @property mixed $fd
 */
class Home extends Controller
{

    public function __construct()
    {
        $this->usuario = $this->model('usuario');
        // Initialize model example, uncomment if needed
        // $this->fd = $this->model('ejemplo');
    }

    public function index()
    {

        if (isset($_SESSION['logueado'])) {
            $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
            $datosPerfil = $this->usuario->getPerfil($_SESSION['logueado']);

            //var_dump($datosPerfil);
            if ($datosPerfil) {
                $datosRed = [
                    'usuario' => $datosUsuario,
                    'perfil' => $datosPerfil
                ];
                $this->view('pages/home', $datosRed);
            }else{
                $this->view('pages/perfil/completarPerfil', $_SESSION['logueado']);
            }
        } else {
            redirection('/home/login');
        }
        // Fetch privileges, uncomment if needed
        // $privilegios = $this->fd->getPrivi();

        // Prepare data for the view, uncomment if needed
        // $datos = [
        //     'privilegios'=> $privilegios
        // ];

        // Load the view, uncomment if needed

    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosLogin = [
                'usuario' => trim($_POST['usuario']),
                'contrasena' => trim($_POST['contrasena'])
            ];

            // Obtener los datos del usuario
            $datosUsuario = $this->usuario->getUsuario($datosLogin['usuario']);

            // echo '<pre>';
            // var_dump($datosUsuario[0]->idPrivilegio);
            // exit;

            if ($this->usuario->verificarContrasena($datosLogin['contrasena'], $datosUsuario)) {
                $_SESSION['logueado'] = $datosUsuario[0]->idPrivilegio;
                $_SESSION['usuario'] = $datosUsuario[0]->usuario;
                redirection('/home');
            } else {
                $_SESSION['errorLogin'] = 'El usuario o la contrasena son incorrectas';
                redirection('/home');
            }
        } else {
            if (isset($_SESSION['logueado'])) {
                redirection('/home');
            }else{
                // Cargar la vista de login
                $this->view('pages/login-register/login');
            }
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datosRegistro = [
                'privilegio' => '2',
                'email' => trim($_POST['email']),
                'usuario' => trim($_POST['usuario']),
                'contrasena' => password_hash(trim($_POST['contraseña']), PASSWORD_DEFAULT),
                'fecha_registro' => date('Y-m-d H:i:s'), // Fecha y hora actual
            ];

            if ($this->usuario->verificarUsuario($datosRegistro)) {
                if ($this->usuario->register($datosRegistro)) {
                    // $_SESSION['usuario'] = $datosRegistro['usuario'];
                    $_SESSION['loginComplete'] = 'Tu registro se ha completado Satisfactoriamente, ahora puedes ingresar';
                    redirection('/home');
                } else {
                    $this->view('pages/login');
                }
            } else {
                $_SESSION['usuarioError'] = 'El Usuario no esta disponible, intenta con otro usuario';
                $this->view('pages/login-register/register');
            }
            // Handle register POST request
            // Add your code here
        } else {
            if (isset($_SESSION['logueado'])) {
                redirection('/home');
            } else {
                // Load the register view
                $this->view('pages/login-register/register');
            }
        }
    }

    public function logout()
    {
        session_start();
        $_SESSION = [];
        session_destroy();

        redirection('/home');
    }
}
