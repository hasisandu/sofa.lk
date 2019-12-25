<?php
/**
 * Created by IntelliJ IDEA.
 * User: Hasika
 * Date: 11/24/2018
 * Time: 10:12 AM
 */
class DBConnection{
    private $connection;
    private $host="127.0.0.1";
    private $port="3306";
    private $user="root";
    private $password="hasika1234";
    private $databasse="sofalk";


    /**
     * DBConnection constructor.
     */
    public function __construct(){
        $this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->databasse,$this->port);
        if($this->connection->connect_errno){
            echo $this->connection->connect_errno;
            die();
        }
    }

    public function getConnection(){
        return $this->connection;
    }

}