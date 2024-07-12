<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateuser</title>
    <style>
        .Add_btn{
    padding: 5px;
    background: #0B87A6;
    text-decoration: none;
    /* float: right; */
    margin-top: -1px;
    margin-right: 2px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Add_btn:hover{
    background: #19B3D3;
  }
  .container{
    background:#b7f7d7;
    width: 550px;
    height: 320px;
    margin-top: 90px;
    margin-left: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    /* margin: auto; */
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    overflow: hidden;
}
.container form{
    max-width: 400px;
    padding: 0 70px;
    position: absolute;
    top: 100px;
    transition: transform 1s;
}
form input{
    width: 100%;
    height: 40px;
    margin-top: 0px;
    margin-bottom: 10px;
    padding: 0 10px;
    border: 1px solid #ccc;
}
body {
            background-color: skyblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 200px;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }  
  
    </style>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'usersregister');

    $Id = $_POST['Id'];

    $query = "SELECT * FROM registration WHERE Id='$Id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
    
        <div>
        <form action="" method="POST" >
        <h1>Update Member  अपडेट करा </h1>
        Id आयडी:<br>
        <input type="text" placeholder="Id" name="Id"  style="width: 200px;"><br>
            <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>"><br><br>
            User Name नाव:<br>
            <input type="text" placeholder="Username" name="username" value="<?php echo $row['Username'] ?>" required style="width: 200px;"><br><br>
            E-mail ई-मेल:  <br>
            <input type="email" placeholder="E-mail" name="email" value="<?php echo $row['Email'] ?>" required style="width: 200px;"><br><br>
            Flat No. फ्लॅट क्र .:<br>
            <input type="number" placeholder="Flat-No." name="flatno" value="<?php echo $row['Flatno'] ?>" required style="width: 200px;" min="1;" max="25"><br><br>
            Mobile NO. मोबाईल क्र .:<br>
            <input type="tel" placeholder="Mobile Number" name="mobno" value="<?php echo $row['MobileNo'] ?>" required
       style="width: 200px; padding: 5px; border: 1px solid #ccc; border-radius: 4px;"
       pattern="[0-9]{10}" title="Please enter a 10-digit mobile number"><br>

            Dues बाकी: <br>
            <input type="number" placeholder="Dues" name="dues" value="<?php echo $row['dues'] ?>" required style="width: 200px;"><br><br>
            <button type="submit" name="update" class="Add_btn" >Update data  अपडेट करा </button>
        </form></div>
        <?php
            if(isset($_POST['update']))
            {
                $Username = $_POST['username'];
                $email = $_POST['email'];
                $flatno = $_POST['flatno'];
                $mobileno = $_POST['mobno'];
                $familymem = $_POST['fammem'];
                $dues = $_POST['dues'];

                $query = "UPDATE registration SET Username = '$Username', Email = '$email',Flatno='$flatno', MobileNo='$mobileno',dues = '$dues' WHERE Id='$Id'";
                $query_run = mysqli_query($connection,$query);

                if($query_run)
                {
                    echo "<script>alert('Updated Successfully..!!');
                    window.location.href = 'managemem.php';
                    </script>";
                }
                else
                {
                    echo "<script>alert('Not updated...Please try again.!!');
                    window.location.href = 'updateuser.php';
                    </script>";
                }
            }

        ?>
    </div>

            <?php
        }
    }
    else
    {
        echo'<script> alert("No Record Found"); </script>';
    }
    ?>
    
</body>
</html>