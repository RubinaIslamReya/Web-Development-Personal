<?php
//include('../model/DatabaseConnection.php');
//include "RegValidation.php";

$validateradio=$ValidName=$validateemail=$ValidUserName=$ValidPhone=$ValidAddress=$target_File="";
 
$Var_Name=$Var_Email=$Var_Password=$Var_Code=$Var_Phone=$Var_Gender="";

 $error=$Name=$Email=$Phone=$Address=$User=$Date=$Gender=$Photo="";
 $hasError=false;

 ///



 ///






if (isset($_POST['update'])) {


if($hasError==false)
{




$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$gender="";
if(isset($_POST["gender"])){
    $gender=$_POST["gender"];
}

$_SESSION["FName"]=$_POST["first_name"];
$_SESSION["LName"]=$_POST["last_name"];
$userQuery=$connection->UpdateUser($conobj,"foreigner",$_POST["first_name"],$_POST["last_name"],$gender,$_POST["dob"],$_POST["present_address"],$_POST["permanent_address"],$_POST["phone"],$_SESSION['Email'],$_SESSION["Username"],$_POST["password"],$_POST["nid"]);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
    
}
$connection->CloseCon($conobj);

}
}


?>
