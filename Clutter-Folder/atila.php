<!DOCTYPE html>
<html>
<head>
    <title> Atila Inc.</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <link rel ="stylesheet" type ="text/css" href="Atila Style.css">
    </head>

<body>
        <div id="header">
            <h1> Atila Inc.</h1>
            <p id="date"></p> <!-- This is for the home page -->
            <ul class="nav nav-pills nav-justified">
              <li><a href="index.html">Home</a></li>
              <li class="dropdown" ><a class="dropdown-toggle" 
              data-toggle="dropdown" href="Atila Tech 1.html">Technology <span class ="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="TechHome.html">Web Design</a></li>
                    <li><a href="atila tech 1.html">App Dev</a></li>
                    <li><a href="#">Investments</a></li> 
                    </ul>
              </li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Finance</a></li>
              <li><a href="atila contact us.html">Contact Us</a></li>
            </ul>
    </div>
<div id="content" style="clear:both" >

		<?php 
		$connect =  mysql_connect("localhost", "user1", "");
		if ($connect){
			echo "Conected!";
		}
		else 
			echo "Problem.";

	?>
	Hello, <?php
	echo $_POST["name1Input"]; ?> <br> 
	You have <?php echo $_POST["myInputs"][0]; ?> employees.
	<br>

	<?php
	$nameInput = $_POST["nameInput"];
	foreach ($nameInput as $eachInput) {
	     echo $eachInput . "<br>";}
		$empSize = $_POST["myInputs"][0];
		for ($i=0; $i<$empSize; $i++){
			echo $_POST["nameInput"][$i]. "<br>";
		}
	?>
	<?php
	$salInput=$_POST['salInput'];
	foreach ($salInput as $salary)  {
		echo "$" . $salary ."<br>";
	}
		
	?>



</div>
</body>
</html>