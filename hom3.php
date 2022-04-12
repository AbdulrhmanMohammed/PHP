<html>
<body>

<?php
$servername="localhost";
$username="root";
$passwoerd="";
$dbname="php13";

$conn=new mysqli($servername,$username,$passwoerd,$dbname);
 if (mysqli_connect_error())
echo ("data base connection error!!");

if(isset($_POST['insert']))
{
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $sql = "INSERT INTO users (name,gender,country,email,phone) VALUES ('$name' ,'$gender' ,'$country' ,'$email' ,'$phone')";
    $result = mysqli_query($conn, $sql);

       if ($result == TRUE)
    echo "New record created successfully <br/>";
       else
    echo "Save failled !!<br/>";
}

if(isset($_POST['show']))
{
    $sql = "SELECT name,gender,country,email,phone FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
            echo "- ". $row["name"]. " " . $row["gender"]. " " . $row["country"]. " " . $row["email"]. " " . $row["phone"]. "<br/>";
    }  
   else 
       echo "No result";
   
  
   
}

if (isset($_POST['update']))
{
	$name = $_POST['name'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$sql= "UPDATE users SET	name='$name', country='$country', email='$email' , phone='$phone' WHERE name='$name' ";
	     if ($conn->query($sql) == TRUE)
			 echo "New record update successfully <br/>";
		 else 
			 echo "update failled<br/>";
}
if (isset($_POST['delete']))
{
	$name =$_POST['name'];
	$sql = "DELETE FROM users WHERE name='$name' ";
	if ($conn->query($sql)==TRUE)
		echo " $name record delete successfully<br/>";
	else 
		echo "delete failled<br/>";
}

if(isset($_POST['search']))
{
	$name=$_POST['name'];
	$sql= "SELECT name,gender,country,email,phone FROM users where name='$name'	";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
			echo " - Name:" . $row["name"]. " " .$row["gender"]. " " .$row["country"]. " ".$row["email"] . " " .$row["phone"] . "<br/>";
	}
	else 
		echo "No results";
	
}

mysqli_close($conn);

?>

<form action="#" method="post">
   
            Name :
            <input type="text" name="name"><br>
        
            Gender :
            <input type="radio" name="gender" value="male">MALE
            <input type="radio" name="gender" value="female">FEMALE
            <br>
			Country
            <select name="country">
                <option value="select">-- select one --</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Arab Emirates">Arab Emirates</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Bahrain">Bahrain</option>
                <option value="other">other</option>
            </select>
             <br>Email :
            <input type="email" name="email">
         <br>Phone num :
            <input type="tel" name="phone">
			<br>
     <input type="submit" name="insert" value="Insert">
     <input type="submit" name="show" value="Show">
	 <input type="submit" name="update" value="Update">
     <input type="submit" name="delete" value="Delete">
	 <input type="submit" name="search" value="Search">
</form>

</body>
</html>