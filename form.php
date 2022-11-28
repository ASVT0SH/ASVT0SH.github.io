<?php

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
}

$host='localhost';
$username='root';
$password='';
$dbname='sampledb';

$con=mysqli_connect($host,$username,$password,$dbname);

if(!$con){
    die("Connection failed!" . mysqli_connect_error());
}

$sql = "INSERT INTO contactform_entries (id,fname, lname, email) VALUES ('$id', '$fname', '$lname', '$email')";

try{
    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Entries added!";
    }
}
catch(Exception){
    echo "INVALID CREDENTIALS, ID IS ALREADY IN USE OR ACCOUNT WITH EMAIL ALREADY EXISTS";
}




mysqli_close($con);


?>