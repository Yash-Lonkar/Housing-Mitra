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
    <title>Notice Board</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
      .content-table {
  border-collapse: collapse;
  margin: 25px 19px;
  margin-left: 13px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #19B3D3;
  color: #ffffff;
  text-align: left;
  font-weight: 900;
}

.content-table th,
.content-table td {
  padding: 15px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #82abc7;
}

  </style>
</head>
<body>

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
      <a href="payment.php"><i class="fas fa-file-invoice-dollar"></i><span>Payment पेमेंट </span></a>
      <a href="userphoto.php"><i class="fas fa-camera-retro"></i><span>Gallery गॅलरी  </span></a>
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
      
    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br><br>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'noticeboard');

    $query = "Select * from notices";
    $query_run = mysqli_query($connection,$query);
    
    ?>
    <table class="content-table">
    <h1 style="text-align: center;">NOTICE BOARD सूचना फलक</h1>

    <thead style="text-align: center;">
    <tr>
        <th style="text-align: center;">ID आयडी</th>
        <th style="text-align: center;">Subject विषय</th>
        <th style="text-align: center;">Type प्रकार</th>
        <th style="text-align: center;">Date तारीख</th>
        <th style="text-align: center;">Notice सूचना</th>
    </tr>
</thead>
  <?php
    if($query_run)
    {
      while($row = mysqli_fetch_array($query_run))
      {
        ?>

    <tbody>
    <tr>
      <td><?php echo $row['ID']; ?> </td>
      <td><?php echo $row['Name']; ?> </td>
      <td><?php echo $row['Type']; ?> </td>
      <td><?php echo $row['Noticedate']; ?> </td>
      <td><?php echo $row['Message']; ?> </td>
    </tr>
    </tbody>
        <?php
      }
    }
    else
    {
      echo "No Record found";
    }
    ?>
    </table>   
    </div>
</body>
</html>