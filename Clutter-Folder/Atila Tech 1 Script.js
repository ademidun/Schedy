// var limit= $("#empCount").val();
// var emp = 1;
// function newUser(divName){
//     if(limit==emp){
//         //try to avoid too many unnecessary alerts/popups
//         alert("You have finished adding all Employees");
//     }
//     else{
//         var newdiv= document.creatElement("div");
//         newdiv.innerHTML= "Employee " + (emp + 1) + " <br><input type='text' name='myInputs[]'>";
//         document.getElementById(divName).appendChild(newdiv);
//         emp++;
//     }
// }

var counter = 0;
var limit;
var fullName=$('#input1name').val();
fullName = fullName.split(" ");

$('#input1name').change(function(){
document.getElementById("input1namebox").innerHTML= fullname[1] + "hello";
});

$('#input1').change(function(){
limit = $('#input1').val();
});

function addInput(divName){
	if(isNaN(limit)){
		alert("Please Enter a Valid Number");
		return;
	}
     if (counter < limit) {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Employee " + (counter+1) + ": <br><input type='text' name='nameInput[]'><br>";
          newdiv.innerHTML +="  Employee " + (counter+1) + " ID#:<br> <input type='text' name='idInput[]' maxlength='5'><br>";
          newdiv.innerHTML +="  Employee " + (counter+1) + " Salary: <br><input type='text' name='idInput[]' maxlength='10'><br><br> ";
          $('#input1box').append(newdiv);
     }
          if ((counter+1) == limit)  {
          var newButton = document.createElement('div');
          // newButton.innerHTML = " <input type= 'submit' name='submit1'>";
          $('#input1box').append(" <button id='submit1'> Finish </button>");
          // alert("You have reached the limit of adding " + limit + " Employees");
     }
     counter++;

}

//      var displayResult= function(){
// 	var fullName=$('#input1name').val();
// 	fullName = fullName.split(" ");
// 	var confirmString = "<p> fullname[1] + '\'s list is complete!'</p>";
// 	$('#input1box').append(confirmString);
// };
// $('#submit1').click(displayResult);