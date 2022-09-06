<?php
session_start(); 
include "..\Model\DatabaseConnection.php";
include('../Controller/updatecheck.php');


if(empty($_SESSION["Username"])) // Destroying All Sessions
{
header("Location: ../View/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
  <head>
  <style>
body {
  /* background-color: lightblue; */

  height:50%;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
h5{
    margin-top:20px;
    font-size:15px;
    color:red;
}
textarea{
    border-radius:5px;
}
input{
    border-radius:5px;
    border-color:white;
    font-size:12px;
}
select{
    border-radius:5px;
    border-color:white;
    font-size:12px;
}
a{
  text-decoration:none;
}
h1{
  color:black;
}
</style>
  <script src="..\JavaScript\UpdateValidation.js"></script>
<script src="..\JavaScript\CheckUsername.js"> </script>
<script src="..\JavaScript\CheckEmail.js"> </script>
<script src="..\JavaScript\CheckPhone.js"> </script>

</head>
<body style="background-image: url('2.jpg');">

<div class= "header sticky">
    <h1><marquee>Update User Information </marquee></h1> 
</div>



<div class="input">
<?php
$User="";
$radio1=$radio2=$radio3="";
$FName=$LName=$Email=$User=$Phone=$Address=$Date=$photo="";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowData($conobj,"foreigner",$_SESSION["Email"],$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $FName=$row["FirstName"];
      $LName=$row["LastName"];
      $Email=$row["Email"];
     
      $User=$row["Username"];
      $Phone=$row["Phone"];
      $PreAddress=$row["PresentAddress"];
      $PerAddress=$row["ParmanentAddress"];
      $Date=$row["DOB"];
      $nid=$row["NID"];
      $Pass=$row["Password"];
      // $photo=$row["File_Path"];

      if(  $row["Gender"]=="male" )
      {
           $radio1="checked"; 
      }

      else if($row["Gender"]=="female")
      {
           $radio2="checked"; 
    }
      else
      {
          $radio3="checked";
      }

   
  } 
}




?>
 <form  action="" onsubmit="return validateForm()" method="POST" >
        <!-- <h2>E-Banking - Registration [ <a href="login.php">Login</a> ]</h2> -->
        <center>
        <table>
           <tr>
               <td>
               <center><h3> Personal Information</h3></center>
               </td>
           </tr>
           <tr>

          
            <td><label for="firstName">First Name:</label></td>
            <td><input type="text" name="first_name" id="firstName" value="<?php echo $FName;?>"/></td>
           <td> 
            <h5 id="errorfname"></h5>
        </td>
            <?php  ?>
            <br/><br/>

            </tr>

            <tr>
           <td> <label for="lastName">Last Name:</label></td>
           <td> <input type="text" name="last_name" id="lastName" value="<?php echo $LName;?>"/></td>
           <td>
            <h5 id="errorlname"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr>

           <td> <label for="gender">Gender:</label></td>
           <td> <input type="radio" id="male" name="gender" value="male" <?php echo $radio1; ?>>
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female" <?php echo $radio2; ?>>
           <label for="female">Female</label></td>

           <td> 
            <h5 id="errorgender"></h5>
        </td>
            <?php   ?>
            </tr>

          
            <tr>
            <td>  <label for="dob">Date of Birth:</label></td>
            <td>  <input type="date" name="dob" id="dob" value="<?php echo $Date;?>"/></td>
            <td> 
            <h5 id="errordob"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr>            
           <td> <label for="NID">NID:</label></td>
           <td> <input type="text" name="nid" id="nid" value="<?php echo $nid; ?>"/></td>
           <td> 
            <h5 id="errornid"></h5>
        </td>
            <?php   ?>
            </tr>

        
        <tr>
              
              <td>
              <center><h3> Contact Information</h3></center>
              </td>
          </tr>
          
           <tr>            
           <td> <label for="presentAddress">Present Address:</label></td>
           <td> <textarea name="present_address" id="presentAddress" cols="30" rows="5" ><?php echo $PreAddress;?></textarea></td>
           <td> 
            <h5 id="errorpreadd"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr> 
            <td> <label for="permanentAddress">Permanent Address:</label></td>
            <td> <textarea name="permanent_address" id="permanentAddress" cols="30" rows="5" value=""><?php echo $PerAddress;?></textarea></td>
            <td>
            <h5 id="errorperadd"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr> 
            <td> <label for="phone">Phone:</label></td>
            <td> <input type="tel" id="phone" name="phone"   value="<?php echo $Phone;?>"></td>
            <td> 
            <h5 id="errorphone"></h5>
        </td>
            <?php  ?>
            </tr>

            <tr> 
            <td> <label for="email">Email:</label></td>
            <td>  <input type="email" id="email" name="email"  value="<?php echo $Email;?>"></td>
            <td> 
            <h5 id="erroremail"></h5>
        </td>
            <?php  ?>
            </tr>

       
        
       
        <tr>
              
              <td>
              <center><h3>Login Credentials</center></h3>
              </td>
          </tr>
        
        <tr> 
        <td><label for="userName">Username:</label></td>
        <td> <input type="text" name="username" id="userName"  value="<?php echo $User;?>" readonly /></td>
        <td>
            <h5 id="errorusername"></h5>
      
            <?php  ?>
            </tr>
              
        <tr> 
        <td><label for="password">Password:</label></td>
        <td> <input type="text" name="password" id="password" value="<?php echo $Pass;?>" /></td>
        <td>
            <h5 id="errorpass"></h5>
      
            <?php  ?>
            </tr>
            <tr>
                <td>
              
                </td>
                <td>
                <input type="submit" style="border-radius:5px;background-color:#ffbf80;width:50px;padding-right:50px" name="update" value="Update"/> 
                <a href="dashboard.php">Dashboard</a>
                </td>
            </tr>
           
        
       
        </table>
        </center>
        <br>
      
      
    </form>
</body>
</html>