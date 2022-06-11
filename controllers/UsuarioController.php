<?php

    namespace Controllers;
    use Repository\UsuarioRepository;
    use Lib\View;

    class UsuarioController
    {
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
    }