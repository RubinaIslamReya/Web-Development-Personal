<?php 

include "../Controller/RegController.php";
?>
<html>
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
h5{
    margin-top:20px;
    font-size:15px;
    color:#800000;
    font-weight:3px;
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
</style>

<script src="..\JavaScript\RegValidation.js"></script>
<script src="..\JavaScript\CheckUsername.js"> </script>
<!-- <script src="..\JavaScript\CheckEmail.js"> </script>
<script src="..\JavaScript\CheckPhone.js"> </script> -->

</head>
<body style="background-image: url('1.jpg');">
<html lang="en">
<head>
    <title>Registration</title>
</head>

<body>
    <form  action="" onsubmit="return validateForm()" method="POST" >
      
        <center>
        <h2>E-Governance - Registration</h2>
        <table>
            <td><label for="firstName">First Name:</label></td>
            <td><input type="text" name="first_name" id="firstName" placeholder="Enter First Name"/></td>
           <td> 
            <h5 id="errorfname"></h5>
        </td>
            <?php  ?>
            <br/><br/>

            </tr>

            <tr>
           <td> <label for="lastName">Last Name:</label></td>
           <td> <input type="text" name="last_name" id="lastName" placeholder="Enter Last Name"/></td>
           <td>
            <h5 id="errorlname"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr>

           <td> <label for="gender">Gender:</label></td>
           <td> <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female">
           <label for="female">Female</label></td>

           <td> 
            <h5 id="errorgender"></h5>
        </td>
            <?php   ?>
            </tr>

          
            <tr>
            <td>  <label for="dob">Date of Birth:</label></td>
            <td>  <input type="date" name="dob" id="dob" placeholder="Enter Date of Birth"/></td>
            <td> 
            <h5 id="errordob"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr>            
           <td> <label for="presentAddress">NID:</label></td>
           <td> <input type="text" name="nid" id="nid" placeholder="Enter NID Number"/></td>
           <td> 
            <h5 id="errornid"></h5>
        </td>
            <?php   ?>
            </tr>

          
           <tr>            
           <td> <label for="presentAddress">Present Address:</label></td>
           <td> <textarea name="present_address" id="presentAddress" cols="30" rows="5"></textarea></td>
           <td> 
            <h5 id="errorpreadd"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr> 
            <td> <label for="permanentAddress">Permanent Address:</label></td>
            <td> <textarea name="permanent_address" id="permanentAddress" cols="30" rows="5"></textarea></td>
            <td>
            <h5 id="errorperadd"></h5>
        </td>
            <?php   ?>
            </tr>

            <tr> 
            <td> <label for="phone">Phone:</label></td>
            <td> <input type="tel" id="phone" name="phone"  onkeyup="CheckmyPhone()" placeholder="Enter Phone Number"></td>
            <td> 
            <h5 id="errorphone"></h5>
        </td>
            <?php  ?>
            </tr>

            <tr> 
            <td> <label for="email">Email:</label></td>
            <td>  <input type="email" id="email" name="email" onkeyup="showmyuser()" placeholder="Enter Email Address"></td>
            <td> 
            <h5 id="erroremail"></h5>
        </td>
            <?php  ?>
            </tr>

        
        <tr> 
        <td><label for="userName">Username:</label></td>
        <td> <input type="text" name="username" id="userName" onkeyup="Checkmyuser()" placeholder="Enter User Name"/></td>
        <td>
            <h5 id="errorusername"></h5>
            
        </td>
            <?php  ?>
            </tr>
            
            <tr> 
            <td> <label for="password">Password:</label></td>
            <td> <input type="password" name="password" id="password" placeholder="Enter Password"/></td>
            <td> 
            <h5 id="errorpass"></h5>
        </td>
            <?php  ?>
            </tr>
            
            <tr> 
            <td> <label for="confirmPassword">Confirm Password:</label></td>
            <td> <input type="password" name="confirm_password" id="confirmPassword" placeholder="Re-Enter Password"/></td>
            <td>
            <h5 id="errorCpass"></h5>
        </td>
            <?php ?>
            </tr>
       
        </table>
        </center>
        <br>
      
        <center> <input type="submit" style="padding-top:-30px;width:13%;border-radius:5px;margin-left:78px;background-color:#ffbf80" value="Register"/>
       <h3>Already have an account?  <a href="login.php">Login</a></h3> </center>
    </form>
</body>
</html>


