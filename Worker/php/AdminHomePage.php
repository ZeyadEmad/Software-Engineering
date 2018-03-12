<?php
     	
?>

<html>
    
    <head>
        
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {			
                $("#btnLeft").click(function () 
                    {
                    var selectedItem = $("#rightValues option:selected");
                    $("#leftValues").append(selectedItem);
                    });
                $("#btnRight").click(function ()    
                    {
                    var selectedItem = $("#leftValues option:selected");
                    $("#rightValues").append(selectedItem);
                    });
            });
        </script>
        
    </head>

    <body>
        
        <?php 
            require("../../Classes/PagesClass.php") ;
            $Page = new pages ;
        ?>
        
        <form action="" method="post">
		<table>
			<tr>
				<td>All Pages</td>
				<td></td>
				<td>Choosen Pages</td>
			</tr>
			<tr>
				<td>
					<select id="leftValues" STYLE="width: 160px;box-sizing: border-box;" size="5" multiple>
						<?php
                            $obj=$Page->getAllPages();
                            $result=count($obj);

                            for ( $i=0 ; $i<$result ; $i++ )
                            {
                                echo "<option value = '" $obj[$i]->name "'>" .$obj[$i]. "</option>";
                            }
				        ?>
					</select>
				</td>
				<td align="center">
					<input type="button" id="btnLeft" value="<<"  />
					<input type="button" id="btnRight" value=">>"  />
				</td>
				<td>
					<select id="rightValues" name="choosen-pages[]" STYLE="width: 160px;box-sizing: border-box;" size="5" multiple>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Choose User Type:
				</td>
				<td>
					<select name="UserType">
												
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>
		</table>
	</form>
    
    
    </body>


</html>