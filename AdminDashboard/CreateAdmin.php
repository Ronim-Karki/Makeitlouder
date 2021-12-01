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
    <link rel="stylesheet" href="../css/createadmin.css">
    <title>Create Admin</title>
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
        <p>Create Admin.</p>



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
        <div class="signup">
            <h1>Sign up</h1>
            <h4>BE ONE OF US!</h4>
            <br>
            <form class="info" action="" method="post">
                <input class="form-control" type="text" id="Email" name="Email" placeholder="Email" required="required">
                <br>
                <input class="form-control" type="password" name="Password" id="Password" placeholder="Password"
                    required="required">
                <br>
                <input class="form-control" type="text" id="Street" name="Street" placeholder="Street"
                    required="required"><input class="form-control" type="text" name="City" id="City" placeholder="City"
                    required="required">
                <br>
                <input class="form-control" type="text" id="State" name="State" placeholder="State">
                <input class="form-control" type="text" name="zipCode" id="ZipCode" placeholder="ZipCode"
                    required="required">
                <br>
                <input class="form-control" type="number" name="ContactNumber" id="Phone" placeholder="Contact Number"
                    required="required">
                <br>
                <button class="btn btn-success" type="submit" name="SIGINUP">SIGN
                    UP</button><br>

            </form>
        </div>
    </div>
    <?php
   
   if(isset($_POST['SIGINUP']))
   {
       $count=0;
       $sql="SELECT Email FROM admin";
       $res=mysqli_query($db,$sql);
       while($row=mysqli_fetch_assoc($res))
       {
           if($row['Email']==$_POST['Email'])
           {
               $count=$count+1;
           }
       }
   
       if($count==0)
        { mysqli_query($db,"INSERT INTO `admin`(`Email`, `Password`, `Street`, `City`, `State`, `zipCode`, `ContactNumber`, `firstName`, `lastName`, `pic`) VALUES('$_POST[Email]','$_POST[Password]','$_POST[Street]','$_POST[City]','$_POST[State]','$_POST[zipCode]','$_POST[ContactNumber]','','','')");
			
				?>
    <script type="text/javascript">
    alert("Registration Successful.");
    </script>
    <?php
 }
     
     else
         {
             ?>
    <script type="text/javascript">
    alert("Username already exist.");
    </script>
    <?php
         
         }
     }
         
         ?>




    }


    ?>
    </div>



    </div>

</body>

</html>