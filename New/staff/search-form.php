<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Search</title>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });    
    
});
</script>
</head>
<body>
    <div class="search-box">
        <input type="text" placeholder="Search Name..." />
        <div class="result"></div>
    </div>
</body>
</html>