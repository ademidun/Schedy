<!DOCTYPE html>
<html>

<head>
   </head>
<body>
<!-- Header Server include to be used across all pages -->
            <?php $page_title="Atila Inc. Sign Up";
            include("atilaheader.php"); ?>

    <div id="content">
        <form action="signupscript.php" method="post">
            <div id="signupForm">
          First Name: <br>
          <input name= "firstname" type="text"   class="form-control" placeholder="First Name"><br>
          
          Last Name:<br> <input type="text" id="LastName" name= "lastname1"class="form-control" placeholder="Last Name"  required><br>
          
<!--           verify that it is a UWO email adresss, also, don't forget to ask for student -->
          Email:<br><input type="text" id="email" name="email1" class="form-control" placeholder="email" required ><br>
          
          
          Phone Number:<br><input type="text" name="phone1" id="phone" class="form-control" size="12" placeholder="Phone Number" required ><br>
          
          Password:<br><input type="password" name="password1"id="password" class="form-control" placeholder="Password" required > <br> <div class="passwordChange">  
          
          Confirm Password: <br><input type="password"  class="form-control" id="passwordconfirm" placeholder="Confirm Password" required>

          I am a: <br> <input type="radio"  name="usertype" value="student"> Student 
          <input type="radio"  name="usertype" value="staff"> Staff Member </div><br> <br>
            <button type="submit" class=" btn btn-primary"> Submit </button>
        </form>
      </div>

<script>
$(".btn").click(function (){
    var pwdconfirm= $("#passwordconfirm").val();
    var pwd=$("#password").val();
    var check = 1;  
    var valid= $("#phone").val().search(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
      if (pwd != pwdconfirm){
      $(".passwordChange").append("<div> Password does not match. <span class='glyphicon glyphicon-warning-sign form-control-feedback'></span> </div>");
      check = 0;
    }
      if (valid < 0){
        $(".passwordChange").append("Invalid Number Format!");
        check =0;
      }    
      var utype = $("input:checked").val();
     if (check) {
      $(".passwordChange").append("<div> Valid Password! <span class='glyphicon glyphicon-ok form-control-feedback'></span> </div>");
      return true;
    }
    else {
      return false;
    }

  });
  // $("#passwordconfirm").change(function (){
  //   var pwdconfirm= $("#passwordconfirm").val();
  //   var pwd=$("#password").val();

  //   if (pwd == pwdconfirm){
  //     $(".passwordChange").append("Valid Password! <span class='glyphicon glyphicon-ok form-control-feedback'></span>");
  //     return true;
  //   }
  //   else{
  //     $(".passwordChange").append("<div> Password does not match. <span class='glyphicon glyphicon-warning-sign form-control-feedback'></span> </div>");
  //     return false;
  //   }
  // });
</script>

  </body>


</html>