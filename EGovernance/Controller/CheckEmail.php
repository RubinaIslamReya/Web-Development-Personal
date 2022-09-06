<?php
include "../Model/DatabaseConnection.php";
$Email="";
$Email=$_POST["Email"];

if($Email=="")
{
    echo "Email Empty";
}
else
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->ShowData2($conobj,"Users",$Email);
    if ($result->num_rows > 0)
    {
       echo "Email Already Registered";
    }

    else{
            echo "Unique Email";
    }
    $connection->CloseCon($conobj);
}




?>