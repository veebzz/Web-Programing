<!DOCTYPE html>

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
    <script src="registration.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $('#phoneId').keyup(function()
        {
            this.value = this.value.replace(/(\d{3})\-?/g,'$1-');
        });
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
include 'inputValidate.php';
include 'insertValidData.php';

?>
<div id="document" class="container-fluid">

    <div id="leftBar" class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
        <a class="button" href="home.html">HOME</a><br>
        <a class="button" href="registration.php">REGISTRATION</a><br>
        <a class="button" href="animations.html">ANIMATIONS</a><br>


    </div>


    <div id="formDiv" class="col-xs-12 col-sm-8 col-md-6 col-lg-6" >

        <form id="form"  method ="post" onsubmit="formValidation()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div id="formdivright" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h2 id="registration">Registration</h2>
                <p><span class="error">* required field</span></p>
                <!-- Username-->
                <div class="form-group">
                    <label for="usernameId">Username:</label><br>
                    <input type="text" name="username" id="usernameId"
                     value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" required>
                    <span class="error">*<br> <?php echo $usernameErr;?></span>

                </div>
                <!-- Password-->
                <div class="form-group">
                    <label for="passwordId">Password:</label><br>
                    <input type="password" name="passWord" id="passwordId"
                           value="<?php echo isset($_POST['passWord']) ? $_POST['passWord'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $passwordErr;?></span>

                </div>
                <!-- Retype password-->
                <div class="form-group">
                    <label for="rpasswordId">Retype Password:</label><br>
                    <input type="password" name="retypePassword" id="rpasswordId"
                           value="<?php echo isset($_POST['retypePassword']) ? $_POST['retypePassword'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $retypePasswordErr;?></span>
                </div>
                <!-- First name-->
                <div class="form-group">
                    <label for="fnameId">First Name:</label><br>
                    <input type="text" name="firstName" id="fnameId"
                           value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>" required>
                    <span class="error"> *<br> <?php echo $firstNameErr;?></span>
                </div>
                <!-- Last name-->
                <div class="form-group">
                    <label for="lnameId">Last Name:</label><br>
                    <input type="text" name="lastName" id="lnameId"
                           value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $lastNameErr;?></span>
                </div>
                <!--Address 1-->
                <div class="form-group">
                    <label for="addressoneId">Address 1:</label><br>
                    <input type="text" name="addresslineone" id="addressoneId"
                           value="<?php echo isset($_POST['addresslineone']) ? $_POST['addresslineone'] : '' ?>" required>
                    <span class="error"> *<br> <?php echo $addresslineoneErr;?></span>
                </div>
                <!--Address 2-->
                <div class="form-group">
                    <label for="addresstwoId">Address2:</label><br>
                    <input type="text" name="addresslinetwo" id="addresstwoId"
                           value="<?php echo isset($_POST['addresslinetwo']) ? $_POST['addresslinetwo'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $addresslinetwoErr;?></span>
                </div>
                <!--City-->
                <div class="form-group">
                    <label for="cityId">City:</label><br>
                    <input type="text" name="city" id="cityId"
                           value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $cityErr;?></span>
                </div>

            </div>

            <div id="formright" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                <br><br>

                <!--State-->
                <div class="fieldset-auto-width">

                    <fieldset>
                        <label for="state">State</label><br>
                        <select id="state" name="state" >
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="GO">Gondor</option>
                            <option value="HI">Hawaii</option>
                            <option value="HR">Hyrule</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MM">Misty Mountains</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="MR">Mordor</option>
                            <option value="NR">Narnia</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="RV">Rivendell</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="SR">The Shire</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>

                        </select>
                    </fieldset>
                </div>
                <!--Zip Code-->
                <div class="form-group">
                    <label for="zipId">Zip Code:</label><br>
                    <input type="text" name="zipcode" id="zipId"
                           value="<?php echo isset($_POST['zipcode']) ? $_POST['zipcode'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $zipcodeErr;?></span>

                </div>
                <!-- Phone Number-->
                <div class="form-group">
                    <label for="phoneId">Phone Number:</label><br>
                    <input class="phone" type="text" name="phoneNumber" id="phoneId" onblur="phoneValidation()" placeholder="xxx-xxx-xxxx"
                        value="<?php echo isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $phoneErr;?></span>

                </div>
                <!--Email-->
                <div class="form-group">
                    <label for="emailId">Email:</label><br>
                    <input type="text" name="email" id="emailId"
                           value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                    <span class="error"> * <br><?php echo $emailErr;?></span>
                </div>
                <!--Gender-->
                <div class="form-group">
                    <label>Gender:</label><br>
                    <label>Female</label>
                    <input type="radio" name="gender" checked <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                    <label>Male</label>
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                    <label>Other</label>
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">

                    <span class="error"> * <br><?php echo $genderErr;?></span>
                </div>
                <!--Marital Status-->
                <div class="form-group">
                    <label>Marital Status:</label><br>
                    <!--Single-->
                    <label> Single</label>
                    <input type="radio" name="maritalStatus" checked
                        <?php if (isset($maritalStatus) && $maritalStatus=="single") echo "checked";?> value="single">
                    <!--Married-->
                    <label> Married</label>
                    <input type="radio" name="maritalStatus"
                        <?php if (isset($maritalStatus) && $maritalStatus=="married") echo "checked";?> value="married">
                    <span class="error"> * <br><?php echo $maritalStatusErr;?></span>
                </div>
                <!-- Date of Birth-->
                <div class="form-group">
                    <label>Date Of Birth:</label><br>

                    <input type="date" id="datePicker" name= "birthday" placeholder="MM/DD/YYYY"
                           value="<?php echo isset($_POST['birthday']) ? $_POST['birthday'] : '' ?>" required/>
                    <span class="error"> * <br><?php echo $birthdayErr;?></span>
                </div>

                <!-- Submit/Reset buttons -->
                <button id="submit-button" class="button" type="submit">Submit</button>

                <button id="reset-button" class="button reset" type="reset" onclick="reset()">Reset</button>
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
