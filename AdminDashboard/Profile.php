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
    <title>Profile</title>
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
        <p>Profile.</p>



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
        <div class="container">

            <div class="wrapper">

                <form action="" method="post">
                    <button class=""
                        style="float:right; width:70px; border:double; border-radius:curve; margin-left:-70px"
                        name="submit1" type="submit">Edit</button>
                </form>
                <?php
		if(isset($_POST['submit1']))
		{
			?>
                <script type="text/javascript">
                window.location = "edit.php"
                </script>
                <?php
		}
			$q="SELECT firstName, lastName, Email, ContactNumber, Street,City,State,zipCode FROM admin where Email='$_SESSION[login_user]';";
			$result=mysqli_query($db, $q);
			
		?>
                <h2 style="text-align:center" ;>My profile</h2>
                <?php
			$row = mysqli_fetch_assoc($result);
			
			
			echo "<div style='text-align: center'><img class='img-circle profile-img' height=110 width=120 src='Image/".$_SESSION['pic']."'> </div>";
		?>
                <div style="text-align:center;" <b>Welcome,</b>
                    <h4>
                        <?php echo $_SESSION['login_user'];?>
                    </h4>
                </div>
                <?php 
		echo "<b>";
		echo "<table class='table table-border ' style='color:black'>";
		echo "<tr>";
			echo "<td>";
				echo "<b> First Name: </b>";
			echo "</td>";
				echo "<td>";
				echo $row['firstName'];
			echo "</td>";
		echo "</tr>";
		
		echo "<tr>";
			echo "<td>";
				echo "<b> Last Name: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['lastName'];
			echo "</td>";
		echo "</tr>";
		/*
		echo "<tr>";
			echo "<td>";
				echo "<b> Password: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['psw'];
			echo "</td>";
		echo "</tr>";
		*/
		echo "<tr>";
			echo "<td>";
				echo "<b> Email: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['Email'];
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<b> Phone: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['ContactNumber'];
			echo "</td>";
		echo "</tr>";
		 "<tr>";
			echo "<td>";
				echo "<b> Street: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['Street'];
			echo "</td>";
		echo "</tr>";
        echo "</tr>";
		 "<tr>";
			echo "<td>";
				echo "<b> City: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['City'];
			echo "</td>";
		echo "</tr>";
        echo "</tr>";
		 "<tr>";
			echo "<td>";
				echo "<b> State: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['State'];
			echo "</td>";
		echo "</tr>";
        echo "</tr>";
		 "<tr>";
			echo "<td>";
				echo "<b> zipCode: </b>";
			echo "</td>";
			echo "<td>";
				echo $row['zipCode'];
			echo "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</b>";
		
		
		?>
            </div>

</body>

</html>