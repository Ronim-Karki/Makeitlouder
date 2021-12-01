<?php
include '../connection.php';
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
			$q="SELECT firstName, lastName, Email, ContactNumber, Street,City,State,zipCode FROM customersignup where Email='$_SESSION[login_user]';";
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