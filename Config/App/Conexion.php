<?php
class Conexion {
    private $conect;

    public function __construct() {
        $host = 'roundhouse.proxy.rlwy.net';
        $port = 16315;
        $dbname = 'railway';
        $charset = 'utf8';
        $user = 'root';
        $pass = 'tOLDLkSZnpKWRGLHbGlYnyiwxLydpaAo';

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";

        try {
            $this->conect = new PDO($dsn, $user, $pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexion: " . $e->getMessage();
        }
    }

    public function conect() {
        return $this->conect;
    }
}
?>
