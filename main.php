<!DOCTYPE html>
<?php
include('credit.php');
?>
<html>
    <head>
        <script src="jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="w3.css">
        <style>
        </style>
        <title>
            Video Game Selector - Selects Video Games You May Enjoy
        </title>
    </head>
    <body>
<!--Using NANO as my text editor is helping me overcome my indentation OCD that I got from Python.-->
<center>
        <h1>
            Video Game Selector
        </h1>
        <h2 id="what_to_select">
             <?="Select Your Age Range"?>
        </h2>
	<h3>
	   Select your lowest age and your highest age
	</h3>
</center>
	<form action='type1_redir.php' method='GET'>
	<span style='cursor: help;' onclick="alert('What is the minimum rating the game could have (so you don\'t get games for toddlers)?')">Lowest Age Rating</span><br>
	<select name="agerangelow">
	<option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='6'>6</option>
	<option value='7'>7</option>
	<option value='8'>8</option>
	<option value='9'>9</option>
	<option value='10' selected='selected'>10</option>
	<option value='11'>11</option>
	<option value='12'>12</option>
	<option value='13'>13</option>
	<option value='14'>14</option>
	<option value='15'>15</option>
	<option value='16'>16</option>
	<option value='17'>17</option>
	<option value='18'>18</option>
	</select>
        <br>
	<span style='cursor: help;' onclick='alert("What is the maximum rating the game could have(18+ means no maximum)")'>Highest Age Rating</span><br>
	<select name="agerangehigh">
        <option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='6'>6</option>
	<option value='7'>7</option>
	<option value='8'>8</option>
	<option value='9'>9</option>
	<option value='10'>10</option>
	<option value='11'>11</option>
	<option value='12'>12</option>
	<option value='13'>13</option>
	<option value='14'>14</option>
	<option value='15' selected='selected'>15</option>
	<option value='16'>16</option>
	<option value='17'>17</option>
	<option value='18'>18+</option>
	</select>
        <br>
<center>	<input class='w3-btn w3-blue w3-round-xxlarge' type='submit' value='Continue'></center>
	</form>
	<?php
		include dirname(__FILE__)."/copy.php";
	?>
    </body>
</html>
