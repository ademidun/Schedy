<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  *{
    color: white;
  }
  button{
    margin: 2%;
  }
  .headeritems{
    margin-left: 33%;
  }

</style>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    </head>

<body>

         <!--  Include an external header file -->
            <?php $page_title="Staff";
            include("schedyheader.php"); ?>
    

    <?php
      $servername = "localhost";
      $user = "user1";
      $password = ""; 
      $database = "Schedy"; 
      $email= $_POST['email'];
      $emailcheck = 0;
      $passcheck= 0;
      $userpassword = $_POST['password'];
      $userpassword2='';
      $conn = new mysqli($servername, $user, $password, $database);
      $sql = "SELECT firstname, email, password, usertype FROM Staff";

      $result = $conn->query($sql);
      $rowcount = $result->num_rows;
      while ($row= $result->fetch_assoc()){
        if( $email == $row['email']){
          $emailcheck++;
          $username=$row['firstname'];
          $usertype=$row['usertype'];
          $userpassword2=$row['password'];
        }
        if( $userpassword == $userpassword2 ){
          $passcheck++;
        }
      }
      if ($emailcheck==0) {
        echo "User Not Found!, Redirecting...";
        $conn ->close();
      }
      else if ($passcheck==0) {
        echo "Incorrect Password! <br> Redirecting...";
        $conn ->close();
      }

      else {
        echo "Succesful login!";
        $conn ->close();
      }

    ?>
      <?php if ($passcheck==0): ?>
      <script type="text/javascript">
      (setTimeout(function () {
   window.location.href = "schedy.php"; //will redirect to your blog page (an ex: blog.html)
}, 2000)());
      </script>
    <?php endif ?>
           <?php if ($passcheck>0): ?>
             <body>      
<!--       <div id="header">
 -->            <!--<h1 style="color: black !important">Schedy</h1>-->
            <!-- <div id="logo_out">
              <img class="headeritems"src="images/schedycal.png" width="300" height="77" align="center">
              <button href="index.php" type="button" class="btn btn-primary" id="logoutbutton"> Log out</button>
            </div>
            <p id="date"></p> 
            <ul class="nav nav-pills nav-justified">
              <li class="headerbar"><a href="about.html">About Us</a></li>
              <li class="headerbar">
              </li>
              <li class="headerbar"><a href="index.php">Home <i class="fa fa-home"> </i> </a></li>
              <li class="headerbar"></li>
              <li class="headerbar"><a href="contact.html">Contact Us</a></li>
            </ul>
    </div> -->
    
          <div class="content-calendar">
          <h1 ><?php  echo $username ?>'s Schedule </h1>
          </div> 
          <div id='calendar'></div>
            <form class="staff-form">
            <?php 
          echo "User Found! Hello ".$username."2 <br>";?>

          <p>Pick a date:</p><input type="date" id="dateInput" name="event-date"><br>
          <p>Start Time:</p> <input type="time" name="event-start" id="startTimeInput">
          <p>End Time:</p> <input type="time" name="event-end" id="endTimeInput">
          <p>Course:</p> <input type="text" name="course" id="courseInput">
          <p>Capacity:</p> <input type="numeric" name="capacity" id="capacityInput">
                  
            </form>
                  <button id="customCal" class="btn btn-primary" style="background-color:#33B5E5;
                  border-color:#33B5E5;margin:2%">Custom Schedule</button>
                      
                  
    <script>

          var gcalbutton = '<input type="button" id="gcalbutton" value="Import Google Calendar"class="btn btn-primary calendar-btn2" style="background-color:#33B5E5;border-color:#33B5E5;margin:2%" ></input>';
          $('.staff-form').after(gcalbutton);
          $('#gcalbutton').click(function(){
            alert('Your new office hour was registered. Thank you!');
              $(document).ready(function()  {

                // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                // put your options and callbacks here
                dayClick: function() {
                  alert('a day has been clicked!');
                  },
                  googleCalendarApiKey: 'AIzaSyC49pzLGuanKzvGSdP8FmMtAyoBRznVNm8',
      eventSources: [
            {
                googleCalendarId: '15e73abchm9sug786j2f9ioaf4@group.calendar.google.com'
            },
            {
                googleCalendarId: 'en.canadian#holiday@group.v.calendar.google.com',
                className: 'nice-event'
            },
            {
            events:[{
            title: 'Event1',
            start: '2015-12-04'
            }]
          }
            
        ],
        eventClick: function(event) {
        // opens events in a popup window
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      }
                })
              });
            }
            );

          $('#customCal').click(function(){
            alert('Your new office hour was registered. Thank you!');
              $(document).ready(function()  {

                // page is now ready, initialize the calendar...

                $('#calendar').fullCalendar({
                // put your options and callbacks here
                dayClick: function() {
                  alert('a day has been clicked!');
                  },
        events: [{
            title  : 'Event 3',
            start  : '2015-12-09T12:30:00',
            allDay : false // will make the time show
        }],
                })
              });
            }
            );
     </script>

    </body>
           <?php endif ?>
                
    
    </html>