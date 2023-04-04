<?php
session_start();

include("config.php");
if(isset($_SESSION['login_name']))
{
    header("locaton:patient.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $myusername= $_POST['name'];
    //$mycont= $_POST['cont'];
    $mypassword= $_POST['pass'];
    $password= md5($mypassword);
    $sql= "SELECT a_id FROM admin WHERE a_name= '$myusername'
    and a_pass= '$password'";
    $result= mysqli_query($con, $sql);
    $row= mysqli_fetch_array($result);

    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['login_name']= $myusername;
        header("location:patient.php");
    }
    else
    {
        echo"your login nane or password is invalid.";
    }
}
?>

<html>
<head>

</head>
<body>
    <center>
    <h3><i> Login here</i></h3><br>
<form action="" method= "POST">
    <input type="text" id="name" name="name" placeholder= "enter username">

    <input type= "password" id="pass" name="pass" placeholder= "enter password">

    <!-- <input type= "submit" value="login"> -->
    <button><a href="patient.php">login</a></button>
</form>
 
    <!-- <button><a class= "" href="patient.php">back</a></button> -->
    <!-- <button><a class="" href="forgot.php">Forgot Password</a></button> -->
</center>
 </body>
</html>