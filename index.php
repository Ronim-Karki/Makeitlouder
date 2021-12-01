<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
    .top {
        background-image: url("image2/background image.jpg");
        background-repeat: no-repeat;
    }

    .header {
        margin: 5px, 5px, 5px, 5px;
    }

    .Menubar {
        float: right;
        margin-top: -35px;
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

    .middle {
        margin: 55px;
        margin-top: 100px;
        position: relative;
    }

    .middle p {
        font-weight: bold;
        font-family: arial;
        margin-top: -25px;
        margin-left: 5px;
    }

    .button {
        margin-top: 25px;
        padding: 5px;
    }

    #btn1 {
        background: black;
        color: white;
        border-radius: 25px;
        padding: 10px;
        text-decoration: none;
        font-weight: bold;
    }

    #btn2 {
        background: black;
        color: white;
        border-radius: 25px;
        padding: 10px;
        text-decoration: none;
        font-weight: bold;
        margin-left: 10px;
    }

    .container1 {
        border: 1px;
        border-style: solid;
        border-color: lightgrey;
        padding-bottom: 50px;
        width: 100%;

    }

    .container1 .column {
        padding-right: 200px;
        align-items: center;
        margin: 0px 0px 0px -100px;
    }

    .container1 h2 {
        text-align: center;
    }

    .container1 a {
        text-decoration: none;
        font-weight: bold;
        font-size: 20px;
        color: black;
        text-align: justify;
        padding: 95px;
        position: relative;
        margin-left: 0px;
    }

    .container1 a img {
        image-resolution: 50px;
    }

    .container2 {
        border: 1px;
        border-style: solid;
        border-color: lightgrey;
        background-color: #F0F0F0;
        padding: auto;
        float: left;

        text-align: center;
        align-items: center;
    }

    .container2 .column {
        position: relative;
        margin: 0 auto;
        margin-right: 100px;
        align-items: center;
        text-align: center;
        float: left;
    }

    .content {
        float: left;
        margin: 0 auto;
    }

    /* Center website */
    .main {
        max-width: 100%;
        margin: auto;
    }

    h1 {
        font-size: 50px;
        word-break: break-all;
    }

    .row {
        margin: 0 auto;
        text-align: center;
        margin-left: 600px;
    }

    .container2 .row {
        margin: 0 auto;
        text-align: center;
        margin-left: 400px;
    }

    /* Add padding BETWEEN each column */

    /* Create four equal columns that floats next to each other */
    .column {
        float: left;
        width: 20%;
        padding: 15px;
        margin: 0 auto;
    }



    /* Clear floats after rows */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Content */
    .content {
        background-color: #ffffff;
        padding: 0px;
        border-radius: 15px;
        align-items: center;
        margin: 0px;
        float: left;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 1400px) {
        .container2 {
            align-items: center;
            width: 100%;

            padding: auto;
            float: left;
            text-align: center;
        }

        .container1 {
            float: left;
            margin: 0 auto;

            width: 100%;
            padding: auto;
            text-align: center;
        }

        .column {
            float: left;
            width: 20%;
            margin: 0;
            padding: auto;


        }

        .content {
            margin: 0%;
            margin-left: -300px;
            align-items: center;
            width: 100%;
            position: relative;
            clear: auto;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */

    .address p {
        margin-top: -28px;
        margin-left: 250px;
    }
    </style>
</head>
<title>Home</title>

<body style="margin: 35px; font-family: Arial">
    <div class="top">
        <div class="header">
            <p style="font-family: Arial"><b>MAKE IT LOUDER <i class="fas fa-dog" style="width: 50px;"></b></i></p>
        </div>
        <div class="Menubar">
            <a class="active" href="index.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="pet.php">Pets</a>
            <a href="contact.php">Contact</a>

            <a href="signIn.php" id="box">Sign In</a>
        </div>

        <div class="middle">
            <h1 style="font-family: arial; font-size: 50px">
                <b>Let's Change <br />
                    Their World!</b>
            </h1>
            <p>
                You can't change the world.<br />
                But you can chane<br />
                their world.
            </p>
            <div class="button">
                <a id="btn1" href="pet.php">ADOPT NOW!</a>
                <a id="btn2" href="Donate.php">DONATE US!</a>
            </div>
        </div>
    </div>
    <div class="container1">
        <h2>YOU CAN HELP</h2>
        <div class="row">
            <div class="column">
                <div class="content">
                    <a href="#donation">
                        <p style="text-align: justify; margin-left: 0px; margin-top:0.5px">
                            Give a Donation
                        </p>
                    </a><img src="image2/donation.png" height="150" width="150" alt="donation" style="
                margin-left: -100px;
                border-radius: 100px;
                border-color: grey;
                border-style: solid;
                border-width: 1px;
              " />
                    <br />
                    <p style="margin-left: -0px; position: relative; width: 100%">
                        Little help could extend lives.
                    </p>
                </div>
            </div>

            <div class="column">
                <div class="content">
                    <a href="#parent">
                        <p style="
                  text-align: center;
                  margin-left: 0px;
                  margin-top: 0px;
                  width: 100%;
                ">
                            Become a parent
                        </p>
                    </a><img src="image2/dog.png" height="150" width="150" alt="parent" style="
                margin-left: -100px;
                border-radius: 100px;
                border-color: grey;
                border-style: solid;
                border-width: 1px;
              " />
                    <br />
                    <p style="margin-left: 0px; text-align: center">
                        Let them feel the love of <br />the family.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <a href="#Volunteer">
                        <p style="
                  margin-left: 30px;

                  text-align: center;
                  margin-top: 0px;
                  
                  position: relative;
                ">
                            Volunteer
                        </p>
                    </a><img src="image2/volunteering.png" height="150" width="150" alt="Volunteer" style="
                margin-left: -50px;
                margin-right: auto;
                position: relative;
                border-radius: 100px;
                border-color: grey;
                border-style: solid;
                border-width: 1px;
              " />
                    <br />
                    <p style="
                margin-left: 0px;
                
                text-align: right;
                position: relative;
              ">
                        Rescue homeless dogs.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <h2 style="text-align: center">"RESCUED ANIMAL"</h2>
        <div class="row">
            <div class="column">
                <div class="content">
                    <img src="image2/dog1.jpg" alt="Mountains" style="
                width: 100%;
                border-top-right-radius: 15px;
                border-top-left-radius: 15px;
              " />
                    <h3>Slurpessy</h3>
                    <p>
                        Thanks to Oldies and Goodies, I was rescued from a country pound
                        and I am now safely living with my temporary foster family with 2
                        other dogs. I have a lovely nature and I am always up for some
                        belly scratches.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <img src="image2/dog3.jpg" alt="Lights" style="
                width: 100%;
                border-top-right-radius: 15px;
                border-top-left-radius: 15px;
              " />
                    <h3>Cassey</h3>
                    <p>
                        Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus
                        necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor
                        sit amet, tempor prodesset eos no.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="content">
                    <img src="image2/dog2.jpg" alt="Lights" style="
                width: 100%;
                border-top-right-radius: 15px;
                border-top-left-radius: 15px;
              " />
                    <h3>Tyler</h3>
                    <p>
                        Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus
                        necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor
                        sit amet, tempor prodesset eos no.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="address">
        <img src="image2/location.jpg" style="
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
        <img src="image2/mail.jpg" style="
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
        <img src="image2/tele.jpg" style="
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
        <img src="image2/facebook.png" style="
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