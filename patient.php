<html>
<head>
    <title>Patient Registration</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.validate.min.js"></script>
 <!-- end validation js -->
 <script type="text/javascript">
$(document).ready(function(){
    $("#rform").validate(
        {
            rules:{
                name:"required",
                add:"required",
                cont:{
                    required:true,
                    minlength:10,
                    number:true
                },
                disease:"required",
                age:{
                    required:true,
                    number:true
                },
                admisson_date:"required",
                discharge_status:"required",
                appointed_doctor:"required",
                room_no:{
                    required:true,
                    number:true
                }
             },
                messages:{
                    name:"please enter full name",
                    add:"pleasse enter your address",
                    cont:{
                        required:"please enter contact no",
                        minlength:"contact should be 10 digit",
                        number:"please enter valid no"
                    },
                    disease:"enter disease",
                    age:"enter patient's age",
                    admission_date:"enter admission date",
                    discharge_status:"enter dischrge status",
                    appointed_doctor:"enter doctor name",
                    room_no:"enter room no"
                },
                submitHandler: function(form){
                    alert("data is correct.");
                    form.submit();
                }
        });
    
});
</script>
</head>
<body>
<form id="rform" action="insert.php" method='POST'>
<center>
<h1> <p style="color: blue">
Patient Regestration Form</h1></p>
<h3><p style="color: red">  Registration Form </h3></p>

Name : <input type="text" id="name" name = "name" placeholder="enter name"><br><br>
Address : <input type="text" id="add" name = "add" placeholder="enter add"><br><br>
Contact No: <input type="text" id="cont" name = "cont" placeholder="enter contact"><br><br>
Disease : <input type="text" id="disease" name = "disease" placeholder="enter disease"><br><br>
Age : <input type="text" id="age" name = "age" placeholder="enter age"><br><br>
Gender :<input type="radio" name="gender" value="male">male
       <input type="radio" name="gender" value="female">female<br><br>
<label name ="blood_group">Blood group :</label>
<select name="blood_group" id="blood_group">
    <option value="">select</option>
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="A-">A-</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB</option>
</select><br><br>
Patient admit date : <input type="date" id="admission_date" name = "admission_date" placeholder=
"enter admission date"><br><br>
Discharge status : <input type="text" id="discharge_status" name = "discharche_status" placeholder=
"enter "><br><br>
Doctor appointed to patient : <input type="text" id="appointed_doctor" name = "appointed_doctor" placeholder=
"enter doctor name"><br><br>
Room No : <input type="text" id="room_no" name = "room_no" placeholder="enter room no"><br><br>


<button>submit </button>  
<button> <a class="" href="login.php">logout</a></button>
<button><a  href="search.php">search</a></button>
</center>
</form> 
</body>
</html>