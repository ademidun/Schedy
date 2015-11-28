<!DOCTYPE html>
<html>

<head>

    <title>Schedy - Home</title>

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
  #notAmember{
    font-size: 20px;
  }
  #notAmember a{
    color: #33b5e5;
  }
  .row .btn-primary{
    margin: 0% ;
  }
</style> 
    </head>

<body>
     
      <?php $page_title="Schedy-Home";
            include("schedyheader.php"); ?>
    <div id="content">

                
      <h1 class="home-title" style="margin-top: 5px; margin-bottom: 5px">I am a... </h1>
             <div id="signin" class="container" style="top:15%">
             <form method="post" id="signinform">
                <p><input type='text' id='emailInput' name="email" placeholder='Email'></p>
                <p><input type='password' id='passwordInput' name="password" placeholder='Password'></p>
                <div class="row">
                    <div class="col-md-2 col-md-offset-5">
                        <p><button type="submit" class=" btn btn-primary" formaction="staffSignIn.php">Staff</button></p>
                        <p><button type="submit" class=" btn btn-primary" formaction="staffSignIn2.php">Staff 2</button></p>
                        <p><button type="submit" class=" btn btn-primary" formaction="studentSignIn.php" style="
    margin-bottom: 0px" >Student</button></p><br>
                        <span id="verifyuser"> </span>
                        <p><button id="quickbutton"class=" btn btn-primary">Quick Log in</button></p></form>
                        </form>
                        <span
                        <p id="notAmember">Not a member yet? <a href="signup.php">Sign up now!</a></p>
                    </div>
                    <div id="responsebox"></div>
                </div>
             </div>
    </div>

</body>
<script type="text/javascript">
  
  $('#quickbutton').on('click',function(){
    var that =this;
    var ajaxpost= $.post("verifyuser.php",$("#signinform").serialize() );
    ajaxpost.done(function (data) {
      var respSpace = $("#responsebox");
      respSpace.append(data);
    });
    event.preventDefault();

  });
  // //   formdata= $('form');
// //   verifyspace= $('#verifyuser');
  
// //   var xhr = new XMLHttpRequest();
// //   xhr.open("POST", "verifyuser.php", true);
  
// // //   http.setRequestHeader("Content-type", 
// // //     "application/x-www-form-urlencoded");
// // // http.setRequestHeader("Content-length", params.length);
// // // http.setRequestHeader("Connection", "close")
// // //I fee like these above lines are redundant, looking for a faster way  

// //   xhr.onreadystatechange= function(){//this is to keep track of the progress of my request
// //     if(xhr.readystate==1){
// //       verifyspace.innerHTMl="Connection established. ";
// //     }
// //     if(xhr.readystate==4 && xhr.status=200){
// //       result=xhr.responseText;
// //       verifyspace.innerHTMl=responseText;
// //     }
// //   }


// //   xhr.send(formdata);
</script>

</html>






