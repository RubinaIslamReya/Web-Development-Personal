<?php session_start();
if(empty($_SESSION['Username'])){
  header("location: login.php");
}

?>

<!doctype html>
<head>
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
a{
  text-decoration:none;
}


</style>
</head>
<body style="background-image: url('2.jpg'); height:50%">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Banking | Dashboard</title>
</head>
<body>
<h1 style="background-color:Gray;"><marquee>E-Governance [ <a href="../Controller/logout.php">Logout</a> ]</marquee></h1>
<h2>Welcome <a href="Profile.php"><?php echo $_SESSION["FName"]." ".$_SESSION["LName"];  ?></h2></a>
    <?php 


$Cookie_name=$_SESSION['Username'];
$Cookie_value=$_SESSION['LName'];
if(isset($_SESSION["LName"])) 
{
   
}

$name=$_SESSION['Username'];
$value=$_SESSION['LName'];

if(!isset($_COOKIE[$name]))
{
    setcookie($name,$value,time()+(10),"/");
    
}

if(!isset($_COOKIE[$name]))
{
    echo "<p>New User : ".$_SESSION['LName']."</p>";
}
else {
    echo "<p>Old User : ".$_COOKIE[$name]."</p>";
}


?>
</body>
</html>
