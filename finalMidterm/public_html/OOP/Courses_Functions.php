<?php
require_Once ("dbconnect.php");

class Courses_Functions
{
    public $id;
    public $course_name;
	public $level;
    public $database;
    
    public function returnAllCourses()
     {
        $db_obj = new dbconnect;
        $db_obj->connect();
        $sql=" SELECT *
        from courses
        where course-name=$course_name ";
        $result = $db_obj->executesql($sql);
        $i=-1;
        while ($row = mysqli_fetch_array($result))
        {
            $i++;
            $arrayOfCourses[$i]=$row['course-name'];
        }

        return $arrayOfCourses;
     }
        
}

?>