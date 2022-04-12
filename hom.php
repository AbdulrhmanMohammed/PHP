<html>
<body>

<form action="#" method="post">

    Name <input type="text" name="name"/><br><br>
	password <input type="password" name="password"/><br><br>
	date <input type="date" name="date"/><br><br>
	Number <input type="Number" name="number"/><br><br>
	Email <input type="Email" name="email"/><br><br> 
	
	
	
	<input type="submit" name="run" value="summit"/>

	</form>


<?php

if (isset($_REQUEST["run"]))
{
	
	$name=$_POST["name"];
	if (empty($name))
		echo("Enter you name again!"."<br/>");
	else
	echo  ("welcom : ". $name."<br/>");



    $password=$_POST["password"];
	if(empty($password))
		echo("agien password plese! "."<br/>");
	else
		echo("Password is : ".$password."<br/>");
	
	
	
	$date=$_POST["date"];
	if(empty($date))
		echo("Enter the date again!!"."<br/>");
	else
		echo("date is : ".$date."<br/>");
	
	
	
	$number=$_POST["number"];
	if(empty($number))
		echo("Enter your Number again!"."<br/>");
	else
		echo("Number : ".$number."<br/>");
	
	
	
     $email=$_POST["email"];
	 if(empty($email))
		 echo ("Plese Enter you email again! "."<br/>");
	 else 
		 echo("Email : ".$email."<br/>");



	
}
	




?>



</body>
</html>