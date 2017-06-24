<?php
abstract class ConnDB
{
    public static $conn;
    public function setConn()
    {
        return
            is_null(self::$conn) ?
                self::$conn=new PDO('mysql:host=localhost;charset=utf8;dbname=teste', 'root', '') :
                self::$conn;

    }
    public function getConn() { return $this->setConn(); }

}
?>