<?php
$server='localhost';
$username='root';
$password='';
$db='ecomms';

$conn=mysqli_connect($server,$username,$password,$db);
try{
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$email= $_POST['email'];
    $password= $_POST['password'];

if(isset($_POST['submit'])){
    $sql="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        header("Location: home.html");
    }
    else{
        echo "Incorrect username or password";
    }
}
}
catch(Exception $e){
    
}
  mysqli_close($conn);

?>
