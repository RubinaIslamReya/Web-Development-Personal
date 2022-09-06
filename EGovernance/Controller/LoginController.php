<?php
include "../Model/DatabaseConnection.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $userName = isset($_POST["username"]) ? test_input($_POST["username"]) : "";
        $password = isset($_POST["password"]) ? test_input($_POST["password"]) : "";

        if($userName !="" && $password !="") {
            $connection=new DatabaseConnection();
            $conobj=$connection->OpenCon();
            $result=$connection->Login($conobj,"foreigner",$userName,$password);
            
            if ($result->num_rows > 0)
            {
               while($row = $result->fetch_assoc())
               {
               echo "Name: " . $row["FirstName"]. " - Email: " . $row["Email"]."Username : ".$row["Username"]."<br>";
               $_SESSION['FName']= $row["FirstName"];
               $_SESSION["LName"]=$row["LastName"];
               $_SESSION['Username']=$row["Username"];
               $_SESSION['Email']=$row["Email"];
               }
            }
          $connection->CloseCon($conobj);
        }
    }
?>