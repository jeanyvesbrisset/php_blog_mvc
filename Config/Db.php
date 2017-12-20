<?php

class Connexion
{
    private $bdd;
    private static $instance;

    private function __construct()
    {
        try{
            $this->bdd = new PDO("mysql:host=localhost;port=3306;dbname=blog", 'root', '090295A');
        }
        catch(PDOException $e){
            echo "Error connection to DB\n";
            die();
        }
    }


    public static function getInstance()
    {
        if (!self::$instance instanceof self)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getBdd()
    {
        return $this->bdd;
    }
}

?>
