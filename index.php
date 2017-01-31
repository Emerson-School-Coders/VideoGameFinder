<!DOCTYPE html>
<html>
    <head>
        <script src="jquery.js"></script>
        <link rel="stylesheet" type="text/css" src="w3.css">
        <style>
        </style>
        <title>
            Video Game Selector - Selects Video Games You May Enjoy
        </title>
    </head>
    <body>
        <h1>
            Video Game Selector
        </h1>
        <h2 id="what_to_select">
             <?="Select Your Age Range"?>
        </h2>
	<h3>
	   Select all that apply
	</h3>
        <?php
echo "
	<form action='type1_redir.php'>
	<input type='checkbox' name='agerange1' value='0-3' /> 0 - 3<br>
	<input type='checkbox' name='agerange2' value='3-6' /> 4 - 6<br>
	<input type='checkbox' name='agerange3' value='6-9' /> 7 - 9<br>
	<input type='checkbox' name='agerange4' value='9-12' /> 10 - 12<br>
	<input type='checkbox' name='agerange5' value='12-15' /> 13 - 15<br>
	<input type='checkbox' name='agerange6' value='15-18' /> 16 - 18<br>
	<input type='checkbox' name='agerange7' value='18' /> 18+<br>
	<input type='submit'>

	</form>
"
	?>
    </body>
</html>
