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
    <link rel="stylesheet" href="../css/pet.css">
    <title>Animal List</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">

        <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&#9776;</a>
        <br>
        <br>

        <a href="AdminDashboard.php"><i class="fas fa-columns"></i><span class="Opac">Dashboard</span></a>

        <a href="Reservedlist.php"><i class="far fa-hand-point-up"></i><span class="Opac">Reserved</span></a>
        <a href="#" class="dropdown-btn"><i class="fas fa-user-circle"></i><span class="Opac">Accounts<i
                    class="fa fa-caret-down" style="display: inline-block; width:10px;"></i></span></a>
        <div class="dropdown-container" style="display: none;">
            <a href="UserList.php">User List</a>
            <a href="AdminList.php">Admin List</a>
        </div>
        <a href="Animalist.php" class="active"><i class="fas fa-dog"></i><span class="Opac">Animals</span></a>
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
        <p>Animal List.</p>



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
            window.location = '../login.php';
        }
        </script>


        <form class="create" method="" action="create.php">
            <button class="create" type="submit"
                style="background-color:#111; color:white; width:100px; height:50px; border-style:none; border-radius:25px;">Create</button>
        </form>
        <?php
if(isset($_SESSION['login_user']))

{
	$sql= "SELECT ID, Name, Type, Status from animal";
	$res= mysqli_query($db,$sql);
	if(mysqli_num_rows($res)==0)
	  {
		  echo "There's no animals";
	  }
	  else
	  {
  echo "<table class='table table-striped table-hover' style='width:50%; margin-left:0;'>";
		
		echo "<tr >";
		
			echo "<th scope:'col'>"; echo "ID"; echo "</th>";
			echo "<th scope:'col'>"; echo "Name"; echo "</th>";
			echo "<th scope:'col'>"; echo "Type"; echo "</th>";
			echo "<th scope:'col'> "; echo "Status"; echo "</th>";
		
			
			echo "</tr>";
			
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td >"; echo $row['ID']; echo"</td>";
			echo "<td>"; echo $row['Name']; echo"</td>";
			echo "<td>"; echo $row['Type']; echo"</td>";
			echo "<td>"; echo $row['Status']; echo"</td>";
            ?>
        <div class="delete">
            <form method="post" action="">
                <td>
                    <a name="edit" type="submit" value="<?= $row['ID'];?>" class='btn btn-success btn-sm'
                        href='editanimal.php?ID=" .$row[' ID']."' style="color: white;">Edit</a>

                    <!-- <script src="../script/editpet.js">
                    // $(document).ready(function() {
                    //     $('.editbtn').on('click', function() {
                    //         $('#editmodal').modal('show');

                    //     });



                    // });
                    </script> -->



                </td>

                <td>
                    <a href='viewAnimal.php?ID=" .$row[' ID']."' name="view" type="submit" value="<?= $row['ID'];?>"
                        class="view btn btn-success btn-sm " style="color: white;">view</button>
                </td>

        </div>
        <div class="delete">
            <form method="post" id="delete" action="">
                <td><input type="hidden" value="" name="ID">
                    <button name="del" type="submit" value="<?= $row['ID'];?>"
                        class="btn btn-danger btn-sm">Delete</button>
                    <?php
                    include '../connection.php';
                    if(isset($_POST['del']))
			
                    {
                       
                       $ID = $_POST['del'];
                        $sql=mysqli_query($db, "DELETE FROM `animal` WHERE ID = $ID");
                        if(mysqli_query($db, $sql))
                        {
                            echo "Deleted.";
                        }else{
                            echo "Deleted.";
                        }
                    }
            

                    ?>
                </td>
            </form>

        </div>
        <?php
			echo "</tr>";
           

        }
        echo "</table>";
        }
        }
        
        ?>

</body>

</html>