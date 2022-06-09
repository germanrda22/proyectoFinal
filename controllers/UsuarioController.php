<?php

    namespace Controllers;
    use Repository\UsuarioRepository;

    class UsuarioController
    {
        public function muestraLogin()
        {
            require_once 'views/login';
        }

        public function login()
        {
            if(isset($_POST)){
                $usuario = new UsuarioRepository();
                $usuario->setDni($_POST['dni']);
                $usuario->setPassword($_POST['password']);
                $identity = $usuario->login();

                if($identity && is_object($identity)){
                    $_SESSION['identity']= $identity;
                    
                    if($identity->rol == 'admin'){
                        $_SESSION['admin'] = true;
                    }			
                }else{
                    $_SESSION['error_login'] = 'Identificación fallida';
                }
            }
            header('Location:'.base_url);
        }

        public function registro()
        {
            require_once "views/usuario/registro.php";
        }

        public function save()
        {
            if (isset($_POST)) {
                $dni = isset($_POST['dni']) ? $_POST['nombre'] : false;
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $telefono = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;
                if ($nombre && $apellidos && $email && $password) {
                    $usuario = new usuarioRepository();
                    $usuario->setDni($dni);
                    $usuario->setNombre($nombre);
                    $usuario->setApellidos($apellidos);
                    $usuario->setEmail($email);
                    $usuario->setTelefono($telefono);
                    $usuario->setPassword($password);
                    $save = $usuario->save();
                    if ($save == true
                    ) {
                        $_SESSION['register'] = 'complete';
                    } else {
                        $_SESSION['register'] = 'failed';
                    }
                } else {
                    $_SESSION['register'] = 'failed';
                }
            } else {
                $_SESSION['register'] = 'failed';
            }
            header("Location:" . base_url . 'usuario/registro');
        }

        
    }