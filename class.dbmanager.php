<?php
include_once("class.mysqlmanager.php");
include_once("class.postgresqlmanager.php");

class DBManager
{
    private $driver;
    private $connection;

    public function setDriver($driver)
    {
        $this->driver = $driver;
    }
    public function connect($host, $user, $db, $pwd)
    {
        if($this->driver == "mysql")
        {
            $mm = new MySQLManager();
            $mm->setHost($host);
            $mm->setDB($db);
            $mm->setUserName($user);
            $mm->setPassword($pwd);
            $this->connection = $mm->connect();
        }
        elseif($this->driver == "pgsql")
        {
            $pm = new PostgreSQLManager();
            $pm->setHost($host);
            $pm->setDB($db);
            $pm->setUserName($user);
            $pm->setPassword($pwd);
            $this->connection = $pm->connect();
        }
    }
}
?>
