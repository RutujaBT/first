<html>
    <head>
        
        <!-- <style> 
        body{
            background-image:url(" fam1.jpg ");
            background-repeat:no-repeat;
            background: size 500px;
            background-size: cover;
            margin-left:500px;
            padding:10px;
        }
        </style>-->
</head>

<body>
   
<h3> welcome to home page </h3>

<button><a href="patient.php">logout</a></button>

<form action= "" method= "POST">
    Search by user value :<br>

<input type="text" name="searchname"><br>

<input type="submit" name="search">

</form>
    
    </body>
    
</html>
<?php
require_once("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $search=$_POST["searchname"];

 $qry= mysqli_query($con,  "SELECT * FROM patient WHERE p_name
 LIKE '%$search%' OR p_disease LIKE '%$search%' OR p_room_no LIKE '%$search%'
 OR p_blood_group LIKE '%$search%' ");
 echo "<table border='1'>
 <tr>
 <th>id</th>
 <th>name</th>
 <th>cont</th>
 <th>disease</th>
 <th>age</th>
 <th>gender</th>
 <th>blood_group</th>
 <th>admit date</th>
 <th>dischagre_status</th>
 <th>room_no</th>
 </tr>";


 while($row= mysqli_fetch_array($qry))
 {
    echo "<tr>";
    echo "<td>".$row["p_id"]."</td>";
    echo "<td>".$row["p_name"]."</td>";
    echo "<td>".$row["p_cont"]."</td>";
    echo "<td>".$row["p_disease"]."</td>";
    echo "<td>".$row["p_age"]."</td>";
    echo "<td>".$row["p_gender"]."</td>";
    echo "<td>".$row["p_blood_group"]."</td>";
    echo "<td>".$row["p_admission_date"]."</td>";
    echo "<td>".$row["p_discharge_status"]."</td>";
    echo "<td>".$row["p_room_no"]."</td>";
    echo "</tr>";
 }
 //print_r($row);
}
?>