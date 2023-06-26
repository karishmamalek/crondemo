<?php
class connectionClass extends mysqli{
    // private $host="localhost", $username="root", $password="", $dbname="cronjob";
    private $host="localhost", $username="u742862596_crondemo", $password="R#dgXDGku8", $dbname="u742862596_crondemo";
    public $con;

    function __construct()
    {
        $this->con = $this->connect($this->host,$this->username,$this->password,$this->dbname);
    }
}
?>