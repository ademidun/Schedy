<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  button{
    margin: 2%;
  }
  input{
    margin: 2% !important;
  }
</style>
    <head>
    <title> Calendar Plus</title>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="responsive-calendar.css" rel="stylesheet" media="screen">
    <script src="responsive-calendar2.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="calendario/css/calendar.css" />
    <link rel="stylesheet" type="text/css" href="calendario/css/custom_2.css" />
    <script src="js/modernizr.custom.63321.js"></script>
    <link rel ="stylesheet" type ="text/css" href="Atila Style.css" />
    <link rel ="stylesheet" type ="text/css" href="calendar-style.css" />
    <link href="responsive-calendar/responsive-calendar.css" rel="stylesheet" media="screen">
    <script src="responsive-calendar/responsive-calendar2.js"></script>
    </head>

<body>      
      <div id="header">
            <script src="https://cdn.firebase.com/js/client/2.2.9/firebase.js"></script>
            <h1 style="color: black !important"> Calendar Plus</h1>
            
            <p id="date"></p> 
            <ul class="nav nav-pills nav-justified">
              <li class= "headerbar"><a href="index.html">Home <i class="fa fa-home"> </i> </a></li>
              <li class= "headerbar" class="dropdown" ><a class="dropdown-toggle" 
              data-toggle="dropdown" href="clutter folder/Atila Tech 1.html" class= "headerbar">Technology <span class ="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class= "headerbar"><a href="TechHome.php">Web Design</a></li>
                    <li class= "headerbar"><a href="atila tech 1.html">App Dev</a></li>
                    <li class= "headerbar"><a href="#">Investments</a></li> 
                    </ul>
              </li>
              <li class= "headerbar"><a href="#">About Us</a></li>
              <li class= "headerbar"><a href="#">Finance</a></li>
              <li class= "headerbar"><a href="atila contact us.html">Contact Us</a></li>
            </ul>
    </div>
      <?php
      //connect to mysql
      $db=mysqli_connect("localhost", "user1"," ","Schedy" );
      //populate PHP with the staff values
      $staffname=$_POST['staffname'];
      $eventdate=$_POST['event-date'];
      $eventstart=$_POST['event-start'];

      //now we will populate our MySQL values

      $query="INSERT INTO Staff (UserName, EventDate, StartTime)
      VALUES ('$staffname','$eventdate', '$eventstart')";

      ?>
          <div class="content-calendar">
          <h1> Student's Schedule </h1>
          </div>
             <form onclick: 'calendarLoad()'>
                <p>Select Your Professor: <select>
                <option value= "<?php echo $staffname?>"><?php echo $staffname?>/option>
                </select>
             <p>Select a time slot:</p> <select>
                <option value= "<?php echo $eventstart?>"><?php echo $eventstart?>/option>
                </select>
             </form >
            <button class="btn btn-primary" style="background-color:#33B5E5;border-color:#33B5E5;margin:2%"> Check Schedule</button>
            </div>
          <!--   Calendario start -->
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
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.calendario.js"></script>
    <script type="text/javascript" src="js/data.js"></script>
    <script>
      var ref = new Firebase("https://schedy.firebaseio.com");
      var authData = ref.getAuth();
      if (authData) {
        console.log("User " + authData.uid + " is logged in with " + authData.provider);
      } else {
        console.log("User is logged out");
      }
    </script>
    <script > 
    /*any variables which I want to use across multiple files,
     must be declared here, providing them with global scope*/

var codropsEvents = {

  // '09-21-2015' : '<a href="http://tympanus.net/codrops/2012/11/21/adaptive-thumbnail-pile-effect-with-automatic-grouping/">Adaptive Thumbnail Pile Effect with Automatic Grouping</a>',
  // '09-25-2015' : '<span>Christmas Day</span>',
  // '09-31-2015' : '<span>New Year\'s Eve</span>'
};
    var userday, userdayArr, eventStart;
      $('button').click(function calendarLoad() {
        var showcal =$('.custom-inner, .custom-header');
        showcal.removeClass('hide');
        userday = <?php echo $eventstart?>;
        userdayArr= userday.split('-');
        userdayArr=userdayArr.reverse();
        userday=userdayArr[1]+ '-'+userdayArr[0]+ '-'+ userdayArr[2];
        eventStart = $('[name=event-start]').val();
        eventStartArr=eventStart.split(':');
        eventEnd = $('[name=event-end]').val();
        eventEndArr=eventEnd.split(':');

//populating my object after it has been created to allow for dynamic inputx
  codropsEvents[userday] = '<h3> You have <span id="studentnumber" class="studentcount"> {insert studentCount here}</span> students today</h3> <a href="http://tympanus.net/codrops/2012/11/23/three-script-updates/">Three Script Updates</a><span class="capacity-marker"></span>';
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
        var capacity=duration*12;
        var capacitylocation =$('.capacity-marker');
        var emptyseats='';
        for(var i=0; i<capacity; i++){//# of circles is based on class time
          seatnumber=(i+1);
        emptyseats+=`<i class= \"fa fa-circle-o-notch traffic-none\" id=\"seat${seatnumber}\"></i>`;}
          
        capacitylocation.append(emptyseats);
      return false;
      });
     </script>
