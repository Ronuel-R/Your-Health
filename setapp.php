<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your Health</title>
    <link rel="stylesheet" href="setapp.css">
    <link rel="icon" href="Images/logo3.png"type="image">
</head>
<body>
<div class = "header">
        <h1> Book Appointment Now!</h1> 
</div>


<div class = "container"> 
<div class="main">
    <br> <br> 
<form method="post" action="setappsql.php">

    <div class = "department-box">
    <select id="ddselect" name="depselect"  style="padding: 5px 10px  ">
            <option> Select Department </option> 
            <option value="Physicians"> Physicians </option>
            <option value="Dentist"> Dentist </option>
            <option value="Psychiatrists"> Psychiatrists </option>
            <option value="bstetricians and Gynecologists"> Obstetricians and Gynecologists </option>
            <option value="Neurologists"> Neurologists </option>
            <option value="Radiologists"> Radiologists</option>
            <option value="Anesthesiologists"> Anesthesiologists</option>
            <option value="Pediatricians"> Pediatricians </option>
</select>

<select id="ddselectdoctoravailable" name="Doctorselect" style="padding: 5px 10px">
        <option> --Doctors--</option>
        <option> Brian</option>
        <option> Ronuel </option>
        <option> Marvie </option>
</select>
<br> <br> <br> 
<form> 
        <input type="datetime-local" name="dateselect">
    </form>
    
 
        <textarea type ="message" name="message" placeholder="Your Message/Concern" cols="45" rows="10"></textarea> 

    <br>  <br> 
    <button type="submit" value="confirm" name="s">Make Appointment</button>
</form>

</div>
</div>
</body>
    </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <!-- <form>
    <select id="Department" onchange="changeDepartment()" style="padding: 10px 43px", margin-bottom: 200px"> 
            <option value ="D"> Department: </option> 
            <option value ="P"> Physicians </option>
            <option value ="D"> Dentist </option>
            <option value ="PS"> Psychiatrists </option>
            <option value ="O"> Obstetricians and Gynecologists </option>
            <option value ="N"> Neurologists </option>
            <option value ="R"> Radiologists</option>
            <option value  ="A"> Anesthesiologists</option>
            <option value="PE"> Pediatricians </option> </div> </form> 
            <form> 
        <input type="datetime-local" name="">
    </form>
    <span>
    <i></i>
    <input type = "text" placeholder="Full Name" name=""> 
</span><br>  -->



<!-- 
<span>
    <i> </i>
    <input type = "text" placeholder="Full Name" name=""> 
</span> <br>
</form> 

<textarea name ="message" id="message" cols="30" rows="10">Your Message/Concern</textarea> 
</div>
</div>
</div> -->

   <!--  <button> okay na </button> -->