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
            padding: 20px;
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
        #btn2{
		      
	    width:140px;
	    height:40px;
	     color:blue;
        background-color:gray;
         font-size:15px;
      }		
	      #btn3{
		      
	    width:140px;
	    height:40px;
	     color:blue;
        background-color:gray;
         font-size:15px;
      }	
	  #sel1{
		background-color: cornflowerblue;
		padding: 5px 5px 5px 5px ;
		color: white;
		
	  }
	  
	   #sel2{
		background-color: cornflowerblue;
		padding: 5px 5px 5px 5px ;
		color: white;
	  }
	  option
	  {
	   background-color:gray;
	  }
	  
    </style>
</head>
<body>


<?php require_once '../constant/header.php'; ?>


<table>

    <tr>
        <th class="th-title" colspan="4">Student's add course</th>
    </tr>

    <tr>
        <th>Subject</th>
        <th>Teacher</th>
       
	   <tr>
		   <th>
				<select id = "sel1">
				  <option value="Subject">Physics</option>
				  <option value="Subject">Arabic</option>
				  <option value="Subject">Chemstry</option>
				  <option value="Subject">Deutsch</option>
				  <option value="Subject">Math</option>
				  <option value="Subject">English</option>
				</select>
			</th>
		
			<th>
				<select id = "sel2">
				  <option value="Teacher">Mr/Ahmed Mohamed</option>
				  <option value="Teacher">Mr/Mohamed Ali</option>
				  <option value="Teacher">Mr/Ali Tareeq</option>
				  <option value="Teacher">Mr/Hani Mohamed</option>
				  <option value="Teacher">Mr/Ahmed Hani</option>
				  <option value="Teacher">Mr/Waleed Mahmoud</option>
				</select>
			</th>
       </tr>
	   <tr>
			<td>
				<input id = "btn2" type="button" value="Back" onclick = "location.href='frontdiskhome.php'"> 
			</td>
			<td>
				<button id = "btn3" name="submit" type="submit" >Submit</button>
			</td>
		<tr>
    </tr>
	<br><br>

	   
</table>




</body>
</html>