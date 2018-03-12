<!DOCTYPE html>
<html>
<head>
    <style>
        table {            
            background-color: tan;   
            border: 5px solid cornflowerblue;  
            border-spacing: 10px; 
            font-family: Arial, Helvetica, sans-serif       
        }

        th {
            background-color: cornflowerblue;
            border: 2px solid cornflowerblue;
            color: white;
            padding: 10px;
        }
       
        td {
            border: 2px solid cornflowerblue;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
            border-top: 0;
            border-bottom: 0;
        }

        .th-title {
            background-color: white;
            border-top: 0;
            border-bottom: 0;            
            color: black;
        }        
    </style>
</head>
<body>


<?php require_once '../constant/header.php'; ?>


<table>

    <tr>
        <th class="th-title" colspan="4">Student's Fees </th>
    </tr>

    <tr>
        <th>Subject</th>
        <th>Total Fees</th>
        <th>Paid</th>
       
    </tr>

    <tr>
        <td>Math</td>
        <td>500</td>
        <td>200</td>
       
    </tr>

    <tr>
        <td>Arabic</td>
        <td>600</td>
        <td>300</td>
    </tr>

	<tr>
        <td>Physics</td>
        <td>600</td>
        <td>300</td>
    </tr>
</table>

<br><br>
<input id = "btn" type="button" value="Back" onclick = "location.href='frontdiskhome.php'">

</body>
</html>