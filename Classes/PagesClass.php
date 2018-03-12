<?php
require_Once ("ConnectionToDB.php");

class pages
{
    public $ID;
    public $html;
    public $code;
    public $name;	
    
    function getAllPages()
    {
        $db_obj = new dbconnect;
        $db_obj->connect();
        $sql = "SELECT * FROM `pages`";
        $result = $db_obj->executesql($sql);
        return $result;
    }
    
}

?>