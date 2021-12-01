<?php
    include '../connection.php';
    session_start()
?>
<html lang="en">

<head>

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
        <link rel="stylesheet" href="../css/Donate.css">
        <title>Donate</title>
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
        <div>
            <h1 style="text-align: center;">Donate Now!</h1>
        </div>
        <div class="donation">
            <h2>For Cash Donations</h2>
            <div class=" Main-donation">
                <p class="online">ONLINE</p>
                <p class="para"><span style="color: blue; font-size:25px">Paypal</span> recipent: Makeitlouder@gmail.com
                </p>
                <p class="online">DIRECT BANK TRANSACTION</p>
                <ul class='list'>
                    <li><b>National Australian Bank</b></li>
                    <li><b>Make it Louder Au Inc</b></li>
                    <li>645 6585 6585 1254</li>
                    <li>649 4548 4564 4545</li>
                </ul>
                <div class="oldDog">
                    <img src="../Image/olddog.jpg">
                </div>
            </div>
        </div>
        <div class="address">
            <img src="../location.jpg" style="
          height: 30px;
          width: 30px;
          border-radius: 50px;
          border-style: solid;
          border: 2px;
          border-color: black;
          margin-left: 200px;
          margin-top: 100px;
          position: relative;
        " />
            <p><b>54 Wright Street Wylies Flat NSW</b></p>
            <img src="../mail.jpg" style="
          height: 30px;
          width: 30px;
          border-radius: 50px;
          border-style: solid;
          border: 2px;
          border-color: black;
          margin-left: 200px;
          margin-top: 0px;
          position: relative;
        " />
            <p><b>makeitlouder@gmail.com</b></p>
            <img src="../tele.jpg" style="
          height: 30px;
          width: 30px;
          border-radius: 50px;
          border-style: solid;
          border: 2px;
          border-color: black;
          margin-left: 200px;
          margin-top: 0px;
          position: relative;
        " />
            <p><b>943-9234</b></p>
            <img src="../facebook.png" style="
          height: 30px;
          width: 30px;
          border-radius: 50px;
          border-style: solid;
          border: 2px;
          border-color: black;
          margin-right: 200px;
          margin-top: -40px;
          float: right;
        " />
            <p style="float: right; margin-right: 250px"><b>Follow Us</b></p>
        </div>
        <div class="footer" style="
        background-color: black;
        color: white;
        height: 50px;
        text-align: center;
      ">
            <p style="text-align: center; margin-left: 200px">
                Copyright &copy; 2020 All Rights Reserved
            </p>
        </div>
</body>

</html>