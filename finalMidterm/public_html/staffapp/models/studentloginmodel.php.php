<?php
class subGroup
{
    
    public $Email;
    private $Password;
    protected static $primarykey = 'id';

####Student Login####

    static function studentlog()
    {
        if(isset($_POST['studentlog']))
        {
           studentlog();
        } 

       
      
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