<?php


####submit-Course####
class subCourse
{
    
        public $Suname ;
        public $Colevel ;
        protected static $primarykey = 'id';
    
        static function Insertcourse($objUser)
        {
        $sql1 = "INSERT INTO `courses` (`id`,`course-name`, `Level`) VALUES (NULL ,'$Suname', '$Colevel')";
        if ($conn->query($sql1) === TRUE) 
        {

            echo "<script> alert('Your course created successfully');  </script>";
            header("Location:../staff/BackDisk.php");
        }     
         else 
        {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
         
        
        $conn->close(); 
    echo "hello ".$_POST["suname"];
    echo $_POST["$Colevel"];
    if(isset($_POST['submitCourse']))
       {
        subCourse();
     } 

 }
}

?>