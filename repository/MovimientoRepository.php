<?php
    namespace Repository;

    use Models\Movimiento;
    use Config\Database;
    use PDO;

    class MovimientoRepository extends Movimiento{
        public function __construct()
        {
            $this->db = new Database();
        }
    }