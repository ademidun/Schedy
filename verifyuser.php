<?php

$db= new mysqli( "localhost", "user1","", "Schedy" );
$request = "SELECT * from Staff";
$result = mysqli_query($db, $request);

$num_rows=mysqli_num_rows($result);
$num_fields=mysqli_num_fields($result);
$email=$_POST['email'];
$checkpwd=$_POST['password'];
$passcheck=0; $emailcheck==0;

while ($row=mysqli_fetch_assoc($result)){
		
		$usertype=$row['usertype'];
	if($usertype=='staff'){
		if( $email == $row['email']){
          $emailcheck++;
          $username=$row['firstname'];
          $usertype=$row['usertype'];
          $userpassword2=$row['password'];
        }
        if ($emailcheck==0) {
        print "User Not Found!";
        $conn ->close();
      }
        if( $checkpwd == $userpassword2 ){
          $passcheck++;
          print "Sucess! Hello, " + $username;
          ?>
      <script type="text/javascript">
      (setTimeout(function () {
   window.location.href = "staffsignin.php"; //will redirect to your blog page (an ex: blog.html)
}, 2000)());
      </script>
    <?php
        }
        else if ($passcheck==0) {
        print "Incorrect Password! <br> Redirecting...";

        $conn ->close();
      }
      
	}

	else{
		mysql_close($db);
		break;
			}
}


if ($usertype!='staff') {

	$db= new mysqli( "localhost", "user1","", "Schedy" );
$request = "SELECT * from Student";
$result = mysqli_query($db, $request);

$num_rows=mysqli_num_rows($result);
$num_fields=mysqli_num_fields($result);

while ($row=mysqli_fetch_assoc($result)){
	
	if($row['usertype']==student){
		$usertype2=$row['usertype'];
	}
	
	else{
		mysql_close($db);
		break;
			}
}

}

if ($usertype!='staff'||$usertype2!='student')
	{	
		print "User not found, try again.";
	}


?>

