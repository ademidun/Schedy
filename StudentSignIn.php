<!DOCTYPE html>
<html>
<head>
  <?php $page_title="Schedy Student";
            include("schedyheader.php"); ?>  
</head>

<body>      
        



          <div class="content-calendar">
          <h1> Student's Schedule </h1>
          </div>
                      <p align="center"><button class="btn btn-primary" style="background-color:#33B5E5;border-color:#33B5E5;margin:2%">Check Schedule</button></p>

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
    //   var myFirebaseRef = new Firebase("https://schedy.firebaseio.com/");
    //   var offHoursRef = myFirebaseRef.child("office_hours");
    //   var userid;
    //   var authData = myFirebaseRef.getAuth();
    //   if (authData) {
    //     console.log("User " + authData.uid + " is logged in with " + authData.provider);
    //     userid = authData.uid;
    //   } else {
    //     console.log("User is logged out");
    //   }

    //   offHoursRef.on("value", function(snapshot) {
    //     console.log(snapshot.val());
    //   }, function (errorObject) {
    //     console.log("The read failed: " + errorObject.code);
    //   });

    //   var userday, userdayArr, eventStart, eventEnd, eventEndArr, attending, capacity;

      //gets all the office hours organized by date. Each field can be obteined by doing snapshot.val().*field*
      //we have date, start (time), end (time), course, capacity and staff id
      /*offHoursRef.orderByChild("date").on("child_added", function(snapshot) {
        userday = snapshot.val().date;
        eventStart = snapshot.val().start;
        eventEnd = snapshot.val().end;
        appointmentRef = offHoursRef.child(snapshot.key());
        attendingRef = appointmentRef.child("attending");
        attendingRef.once("value", function(snapshot) {
          attending = snapshot.numChildren();
        });
        console.log(snapshot.key() + " will happen at " + snapshot.val().date + " from " + snapshot.val().start + " to " + snapshot.val().end);
      });*/

      

    /*any variables which I want to use across multiple files,
     must be declared here, providing them with global scope*/

var codropsEvents = {

  // '09-21-2015' : '<a href="http://tympanus.net/codrops/2012/11/21/adaptive-thumbnail-pile-effect-with-automatic-grouping/">Adaptive Thumbnail Pile Effect with Automatic Grouping</a>',
  // '09-25-2015' : '<span>Christmas Day</span>',
  // '09-31-2015' : '<span>New Year\'s Eve</span>'
};

      function dropIn(key){
          console.log(userid);          
          var appointmentRef = offHoursRef.child(key);
          var attendingRef = appointmentRef.child("attending");
          attendingRef.push({
            userid
          });
        }
    
      $('button').click(function calendarLoad() {
          offHoursRef.once("value", function(snapshot){
        snapshot.forEach(function(childSnapshot) {
          var key = childSnapshot.key();
          var childData = childSnapshot.val();
          console.log(childData.date);
          userday = childData.date;
          eventStart = childData.start;
          eventEnd = childData.end;
          capacity = childData.capacity;
          var appointmentRef = offHoursRef.child(key);
          var attendingRef = appointmentRef.child("attending");
          attendingRef.once("value", function(snapshot) {
            attending = snapshot.numChildren();
          });

          
          var showcal =$('.custom-inner, .custom-header');
          showcal.removeClass('hide');
          //userday = $('[name=event-date]').val();
          userdayArr= userday.split('-');
          userdayArr=userdayArr.reverse();
          userday=userdayArr[1]+ '-'+userdayArr[0]+ '-'+ userdayArr[2];
          //eventStart = $('[name=event-start]').val();
          eventStartArr=eventStart.split(':');
          //eventEnd = $('[name=event-end]').val();
          eventEndArr=eventEnd.split(':');

          //populating my object after it has been created to allow for dynamic inputx
            codropsEvents[userday] = "<h3> There's a slot available from " + eventStart + " to " + eventEnd + " and other <span id='studentnumber' class='studentcount'> "+ attending +"</span> students are coming! Do you want to <button class='btn btn-primary' onclick='dropIn(\""+key+"\")'>drop in</button>?</h3>";
      });
        });

        

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
   //     var duration=eventEndArr[0] - eventStartArr[0];//Obviously will require a better algorithm.
     //   var capacity=duration*12;
        var capacitylocation =$('.capacity-marker');
        var emptyseats='';
        for(var i=0; i<capacity; i++){//# of circles is based on class time
          seatnumber=(i+1);
        emptyseats+=`<i class= "\"fa fa-circle-o-notch traffic-none\" id=\"seat${seatnumber}\""></i>`;}

          
        capacitylocation.append(emptyseats);
      return false;
      });
 </script>
    </html>