<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/puttinggrades.css">
</head>
<body>

<?php require_once 'header.php'; ?>


<table>
    <tr>
        <th class="th-title" colspan="6">Student's Grades</th>
    </tr>

    <tr>
        <th>Subject</th>
        <th>Grade</th>
        <th>Percentage</th>
		<th>Week 1 </th>
		<th>Week 2 </th>
		<th>Week 3 </th>
       
    </tr>

    <tr>
        <td>Math</td>
        <td>A</td>
        <td>90%</td>
		<td>4 out of 10 </td>
		<td>9 out of 10 </td>
		<td>6 out of 10 </td>
       
    </tr>

    <tr>
        <td>Arabic</td>
        <td>C</td>
        <td>70%</td>
		<td>8 out of 10 </td>
		<td>6 out of 10 </td>
		<td>4 out of 10 </td>
    </tr>
	<tr>
        <td>physics</td>
        <td>A</td>
        <td>90%</td>
		<td>5 out of 10 </td>
		<td>7 out of 10 </td>
		<td>9 out of 10 </td>
    </tr>
	
</table>


<br><br>
<input id = "btn" type="button" value="Back" onclick = "location.href='frontdiskhome.php'">

</body>
</html>