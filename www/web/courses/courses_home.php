<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="css/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- DECLARING AND DEFINING A JS FUNCTION TO WELCOME AND DISPLAY USERS NAME ON A WINDOW ------------------------HAS AND ADVANTAGE OF A CIN USER INTERFACE INPUT-------------------------------------->


	<script> function greet() {let name= document.querySelector('#name').value;
 alert('hello, ' + name); }
</script>
 <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- END OF JS DECLARAATION -->



	<title>Welcome!!</title>
</head>
<body>


<!-----------------------------------CALLING THE GREETING FUNCTION --------------------------------------------->

<form onsubmit="greet(); return false;">
	<input id="name" type="text">
	<input type="submit">

</form>
<!--------------------------------------END OF GREETING FUNCTION------------------------------------------------->


<!---------------CHOOSE BACKGROUND COLOR========================================================================================-->


<h2>CHOOSE YOU BACKGROUND COLOR OF YOUR CHOICE</h2>
<button id="red">R</button>
<button id="green">G</button>
<button id="blue">B</button>
<button type="button" name="button" onclick="alert('Submitted Successfully!')">Submit</button>

<script> 

let body= document.querySelector ('body');
document.querySelector('#red').onclick= function() {
	body.style.backgroundColor='red';
};

document.querySelector('#green').onclick= function() {
	body.style.backgroundColor='green';
};

document.querySelector('#blue').onclick= function() {
	body.style.backgroundColor='#250263';
};

</script>


<!------------------------------------------------------------------------------------------END OF BACKGROUND CODE--------------------->


<hr>
<br><br><br><br><br>
<hr>

<div class= "header" >
 <ul>
 	<li><a href="index.php">Home</a></li>

 	<li><a href="about.php">About</a></li>

 	<li> <a href="services.php"> Services</a> </li>

 	<li><a href="contact.php"> Contact </a></li>

 	<li><a href="courses/courses_home.php">Courses</li>
 </ul>

	</div>


	<img src="img/grn.jpg">


</body>
</html>