<?php

$localhost="localhost";
$username="root";
$password="";
$dbname="data";


@$conn=mysqli_connect($localhost,$username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$username=$_POST["uname"];
$fullname=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$birth=$_POST["birth"];
$address=$_POST["address"];

if(isset($_POST['submit'])){
    //isset mean that i press the button.

    if(!preg_match("/^[a-zA-Z]*$/",$username)){
        echo "Invalid Username...:(";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid Email...:(";
    }else if(!is_numeric($phone)){
        echo "Invalid phone number...:(";
    }else{
        $sql= " INSERT INTO users(Full_name,User_name,birthday,phone,address,password,email) VALUES ('$fullname','$username','$birth',
        '$phone','$address','$password','$email')";
            
    
        if($conn->query($sql) === TRUE){
            echo "record added susccessfully";
        }else{
            echo "error".$sql.$conn->error;
        }
    }
    
    $conn->close();
}

?>