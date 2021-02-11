<?php
class connectionClass {
    private $host="localhost",$dbname="healthmonitoring" ,$dbpass="",$dbuser="root";
    public $con;
    public function __construct() {
        $this->con=  $this->connect($this->host, $this->dbuser, $this->dbpass, $this->dbname);
        if($this->con){echo"no" ; }
        else{
            echo "mysqli";
        }
    }
}
 