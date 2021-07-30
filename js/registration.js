window.onload = function(){
    //checks all forms before when submit is hit
    document.getElementById("myForm").onsubmit = checkAll;
    //checks when the form goes out of focus to provide instant feedback
    document.getElementById("username").onblur = checkUsername;
    document.getElementById("password").onblur = checkPassword;
    document.getElementById("password2").onblur = checkPassword2;
    document.getElementById("first").onblur = checkFirstName;
    document.getElementById("last").onblur = checkLastName;
    document.getElementById("address").onblur = checkAddress;
    document.getElementById("city").onblur = checkCity;
    document.getElementById("states").onblur = checkState;
    document.getElementById("zip").onblur = checkZip;
    document.getElementById("phone").onblur = checkPhone;
    document.getElementById("email").onblur = checkEmail;
    document.getElementById("cal").onblur = checkCal;
}

function checkAll(){
    //if submit button is pressed allow all invalid/valid text to show then return false/true
    checkUsername();
    checkPassword();
    checkPassword2();
    checkFirstName();
    checkLastName();
    checkAddress();
    checkCity();
    checkState();
    checkZip();
    checkPhone();
    checkEmail();
    checkCal();

    return checkUsername() && checkPassword() && checkPassword2() && checkFirstName() && checkLastName() && checkAddress()
        && checkCity() && checkState() && checkZip() && checkPhone() && checkEmail() && checkCal();
}

function checkUsername(){
    let user = document.getElementById("username");
    let msg = document.getElementById("userMsg");
    msg.style.color = 'red';
    if (user.value ==""){
        if (msg){
            msg.innerHTML = "Please Enter a username";
            user.style.borderColor = "red";
            return false;
        }
    }
    else if (user.value.length < 6){
        if (msg){
            msg.innerHTML = "Please enter at least 6 characters";
            user.style.borderColor = "red";
            return false;
        }
    }
    else {
        if (msg){
            msg.style.color = 'green';
            msg.innerHTML = "Valid entry";
            user.style.borderColor = "green";
            return true;
        }
    }
}

function checkPassword(){
    let pass = document.getElementById("password");
    let msg = document.getElementById("passMsg");
    let pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/;
    msg.style.color = 'red';
    if (pass.value ==""){
        if (msg){
            msg.innerHTML = "Please Enter a password";
            pass.style.borderColor = "red";
            return false;
        }
    }
    else if (pass.value.length < 8){
        if (msg){
            msg.innerHTML = "Please enter at least 8 characters";
            pass.style.borderColor = "red";
            return false;
        }
    }
    else if (!(pass.value.match(pattern))){
        msg.innerHTML = "You need at least 1 capital, 1 lowercase, 1 digit, and 1 special character";
        pass.style.borderColor = "red";
        return false;
    }
    else {
        if (msg){
            msg.style.color = 'green';
            msg.innerHTML = "Valid entry";
            pass.style.borderColor = "green";
            return true;
        }
    }
}

function checkPassword2(){
    let pass = document.getElementById("password2");
    let msg = document.getElementById("pass2Msg");
    let pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/;
    let oldPass = document.getElementById("password");
    msg.style.color = 'red';
    if (pass.value ==""){
        if (msg){
            msg.innerHTML = "Please Enter a password";
            pass.style.borderColor = "red";
            return false;
        }
    }
    else if (pass.value.length < 8){
        if (msg){
            msg.innerHTML = "Please enter at least 8 characters";
            pass.style.borderColor = "red";
            return false;
        }
    }
    else if (!(pass.value.match(pattern))){
        msg.innerHTML = "You need at least 1 capital, 1 lowercase, 1 digit, and 1 special character";
        pass.style.borderColor = "red";
        return false;
    }
    else if (pass.value != oldPass.value){
        msg.innerHTML = "Both passwords must be the same";
        pass.style.borderColor = "red";
        return false;
    }
    else {
        if (msg){
            msg.style.color = 'green';
            msg.innerHTML = "Valid entry";
            pass.style.borderColor = "green";
            return true;
        }
    }
}

function checkFirstName(){
    let first = document.getElementById("first");
    let msg = document.getElementById("firstMsg");
    msg.style.color = 'red';
    if (first.value == ""){
        msg.innerHTML = "Please enter a first name";
        first.style.borderColor = "red";
        return false;
    } else{
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        first.style.borderColor = "green";
        return true;
    }
}

function checkLastName(){
    let last = document.getElementById("last");
    let msg = document.getElementById("lastMsg");
    msg.style.color = 'red';
    if (last.value == ""){
        msg.innerHTML = "Please enter a last name";
        last.style.borderColor = "red";
        return false;
    } else{
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        last.style.borderColor = "green";
        return true;
    }
}

function checkAddress(){
    let address = document.getElementById("address");
    let msg = document.getElementById("addressMsg");
    msg.style.color = 'red';
    if (address.value == ""){
        msg.innerHTML = "Please enter an address";
        address.style.borderColor = "red";
        return false;
    } else{
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        address.style.borderColor = "green";
        return true;
    }
}

function checkCity(){
    let city = document.getElementById("city");
    let msg = document.getElementById("cityMsg");
    msg.style.color = 'red';
    console.log("gee");
    if (city.value == ''){
        console.log("hi");
        msg.innerHTML = "Please enter a city";
        city.style.borderColor = "red";
        return false;
    } else{
        console.log("yo");
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        city.style.borderColor = "green";
        return true;
    }
}

function checkState(){
    let state = document.getElementById("states");
    let msg = document.getElementById("stateMsg");
    let selectedValue = state.options[state.selectedIndex].value;
    msg.style.color = 'red';
    if (selectedValue == ''){
        msg.innerHTML = "Please select a state";
        state.style.borderColor = "red";
        return false;
    } else{
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        state.style.borderColor = "green";
        return true;
    }
}

function checkZip(){
    let zip = document.getElementById("zip");
    let msg = document.getElementById("zipMsg");
    let pattern = /\d{5}([ \-]\d{4})?/;
    let str = zip.value;
    msg.style.color = 'red';

    if (str == ''){
        msg.innerHTML = "Please enter a zip";
        zip.style.borderColor = "red";
        return false;
    } else if (!(str.match(pattern))){
        msg.innerHTML = "Input must be a number at least 5 digits long";
        zip.style.borderColor = "red";
        return false;
    } else if (str.length < 5){
        msg.innerHTML = "Must be at least 5 digits long";
        zip.style.borderColor = "red";
        return false;
    } else if (str[5] != "-" && str[5] != undefined){
        str = str.substring(0,5) + "-" + str.substring(5);
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        zip.value = str;
        zip.style.borderColor = "green";
        return true;
    }
    else{
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        zip.style.borderColor = "green";
        return true;
    }
}

function checkPhone(){
    let phone = document.getElementById("phone");
    let msg = document.getElementById("phoneMsg");
    let pattern = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
    let str = phone.value;
    msg.style.color = 'red';

    if (str == ''){
        msg.innerHTML = "Please enter a phone number";
        phone.style.borderColor = "red";
        return false;
    } else if (!(str.match(pattern))) {
        msg.innerHTML = "Input must be a number";
        phone.style.borderColor = "red";
        return false;
    } else if (str[3] != "-"){
        str = str.substring(0,3) + "-" + str.substring(3,6) + "-" + str.substring(6);
        phone.value = str;
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        console.log("str[4] is " + str[4]);
        console.log("if 3");
        phone.style.borderColor = "green";
        return true;
    } else{
        phone.value = str;
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        console.log("if 4");
        phone.style.borderColor = "green";
        return true;
    }
}

function checkEmail(){
    let email = document.getElementById("email");
    let msg = document.getElementById("emailMsg");
    let index = email.value.search(/^\S+@\S+\.\S+$/);
    msg.style.color = 'red';
    if (email.value == ''){
        msg.innerHTML = "Please enter an email";
        email.style.borderColor = "red";
        return false;
    } else if (index <= -1){
        msg.innerHTML = "Must be in form: x@x.x";
        email.style.borderColor = "red";
        return false;
    } else{
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry"
        email.style.borderColor = "green";
        return true;
    }
}

function checkCal(){
    let calendar = document.getElementById("cal");
    let msg = document.getElementById("dateMsg");
    msg.style.color = 'red';
    if (calendar.value == ""){
        msg.innerHTML = "Please select a date";
        calendar.style.borderColor = "red";
        return false;
    } else{
        msg.style.color = 'green';
        msg.innerHTML = "Valid entry";
        calendar.style.borderColor = "green";
        return true;
    }
}
