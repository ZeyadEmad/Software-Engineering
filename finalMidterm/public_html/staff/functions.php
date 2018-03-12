<?php
require_once 'database.php';
require_once 'Css-files.php';

function getButtons()
{
		$data = new data();
		$conn = $data->con();
		$sql = "SELECT id,number FROM `room` ";
		$result = $conn->query($sql);
		$x=0;
		$btns= array();
			

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) 
				{
					//$btns[$x]=array($row["id"]=>$row["number"]);
					$btns[$x]=array('id'=>$row['id'],'num'=>$row['number']);
					$x=$x+1;
				}
			}
			
		$str='';

			
		foreach($btns as $btn)
			{
				$str.='&nbsp;<input type="radio" value="'.$btn['num'].'" name="room" id="'.$btn['id'].'" class="r1"/>'.$btn['num'].'';
			
			}
			return $str;
			$conn->close();
}
	


function getButtons1()
{
	$data = new data();
	$conn = $data->con();
	$sql = "SELECT id,number FROM `room` ";
	$result = $conn->query($sql);
	$x=0;
	$btns= array();	

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) 
			{
                            //$btns[$x]=array($row["id"]=>$row["number"]);
                            $btns[$x]=array('id'=>$row['id'],'Num'=>$row['number']);
                            $x=$x+1;
			}
		}	
	$str='';	
	foreach($btns as $btn)
		{
			$str.='&nbsp;<input type="button"  value="'.$btn['Num'].'" name="btn_'.$btn['Num'].'" id="button1" class="button" onclick=window.parent.location.href="Calendar.php" target="_parent" style="text-align: center;height:100px; width: 100px; Background-color:#ffcccc; position:static;"/>';
		
		}
        return $str;
        $conn->close();
}

####select-Course####
function selectCourse()
{
    $data = new data();
	$conn = $data->con();
	$sql = "SELECT `id`, `course-name`, `Level` FROM `courses`  ";
	$result = $conn->query($sql);
	$x=0;
	$btns= array();	
        
        $str='';
        $str.='&nbsp;<select name="Courselist" class="form-control selectpicker"  style="border-radius: 0px 5px 5px 0px; border: 1px solid #eee; margin-bottom: 15px; width: 50%; height: 40px;">';
        $str.='&nbsp;<optgroup label="Course" name="Courselist">';
        if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                            {
                                
                                $btns[$x]=array('id'=>$row['id'],'fname'=>$row['course-name'],'lname'=>$row['Level']);
                                $Cid = $row['id'];
                                $fname= $row['course-name'];
                                $lname = $row['Level'];
                                $str.='&nbsp; <option id="Courselist" label="'.$fname.' Level: '.$lname.'" value="'.$Cid.'" style="Background-color: #eee"/>';
                                $x=$x+1;
                            }
                    }
        $str.='&nbsp;</optgroup>';
        $str.='&nbsp;</select>';
        $str.='<br><br>';
        return $str;
        $conn->close();
}


####select-Teacher####
function selectTeacher()
{
    $data = new data();
	$conn = $data->con();
	$sql = "SELECT `id`, `First-name`, `last-name` FROM `user` WHERE `type-id`='4' ";
	$result = $conn->query($sql);
	$x=0;
	$btns= array();	
        
        $str='';
        $str.='&nbsp;<select name="Teacherlist" class="form-control selectpicker" style="border-radius: 0px 5px 5px 0px; border: 1px solid #eee; margin-bottom: 15px; width: 50%; height: 40px;">';
        $str.='&nbsp;<optgroup label="Teacher" name="Teacherlist"  >';
        
                                
        if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                            {
                                //$btns[$x]=array($row["id"]=>$row["number"]);
                                #$btns[$x]=array('id'=>$row['id'],'fname'=>$row['First-name'],'lname'=>$row['last-name']);
                                #$x=$x+1;
                                $Tid = $row['id'];
                                $fname= $row['First-name'];
                                $lname = $row['last-name'];

                                #$str.='&nbsp; <option id="glist" value="$id" name="Teacherist" >"MR $fname $lname "</option>';
                                $str.='&nbsp; <option id="Teacherlist" label="Mr. '.$fname.' '.$lname.'"  value="'.$Tid.'" style="Background-color: #eee"/>';
                                
                                #$str.='&nbsp;<input type="button"  value="$id" name="$id"  target="_parent" style="text-align: center;height:100px; width: 100px; Background-color:#ffcccc; position:static;">"MR" .$fname. " " .$lname.</button>';

                                #$btns[$x]= $str;
                                #$x=$x+1;
                            }
                    }
        $str.='&nbsp;</optgroup>';
        $str.='&nbsp;</select>';
        $str.='<br><br>';
        return $str;
        $conn->close();
}

####Add-new-student####
function Addnewstudent()
{
	$data = new data();
	$conn = $data->con();
        if($_POST){
            $dfname =$_POST["fname"];
            $dlname = $_POST['lname'];
            $dmail = $_POST['mail'];
            $daddress = $_POST['address'];
            $dage = $_POST['age'];
            $dnumber = $_POST['pnumber'];
            $dgender = $_POST['glist'];
            $dusername = $_POST['username'];
            $dpassword = $_POST['password'];
            $dpemail = $_POST['gumail'];
            $dgnumber = $_POST['gnumber'];
            $dpic = $_POST['pic'];
            $usertype = 1;

            $TableName = 'user';
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
        $conn->close(); 
}

if(isset($_POST['Addnewstudent']))
{
   Addnewstudent();
} 
####submit-Course####
function subCourse()
{
    $data = new data();
	$conn = $data->con();
	
    if($_POST){
        $Suname =$_POST["suname"];
        $Colevel =$_POST['colevel'];
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
         
        }
        $conn->close(); 
    echo "hello ".$_POST["suname"];
    echo $_POST["$Colevel"];
}

if(isset($_POST['submitCourse']))
{
   subCourse();
} 
####submit-Group####
if(isset($_POST['submitGroup']))
{
   subGroup();
} 

function subGroup()
{
    $data = new data();
    $conn = $data->con();
	
    if($_POST){
            $Groupcode =$_POST["GroupCode"];
            $course = $_POST["Courselist"];
            $room = $_POST['room'];
            $teacher = $_POST["Teacherlist"];
            $color = $_POST['color'];
            
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
        $conn->close();
}

####Student Login####
if(isset($_POST['studentlog']))
{
   studentlog();
} 

function studentlog()
{
    session_start();
    $data = new data();
    $conn = $data->con();
	
    if($_POST){
        include "../constant/ConnectToDB.php";
	$Email= $_POST['username'];
	$Password= $_POST['userpass'];
        $db = new dbconnect;
	$db->connect();
	$sql = "SELECT * FROM  `user` WHERE username ='$Email' AND password ='$Password' ";
        
        $Result=$db->executesql($sql);
	if($row=mysqli_fetch_array($Result))
        {	
            $_SESSION["id"] =$row["id"];
            header("Location:../student/student.php");
        }
	else echo "Not found"; 
                    
    				
        
	

	

    }
        $conn->close();
}

####Student Add course####
function studentAddcourse()
{
    $data = new data();
	$conn = $data->con();
	$sql = "SELECT `id`, `course-name`, `Level` FROM `courses`  ";
	$result = $conn->query($sql);
	$x=0;
	$btns= array();	
        
        $str='';
        $str.='&nbsp;<select name="Courselist" class="form-control selectpicker"  style="border-radius: 0px 5px 5px 0px; border: 1px solid #eee; margin-bottom: 15px; width: 50%; height: 40px;">';
        $str.='&nbsp;<optgroup label="Course" name="Courselist">';
        if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                            {
                                
                                $btns[$x]=array('id'=>$row['id'],'fname'=>$row['course-name'],'lname'=>$row['Level']);
                                $Cid = $row['id'];
                                $fname= $row['course-name'];
                                $lname = $row['Level'];
                                $str.='&nbsp; <option id="Courselist" label="'.$fname.' Level: '.$lname.'" value="'.$Cid.'" style="Background-color: #eee"/>';
                                $x=$x+1;
                            }
                    }
        $str.='&nbsp;</optgroup>';
        $str.='&nbsp;</select>';
        $str.='<br><br>';
        return $str;
        $conn->close();
    
}
?>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<script>
function Deleted() {
    alert("Details has been Deleted");}

function allroom() {
    alert("New record created successfully");}
</script>