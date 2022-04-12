<html>
<body>

<form action="#" method="post">
        Name: <input type="text" name="name"/><br><br>
     	Mobile: <input type="text" name="number"/><br><br>
        Email :<input type="Email" name="email"/><br><br>
     	date: <input type="date" name="date"/><br><br>
		
	<input type="submit" name="run" value="summit"/>


</form>




<?php

if (isset($_REQUEST["run"])){

$name=$_POST["name"];
	if (empty($name))
		echo("Enter you name again!"."<br/>");
	else
	echo  ("welcom : ". $name."<br/>");




$number=$_POST["number"];
	if(empty($number))
		echo("Enter your Number again!"."<br/>");
	else
	{
		if (!preg_match("/^05[0-9]{8}$/", $number)){
			
		echo("Mobile : ".$number."<br/>");   
		}
		else{
		$number=$_POST["number"];}
		}
		
		
		     $email=$_POST["email"];
	 if(empty($email))
		 echo ("Plese Enter you email again! "."<br/>");
	 else 
		 echo("Email : ".$email."<br/>");
		
		
		
		
		$date=$_POST["date"];
	if(empty($date))
		echo("Enter the date again!!"."<br/>");
	else
		echo("date is : ".$date."<br/>");
	
	
	
	
		
}
?>



</body>
</html>