<?php
    namespace Repository;

    use Models\Movimiento;
    use Lib\Database;
    use PDO;

    class MovimientoRepository extends Movimiento{
        public function __construct()
        {
            $this->db = new Database();
        }
    }