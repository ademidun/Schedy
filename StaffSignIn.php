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
            <?php $page_title="Sign In";
            include("atilaheader2.php"); ?>
    

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
        echo "User Not Found!";
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
   window.location.href = "schedy.html"; //will redirect to your blog page (an ex: blog.html)
}, 2000)());
      </script>
    <?php endif ?>
           <?php if ($passcheck>0): ?>
             <body>      
      <div id="header">
            <!--<h1 style="color: black !important">Schedy</h1>-->
            <div id="logo_out">
              <img class="headeritems"src="images/schedycal.png" width="300" height="77" align="center">
              <button onclick="logout()" type="button" class="btn btn-primary" id="logoutbutton"> Log out</button>
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
    </div>
    
          <div class="content-calendar">
          <h1> Staff's Schedule </h1>
          </div> <!--   Calendario start -->
                  <div id="custom-inner" class="custom-inner hide">
            <div class="custom-header clearfix hide">
              <nav>
                <span id="custom-prev" class="custom-prev"></span>
                <span id="custom-next" class="custom-next"></span>
              </nav>
              <h2 id="custom-month" class="custom-month">September</h2>
              <h3 id="custom-year" class="custom-year">2015</h3>
            </div>
</div>
            <div id="custom-inner" class="custom-inner hide">
            <div class="custom-header clearfix">
              <nav>
                <span id="custom-prev" class="custom-prev"></span>
                <span id="custom-next" class="custom-next"></span>
              </nav>
              <h2 id="custom-month" class="custom-month"></h2>
              <h3 id="custom-year" class="custom-year"></h3>
            </div>
            <div id="calendar" class="fc-calendar-container"></div>
          </div>
            <form class="staff-form">
            <?php 
          echo "User Found! Hello ".$username."2 <br>";?>

          <p>Pick a date:</p><input type="date" id="dateInput" name="event-date"><br>
          <p>Start Time:</p> <input type="time" name="event-start" id="startTimeInput">
          <p>End Time:</p> <input type="time" name="event-end" id="endTimeInput">
          <p>Course:</p> <input type="text" name="course" id="courseInput">
          <p>Capacity:</p> <input type="numeric" name="capacity" id="capacityInput">
                  
            </form>
                  <button class="btn btn-primary" style="background-color:#33B5E5;border-color:#33B5E5;margin:2%" onclick="bookAppointment()">Register new office hour</button>
                  
                                    <!--<button class="btn btn-primary btn-calendar" style="background-color:#33B5E5;border-color:#33B5E5;margin:2%"> Check Schedule</button>-->
          
                  
    <script>

          var schedulebutton = '<input type="button" id="schedulebutton" value="checkSchedule"class="btn btn-primary calendar-btn2" style="background-color:#33B5E5;border-color:#33B5E5;margin:2%" onclick="calendarload"></input>';
          $('.staff-form').after(schedulebutton);
          $('#schedulebutton').click(function(){
          alert('Your new office hour was registered. Thank you!');}
            );
              /*any variables which I want to use across multiple files,
     must be declared here, providing them with global scope*/</script>
    <script src="calendario/js/modernizr.custom.63321.js"></script>
    <script type="text/javascript" src="calendario/js/jquery.calendario.js"></script>
    <script type="text/javascript" src="calendario/js/data.js"></script>
    <link rel="stylesheet" type="text/css" href="calendario/css/demo.css">
    <link rel="stylesheet" type="text/css" href="calendario/css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="calendario/css/custom_2.css" />
    <script>
    function logout(){
      window.location.replace("index.php");
    }
var codropsEvents = {

  // '09-21-2015' : '<a href="http://tympanus.net/codrops/2012/11/21/adaptive-thumbnail-pile-effect-with-automatic-grouping/">Adaptive Thumbnail Pile Effect with Automatic Grouping</a>',
  // '09-25-2015' : '<span>Christmas Day</span>',
  // '09-31-2015' : '<span>New Year\'s Eve</span>'
};
    var userday, userdayArr, eventStart;
      $('.calendar-btn2').click(function calendarload() {
        var showcal =$('.custom-inner, .custom-header');
        showcal.removeClass('hide');
        userday = $('#dateInput').val();
        userdayArr= userday.split('-');
        userdayArr=userdayArr.reverse();
        userday=userdayArr[1]+ '-'+userdayArr[0]+ '-'+ userdayArr[2];
        eventStart = $('#startTimeInput').val();
        eventStartArr=eventStart.split(':');
        eventEnd = $('#endTimeInput').val();
        eventEndArr=eventEnd.split(':');

//populating my object after it has been created to allow for dynamic inputx
  codropsEvents[userday] = '<h3> You have <span id="studentnumber" class="studentcount"> </span> students today</h3> <a href="http://tympanus.net/codrops/2012/11/23/three-script-updates/">Three Script Updates</a><span class="capacity-marker"></span>';
        var transEndEventNames = {
            'WebkitTransition' : 'webkitTransitionEnd',
            'MozTransition' : 'transitionend',
            'OTransition' : 'oTransitionEnd',
            'msTransition' : 'MSTransitionEnd',
            'transition' : 'transitionend'
          },
          transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
          $wrapper = $( '#custom-inner' ),
          $calendar = $( '#calendar' ),
          cal = $calendar.calendario( {
            onDayClick : function( $el, $contentEl, dateProperties ) {

              if( $contentEl.length > 0 ) {
                showEvents( $contentEl, dateProperties );
              }

            },
            caldata : codropsEvents,
            displayWeekAbbr : true
          } ),
          $month = $( '#custom-month' ).html( cal.getMonthName() ),
          $year = $( '#custom-year' ).html( cal.getYear() );

        $( '#custom-next' ).on( 'click', function() {
          cal.gotoNextMonth( updateMonthYear );
        } );
        $( '#custom-prev' ).on( 'click', function() {
          cal.gotoPreviousMonth( updateMonthYear );
        } );

        function updateMonthYear() {        
          $month.html( cal.getMonthName() );
          $year.html( cal.getYear() );
        }

        // just an example..
        function showEvents( $contentEl, dateProperties ) {

          hideEvents();
          
          var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
            $close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

          $events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
          
          setTimeout( function() {
            $events.css( 'top', '0%' );
          }, 25 );

        }
        function hideEvents() {

          var $events = $( '#custom-content-reveal' );
          if( $events.length > 0 ) {
            
            $events.css( 'top', '100%' );
            Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

          }

        }
        var duration=eventEndArr[0] - eventStartArr[0];//Obviously will require a better algorithm.
        var capacity=$('#capacityInput').val();
        var capacitylocation =$('.capacity-marker');
        var emptyseats='';
        for(var i=0; i<capacity; i++){//# of circles is based on class time
          seatnumber=(i+1);
          if( 1<=seatnumber && seatnumber<=(0.5*capacity))
        emptyseats+=`<i style=\"color: #35EA08 !important\" class= \"fa fa-circle-o-notch traffic-light\" id=\"seat${seatnumber}\"></i>`;
        else if( (0.5*capacity)<seatnumber && seatnumber<=(capacity-3))
        emptyseats+=`<i style=\"color: #F39B2F !important\"class= \"fa fa-circle-o-notch traffic-medium\" id=\"seat${seatnumber}\"></i>`;
      else if( (capacity-3)<seatnumber)
        emptyseats+=`<i style=\"color: #FF2300 !important\"class= \"fa fa-circle-o-notch traffic-heavy\" id=\"seat${seatnumber}\"></i>`;
      //this line is merely to fix the quotations fiasco;
      var randomthingy=`"`;
      if(seatnumber==capacity)
        $('#studentnumber').append(`<p>${seatnumber}</p>`);
        $('#studentnumber').css("color", "#FF2300" );
    }
          
        capacitylocation.append(emptyseats);
      return false;
      this.preventDefault();
      event.preventDefault();
      });
      

    </script>
    </body>
           <?php endif ?>
                
    
    </html>