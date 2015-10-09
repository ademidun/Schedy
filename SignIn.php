<!DOCTYPE html>
<html>

<head>
 
    </head>

<body>
        <!-- Header Server include to be used across all pages -->
            <?php $page_title="Atila- Sign in";
            include("atilaheader.php"); ?>

    <div id="content">
        <form action="signinscript.php" method="post">
            <div id="signupForm">
          Email: <br>
          <input name= "email" type="text"   class="form-control" placeholder="Email"><br>

          Password:<br><input type="password" name="password" id="password" class="form-control" placeholder="Password" required > <br> <div class="passwordChange">
            <button type="submit" class=" btn btn-primary"> Submit </button>
        </form>
      </div>

<script>
// $('form').submit(function(event){
//   var formdata ={
//     'email' : $('input[name=email').val();
//     'password' : $('input[name=password').val();
//   };
//   $.ajax({
//     type : 'POST',
//     url  : 'signin.php',
//     data  : formdata,
//     url  : 'json',
//     encode: true
//   })

//   // using the done promise callback
//             .done(function(data) {

//                 // log data to the console so we can see
//                 console.log(data); 
//               });
// // using the fail promise callback
//     .fail(function(data) {

//         // show any errors
//         // best to remove for production
//         console.log(data);
//     });
//       event.preventDefault();
// });

// $(".btn").click(function (){
//     var pwdconfirm= $("#passwordconfirm").val();
//     var pwd=$("#password").val();
//     var check = 1;  
//     var valid= $("#phone").val().search(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
//       if (pwd != pwdconfirm){
//       $(".passwordChange").append("<div> Password does not match. <span class='glyphicon glyphicon-warning-sign form-control-feedback'></span> </div>");
//       check = 0;
//     }
//       if (valid < 0){
//         $(".passwordChange").append("Invalid Number Format!");
//         check =0;
//       }
//      if (check) {
//       $(".passwordChange").append("<div> Valid Password! <span class='glyphicon glyphicon-ok form-control-feedback'></span> </div>");
//       return true;
//     }
//     else {
//       return false;
//     }

//   });
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