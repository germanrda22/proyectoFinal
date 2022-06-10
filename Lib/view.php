<?php
    namespace Lib;

    class View
    {
        public function ver(string $pageName, array $params = null): void
        {
            if($params != null)
            {
                foreach($params as $name => $value)
                {
                    $$name = $value;
                }
            }
            require_once "views/header.php";
            require_once "views/$pageName.php";
            require_once "views/footer.php";
        }
    }