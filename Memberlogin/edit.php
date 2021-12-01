<?php
	include "../connection.php";
	
	session_start()
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="../https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/Profile.css">
    <title>User Profile</title>
</head>

<body style="margin: 35px; font-family: Arial">
    <div class="top">
        <div class="header">
            <p style="font-family: Arial"><b>MAKE IT LOUDER <i class="fas fa-dog" style="width: 50px;"></i></b></p>
        </div>
        <div class="Menubar">
            <a href="first%20page.php">Home</a>
            <a href="pet.php">Pets</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a class="active" href="Profile.php">User Profile</a>

            <a class="logout" href="logout.php" id="box">Log out</a>
        </div>
        <script type="text/javascript">
        document.getElementsByid("box").addEventListener("onclick", model);

        function model() {
            alert("Are you sure?????")
        }
        </script>
        <h2 style="text-align:center; color:black;">Edit Profile.</h2>
        <?php
	$sql = "SELECT * from customersignup where Email='$_SESSION[login_user]'";
	$result = mysqli_query($db, $sql) ;
	while ($row = mysqli_fetch_assoc($result))
	{
		$First=$row['firstName'];
		$Last=$row['lastName'];
		$Street=$row['Street'];
		$City=$row['City'];
		$state=$row['State'];
		$zip=$row['zipCode'];
		$Email=$row['Email'];
		$Phone=$row['ContactNumber'];
		$Password=$row['Password'];
		
	}
?>
        <div class="editProfile" style="text-align:center;">
            <span style="color:Black;">Welcome,</span>
            <h4 style="color:black"> <?php echo $_SESSION['login_user'];?></h4>
            <br />
            <br />
            <form action="" method="post" enctype="multipart/form-data">
                <input class="form-control" type="file" name="file" /><br />

                <input class="form-control" type="text" name="firstName" placeholder="First name" required="required" /
                    value="<?php echo $First?>"></br>
                <input class="form-control" type="text" name="lastName" placeholder="Last name" required="optional"
                    value="<?php echo $Last?>" /></br>
                <div class="location">
                    <label for="Address"><b class="location">Address:</b></label> </br>

                    <input class="form-control" type="Street" name="Street" class="location" id="inputStreet"
                        placeholder="Street" value="<?php echo $Street?>">
                    </br>

                    <input class="form-control" type="city" class="location" name="City" id="inputCity"
                        placeholder="City" required="required" value="<?php echo $City?>">
                    </br>

                    <input class="form-control" type="state" class="location" name="State" id="inputState"
                        placeholder="State" required="required" value="<?php echo $state?>"><br />


                    <input class="form-control" class="form-control" type="zip" name="zipCode" class="location"
                        id="inputZip" placeholder="Zip" required="required" value="<?php echo $zip?>"><br />


                </div>

                <input class="form-control" type="text" placeholder="Email" name="Email" required
                    value="<?php echo $Email?>" /><br />
                <input class="form-control" type="text" placeholder="Phone" name="Phone" required
                    value="<?php echo $Phone?>" /><br />
                <label for="psw"><b class="container">Password:</b></label>
                <input class="form-control" type="password" placeholder="create password" name="Password" required
                    value="<?php echo $Password?>" /><br />

                <div style="margin-left:0px;"> <button style=" width:100%; "
                        class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" type="submit"
                        name="submit">Save</button></div>
            </form>
        </div>
    </div>
    <?php
	if(isset($_POST['submit']))
	{
		move_uploaded_file($_FILES['file']['temp_name'],"Image/".$_FILES['file']['name']);
		$First=$_POST['firstName'];
		$Last=$_POST['lastName'];
		$Street=$_POST['Street'];
		$City=$_POST['City'];
		$state=$_POST['State'];
		$zip=$_POST['zipCode'];
		$Password=$_POST['Password'];
		$Email=$_POST['Email'];
		$Phone=$_POST['Phone'];
		$pic=$_FILES['file']['name'];
		
		$sql1="UPDATE customersignup SET firstName='$First', lastName='$Last',Street='$Street',City='$City', zipCode='$zip', Password='$psw', Email='$Email', ContactNumber='$Phone', pic='$pic' WHERE Email='".$_SESSION['login_user']."';";
		if(mysqli_query($db,$sql1))
		{
			?>
    <script type="text/javascript">
    alert("Saved successfully.");
    window.location = "Profile.php";
    </script>
    <?php
		}
	}
?>
</body>

</html>