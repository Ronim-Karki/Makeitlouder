<?php
    include '../connection.php';
    session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Message.css">
    <link rel="stylesheet" href="../css/Profile.css">
    <title>Edit Profile</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">

        <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&#9776;</a>
        <br>
        <br>

        <a href="AdminDashboard.php" class="active"><i class="fas fa-columns"></i><span
                class="Opac">Dashboard</span></a>

        <a href="Reservedlist.php"><i class="far fa-hand-point-up"></i><span class="Opac">Reserved</span></a>
        <a href="#" class="dropdown-btn"><i class="fas fa-user-circle"></i><span class="Opac">Accounts<i
                    class="fa fa-caret-down" style="display: inline-block; width:10px;"></i></span></a>
        <div class="dropdown-container" style="display: none;">
            <a href="UserList.php">User List</a>
            <a href="AdminList.php">Admin List</a>
        </div>
        <a href="Animalist.php"><i class="fas fa-dog"></i><span class="Opac">Animals</span></a>
        <a href="Messageslist.php"><i class="fas fa-envelope"></i><span class="Opac">Messages</span></a>
    </div>
    <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
    </script>


    <div id="main">
        <h2><b>MAKE IT LOUDER</b></h2>
        <p>Edit Profile.</p>



        <h4 class="Username">
            <div class="dropdown">
                <i class="fas fa-user-circle dropbtn"></i>

                <div class="dropdown-content">
                    <a href="Profile.php">Profile</a>
                    <a href="chgPassword.php">Change Password</a>
                </div>
            </div>Hi, <?php
{  // echo "<img height='50px' style='border-radius: 20px 'src='Image/".$_SESSION['Pic']."'>";
echo $_SESSION['login_user'];
}
?>&nbsp;
            </span>
            <form class="logout" method="post"> <button class="logout" type="submit" name="Logout"
                    onclick="model()">Logout</button>
            </form>
        </h4>
        <script type="text/javascript">
        // document.getElementById("closebtn").addEventListener('click', toggleNav);

        function toggleNav() {
            navSize = document.getElementById("mySidenav").style.width;
            if (navSize == '250px') {

                return closeNav();
            } else {

                return openNav();
            }
        }

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            // document.querySelector(".Report").style.marginLeft = "500px";

        }


        function closeNav() {
            document.getElementById("mySidenav").style.width = "50px";

            document.getElementById("main").style.marginLeft = "0px";


        }
        </script>


        <hr>
        <?php
if(isset($_POST['Logout'])){


if(isset($_SESSION['login_user']))
{
unset($_SESSION['login_user']);

}
header("location:../login.php");
}
?>
<script type="text/javascript">
    document.getElementsByClassName("logout").addEventListener("onclick", model);

    function model() {
        alert("Are you sure?????")
    }
    </script>
        <h2 style="text-align:center; color:black;">Edit Profile.</h2>
        <?php
	$sql = "SELECT * from admin where Email='$_SESSION[login_user]'";
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
                <!-- <label for="psw"><b class="container">Password:</b></label>
                <input class="form-control" type="password" placeholder="create password" name="Password" required
                    value="" /><br /> -->

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
		// $Password=$_POST['Password'];Password='$psw',<?php echo $Password
		$Email=$_POST['Email'];
		$Phone=$_POST['Phone'];
		$pic=$_FILES['file']['name'];
		
		$sql1="UPDATE admin SET firstName='$First', lastName='$Last',Street='$Street',City='$City', zipCode='$zip',  Email='$Email', ContactNumber='$Phone', pic='$pic' WHERE Email='".$_SESSION['login_user']."';";
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