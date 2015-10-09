<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel ="stylesheet" type ="text/css" href="navstyle.css">
<script src="clutter-folder/modernizr.custom.23375.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <style>

/* .holdbox{

    position: absolute;
    width: 26em;
    height: 26em;
    position: fixed;
    bottom: 0em;
    left: 50%;
    margin-left: -13em;
    margin-bottom: -13em;
 }*/
 li a{
 	transform:  scale(1.2);
 }
 .csstransforms .cn-wrapper {
  border:1px solid #7D99B5;
  display: block;
  font-size:1em;
  width: 26em;
  height: 26em;
  overflow: hidden;
  position: fixed;
  z-index: 10;
  bottom: 0em;
  left: 50%;
  border-radius: 50%;
  margin-left: -13em;
  margin-bottom: -13em;
  transform: scale(0.1);
  transition: all .3s ease;
}
/* class applied to the container via JavaScript that will scale the navigation up */

 </style>
 </head>


<body>
<button class="cn-button btn " id="cn-button">+</button>
  <div class= "holdbox cn-wrapper csstransforms" style=" transition: all .3s ease;">
    <ul>
      <li style="transform: rotate(0deg) skew(45deg);"> <a style="transform: skew(-45deg) rotate(-67.5deg) scale(2); border-radius: 50%; text-align: center; padding-top: 2em;" href="#"  class="navanchor"> <i class="fa fa-nav fa-home"></i> </a> </li>
      
      <li style="transform: rotate(45deg) skew(45deg)"> <a style="transform: skew(-45deg) rotate(-67.5deg) scale(2); border-radius: 50%; text-align: center; padding-top: 2em;"  href="#" class="navanchor"> <i class="fa fa-nav fa-user"></i></a> </li>
      
      <li style="transform: rotate(90deg) skew(45deg)"> <a style="transform: skew(-45deg) rotate(-67.5deg) scale(2);  border-radius: 50%; text-align: center; padding-top: 2em;" href="#" class="navanchor">  <i class="fa fa-nav fa-code"></i></a> </li>
      
      <li style="transform: rotate(135deg) skew(45deg)"> <a style="transform: skew(-45deg) rotate(-67.5deg) scale(2); border-radius: 50%; text-align: center; padding-top: 2em;" href="#" class="navanchor">  <i class="fa fa-nav fa-envelope"></i></a> </li>
    </ul>
    <span class= "fa fa-circle"></span>
    <span>
  </div>
 
</body>

<script>
$(document).ready(function(){
	var openClose = true;
	$('.cn-button').click(function(){
		event.stopPropagation();
		var wrapper = $('.cn-wrapper');
		if(openClose){
			wrapper.addClass('opened-nav');
			openClose=false;
		}
		else{
			wrapper.removeClass('opened-nav');
			openClose=true;
		}

	});
});
</script>
<style>

.opened-nav {
transition: all .3s ease;
transform: scale(1) !important;

}
</style>
</html>