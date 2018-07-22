function formValidation(){
    if(userNameValidation() && passwordValidation() && passwordMatch() && lengthValidation() && phoneValidation()){
        return true;
    }else{
        alert("Submission failed.")
        return false;
    }
}

function userNameValidation(){
    var userName = document.getElementById("usernameId").value;
    if(userName.length < 6 || userName.length > 50){
        alert("Username to short or to long!");
        return false;
    }
    else{
      return true;
    }
}

function passwordValidation(){
    var password = document.getElementById("passwordId").value;
    var passValidation = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/;
    if(password.length < 8 || password.length > 50){
        alert("Password needs to be between 8-50 characters");
        if(!passValidation.test(password.value)){
            alert("Make sure password has 1 Uppercase, 1 Lowercase and a number.");
        }
        return false;
    }else{
        return true
    }
}



function passwordMatch(){
    var password = document.getElementById("passwordId").value;
    var rpassword = document.getElementById("rpasswordId").value;
    console.log(password);
    console.log(rpassword);
    if(rpassword !== password){
        console.log("passwords dont match!");
        return false;
    }else{
        passSame.classList.remove("invalid");
        passSame.classList.add("valid");
        console.log("passwords do match!");
        return true;
    }
}

function lengthValidation() {
    var firstName = document.getElementById("fnameId").value;
    var lastName = document.getElementById("lnameId").value;
    var address1 = document.getElementById("addressoneId").value;
    var address2 = document.getElementById("addresstwoId").value;
    var city = document.getElementById("cityId").value;
    var state = document.getElementById("state").value;
    var zip = document.getElementById("zipIde").value;
    var phone = document.getElementById("phoneId").value;
    var email = document.getElementById("emailId").value;

    if(firstName.length > 50 || lastName.length > 50){
        alert("Name must be less than 50 characters!");
        return false;
    }else if(address1.length > 100 || address2.length > 100){
        alert("Address must be less than 100 characters");
        return false;
    }else if(city.length > 50){
        alert("City must be less than 50 characters");
        return false;
    }else if(state.length > 52) {
        alert("State must be less than 52 characters");
        return false;
    }else if(zip.length < 5 || zip.length > 10) {
        alert("Zipcode must be between 5 and 10 characters");
        return false;
    }else if(phone.length > 14){
        alert("Phone number must be less than 14 numbers");
        return false;
    }else if(email.length > 255){
        alert("Email must be less than 255 characters");
        return false;
    }else{
        return true;
    }
}

function phoneValidation(){
    var phoneNumber = document.getElementById("phoneId").value;
    console.log(phoneNumber);
    var phoneValid = /^\d{3}-\d{3}-\d{4}$/;
    if(phoneNumber) {
        if (phoneNumber.match(phoneValid)) {
            console.log("Phone is valid!");
            return true;
        }else{
            console.log("Returned False!");
            alert("Invalid Phone number");
            return false;
        }
    }else{
        return false;
    }

}

