<?php
    include "connection.php";    
    

?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
    .header {
        margin: 5px, 5px, 5px, 5px;


    }

    .Menubar {
        float: right;



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

    }

    .#Email {
        height: 100px;
    }

    .address p {
        margin-top: -28px;
        margin-left: 250px;

    }


    .signup {


        position: relative;
        float: right;
        margin: auto;
        margin-right: 200px;
        margin-top: -550px;

    }

    .header {
        align-items: center;

    }

    .heading {
        margin-right: 150px;
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

    @media screen and (max-width:1200px) {
        .dog5 {
            opacity: 0.1;
        }

        .signup {
            text-align: center;
        }

    }

    .info #sent {
        font: 50px;
        text-align: center;
    }

    @media screen and (max-width:768px) {
        .dog5 {
            visibility: hidden;
            width: 100%;
            opacity: 0.5;
        }

        .signup {
            width: 100%;
            align-items: center;
            position: relative;

            float: left;
        }

        .info {
            width: 100%;
        }

        .Menubar {

            position: static;
        }

        .heading {
            margin: auto;
        }

        .address {
            width: 100%;

            margin-left: 0px;
        }

        .info #sent {
            font: 50px;
            text-align: center;
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

            <p style="font-family: Arial ; opacity: 100%; overflow: auto"><B>MAKE IT LOUDER <i class="fas fa-dog"
                        style="width: 50px;"></i></B></p>

        </div>

        <div class="Menubar">
            <a href="index.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="pet.php">Pets</a>
            <a class="active" href="contact.php">Contact</a>

            <a href="signIn.php" id="box">Sign In</a>

        </div>
        <img class="dog5" src="image2/dog5.jpg" height="600px" width="1000px"
            style="border-radius:25px;position: static; margin-top:0px;">
    </div>
    <div class="signup">
        <h1 style="font-size: 50px; text-align: center; mask-position: inherit;">Contact Us</h1>

        <br>
        <form class="info" method="post" action="">
            <input type="text" name="Fullname" id="Full Name" placeholder="Fullname"
                style="height: 40px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid; padding-left: 10px;"
                required="required">
            <br>
            <input type="text" name="Email" id="Email" placeholder="Email"
                style="height: 40px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid; margin-top: 5px; padding-left: 10px;"
                required="required">
            <br>

            <input type="number" name="Phone" id="Phone" placeholder="Contact Number"
                style="height: 40px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid;  margin-top: 5px; padding-left: 10px;"
                required="required">
            <br>
            <input type="text" name="Message" id="message" placeholder="Message"
                style="height: 100px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid; margin-top: 5px; padding-left: 10px;"
                required="required">
            <br>
            <button type="submit" name="Submit"
                style="height: 40px; width: 365px; border-radius: 25px; border-color:grey; border-style: solid;  margin-top: 10px; padding-left: 10px; color: white; background-color: black; border-style: none;">Submit</button><br>
            <p id="sent"></p>
        </form>
    </div>

    <div class="address">
        <img src="image2/location.jpg"
            style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-left: 200px; margin-top: 100px; position: relative;">
        <p><B>54 Wright Street Wylies Flat NSW</B></p>
        <img src="image2/mail.jpg"
            style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-left: 200px; margin-top: 0px; position: relative;">
        <p><B>makeitlouder@gmail.com</B></p>
        <img src="image2/tele.jpg"
            style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-left: 200px; margin-top: 0px; position: relative;">
        <p><B>943-9234</B></p>
        <img src="image2/facebook.png"
            style="height: 30px; width: 30px; border-radius: 50px; border-style: solid; border:2px; border-color: black; margin-right:200px; margin-top: -40px;float: right;">
        <p style="float: right; margin-right: 250px;"><B>Follow Us</B></p>


    </div>
    <div class="footer" style=" background-color:black; color: white; height: 50px; text-align: center; margin: auto ;">
        <p style="text-align: center;margin-left:  200px;">Copyright &copy; 2020 All Rights Reserved </p>
    </div>
    <?php
			 if(isset($_POST['Submit']))
             {
                //  $count=0;
                //  $sql="SELECT Email FROM messages";
                //  $res=mysqli_query($db,$sql);
                //  while($row=mysqli_fetch_assoc($res))
                //  {
                //      if($row['Email']==$_POST['Email'])
                //      {
                //          $count=$count+1;
                //      }
                //  }
             
                 
                     { mysqli_query($db,"INSERT INTO `messages` VALUES('','$_POST[Fullname]','$_POST[Email]','$_POST[Phone]','$_POST[Message]')");
         
              
        ?>
    <script type="text/javascript">
    document.getElementById('sent').innerHTML = `Message sent &#10003;`;
    </script>
    <?php
         }
             
             
                     ?>
    <script type="text/javascript">
    document.getElementById('sent').innerHTML = "Message sent &#10003;";
    </script>
    <?php
                 
                 }
             
                 
                 ?>

</body>

</html>