<?php



$servername = "localhost";
$username = "root";
$password = "";
$db="demo";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";



if(isset($_POST['b1']))
	
	{
		$name=$_POST['t'];
$pass=$_POST['t1'];

$sql = "INSERT INTO details(uname,pass)VALUES ('$name','$pass')";

if (mysqli_query($conn, $sql))
	{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	}
mysqli_close($conn);


?>
<html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hack Me if You Can!!</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="About.php">About us</a></li>
      <li><a href="cont.php">Contact Us</a></li>
      <li><a href="gall.php">Gallery</a></li>
    </ul>
  </div>
</nav>
  <img src="hack.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 

<form method="POST" >
<font color="Red" size="20">
<marquee><b>Welcome to this Page...<b></marquee></font>
<b>Enter your UserName:&nbsp&nbsp</b>
<input type="text" name="t" size="25px"</input><br><br>
<b>Enter Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><input type="password" name="t1"></input><br><br>
<button type="submit" class="btn btn-primary" name="b1">Submit</button>

</form>
</body>
</html>