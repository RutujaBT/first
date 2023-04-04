<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $a=$_POST['name'];
  $b=$_POST['add'];
  $c=$_POST['cont'];
  $d=$_POST['disease'];
  $e=$_POST['age'];   
  $f=$_POST['gender'];
  $g=$_POST['blood_group'];
  $h=$_POST['admission_date'];
  $i=$_POST['discharge_status'];
  $j=$_POST['appointed_doctor'];
  $k=$_POST['room_no'];


$qry= mysqli_query($con,"INSERT INTO patient(p_name, p_add, p_cont, 
p_disease, p_age, p_gender, p_blood_group, p_admission_date, p_discharge_status,
p_appointed_doctor, p_room_no)
VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k')");

 if($qry ==true)
{
header("location:patient.php");
}

  else
{
echo"not".mysqli_error();
}
}

else
{
 echo "Request method is not POST";
}



?>