<!DOCTYPE html>
<?php
include 'connectionInfo.php';
?>
<html lang="en_US">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css"></script>
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <!-- <script src="registration.js"></script>
      <script src="validate.js"></script>
    -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datePicker" ).datepicker();
        } );
    </script>

</head>

<header id="header" style="height:100px;">

    <img src="http://78.media.tumblr.com/c905e5fc81fd0978fbe9e59570207e4f/tumblr_msxbp0QXKJ1sh7yvvo1_400.gif"
         alt="RegistrationIMG" style="width:100px;height:100px; float: left;">
    <img src="http://78.media.tumblr.com/c905e5fc81fd0978fbe9e59570207e4f/tumblr_msxbp0QXKJ1sh7yvvo1_400.gif"
         alt="HeaderIMG" style="width:100px;height:100px; float: right">

    <h1 id="title">Meme Yearly</h1>

</header>

<body>
<?php
include 'selectUserData.php';
?>


<div id="document" class="container-fluid">

    <div id="leftBar" class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
        <a class="button" href="home.html">HOME</a><br>
        <a class="button" href="registration.php">REGISTRATION</a><br>
        <a class="button" href="animations.html">ANIMATIONS</a><br>
        <a class="button" href="Confirmation.php"></a>

    </div>

    <div id="formDiv" class="col-xs-12 col-sm-8 col-md-6 col-lg-6" >

        <form id="form"  method ="g" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div id="formleft" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h2 id="confirmation">Congrats on Registering!</h2>
            <p>Username: <?php echo $username; ?> </p>
            <p>Password: <?php echo $password;  ?> </p>
            <p>First Name:  <?php echo $firstName; ?> </p>
            <p>Last Name:  <?php echo $lastName; ?> </p>
            <p>Address Line 1:  <?php echo $addresslineone; ?> </p>
            <p>Address Line 2:  <?php echo $addresslinetwo; ?> </p>
            <p>City:  <?php echo $city; ?> </p>
            <p>State:  <?php echo $state; ?> </p>
            <p>Zip Code:  <?php echo $zipcode; ?> </p>
            <p>Phone Number: <?php echo $phoneNumber;?></p>
            <p>Email: <?php echo $email; ?> </p>
            <p>Gender:  <?php echo $gender; ?> </p>
            <p>Marital Status:  <?php echo $maritalStatus; ?> </p>
            <p>Date of Birth:  <?php echo $birthday; ?> </p>



        </div>

        <div id="formright" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

            <br><br>

        </div>


        </form>
    </div>
</div>
</body>

<footer id="footer">
    <div id="footerdiv" class="row">
        <div id="memegen" class="column">
            <a href="https://memegenerator.net/"
               target="_blank">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41RMsqMPEKL.png" alt="Meme Generator"
                     style="width:185px;height:75px;">
            </a>
        </div>

        <div id="giphy" class="column">
            <a href="https://giphy.com/"
               target="_blank">
                <p> Giphy</p>
            </a>
        </div>

        <div id="cutecats" class="column">
            <a href="http://www.cutecatgifs.com/"
               target="_blank">
                <p>Cute Cats</p>

            </a>
        </div>
    </div>
</footer>

</html>
