<?php
?>
<html>
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/EmployeeBill.css">
        
        <title>
            Billing
        </title>
    </head>

    <body>
        
        <table>
            
        <tr>
            <td> <h5> Number of attended days : </h5> </td> <td> <input type="text" name="attend" value="" size="1px" readonly> </td>
        </tr>
        <tr>
            <td> <h5> Number of half days : </h5> </td> <td> <input type="text" name="half" value="" size="1px" readonly> </td>
        </tr>
        <tr>
            <td> <h5> Number of days off : </h5> </td> <td> <input type="text" name="off" value="" size="1px" readonly> </td>
        </tr>
        <tr>
            <td> <h5> Salary : </h5> </td> <td> <input type="text" name="salary" value="" size="5px" readonly> </td>
        </tr>
            
        </table>
		<button type="submit" class="btn1"> Submit  </button>
		<button  onclick="parent.location='BackDisk.php'" class="btn1"> Back </button>
    </body>
</html>