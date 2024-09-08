<?php
class PostgreSQLManager
{
    private $host;
    private $db;
    private $user;
    private $pwd;

    public function setHost($host)
    {
        // set db host
        $this->host = $host;
    }
    public function setDB($db)
    {
        // set db name
        $this->db = $db;
    }
    public function setUserName($user)
    {
        // set user name
        $this->user = $user;
    }
    public function setPassword($pwd)
    {
        // set password
        $this->pwd = $pwd;
    }
    public function connect()
    {
        // now connect
        return mysqli_connect($this->host, $this->user, $this->pwd, $this->db);
    }
}
?>
