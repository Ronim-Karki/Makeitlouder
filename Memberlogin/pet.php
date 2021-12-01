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
    <link rel="stylesheet" href="../css/pet.css">
    <title>Pets</title>

</head>

<body style="margin: 35px; font-family: Arial">
    <div class="top">
        <div class="header">
            <p style="font-family: Arial"><b>MAKE IT LOUDER <i class="fas fa-dog" style="width: 50px;"></i></b></p>
        </div>
        <div class="Menubar">
            <a href="first%20page.php">Home</a>
            <a class="active" href="pet.php">Pets</a>
            <a href="aboutus.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="Profile.php">User Profile</a>

            <a class="logout" href="logout.php" id="box">Log out</a>
        </div>
        <script type="text/javascript">
        document.getElementsByid("box").addEventListener("onclick", model);

        function model() {
            alert("Are you sure?????")
        }
        </script>
        <div class="heading">
            <h2><b>PET'S NEEDED FAMILY</b></h2>
            <br>
            <a><b>Pet Type</b><span class="black-box"><b>Dog</b></span></a>
        </div><br>
        <hr>
        <div class='pets-card py-5'>
            <div class="row my-3">
                <?php

$query = "SELECT * From animal";
$query_run = mysqli_query($db, $query);
$check_data = mysqli_num_rows($query_run) > 0;

if($check_data){

    while($row = mysqli_fetch_array($query_run))
    {?>
                <div class="col-xs">


                    <div class="card" style="width: 18rem;  ">
                        <img class="card-img-top" height="300px;" src="../image/<?php echo $row['Pic']?>"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo 'ID='.$row['ID']?>.<?php echo $row['Name'] ?></h5>
                            <p class="card-text"><?php echo $row['Message'] ?></p>
                            <a href="#" id="done" class="btn btn-success">Adopt Me</a>
                        </div>
                    </div>
                </div>


                <?php
        
    }

}else{
    echo "No Record Found.";
}



?>

            </div>
        </div>
        <script>
        document.getElementById('done').addEventListener('click', function() {
            document.getElementById('done').innerHTML = 'Reserved';
            document.getElementById('done').style.backgroundColor = 'Red';
        });
        </script>
        <!-- <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../image/dog2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cassey</h5>
                <p class="card-text">Thanks to Oldies and Goodies, I was rescued from a country pound
                    and I am now safely living with my temporary foster family with 2
                    other dogs. I have a lovely nature and I am always up for some
                    belly scratches.</p>
                <a href="#" class="btn btn-success">Adopt Me</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../image/dog3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Tyler</h5>
                <p class="card-text">Thanks to Oldies and Goodies, I was rescued from a country pound
                    and I am now safely living with my temporary foster family with 2
                    other dogs. I have a lovely nature and I am always up for some
                    belly scratches.</p>
                <a href="#" class="btn btn-success">Adopt Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" height="276px" src="../image/dog1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Kathey</h5>
                <p class="card-text">Thanks to Oldies and Goodies, I was rescued from a country pound
                    and I am now safely living with my temporary foster family with 2
                    other dogs. I have a lovely nature and I am always up for some
                    belly scratches.</p>
                <a href="#" class="btn btn-success">Adopt Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../image/dog1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Slurpessey</h5>
                <p class="card-text">Thanks to Oldies and Goodies, I was rescued from a country pound
                    and I am now safely living with my temporary foster family with 2
                    other dogs. I have a lovely nature and I am always up for some
                    belly scratches.</p>
                <a href="#" class="btn btn-success">Adopt Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../image/dog2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cassey</h5>
                <p class="card-text">Thanks to Oldies and Goodies, I was rescued from a country pound
                    and I am now safely living with my temporary foster family with 2
                    other dogs. I have a lovely nature and I am always up for some
                    belly scratches.</p>
                <a href="#" class="btn btn-success">Adopt Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../image/dog3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Tyler</h5>
                <p class="card-text">Thanks to Oldies and Goodies, I was rescued from a country pound
                    and I am now safely living with my temporary foster family with 2
                    other dogs. I have a lovely nature and I am always up for some
                    belly scratches.</p>
                <a href="#" class="btn btn-success">Adopt Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" height="276px" src="../image/dog1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Kathey</h5>
                <p class="card-text">Thanks to Oldies and Goodies, I was rescued from a country pound
                    and I am now safely living with my temporary foster family with 2
                    other dogs. I have a lovely nature and I am always up for some
                    belly scratches.</p>
                <a href="#" class="btn btn-success">Adopt Me</a>
            </div>
        </div>

    </div> -->

        <div class="address">
            <img src="../image2/location.jpg" style="
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
            <img src="../image2/mail.jpg" style="
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
            <img src="../image2/tele.jpg" style="
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
            <img src="../image2/facebook.png" style="
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
        <div class="login hidden ">
            <h1>Adopt here!!!</h1>
            <button class="close-modal">&times;</button>
            <div class="signup" style="float: right; margin:auto; margin-top:0;  margin-right: 0px; position:relative;">
                <h1 class="blinking" style="font-size: 50px; text-align: center;">You are Great</h1>
                <h4 style="margin-left: 0px; text-align: center;">BE ONE OF US!</h4>
                <br>
                <form class="info" action="" method="post">
                    <input type="text" id="name" name="Name" placeholder="Animal Name"
                        style="height: 40px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid; padding-left: 10px;"
                        required="required">
                    <br>
                    <input type="number" id="ID" name="ID" placeholder="AnimalID"
                        style="height: 40px; width: 350px; border-radius: 25px; border-color:grey; border-style: solid; padding-left: 10px;"
                        required="required">
                    <br>
                    <br>
                    <button type="submit" id='Submit' name="Submit"
                        style="height: 40px; width: 365px; border-radius: 25px; border-color:grey; border-style: solid;  margin-top: 10px; padding-left: 10px; color: white; background-color: black; border-style: none;">Reserve</button><br>

                </form>
            </div>
        </div>
        <div class="overlay hidden"></div>

        <script src="../script/pet.js"></script>
        <?php
			 if(isset($_POST['Submit']))
             {
                
                //  $sql="SELECT Email FROM messages";
                //  $res=mysqli_query($db,$sql);
                //  while($row=mysqli_fetch_assoc($res))
                //  {
                //      if($row['Email']==$_POST['Email'])
                //      {
                //          $count=$count+1;
                //      }
                //  }
                //$ID= mysqli_query($db,"Select ID from animal where Name = '$_POST[Name]'");
                // $Type= mysqli_query($db,"Select Type from animal where Name = '$_POST[Name] '");
                // $Status= mysqli_query($db,"Select Status from animal where Name = '$_POST[Name]'");
                
                     { mysqli_query($db,"INSERT INTO `reservedlist`  VALUES('$_SESSION[login_user]','$_POST[Name]','$_POST[ID]','',CURRENT_DATE(),'Reserved') ");
         
              
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