<?php
require_once  "functions.php";
include "../Model/DatabaseConnection.php";

    $errors = array();

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        //Personal Information
        $firstName = isset($_POST["first_name"]) ? test_input($_POST["first_name"]) : "";
        $lastName = isset($_POST["last_name"]) ? test_input($_POST["last_name"]) : "";
        $gender = isset($_POST["gender"]) ? test_input($_POST["gender"]) : "";
        $dob = isset($_POST["dob"]) ? test_input($_POST["dob"]) : "";
        //Contact Information
        $presentAddress = isset($_POST["present_address"]) ? test_input($_POST["present_address"]) : "";
        $permanentAddress = isset($_POST["permanent_address"]) ? test_input($_POST["permanent_address"]) : "";
        $phone = isset($_POST["phone"]) ? test_input($_POST["phone"]) : "";
        $email = isset($_POST["email"]) ? test_input($_POST["email"]) : "";
        //Login Credentials
        $userName = isset($_POST["username"]) ? test_input($_POST["username"]) : "";
        $password = isset($_POST["password"]) ? test_input($_POST["password"]) : "";
        $confirmPassword = isset($_POST["confirm_password"]) ? test_input($_POST["confirm_password"]) : "";
        $nid=$_POST["nid"];

        if(empty($firstName)) {
           $errors["first_name"] = "First Name Cannot be Empty";
        }
       

        if(empty($lastName)) {
            $errors["last_name"] = "Last Name Cannot be Empty";
        }
      
        if(empty($gender)) {
            $errors["gender"] = "Please Select Gender";
        }

        if(empty($dob)) {
            $errors["dob"] = "Date of Birth is required";
        }

        if(empty($presentAddress)) {
            $errors["present_address"] = "Please Enter Present Address";
        }

        if(empty($permanentAddress)) {
            $errors["permanent_address"] = "Please Enter Permanent Address";
        }

        if(empty($phone)) {
            $errors["phone"] = "Phone Number is required";
        }

        if(empty($email)) {
            $errors["email"] = "Please Enter a Valid Email Address";
        }

        if(empty($userName)) {
            $errors["username"] = "Please Enter Username";
         } 
       

        if(empty($password)) {
            $errors["password"] = "Please Enter Password";
        }

        if(empty($confirmPassword)) {
            $errors["confirm_password"] = "Please Re-Enter Password";
        } 
        else if($confirmPassword!=$password) {
            $errors["confirm_password"] = "Confirm Password doesn\'t match";
        }

        if(empty($errors)) {

            $connection=new DatabaseConnection();
            $conobj=$connection->OpenCon();
            //$conn,$table,$FirstName,$LastName,$Gender,$DOB,$NID,$PresentAddress,$ParmanentAddress,$Phone,$Email,$Username,$Password
            $userQuery=  $connection->InsertData($conobj,"foreigner",$firstName,$lastName,$gender,$dob,$nid,$presentAddress,$permanentAddress,$phone,$email,$userName,$password);
            $connection->CloseCon($conobj);



            // $user = array(
            //     "firstName" => $firstName,
            //     "lastName" => $lastName,
            //     "gender" => $gender,
            //     "dob" => $dob,
            //     "presentAddress" => $presentAddress,
            //     "permanentAddress" => $permanentAddress,
            //     "phone" => $phone,
            //     "email" => $email,
            //     "userName" => $userName,
            //     "password" => $password
            // );
            // if(appendUser($user)) {
            //     unset($user["password"]);
            //     $_SESSION["bnk_register"] = $user;
            //     header("Location: login.php");
            //     exit(0);
            // }
        }
    }
?>