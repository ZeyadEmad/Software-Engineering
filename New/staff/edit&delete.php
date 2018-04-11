 <?php
    class dbconnect  {
	    private $servername;
	    private $usernsme;
		private $password;
		private $db;
		private $con;
		  
		  
		  function __construct()  {
			  
			  
			  $this->servername = "localhost";
			  $this->username = "root";
			  $this->password = "";
			  $this->db = "try1";
			  $this->con = $this->connect();
		  
		
		  
		  } 
		  
		  function connect(){
			  $this->con  = new mysqli($this->servername,$this->username, $this->password,$this->db);
               if($this->con->connect_error)	
                {
					die("failed to connect :".$this->con->connect_error);
			    }				   
		      else {
				  
				 echo"connect succefully";
				 return $this->con;
			  }
		  }
		    function disconnect()
			
			{
				return $this->close();
			}
   
     public function getData12($email,$table)
    {        
	     $query = "SELECT * FROM $table WHERE email = '$email'";
        $result = $this->con->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
	 
	public function update($table,$email,$id)
	    {
		$string = "UPDATE ".$table." SET email ='$email' WHERE id=$id";
		$result = $this->con->query($string);

		if($result != false)
		{
			echo "Updated Done";
			}
	    else
		{
			echo "error";
	        }
	}


	
	public function delete12($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->con->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
	
     function escape_string($value)
    {
        return $this->con->real_escape_string($value);
    }
	}
	$db= new dbconnect();
	
	?>