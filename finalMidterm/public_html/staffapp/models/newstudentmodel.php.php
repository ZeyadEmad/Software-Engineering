<?php



####Add-new-student####
class newstudent
{
	
            public $dfname;
            public $dlname ;
            public $dmail ;
            public $daddress;
            public $dage ;
            public $dnumber ;
            public $dgender;
            public $dusername;
            private $dpassword ;
            public $dpemail ;
            public $dgnumber;
            public $dpic ;
            public $usertype = 1;
            
            protected static $primarykey = 'id';
            protected static $TableName = 'user';
            static function InsertinDB_Static($objUser)
            {
                $sql = "INSERT INTO `user` (`id`,`First-name`, `last-name`, `age`, `email`,`username`, `password`, `address`, `telephone`,`gender`,`type-id`,`Pic`) VALUES (NULL ,'$dfname', '$dlname', '$dage', '$dmail','$dusername','$dpassword', '$daddress', '$dnumber','$dgender','5','$dpic')";
                 $MAX = "SELECT MAX(ID) FROM  user";
                 $last_id = $conn->insert_id;
                 $sql1 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id', '1', '$dpemail')";
                 $sql2 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id' , '2', '$dgnumber')";


             if ($conn->query($sql) === TRUE) 
                 {  
                    $last_id = $conn->insert_id;
                    $sql1 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id', '1', '$dpemail')";
                    $sql2 = "INSERT INTO `add-extra-value` (`id`,`user-id`, `extradetails-id`, `value`) VALUES (NULL ,'$last_id' , '2', '$dgnumber')";
                    echo "New record created successfully. Last inserted ID is: " . $last_id;

                    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE  ) 
                    {

                        echo "<script> alert('Welcome your account created successfully');  </script>";
                        header("Location:../student/student.php");
                    }
                 } 
             else 
                 {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                 }
         
        }

        
}





?>
