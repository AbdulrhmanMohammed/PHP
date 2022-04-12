<html>
<body>

<form action="#" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
<h5 style="text-align:center;">
<br/><br/>
 Name <input type="text" name="name"/><br><br>
 
 	date <input type="date" name="date"/><br><br>
	
	
	
	<br>Gender<br>
<input type="radio" name="gender" value="Male"/>Male<br>
<input type="radio" name="gender" value="Female"/>Female<br>

 <br/>Country<br/>
<select name="country">
<option name="select" value="select">-- select one --</option>
<option name="Japan" value="japan">Japan</option>
<option name="China" value="China">China</option>
<option name="Korea" value="Korea">Korea</option>
<option name="Saudi" value="Saudi Arabia">Saudi</option>
<option name="USA" value="USA">USA</option>
</select><br/>
<br/><br/>

 email : <input type="Email" name="email"/>
Mobile <input type="Number" name="number"/><br><br>


<br/><br/>

	
	
	<br/>Languages<br/>
<input type="checkbox" name="hobby[]" value="Arabic"/>Arabic
<input type="checkbox" name="hobby[]" value="English"/>English
<input type="checkbox" name="hobby[]" value="Japan"/>Japan
<br/>


<input type="submit" name="run" value="summit"/>

</h5>
</form>






<?php
if(isset($_POST['Submit1']))
{
	$filepath = $_FILES["file"]["name"];
	
	if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
		echo "<img src=' ".$filepath. "'/>";
	else 
		echo("eror");
	
	
}
if (isset($_REQUEST["run"]))
{
	
	$name=$_POST["name"];
	if (empty($name))
		echo("Enter you name again!"."<br/>");
	else
	echo  ( $name."<br/>");



		$date=$_POST["date"];
	if(empty($date))
		echo("Enter the date again!!"."<br/>");
	else
		echo($date."<br/>");
	
	
		if (isset($_POST['gender']))
	{
		$gender=$_POST['gender'];
		echo $gender."<br/>";
		
	}
	else
		echo "eror agien";


if(isset($_POST["country"]))
	
		$country=$_POST['country'];
		if($country=="select")  // اذا كانت الجمله تساوي اطبع لي ايرور 
			echo ("Plase agien");
		else
		echo ($country."<br/>");
	
	
	  $email=$_POST["email"];
	 if(empty($email))
		 echo ("Plese Enter you email again! "."<br/>");
	 else 
		 echo($email."<br/>");
	
	$number=$_POST["number"];
	if(empty($number))
		echo("Enter your Mobile again!"."<br/>");
	else
		echo($number."<br/>");
	
	
	
	
	
	
	
	
	

	if(isset($_POST["hobby"]))
	
		echo "<br><br>Languages";
		echo"<ul>";
		foreach($_POST["hobby"] as $hobby)
		echo '<li>'.$hobby.'</li>';
		echo "</ul>";
		
		
		
}




?>


</body>
</html>