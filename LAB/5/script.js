function formValidation() {
    var uid = document.registration.userid;
    var passid = document.registration.passid;
    var uname = document.registration.username;
    var uadd = document.registration.address;
    var ucountry = document.registration.country;
    var uage = document.registration.age;
    var uzip = document.registration.zip;
    var uphone = document.registration.phone;
    var uemail = document.registration.email;
    var umsex = document.registration.msex;
    var ufsex = document.registration.fsex; 
    
    if(userid_validation(uid,5,12)) {
        if(passid_validation(passid,7,12)) { 
            if(allLetter(uname)) {
                if(alphanumeric(uadd)) {
                    if(countryselect(ucountry)) {
                        if(ValidateAge(uage)) {
                            if(allnumeric(uzip)) {
                                if(ValidatePhone(uphone)) 
                                    if(ValidateEmail(uemail)) {
                                        if(validsex(umsex,ufsex)) {}
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
} 

function userid_validation(uid,mx,my) {
    var uid_len = uid.value.length;
    if (uid_len == 0 || uid_len >= my || uid_len < mx) {
        alert("User Id should not be empty / length be between "+mx+" to "+my);
        uid.focus();
        return false;
    }
    return true;
}

// password validation
function passid_validation(passid,mx,my) {
    var passid_len = passid.value.length;
    if (passid_len == 0 ||passid_len >= my || passid_len < mx) {
        alert("Password should not be empty / length be between "+mx+" to "+my);
        passid.focus();
        return false;
    }
    return true;
}

// characters only
function allLetter(uname) { 
    var letters = /^[A-Za-z]+$/;
    if(uname.value.match(letters))
        return true;
    else {
        alert('Username must have alphabet characters only');
        uname.focus(); 
        return false;
    }
}

// alphanumberic only
function alphanumeric(uadd) { 
    var letters = /^[0-9a-zA-Z]+$/;
    if(uadd.value.match(letters)) 
        return true;
    else {
        alert('User address must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
}

// country
function countryselect(ucountry) {
    if(ucountry.value == "Default") {
        alert('Select your country from the list');
        ucountry.focus();
        return false;
    }
    else
        return true;
}

function ValidateAge(uage) {
    var numbers = /^[0-9]+$/;

    if(uage.value.match(numbers) && (uage.value >= 20 && uage.value <= 25))
        return true;
    else {
        alert('Age must be between 20-25 and numeric');
        uage.focus();
        return false;
    }
}

function allnumeric(uzip) { 
    var numbers = /^[0-9]+$/;
    if(uzip.value.match(numbers))
        return true;
    else {
        alert('ZIP code must have numeric characters only');
        uzip.focus();
        return false;
    }
}

// phone number validation
function ValidatePhone(uphone) {
    var numbers = /^[0-9]+$/;
    var phone_len = uphone.value.length;

    if(uphone.value.match(numbers) && phone_len == 10)
        return true;
    else {
        alert('Phone number should be numeric and 10 digits long');
        uphone.focus();
        return false;
    }
}

// email validation
function ValidateEmail(uemail) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(uemail.value.match(mailformat))
        return true;
    else {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
} 

function validsex(umsex,ufsex) {
    x=0;
    if(umsex.checked)
        x++; 
    if(ufsex.checked)
        x++; 
    if(x==0) {
        alert('Select Male/Female');
        umsex.focus();
        return false;
    } else if(x == 2) {
        alert('Cannot be of both sex');
        umsex.focus();
        return false;
    }
    else {
        alert('Form Succesfully Submitted');
        window.location.reload()
    return true;
    }
}