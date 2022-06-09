<?php
    namespace Models;

    class Usuario
    {
        private $dni;
        private $nombre;
        private $apellidos;
        private $telefono;
        private $email;
        private $password;
        private $rol;
        private $dinero;
        private $db;


        public function getDni()
        {
            return $this->dni;
        }


        public function setDni($dni)
        {
            $this->dni = $dni;

            return $this;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;

            return $this;
        }

        public function getApellidos()
        {
            return $this->apellidos;
        }

        public function setApellidos($apellidos)
        {
            $this->apellidos = $apellidos;

            return $this;
        }

        public function getTelefono()
        {
            return $this->telefono;
        }

        public function setTelefono($telefono)
        {
            $this->telefono = $telefono;

            return $this;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;

            return $this;
        }

        public function getRol()
        {
            return $this->rol;
        }

        public function setRol($rol)
        {
            $this->rol = $rol;

            return $this;
        }

        public function getDinero()
        {
            return $this->dinero;
        }

        public function setDinero($dinero)
        {
            $this->dinero = $dinero;

            return $this;
        }
    }