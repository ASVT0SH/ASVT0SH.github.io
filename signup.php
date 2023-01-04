<?php
$server='localhost';
$username='root';
$password='';
$db = 'ecomms';

$conn=mysqli_connect($server,$username,$password,$db);
try{
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
}
catch(Exception $e){
    
}

$uname= $_POST['uname'];
$email= $_POST['email'];
$password= $_POST['password'];

if(isset($_POST['submit'])){
    $sql="INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$uname','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Registration successful";
        header("Location: login.html");
    }
    else{
        echo "<script>alert('ERROR WRONG CREDENTIALS!')</script>";
        header("Location: signup.html");
    }
}

mysqli_close($conn);
?>