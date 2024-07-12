<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.html");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment पेमेंट</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>



.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 180px 10px;
	margin-bottom: 45px;
  font-size: 35px;
}

.field{
	width: 50%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: white;
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: #f5f5f7;
}

textarea{
	min-height: 170px;
}

.btn{
	width: 25%;
	padding: 0.5rem 1rem;
	background-color: #19B3D3;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #0B87A6;
}

.btn-pay{
	width: 45%;
	padding: 0.5rem 1rem;
	background-color: #19B3D3;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
    margin-left: 28px;
	transition: .3s;
}

.btn-pay:hover{
    background-color: #0B87A6;
}


.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}
.paycontainer{
    height: 450px;
    width: 550px;
    margin-left: 250px;
    background-color: #8cabf5;
}
.paycontent{
    margin-left: 200px;
    padding-top: 10px;
}
.payform{
    margin-left: 70px;
    padding-top: 10px;
}
    </style>
</head>
<body style>
<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>HOUSING<span>MITRA</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="Images/download.png" class="profile_image" alt="">
        <h4> <?php echo $_SESSION['username']?> </h4>
      </center>
      <a href="Welcome.php" class="active"><i class="fas fa-desktop"></i><span>Dashboard डॅशबोर्ड </span></a>
      <a href="noticebrd.php"><i class="fas fa-bullhorn"></i><span>Notice Board सूचना </span></a>
      <a href="complaint.php"><i class="fas fa-envelope-open-text"></i><span>Register Complaint तक्रार </span></a>
      <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Maintenan पेमेंट </span></a>
      <a href="userphoto.php"><i class="fas fa-camera-retro"></i><span>Gallery गॅलरी  </span></a>
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>
    <!--sidebar end--> 
    <div style="background-color: #f5f5f5; padding: 20px;">
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="max-width: 600px; text-align: center;">
            <h2>PAYMENTS पेमेंट </h2>
            
            <div style="text-align: center;">
            <script>
        // Function to validate the password
        function validatePassword(event) {
            // Get the password input
            const passwordInput = event.target.querySelector('input[name="password"]');
            const password = passwordInput.value;

            // Define a regular expression for password validation
            const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).{6,}$/;

            // Check if password matches the criteria
            if (!passwordRegex.test(password)) {
                // Prevent form submission and show an alert
                event.preventDefault();
                alert("Password must be at least 6 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
            }
        }

        // Function to validate the username
        function validateUsername(event) {
            // Get the username input
            const usernameInput = event.target.querySelector('input[name="username"]');
            const username = usernameInput.value;

            // Define a regular expression to allow only alphabetic characters
            const usernameRegex = /^[A-Za-z]+$/;

            // Check if the username matches the regex
            if (!usernameRegex.test(username)) {
                // Prevent form submission and show an alert
                event.preventDefault();
                alert("Username must contain only alphabetic characters. Numbers and special characters are not allowed.");
            }
        }
    </script>
    <form action="#" method="POST"onsubmit="validatePassword(event); validateUsername(event)>
      
        <div style="margin: auto; text-align: left; max-width: 400px;">
            <img src="Images\WhatsApp Image 2024-04-06 at 22.55.42_79a1ef65.jpg" width="150" style="display: block; margin: 0 auto;"><br><br>
            <input type="text" class="field" name="ptitle" placeholder="Enter Your Name नाव " required style="width: 100%; margin-bottom: 10px; padding: 8px; box-sizing: border-box; border: 1px solid #ccc;"><br>
            <input type="number" class="field" name="pflat" placeholder="Enter Your Flat. No फ्लॅट क्रमांका " required style="width: 100%; margin-bottom: 10px; padding: 8px; box-sizing: border-box; border: 1px solid #ccc;"max="25",min="1"><br>
            <input type="text" class="field" name="pamount" placeholder="$ Enter Your Amount रक्कम भरा " required style="width: 100%; margin-bottom: 10px; padding: 8px; box-sizing: border-box; border: 1px solid #ccc;"><br>
            <input type="tel" class="field" name="pid" placeholder="$ Enter Payment Id पेमेंट आयडी " required style="width: 100%; margin-bottom: 10px; padding: 8px; box-sizing: border-box; border: 1px solid #ccc;"pattern="[0-9]{10}"><br>
            <button class="btn-pay" name="ppaymnet" style="width: 100%; padding: 10px; background-color: #19B3D3; color: #fff; font-size: 1.1rem; border: none; cursor: pointer; margin: auto;"> Confirm Payment पेमेंट करा </button>

        </div>
    </form>
</div>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php
if(isset($_POST['ppaymnet'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"payments");
    $query = "insert into payrecords values('$_POST[pid]','$_POST[ptitle]','$_POST[pflat]','$_POST[pamount]','Success')";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Payment Received...!!');
      window.location.href = 'Welcome.php';
      </script>";
    }
    else{
      echo "<script>alert('Please try again');
      window.location.href = 'payment.php';
      </script>";
    }
  }
  ?>
?>