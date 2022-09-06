<?php
class DatabaseConnection{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "egovernance";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

 function Login($conn,$table,$Username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $Username."' AND Password='". $password."'");

        if ($result->num_rows > 0)
        {
            echo "Login Successful <br>";
        }
        else {
        echo "Login Failed !<br>";
        }
    return $result;
}




function CheckUsername($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username like '".$User."' ");
    return $result;
}

function CheckPhone($conn,$table,$Phone)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Phone like '".$Phone."' ");
    return $result;
}

function ShowData($conn,$table,$Email,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Username='". $User."'");
    return $result;
}

function ShowData2($conn,$table,$Email)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email like '%".$Email."%' ");
    return $result;
}
//
 


 function InsertData($conn,$table,$FirstName,$LastName,$Gender,$DOB,$NID,$PresentAddress,$ParmanentAddress,$Phone,$Email,$Username,$Password)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO foreigner (FirstName,LastName,Email,Phone,NID,Gender,DOB,PresentAddress,ParmanentAddress,Username,Password) VALUES(?,?,?,?,?,?,?,?,?,?,?)"); 
    $stmt->bind_param("sssssssssss",$FirstName,$LastName,$Email,$Phone,$NID,$Gender,$DOB,$PresentAddress,$ParmanentAddress,$Username,$Password);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }


 function Search($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username);
    return $result;
 }

 function Count($conn,$table,$Data)
 {
    $result = $conn->query("SELECT COUNT('Validation') FROM ". $table." WHERE Validation like False");
    return $result;
 } 

 function UpdateStatus($conn,$table,$Data)
 {
    $sql = "UPDATE $table SET Validation='$Data' WHERE Validation='False'";
    //$stmt->execute()
      if ($conn->query($sql) === TRUE) {
        
         $result= TRUE;
     } 
     else {
         $result= FALSE ;
         
     }
     return  $result;
 }




 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
return $result;
 }

 function ShowAllRequestedAgent($conn)
 {
$result = $conn->query("SELECT * FROM  agent_reg where Validation like 'False'");
return $result;
 }

///$conobj,"student",$_SESSION["Email"],$Name,$Email,$User,$Phone,$Address,$Var_Gender,$Date
 function UpdateUser($conn,$table,$FirstName,$LastName,$Gender,$DOB,$PresentAddress,$ParmanentAddress,$Phone,$Email,$Username,$Password,$nid)
 {
     $sql = "UPDATE $table SET FirstName='$FirstName',LastName='$LastName',Gender='$Gender',DOB='$DOB',PresentAddress='$PresentAddress',ParmanentAddress='$ParmanentAddress',Phone='$Phone',Email='$Email',Password='$Password',NID='$nid' WHERE Username='$Username'";
   //$stmt->execute()
     if ($conn->query($sql) === TRUE) {
       
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }

function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>