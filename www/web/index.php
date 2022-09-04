<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="css/mj.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- DECLARING AND DEFINING A JS FUNCTION TO WELCOME AND DISPLAY USERS NAME ON A WINDOW ------------------------HAS AND ADVANTAGE OF A CIN USER INTERFACE INPUT-------------------------------------->


	<script> function greet() {let name= document.querySelector('#name').value;
 alert('hello, ' + name); }
</script>
 <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- END OF JS DECLARAATION -->



	<title>Welcome|Home</title>

	

</head>
<body>


	<img src="grn.jpg" height="330px" width="100%">



<p id="top"></p>


<!-----------------------------------CALLING THE GREETING FUNCTION --------------------------------------------->

<form onsubmit="greet(); return false;">
	<input id="name" type="text">
	<input type="submit">

</form>
<!--------------------------------------END OF GREETING FUNCTION------------------------------------------------->


<!---------------CHOOSE BACKGROUND COLOR========================================================================================-->


<h2>CHOOSE YOU BACKGROUND COLOR OF YOUR CHOICE</h2>
<button id="blue">BR</button>
<button id="green">G</button>
<button id="red">B</button>
<button type="button" name="button" onclick="alert('Submitted Successfully!')">Submit</button>










<!------------------------------------------------------------------------------------------END OF BACKGROUND CODE--------------------->


<hr>
<br><br><br><br><br>
<hr>



<div class= "header" >
 <ul>
 	<li><a href="index.php">Home</a></li>

 	<li><a href="about.php">About</a></li>

 	<li> <a href="services.php"> Services<a/> </li>

 		<li><a href="progra.php"> Contact </a></li>

 	<li><a href="courses/programs.php">Programs </a></li>

 	<li><a href="courses/courses_home.php">Courses</a></li>
 </ul>

	</div>

	<p id="top"></p>


	

<header id="top"><h1>fghj</h1></header>

<p>FACTORS AFFECTING THE STATUS OF A TEACHER


One professional factor is lack to the adherence to the terms and conditions Teacher being denied some rights
Def Rights: simply means freedom and privileges that a teacher must enjoy in the teaching fratility. 
For Example Teachers today are being denied to some certain important allowances such as housing allowances, transport, overtime allowance (where teachers work more than required), talk time allowance, health allowance and meal allowance, risk allowance, 
Denial of leave due to schools’ populace

CONDITION OF ENTERY
People enter teaching profession based on corruption rather than their qualification AND apart from that, nepotism, position and favors are given to relatives rather than someone’s hard work. And also promotion. Promotion nowadays are based on connections, tribalism, racism and sexism

PROFESIONAL CODE OF CONDUCT
Some teachers don’t work or follow certain code of conduct hence people begin to disregard teaching profession. 
Teachers no longer behave according to there professional conduct eg, they engage in drug abuse, relationships with their pupils, other teacher ask money from pupils which results a teacher into lose of respect.

MOTIVATION
Motivation is a process of energizing teachers interest to continue I  their profession or a way of appreciating teachers hard work, commitment and however nowadays Teachers lack motivation from superiors to appreciate there hard work and commitment  no longer motivated and appreciated for t because of lack of awards

TEACHERS INTERIGTY
Integrity is the quality of being honest and having strong moral principles.
Some teachers lack integrity, meaning a teacher will be unable to uphold to professional standards such as involving into prohibited actions such as involving into malpractices 
CHANGE OF CURRICULUM OR SYLLUBUS WITHOUT CONSULTATION FROM STALKHOLDER
poor delivery of servicesllowance, entertainment of allowance, medical allowance, risk allowance and many more

•	Sensitizing teachers to uphold professional ethics



QUESTION 5


FACTORS AFFECTING THE STATUS OF A TEACHER


One professional factor is lack to the adherence to the terms and conditions Teacher being denied some rights
Def Rights: simply means freedom and privileges that a teacher must enjoy in the teaching fratility. 
For Example Teachers today are being denied to some certain important allowances such as housing allowances, transport, overtime allowance (where teachers work more than required), talk time allowance, health allowance and meal allowance, risk allowance, 
Denial of leave due to schools’ populace

CONDITION OF ENTERY
People enter teaching profession based on corruption rather than their qualification AND apart from that, nepotism, position and favors are given to relatives rather than someone’s hard work. And also promotion. Promotion nowadays are based on connections, tribalism, racism and sexism

PROFESIONAL CODE OF CONDUCT
Some teachers don’t work or follow certain code of conduct hence people begin to disregard teaching profession. 
Teachers no longer behave according to there professional conduct eg, they engage in drug abuse, relationships with their pupils, other teacher ask money from pupils which results a teacher into lose of respect.

MOTIVATION
Motivation is a process of energizing teachers interest to continue I  their profession or a way of appreciating teachers hard work, commitment and however nowadays Teachers lack motivation from superiors to appreciate there hard work and commitment  no longer motivated and appreciated for t because of lack of awards

TEACHERS INTERIGTY
Integrity is the quality of being honest and having strong moral principles.
Some teachers lack integrity, meaning a teacher will be unable to uphold to professional standards such as involving into prohibited actions such as involving into malpractices 
CHANGE OF CURRICULUM OR SYLLUBUS WITHOUT CONSULTATION FROM STALKHOLDER
poor delivery of services for example teachers fail to implement or teach certain subjects especially primary education. Therefore, leading to people losing trust and interest to join the professional.

SOFT LOANS
It affects the education sector because a lot of teachers have aquired loans where they are demaded to pay higher rates. 


 LACK OF SECURITY





QUESTION 2

•	Financial literace or management
Finance literacy is the possession of the set of skills and knowledge that allows an individual to make informed and effective decision with all of their financial resources. 
Teachers must be taught how to manage their finances e,g teaching them how to manage their funds

 
•	Sensitizing Teachers to have the mind of enterpriuship
they should be taught get they can survive outside their profession salary. By involving themselves into one or more business like agriculture, fish farming 

•	improving condition of service

a teacher condition of service should be improved in a way that they should be getting a good housing allowance (many teachers find themselves in shutty houses which is not good) that has good water facilities, availability of electricity and apart from that there must be Improvision of transport allowance, entertainment of allowance, medical allowance, risk allowance and many more

•	Sensitizing teachers to uphold professional ethics



QUESTION 5


</p>

<br><br><br><br><br><br><br><br><br><br><br><br>
<a id="back-to-top" href="#">Top </a>

<br><br><br><br><br><br><br><br><br>


</p>

<div class="footer" >

<a id="back-to-top" href="#">Top </a>

	<p>Chalimbana Unviersity</p>

</footer>



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

<script>




	var btt= document.getElementsById("back-to-top"),
	body=document.body,
	docElem = document.documentElement,
	offset=100,
	scrollpos, docHeight;

	docHeight= Math.max(body.scrollHeight, body.offsetHeight, docElem.clientHeight, docElem.scrollHeight, docElem.offsetHeight);

	if (docHeight != 'undefined') { offset=docHeight/4;}

	window.addEvenListener ("scroll", function(event) {scrollpos=body.scrollTop || docElem.scrollTop; btt.className= (scrollpos > offset) ? "visible" : "";});

    

              btt.addEvenListener("click", function(event) { event.preventDefault();});

</script>

</body>
</html>