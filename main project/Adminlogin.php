<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminlogin</title>
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <style>
    .form-container1{
    background:#fff;
    width: 300px;
    height: 300px;
    position: relative;
    text-align: center;
    padding: 10px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    overflow: hidden;
}
    .adminfbtn h1{
        font-size: 25px;
    }
    .form-container1 .admimg {
        width: 130px;
        height: 100px;
        border-radius: 100px;
        /* margin-bottom: 8px; */
    }
    </style>
</head>
<body>
<div class="page">
       <div class="navbar">
           <img src="Images/shlogo.jpg" class="logo">
           <h1>Society<span style="font-family: 'Merienda', cursive;
            color:rgb(20, 76, 80);">Management System</span></h1>
           <nav>
               <ul>
                   <li><a href=""class="active">Home</a></li>
                   <li><a href="#rules">Rules & Regulations</a></li>
                </ul>
            </nav>
            <a href="login.html" class="btn">User Login</a>
       </div>
       <div class="row">
        <div class="col-1">
             <img src="Images/building1.jpg" >
        </div> 
        <div class="col-2">
           <div class="form-container1">
               <div class="adminfbtn">
                   <h1>Admin Login</h1>
               </div>
               <img src="Images/adminlogin.jpg" class="admimg" alt="">
               <form action="Adminlogin.php" method="POST">
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="text" placeholder="Admin Code" name="admincode" required>
                    <button type="submit" class="btn-losi" name="logina" >Login</button>     
                </form>
            </div>
        </div>
        </div>
</div>
<hr>
   <div id="rules">
       <h1>Rules and Regulations</h1>
       <hr>
       
        <li>Members and residents are required to keep their flats/homes and nearby premises clean and habitable.</li>  
        <li>The residents should also maintain proper cleanliness etiquette while using common areas, parking lot, etc. and not throw litter from their balconies and windows.</li>
        <li>Members must regularly pay the maintenance charges and all other dues necessitated by the society.</li>
        <li>Keeping pets is allowed after submitting the required NOC to the society. But if pets like dogs are creating any kind of disturbance to other HOUSING MITRAmembers then the pets won’t be allowed.</li>
        <li>Every member of the HOUSING MITRAshould park their vehicles in their respective allotted parking spaces only.</li> 
        <li> After using the community hall for any event or function it should be cleaned and no damages should be caused.</li> 
        <li>No member can occupy the area near their front doors, corridors, passage for their personal usage.</li> 
        <li>Salesmen, vendors or any other sellers are not allowed to enter the premises.</li>
        <li>Wastage and over usage of water is not allowed.</li>
        <li>Smoking in lobbies, passage is not allowed. If any irresponsible person is found smoking in the no smoking zone, he/she shall be charged with penalty.</li>   
    </div>
    <!-- footer code -->
    <hr>
    <footer>
            <div class="center box adjust">
                <div class="cen">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="login.html">Home</a></li>
                        <li><a href="#Loginform">Login</a></li>
                        <li><a href="#rules">Rules and Regulations</a></li>
                    </ul>
                </div>
                
            </div>
    </footer>
</body>
</html>
<!-- Php code to admin login -->
<?php
if(isset($_POST['logina'])){
    $user = $_POST['username'];
    $adcode = $_POST['admincode'];
    if($user=="Admin" && $adcode=="100"){
        echo "<script>alert('Welcome,You are logged in...!');
        window.location.href ='managemem.php';
        </script>";
    }
    else{
        echo "<script>alert('Sorry,Please enter valid details.!!');
        </script>";
    }
}
?>