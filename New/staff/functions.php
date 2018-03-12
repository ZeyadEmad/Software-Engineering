<<<<<<< HEAD
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
			$pass='Calendar.php';
			$str.='&nbsp;<input type="button"  value="'.$btn['Num'].'" name="btn_'.$btn['Num'].'" id="button1" class="button1" onclick=window.parent.location.href="Calendar.php" target="_parent"/>';
		
		}
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
function myFunction() {
    alert("Details has been Deleted");}
=======
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
			$pass='Calendar.php';
			$str.='&nbsp;<input type="button"  value="'.$btn['Num'].'" name="btn_'.$btn['Num'].'" id="button1" class="button1" onclick=window.parent.location.href="Calendar.php" target="_parent"/>';
		
		}
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
function myFunction() {
    alert("Details has been Deleted");}
>>>>>>> 39b9fc79caa1db37a4edd2e1b2951c17173e9245
</script>