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
    <title>Edit Animal</title>
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
        <p>Edit Animal.</p>



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
        
	$sql = "SELECT * from animal  ";
	$result = mysqli_query($db, $sql) ;
	while ($row = mysqli_fetch_assoc($result))
	{
		$ID=$row['ID'];
		$Name=$row['Name'];
		$Type=$row['Type'];
		$Status=$row['Status'];
		$Pic=$row['Pic'];
		$Message=$row['Message'];
	
	}
?>
        <div class="editProfile" style="text-align:center;">

            <h4 style="color:black">Edit Pet,</h4>
            <br />
            <br />
            <form action="" method="post" enctype="multipart/form-data">

                <input class="form-control" type="number" name="ID" placeholder="ID" required="required" /
                    value="<?php echo $ID?>"></br>
                <input class="form-control" type="text" name="Name" placeholder="Name" required="optional"
                    value="<?php echo $Name?>" /></br>

                <input class="form-control" type="text" placeholder="Type" name="Type" required
                    value="<?php echo $Type?>" /><br />
                <input class="form-control" type="text" placeholder="Status" name="Status" required
                    value="<?php echo $Status?>" /><br />
                <input class="form-control" type="file" placeholder="Pic" name="Pic" required
                    value="<?php echo $Pic?>" /><br />
                <input class="form-control" type="text" placeholder="Message" name="Message" required
                    value="<?php echo $Message?>" /><br />
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
		
		
		$ID=$_POST['ID'];
		$Name=$_POST['Name'];
		$Type=$_POST['Type'];
		$Status=$_POST['Status'];
		$Pic=$_POST['Pic'];
		$Message=$_POST['Message'];
		
		$sql1="UPDATE animal SET ID='$ID', Name='$Name',Type='$Type',Status='$Status', Pic='$Pic',  Message='$Message' WHERE ID = $ID;";
		if(mysqli_query($db,$sql1))
		{
			?>
    <script type="text/javascript">
    alert("Saved successfully.");
    window.location = "Animalist.php";
    </script>
    <?php
		}
	}
?>
</body>

</html>