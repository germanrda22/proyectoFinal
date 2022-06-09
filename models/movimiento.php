<?php

    namespace Models;

    class Movimiento
    {
        private $id;
        private $dni_usuario;
        private $cantidad;
        private $fecha;
        private $concepto;
        private $db;
        
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getDni_usuario()
        {
                return $this->dni_usuario;
        }

        public function setDni_usuario($dni_usuario)
        {
                $this->dni_usuario = $dni_usuario;

                return $this;
        }

        public function getCantidad()
        {
                return $this->cantidad;
        }

        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        public function getFecha()
        {
                return $this->fecha;
        }

        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }
 
        public function getConcepto()
        {
                return $this->concepto;
        }

        public function setConcepto($concepto)
        {
                $this->concepto = $concepto;

                return $this;
        }
    }