<?php
    include "connection.php";    
    session_start();

?>

<!Doctype html>
<html>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<head>
    <style type="text/css">
    .header {
        margin: 5px, 5px, 5px, 5px;

    }

    .Menubar {
        float: right;
        margin-top: 0px;

    }

    .dog5 {
        z-index: -1;
        width: 50%;
    }

    .Menubar a {
        color: black;
        text-decoration: none;
        position: relative;
        text-align: center;
        padding: 15px;

        font-weight: bold;
    }

    #box {
        background: black;
        color: white;
        border-radius: 25px;
        padding: 10px;
    }

    .Menubar a.active {
        color: blue;
    }





    .address p {
        margin-top: -28px;
        margin-left: 250px;

    }


    @media only screen and (max-width:768px) {


        .dog5 {

            opacity: 0.1;

        }

        .signup {
            text-align: center;
        }
    }

    @media screen and (max-width:100%) {
        .signup {


            position: relative;
            float: right;
            margin: auto;
            margin-right: 200px;
            margin-top: -550px;

        }

    }

    @media only screen and (max-width:768px) {
        .dog5 {
            visibility: hidden;
            width: 100%;

            opacity: 1;
        }

        .signup {
            width: 50%;
            align-items: center;
            position: relative;
            text-align: center;

            float: left;
        }


        .menubar {

            width: 100%;
        }



        .info {
            width: 100%;
        }

        .footer {
            margin: auto;
            margin-bottom: 0;
        }


    }
    </style>
</head>
<title>
    SignIn
</title>

<body style="margin: 35px; font-family: Arial; ">
    <div class="top">
        <div class="header">
            <p style="font-family: Arial ; position: static; opacity: 100%; overflow: auto"><B>MAKE IT LOUDER <i
                        class="fas fa-dog" style="width: 50px;"></i></B></p>

        </div>
        <div class="Menubar">
            <a href="first%20page.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="pet.php">Pets</a>
            <a href="contact.php">Contact</a>

            <a class="active" href="signIn.php" id="box">Sign In</a>

        </div>
        <div class="image" style="width: 100px;">
            <img class="dog5" src="dog5.jpg" height="600px" width="500px" style="border-radius:25px;position:relative;">
        </div>
        <div class="signup"
            style="float: right; margin:auto; margin-top:-550px;  margin-right: 200px; position:relative;">
            <h1 style="font-size: 50px; text-align: center;">Welcome!</h1>
            <h4 style="margin-left: 0px; text-align: center;">BE ONE OF US!</h4>
            <br>
            <form class="info" action="" method="post">
                <input type="text" id="Email" name="Email" placeholder="Email"
                    style="height: 40px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid; padding-left: 10px;"
                    required="required">
                <br>
                <input type="password" name="Password" id="Password" placeholder="Password"
                    style="height: 40px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid; margin-top: 5px; padding-left: 10px;"
                    required="required">

                <br>
                <button type="submit" name="SIGINUP"
                    style="height: 40px; width: 365px; border-radius: 25px; border-color:grey; border-style: solid;  margin-top: 10px; padding-left: 10px; color: white; background-color: black; border-style: none;">LOGIN</button><br>
                <p style="color: gray; text-align: center;">Don't have account yet?<a href="signIn.php"
                        style="text-decoration: none; color:grey;"><B>Sign up</B></a></p>
            </form>
        </div>

        <div class="address">
            <img src="location.jpg"
                style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-left: 200px; margin-top: 100px; position: relative;">
            <p><B>54 Wright Street Wylies Flat NSW</B></p>
            <img src="mail.jpg"
                style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-left: 200px; margin-top: 0px; position: relative;">
            <p><B>makeitlouder@gmail.com</B></p>
            <img src="tele.jpg"
                style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-left: 200px; margin-top: 0px; position: relative;">
            <p><B>943-9234</B></p>
            <img src="facebook.png"
                style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-right:200px; margin-top: -40px;float: right;">
            <p style="float: right; margin-right: 250px;"><B>Follow Us</B></p>

        </div>
        <div class="footer" style=" background-color:black; color: white; height: 50px; text-align: center;">
            <p style="text-align: center;margin-left:  200px;">Copyright &copy; 2020 All Rights Reserved </p>
        </div>
        <?php
 	if(isset($_POST['SIGINUP']))
	{
		$count=0;
		$res=mysqli_query($db,"SELECT * FROM customersignup where Email='$_POST[Email]' && Password='$_POST[Password]';");
		$row=mysqli_fetch_assoc($res);
		$count=mysqli_num_rows($res);
		
		if($count==0)
		{
			?>
        <script type="text/javascript">
        alert("Username and Password donot match.");
        </script>
        <?php
		}
		else
		{
			$_SESSION['login_user'] = $_POST['Email'];
			$_SESSION['pic']=$row['pic'];
			?>
        <script type="text/javascript">
        window.location = "AdminDashboard/AdminDashboard.php"
        </script>
        <?php
		}
	}
 ?>
</body>

</html>