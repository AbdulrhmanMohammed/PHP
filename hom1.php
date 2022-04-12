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
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $phonem = $_POST["phonem"];
    $sql = "INSERT INTO users (name,birthday,gender,country,email,phonem) VALUES ('$name' , '$birthday' , '$gender' , '$country' , '$email' , '$phonem')";
    $result = mysqli_query ($conn, $sql);

       if ($result == TRUE)
    echo "New record created successfully <br/>";
       else
    echo "Save failled !!<br/>";
}

if(isset($_POST['show']))
{
    $sql = "SELECT name,birthday,gender,country,email,phonem FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
            echo "- ". $row["name"] . " " . $row["birthday"] . " " . $row["gender"] . " " . $row["country"] . " " . $row["email"] . " " . $row["phonem"] . "<br/>";
    }  
   else 
       echo "No result";
   
}
if (isset($_POST['update']))
{
	$name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phonem = $_POST['phonem'];
	$sql= "UPDATE users SET name='$name', birthday ='$birthday', gender ='$gender', country = '$country', email = '$email' , phonem = '$phonem' WHERE name=$name ";
	     if ($conn->query($sql) == TRUE)
			 echo "New record update successfully <br/>";
		 else 
			 echo "update failled<br/>";
}
if (isset($_POST['delete']))
{
	$id = $_POST["num"];
	$sql = "DELETE FROM users WHERE name=$name ";
	if ($conn->query($sql) == TRUE)
		echo " $id record delete successfully<br/>";
	else 
		echo "delete failled<br/>";
}
if(isset($_POST['search']))
{
	$name=$_POST['name'];
	$sql= "SELECT name,birthday,gender,country,email,phonem FROM users where name LIKE '". $name . "%'	";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
			echo " - Name:" . $row["name"]." ".$row["birthday"]. " ".$row["gender"]. " " .$row["country"]. " ".$row["email"] . " " .$row["phonem"] . "<br/>";
	}
	else 
		echo "No results";
	
	
}




mysqli_close($conn);

?>

<form action="#" method="post">
    <table>

        <tr>
            <td>Name</td>
            <td><input type="text" name="name" /></td>
        </tr>

        <tr>
            <td>Birthday</td>
            <td><input type="date" id="birthday" name="birthday" placeholder="mm-dd-yyyy" min="1970-01-01" max="2022-12-01"></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="male"/>MALE</td>
            <td><input type="radio" name="gender" value="female"/>FEMALE</td>
        </tr>

        <tr>
            <td>Country</td>
            <td><select name="country">
                <option value="select">-- select one --</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Arab Emirates">Arab Emirates</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Bahrain">Bahrain</option>
                <option value="other">other</option>
            </select></td>
        </tr>     

        <tr>
            <td>Email</td>
            <td><input type="email" name="email"/></td>
        </tr>

        <tr>
            <td>Phone num</td>
            <td><input type="tel" name="phonem"/></td>
        </tr>

       

    </table>
	 <input type="submit" name="insert" value="Insert"/>
     <input type="submit" name="show" value="Show"/>
	 <input type="submit" name="update" value="Update"/>
     <input type="submit" name="delete" value="Delete"/>
	 <input type="submit" name="search" value="Search"/>
</form>

</body>
</html>