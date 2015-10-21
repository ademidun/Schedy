<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $page_title; ?></title>
<style type="text/css">
  button{
    margin: 2%;
  }
  #logoutbutton{
    float:right;
  }
  #logo_out{
    margin: 5px;
    text-align: center;
  }
  #content{
    text-align: center;
    color: black;
  }
</style>
    <head>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="calendario/css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="calendario/css/custom_2.css" />
    <script src="js/modernizr.custom.63321.js"></script>
    <link rel ="stylesheet" type ="text/css" href="Atila Style.css" />
    <link rel ="stylesheet" type ="text/css" href="calendar-style.css" />

    </head>
        <body>
          <div id="header">
          <script src="https://cdn.firebase.com/js/client/2.2.9/firebase.js"></script>
            <!--<h1 style="color: black !important">Schedy</h1>-->
            <div id="logo_out">
              <img src="images/schedycal.png" width="300" height="77" align="center">
              <button href="index.php" type="button" class="btn btn-primary" id="logoutbutton" onclick="location.href='index.php'"> Log out</button>
              </div>
            <p id="date"></p> 
            <ul class="nav nav-pills nav-justified">
              <li class= "headerbar"><a href="about.html">About Us</a></li>
              <li class= "headerbar"></a>
              </li>
              <li class= "headerbar"><a  onclick="location.href='index.php'">Home <i class="fa fa-home"> </i> </a></li>
              <li class= "headerbar"></li>
              <li class= "headerbar"><a href="contact.html">Contact Us</a></li>
            </ul>
    </div>

    </body>
    

</html>
