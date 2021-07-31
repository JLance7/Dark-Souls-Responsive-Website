<!DOCTYPE html>
<?php
    include 'connectionInfo.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Project One</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/styling.css?<?php echo time();?>"/>
    <script type="text/javascript" src="../js/registration.js"></script>
</head>
<body class="bod">
<!--Navbar-->
<nav class="navbar navbar-inverse nav-background">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../html/index.html"><img class="navbar-brand logo" src="../img/bonfire.jpg" alt="bonfire logo"/></img></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right pages">
                <li class="link-style selected"><a href="../html/index.html"><span class="nav-link">Home</span></a></li>
                <li class="link-style"><a href="../html/animation.html"><span class="nav-link">Animation</span></a></li>
                <li class="link-style"><a href="registration.php"><span class="nav-link">Registration</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!--Main Content of page-->
<?php
    include 'inputValidate.php';
?>
<div class="back3">
    <div class="container-fluid">
        <div class="back4">
            <div class="row">
                <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                            <table class="reg">
                                <tr>
                                    <th>
                                        <label>Username:<input type ="username" id="username" name="username" maxlength="50"
                                                               value="<?php echo $username;?>" /></label>
                                        <p class="msg" id="userMsg"><?php echo $usernameErr;?></p>
                                    </th>
                                    <th>
                                        <label>Password:<input type ="password" id="password" name="password" maxlength="50"
                                                               value="<?php echo $password;?>" /></label>
                                        <p class="msg" id="passMsg"><?php echo $passwordErr;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>
                                        <label>Repeat Password:<input type ="password" id="password2" name="password2" maxlength="50"
                                                                      value="<?php echo $password2;?>" /></label>
                                        <p class="msg" id="pass2Msg"><?php echo $password2Err;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <label>First Name:<input type ="text" id="first" name="first" maxlength="50"
                                                                      value="<?php echo $first;?>" /></label>
                                        <p class="msg" id="firstMsg"><?php echo $firstErr;?></p>
                                    </th>
                                    <th>
                                        <label>Last Name:<input type ="text" id="last" name="last" maxlength="50"
                                                                value="<?php echo $last;?>"/></label>
                                        <p class="msg" id="lastMsg"><?php echo $lastErr;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Address Line 1:<input type ="text" id="address" name="address1" maxlength="100"
                                                                     value="<?php echo $address1;?>"/></label>
                                        <p class="msg" id="addressMsg"><?php echo $address1Err;?></p>
                                    </th>
                                    <th>
                                        <label>Address Line 2:<input type ="text" name="address2" maxlength="100"
                                                                     value="<?php echo $address2;?>"/></label>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                            <table class="reg">
                                <tr>
                                    <th>
                                        <label>City:<input type ="text" id="city" name="city" maxlength="50"
                                                           value="<?php echo $city;?>"/></label>
                                        <p class="msg" id="cityMsg"><?php echo $cityErr;?></p>
                                    </th>
                                    <th>
                                        <label>State:</label>
                                        <p>
                                            <select id="state" name="state"
                                                    value="<?php echo $state;?>">
                                                <option value=""></option>
                                                <option> Alabama </option>
                                                <option> Alaska </option>
                                                <option> Arizona </option>
                                                <option> Arkansas </option>
                                                <option> California </option>
                                                <option> Colorado </option>
                                                <option> Connecticut </option>
                                                <option> Delaware </option>
                                                <option> Florida </option>
                                                <option> Georgia </option>
                                                <option> Hawaii </option>
                                                <option> Idaho </option>
                                                <option> Illinois </option>
                                                <option> Indiana </option>
                                                <option> Iowa </option>
                                                <option> Kansas </option>
                                                <option> Kentucky </option>
                                                <option> Louisiana </option>
                                                <option> Maine </option>
                                                <option> Maryland </option>
                                                <option> Massachusetts </option>
                                                <option> Michigan </option>
                                                <option> Minnesota </option>
                                                <option> Mississippi </option>
                                                <option> Missouri </option>
                                                <option> Montana </option>
                                                <option> Nebraska </option>
                                                <option> Nevada </option>
                                                <option> New Hampshire </option>
                                                <option> New Jersey </option>
                                                <option> New Mexico </option>
                                                <option> New York </option>
                                                <option> North Carolina </option>
                                                <option> North Dakota </option>
                                                <option> Ohio </option>
                                                <option> Oklahoma </option>
                                                <option> Oregon </option>
                                                <option> Pennsylvania </option>
                                                <option> Rhode Island </option>
                                                <option> South Carolina </option>
                                                <option> South Dakota </option>
                                                <option> Tennessee </option>
                                                <option> Texas </option>
                                                <option> Utah </option>
                                                <option> Vermont </option>
                                                <option> Virginia </option>
                                                <option> Washington </option>
                                                <option> West Virginia </option>
                                                <option> Wisconsin </option>
                                                <option> Wyoming </option>
                                            </select>
                                        </p>
                                        <p class="msg" id="stateMsg"><?php echo $stateErr;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Zip Code:<input type ="text" id="zip" name="zip" maxlength="10" placeholder="xxxxx"/
                                            value="<?php echo $zip;?>"></label>
                                        <p class="msg" id="zipMsg"><?php echo $zipErr;?></p>
                                    </th>
                                    <th>
                                        <label>Phone Number:<input type ="text" id="phone" name="phone" maxlength="12" placeholder="xxx-xxx-xxxx"/
                                            value="<?php echo $phone;?>"></label>
                                        <p class="msg" id="phoneMsg"><?php echo $phoneErr;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Email:<input type ="email" id="email" name="email" maxlength="100" placeholder="coolperson@gmail.com"/
                                            value="<?php echo $email;?>"></label>
                                        <p class="msg" id="emailMsg"><?php echo $emailErr;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p style="text-align: center;"><strong><u>Gender</u></strong></p>
                                        <label class="radiolabel">Male<input class="button" type = "radio" name = "gender" <?php if($gender == "male"){echo "checked";}?> value = "male" checked = "checked" /></label>
                                        <label class="radiolabel">Female<input type = "radio" name = "gender" <?php if($gender == "female"){echo "checked";}?> value="female"/></label>
                                        <label class="radiolabel">Other<input type = "radio" name = "gender" <?php if($gender == "other"){echo "checked";}?> value = "other"/></label>
                                        <p class="msg" id="radioMsg"><?php echo $genderErr; ?></p>
                                    </th>
                                    <th>
                                        <p style="text-align: center; margin-top: -50px;"><strong><u>Marital Status</u></strong></p>
                                        <label class="radiolabel">Single<input type = "radio" name = "marital" <?php if($marital == "single"){echo "checked";}?> value = "single" checked = "checked" /></label>
                                        <label class="radiolabel">Married<input type = "radio" name = "marital" <?php if($marital == "married"){echo "checked";}?> value = "married"/></label>
                                        <p class="msg" id="radio2Msg"><?php echo $maritalErr;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Date of Birth:<input type="date" id="cal" name="cal" value="<?php echo $cal;?>"  ></label>
                                        <p class="msg" id="dateMsg"><?php echo $calErr;?></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <input type = "submit" value = "Submit Form" style="background-color: #05f5c9"/>
                                        <input type = "reset" value = "Reset Form" style="background-color: #ff3856"/>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Footer-->
<div class="footer2">
    <div style="padding-top: 15px">
        <ul style="margin-top: -12px; padding-bottom: 10px; text-align: center;">
            <li><a href="https://darksouls.wiki.fextralife.com/Dark+Souls+Wiki" target="_blank">Dark Souls</a></li>
            <li><a href="https://darksouls2.wiki.fextralife.com/Dark+Souls+2+Wiki" target="_blank">Dark Souls 2</a></li>
            <li><a href="https://darksouls3.wiki.fextralife.com/Dark+Souls+3+Wiki" target="_blank">Dark Souls 3</a></li>
        </ul>
    </div>
</div>
<?php
    include 'insertValidData.php';
?>
</body>
</html>
