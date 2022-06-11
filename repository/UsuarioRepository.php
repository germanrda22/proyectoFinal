<?php

    namespace Repository;
    use Models\Usuario;
    use Lib\Database;
    use PDO;

    class UsuarioRepository extends Usuario
    {
        private $db;
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
    }