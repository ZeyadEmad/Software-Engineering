<?php


class subGroup
{
   
            public $Groupcode ;
            public $course ;
            public $room ;
            public $teacher ;
            public $color ;
    
            protected static $primarykey = 'id';
            static function Insertcourse($objUser)
                {
            
                 $sql = "INSERT INTO `group-details` (`id`, `Group-code`, `course-id`, `room-id`, `teacher-id`, `color`) "
                         . "VALUES (NULL ,'$Groupcode', '$course', '$room', '$teacher','$color')";

                 $last_id = $conn->insert_id;
                 if ($conn->query($sql) === TRUE) 
                     {  echo $sql;

                     } 
                 else 
                     {
                         echo "Error: " . $sql . "<br>" . $conn->error;
                     }

                }
              
      }

?>