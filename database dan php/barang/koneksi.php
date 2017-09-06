<?php

/**
 * Created by IntelliJ IDEA.
 * User: Agus Suhardi
 * Date: 9/6/2016
 * Time: 00:20
 */

// membuat class koneksi database
class Koneksi extends PDO
{

    protected $db = "mysql";
    protected $hostName = "localhost";
    protected $dbName = "belajar_angular2";
    protected $userName = "root";
    protected $password = "";

    function __construct()
    {
        try {

            parent::__construct("$this->db:host=$this->hostName;dbname=$this->dbName", $this->userName, $this->password);
        } catch (Exception $ex) {
            echo $ex->getMessage();
            echo "sistem dalam perbaikan, coba beberapa saat lagi";
            die();
        }
    }

}
