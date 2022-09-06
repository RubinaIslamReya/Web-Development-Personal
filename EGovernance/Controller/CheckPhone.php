<?php
include "../Model/DatabaseConnection.php";
$Phone="";
$Phone=$_POST["Phone"];

if($Phone=="")
{
    echo "Phone Empty";
}
else
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckPhone($conobj,"Users",$Phone);
    if ($result->num_rows > 0)
    {
       echo "Phone Already Registered";
    }

    else{
            echo "Unique Phone";
    }
    $connection->CloseCon($conobj);
}




?>