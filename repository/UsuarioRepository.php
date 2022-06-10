<?php

    namespace Repository;
    use Models\Usuario;
    use Lib\Database;
    use PDO;

    class UsuarioRepository extends Usuario
    {
        public function __construct()
        {
            $this->db = new Database();
        }

        public function login()
        {
            $dni = $this->getDni();
            $password = $this->getPassword();
            $result = false;
            $sql = "SELECT * FROM usuarios where dni = :dni";
            $login = $this->db->prepare($sql);
            $login->bindParam(':dni', $dni, PDO::PARAM_STR);
            $login->execute();

            if($login && $login->rowCount() == 1){
                $datos = $login->fetch(PDO::FETCH_OBJ);
                $verify = password_verify($password, $datos -> password);

                if($verify){
                    $result = $datos;
                }
            }
            return $result;
        }

        public function save()
        {
            $sql = "INSERT INTO usuarios VALUES(NULL,:nombre, :apellidos, :email, :password, 'user', NULL)";
            $ins = $this->db->prepare($sql);
            $nom = $this->getNombre();
            $apell = $this->getApellidos();
            $mail = $this->getEmail();
            $password = password_hash($this->getPassword(), PASSWORD_BCRYPT, ['cost' => 4]);
            $ins->bindParam(':nombre', $nom, PDO::PARAM_STR);
            $ins->bindParam(':apellidos',$apell, PDO::PARAM_STR);
            $ins->bindParam(':email',$mail, PDO::PARAM_STR);
            $ins->bindParam(':password',$password, PDO::PARAM_STR);
            $ins->execute();
            $result = false;
            if($ins){
                $result = true;
            }
            $db = null;
            return $result;
        }
    }