<?php
    $username = $password = $password2 = $first = $last = $address1 = $address2 =
        $city = $state = $zip = $phone = $email = $gender = $marital = $cal = "";

    $usernameErr = $passwordErr = $password2Err = $firstErr = $lastErr = $address1Err = $address2Err =
        $cityErr = $stateErr = $zipErr = $phoneErr = $emailErr = $genderErr = $maritalErr = $calErr = "";

    $isValid = false;
    $falseCounter = 0;

    //first time page loads it is in GET so this will be false
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = clean_input($_POST["username"]);
        if (empty($username)){
            $usernameErr = "Username is required";
            $falseCounter++;
        } else{
            if (strlen($username) < 6){
                $usernameErr = "Six letters needed";
                $falseCounter++;
            }
        }

        $password = clean_input($_POST["password"]);
        if (empty($password)) {
            $passwordErr = "Password is required";
            $falseCounter++;
        } else if (strlen($password) < 8) {
            $passwordErr = "Password must be 8 characters long";
            $falseCounter++;

        } else if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/", $password)){
            $passwordErr = "You need at least 1 capital, 1 lowercase, 1 digit, and 1 special character";
            $falseCounter++;
        }

        $password2 = clean_input($_POST["password2"]);
        if (empty($password2)) {
            $password2Err = "Password is required";
            $falseCounter++;
        } else if (strlen($password) < 8) {
            $password2Err = "Password must be 8 characters long";
            $falseCounter++;

        } else if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/", $password2)){
            $password2Err = "You need at least 1 capital, 1 lowercase, 1 digit, and 1 special character";
            $falseCounter++;
        } else if ($password != $password2){
            $password2Err = "Both passwords must be the same";
            $falseCounter++;
        }

        $first = clean_input($_POST["first"]);
        if (empty($first)) {
            $firstErr = "Name is required";
            $falseCounter++;
        }

        $last = clean_input($_POST["last"]);
        if (empty($last)) {
            $lastErr = "Name is required";
            $falseCounter++;
        }

        $address1 = clean_input($_POST["address1"]);
        if (empty($address1)){
            $address1Err = "Address is required";
            $falseCounter++;
        }

        $address2 = clean_input($_POST["address2"]);

        $city = clean_input($_POST["city"]);
        if (empty($city)){
            $cityErr = "City is required";
            $falseCounter++;
        }

        $state = clean_input($_POST["state"]);
        if (empty($state)){
            $stateErr = "State is required";
            $falseCounter++;
        }

        $zip = clean_input($_POST["zip"]);
        if (empty($zip)){
            $zipErr = "Zip is required";
            $falseCounter++;
        } else if (strlen($zip) < 5){
            $zipErr = "Zip must be at least 5 digits long";
            $falseCounter++;
        }
        else if (!preg_match("/^(?!0{3})[0-9]{3,5}$/", $zip)){
            $zipErr = "Zip must be a number";
            $falseCounter++;
        }

        $phone = clean_input($_POST["phone"]);
        if (empty($phone)){
            $phoneErr = "Phone is required";
            $falseCounter++;
        } else if (!preg_match("/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/", $phone)){
            $phoneErr = "Phone must be a number";
            $falseCounter++;
        }

        $email = clean_input($_POST["email"]);
        if (empty($email)){
            $emailErr = "Email is required";
            $falseCounter++;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Must be in form of x@x.x";
            $falseCounter++;
        }

        if (isset($_POST["gender"])) {
            $gender = clean_input($_POST["gender"]);
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
                $falseCounter++;
            }
        } else {
            $genderErr = "Gender is required";
            $falseCounter++;
        }

        if (isset($_POST["marital"])) {
            $marital = clean_input($_POST["marital"]);
            if (empty($_POST["marital"])) {
                $maritalErr = "Marital is required";
                $falseCounter++;
            }
        } else {
            $maritalErr = "Marital is required";
            $falseCounter++;
        }


        $cal = clean_input($_POST["cal"]);
        if (empty($cal)){
            $calErr = "Calendar is required";
            $falseCounter++;
        }

        if ($falseCounter == 0){
            $isValid = true;
        }
    }
    function clean_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>