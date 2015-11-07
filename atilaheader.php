<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $page_title; ?></title>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="responsive-calendar/responsive-calendar.css" rel="stylesheet" media="screen">
    <script src="responsive-calendar/responsive-calendar2.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel ="stylesheet" type ="text/css" href="Atila Style.css">
    </head>
<body>
        <div id="header">
            <h1 style="color: black !important"> Atila Inc.</h1>

             <?php if ( $page_title == "Atila Inc. Home"): ?>
            
            <p id="date"></p> <!-- This is for the home page -->
            <?php endif ?>
            <ul class="nav nav-pills nav-justified">
              <li class= "headerbar"><a href="index.php">Home <i class="fa fa-home"> </i> </a></li>
              <li class= "headerbar" class="dropdown" ><a class="dropdown-toggle" 
              data-toggle="dropdown" href="clutter folder/Atila Tech 1.html" class= "headerbar">Technology <span class ="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class= "headerbar"><a href="Schedy.php">Web Design</a></li>
                    <li class= "headerbar"><a href="atila tech 1.html">App Dev</a></li>
                    <li class= "headerbar"><a href="#">Investments</a></li> 
                    </ul>
              </li>
              <li class= "headerbar"><a href="#">About Us</a></li>
              <li class= "headerbar"><a href="#">Finance</a></li>
              <li class= "headerbar"><a href="atila contact us.html">Contact Us</a></li>
            </ul>
    </div>
    <!--#include virtual="/atilanav.shtml" -->
    <div class="footernav">
    <ul class="nav nav-pills nav-justified footernav">
              <li class="headerbar emptypill"></li>
              <li class="headerbar emptypill"></li>
              <li class="headerbar emptypill"></li>
              <li class="headerbar emptypill"></li>
              <li class="headerbar"><a  class="pillcontainer" href="index.php"><i href="index.php" class="fa fa-home fa-lg pill-icon"> </i></a>
              <a class="pillcontainer"  href="TechHome.php"> <i class="fa fa-envelope fa-lg pill-icon"> </i> </a> </li>
            </ul>
    </div>
</body>
<script>
<?php if ( $page_title == "Atila Inc. Home"): ?>
	var myVar= setInterval(function(){myTimer()},1000);
	function myTimer(){
		var d = new Date();
		document.getElementById("date").innerHTML = 
		"Today's date is: " + d;
        $("#date").css("color", "black");
        $("#date").css("text-align", "center");
	}
  // function Car(make, model, year){
  //   this.make=make;
  //   this.model=model;
  //   this.year=year;
  // };
  // gwagon=new Car("Mercedes-Benz", "G-Wagon", "2015");
  // modelx=new Car("Tesla Motors", "Model x", "2016");
  // header= document.createElement("h1");
  // header.innerHTML=" Car: " + gwagon.model + "Year: "+ gwagon.year;
  // header.innerHTML+=" Car: " + modelx.model + "Year: "+ modelx.year;  
  // header.innerHTML+=` The two car manufacturers are: ${gwagon.make} and ${modelx.make}`;
  // $('#testcode').prepend(header);
  // var foobar = document.createElement("h1");
  // var stringDate, eventInfo;
  // stringDate =7;
  // eventInfo =9;
  // foobar.innerHTML = "{\"" + stringDate + "\": \"<div class='event' '>" + eventInfo + "</div>\"}";
  //   $('#testcode').append(foobar);
    <?php endif ?>
	/*// Trivial example to display the day of the Week and the weekend
	var dayOfWeek = [ "Sunday", "Monday", "Tuesday","Wednesday","Thursday","Friday","Saturday"];

	if (d.getDay() != 0 && d.getDay() != 6){
		alert("Today is not a weekend, today is " + dayOfWeek[d.getDay()]);
	}
	else{
		alert("Today is a weekend, today is " + dayOfWeek[d.getDay()]);
	}*/
	</script>

</html>
