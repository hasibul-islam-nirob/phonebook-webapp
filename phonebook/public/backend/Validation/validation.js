
// User Main Name Validation
function nameInputValidation() {
    var nameValidation=/^([a-zA-Z ]){5,20}$/;
    var nameValue = document.getElementById("registerName").value;
    var msg = document.getElementById('nameDataMgs');

    if(!nameValidation.test(nameValue)){
        msg.classList.remove("d-none");
        msg.innerHTML = "Name Formate Is Not Valid";
        if(nameValue.length==0){
            msg.classList.add("d-none");
        }
    }else{
        msg.classList.add("d-none");
        msg.innerHTML = "";

    }
}

// UserName Validation
function usernameInputValidation() {
    var usernameValidation = /^([a-zA-Z0-9]){2,20}$/;
    var usernameInput = document.getElementById("registerUsername").value;
    var msg = document.getElementById('usernameDataMgs');

    if(!usernameValidation.test(usernameInput)){
        msg.classList.remove("d-none");
        msg.innerHTML = "Username Not Valid. Use (a-z 0-9) Min=2 Max=20";

        if(usernameInput.length==0){
            msg.classList.add("d-none");
        }
    }else{
        msg.classList.add("d-none");
        msg.innerHTML = "";

    }
}


// User Email Address Validation
function emailInputValidation() {
    var mailValidation=/\S+@\S+\.\S+/;
    var emailInput = document.getElementById("registerEmail").value;
    var msg = document.getElementById('emailDataMgs');

    if(!mailValidation.test(emailInput)){
        msg.classList.remove("d-none");
        msg.innerHTML = "E-mail Address Not Valid";

        if(emailInput.length==0){
            msg.classList.add("d-none");
        }
    }else{
        msg.innerHTML = "";
        msg.classList.add("d-none");
    }
}


// Password Validation
function passwordInputValidationTwo() {
    var passwordValidation = /^([a-zA-Z@#$%^&*(){}.,0-9?/\+-;:'"|!=_ ]){6,32}$/;
    var passwordInput = document.getElementById("33333333").value;
    var msgOne = document.getElementById('passwordDataMgs');

    if(!passwordValidation.test(passwordInput)){
        msg.classList.remove("d-none");
        msg.classList.add("text-danger");
        msg.classList.remove("text-success");
        msg.innerHTML = "Password Not Strong";
    }else{

        msg.innerHTML = "Strong Password";
        msg.classList.remove("text-danger");
        msg.classList.add("text-success");

    }
}

// Password Validation Over All
function checkPasswordValidation(){
    var value = document.getElementById("registerPassword").value;
    var msgTwo = document.getElementById('passwordDataMgsTwo');
    var msgOne = document.getElementById('passwordDataMgs');
    var congratulateMsg = document.getElementById('congratulateMsg');

    const isNonWhiteSpace = /^\S*$/;
    const isContainsUppercase = /^(?=.*[A-Z]).*$/;
    const isContainsLowercase = /^(?=.*[a-z]).*$/;
    const isContainsNumber = /^(?=.*[0-9]).*$/;
    const isContainsSymbol = /^(?=.*[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]).*$/;
    const isValidLength = /^.{6,32}$/;

    if(value.length==0){
        msgTwo.classList.add("d-none");
        msgOne.innerHTML = "";
        congratulateMsg.classList.add("d-none");
        $('.regAlert').removeClass('d-none');

    }else if (!isNonWhiteSpace.test(value)) {
        msgTwo.classList.remove("d-none");
        congratulateMsg.classList.add("d-none");
        msgTwo.innerHTML =  "Password must not contain Whitespaces.";

    }else if (!isContainsUppercase.test(value)) {
        msgTwo.classList.remove("d-none");
        congratulateMsg.classList.add("d-none");
        msgTwo.innerHTML =  "Password must have at least one Uppercase Character.";

    }else if (!isContainsLowercase.test(value)) {
        msgTwo.classList.remove("d-none");
        congratulateMsg.classList.add("d-none");
        msgTwo.innerHTML =  "Password must have at least one Lowercase Character.";

    }else if (!isContainsNumber.test(value)) {
        msgTwo.classList.remove("d-none");
        congratulateMsg.classList.add("d-none");
        msgTwo.innerHTML =  "Password must contain at least one Digit.";

    }else if (!isContainsSymbol.test(value)) {
        msgTwo.classList.remove("d-none");
        congratulateMsg.classList.add("d-none");
        msgTwo.innerHTML =  "Password must contain at least one Special Symbol.";

    }else if (!isValidLength.test(value)) {
        msgTwo.classList.remove("d-none");
        congratulateMsg.classList.add("d-none");
        msgTwo.innerHTML =  "Password must be 6-32 Characters Long.";

    }else{
        msgOne.classList.remove("text-danger");
        msgOne.classList.remove("d-none");
        msgOne.classList.add("text-success");
        msgTwo.classList.add("d-none");

        msgOne.innerHTML = "Strong Password";
        congratulateMsg.classList.remove("d-none");

        $('.regAlert').addClass('d-none');

        setTimeout(function(){
            msgOne.innerHTML = "";
            congratulateMsg.classList.add("d-none");
        },2000)
    }


}

// Confirm Password Validation
function confirmPasswordValidation(){
    var password = document.getElementById("registerPassword").value;
    var confirmPassword = document.getElementById("registerRepeatPassword").value;
    var msg = document.getElementById('conPasswordDataMgs');

    if (password.length == 0){
        msg.classList.add("d-none");
        msg.innerHTML = "";
    }else{
        if(password === confirmPassword){
            msg.innerHTML = "";
            msg.classList.add("d-none");
        }else{
            msg.classList.remove("d-none");
            msg.innerHTML = "Password Not Match..!";
        }
    }

}

// Phone Number Validation
function contactInputValidation() {
    var contactValidation = /^([+0-9]){11,14}$/;
    var contactInput = document.getElementById("registerPhone").value;
    var msg = document.getElementById('contactDataMgs');

    if(!contactValidation.test(contactInput)){
        msg.classList.remove("d-none");
        msg.innerHTML = "Phone Number Not Valid";

        if(contactInput.length==0){
            msg.classList.add("d-none");
        }
    }else{
        msg.innerHTML = "";
        msg.classList.add("d-none");
    }
}
function contactLengthCheck(){
    var contactInput = document.getElementById("registerPhone").value;
    var msgTwo = document.getElementById('contactDataMgsTwo');

    if(contactInput.length < 11 || contactInput.length > 14){
        msgTwo.classList.remove("d-none");
        msgTwo.innerHTML = "Phone Number ( 11 Digit without +880) to ( 14 Digit with +880) Digit Only";

        if(contactInput.length==0){
            msgTwo.classList.add("d-none");
        }
    }else{
        msgTwo.innerHTML = "";
        msgTwo.classList.add("d-none");
    }
}

// Address Validation
function addressInputValidation() {
    var addressValidation = /^([a-zA-Z@#$%^&*(){}.,0-9?/\+-;:'"|!=_ ]){5,500}$/;
    var addressInput = document.getElementById("addressInput").value;
    var msg = document.getElementById('addressDataMgs');

    if(!addressValidation.test(addressInput)){
        msg.classList.remove("d-none");
        msg.innerHTML = "Address too short. Or, Please Removed '< >' this...! ";

        if(addressInput.length==0){
            msg.classList.add("d-none");
        }
    }else{
        msg.innerHTML = "";
        msg.classList.add("d-none");
    }
}

// Image Validation
function fileValidation() {
    var imgPreview = document.getElementById("imgPreview");
    var msg = document.getElementById("imgDataMgs");
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.onload = function () {
        imgPreview.classList.remove("d-none");
        imgPreview.src = reader.result;

    }
    if (file) {
        let fileName = file.name;
        let fileExe = fileName.split('.').pop();
        if(fileExe==='png' || fileExe==='jpg' || fileExe==='jpeg' || fileExe==='JPG' || fileExe==='PNG' ){
            reader.readAsDataURL(file);
            imgPreview.src = "";
            msg.classList.add("d-none");
        }else{
            imgPreview.src = "";
            msg.classList.remove("d-none");
            imgPreview.classList.add("d-none");
        }
    } else {
        imgPreview.src = "";

    }

}

// Gender Validation
function maleGenderValidation(){
    var genderMale = document.getElementById('male').value;
    if(genderMale == 'Male'){
        genderMale.checked = true;
    }
}
function femaleGenderValidation(){
    var genderFemale = document.getElementById('female').value;
    if(genderFemale == 'Female'){
        genderFemale.checked = true;
    }
}

function onSubmitConfirmBtn(){
    var name        = document.getElementById("registerName").value;
    var username    = document.getElementById("registerUsername").value;
    var emai        = document.getElementById("registerEmail").value;
    var contact     = document.getElementById("registerPhone").value;
    var oldPass     = document.getElementById("registerPassword").value;
    var confirmPass = document.getElementById("registerRepeatPassword").value;
    //var address     = document.getElementById("addressInput").value;
    //var img         = document.querySelector('input[type=file]').files[0];


    if(name.length == 0){
        let msg = document.getElementById("nameDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Enter Your Name";
        setTimeout(function(){
            msg.classList.add("d-none");
        },3000)

    }else if(username.length == 0){
        let msg = document.getElementById("usernameDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Enter Your Username";
        setTimeout(function(){
            msg.classList.add("d-none");
        },3000)

    }else if(emai.length == 0){
        let msg = document.getElementById("emailDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Enter Your E-mail Address";
        setTimeout(function(){
            msg.classList.add("d-none");
        },3000)

    }else if(contact.length == 0){
        let msg = document.getElementById("contactDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Enter Your Valid Contact Number";
        setTimeout(function(){
            msg.classList.add("d-none");
        },3000)

    }else if(oldPass.length == 0){
        let msg = document.getElementById("passwordDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Enter Your Password";

        setTimeout(function(){
            msg.classList.add("d-none");
        },3000)

    }else if(confirmPass.length == 0){
        let msg = document.getElementById("conPasswordDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Enter Your Confirm Password";
        setTimeout(function(){
            msg.classList.add("d-none");
        },3000)

    }else{
        userRegistration();

        //let confirmMsg = document.getElementById("RegBtn");

        /*
        confirmMsg.classList.add("disabled");
        confirmMsg.classList.remove("btn-info");
        confirmMsg.classList.add("btn-success");
        confirmMsg.innerHTML = "Registration Successful, Thank you...."
        setTimeout(function(){
            confirmMsg.classList.remove("disabled");
            confirmMsg.classList.remove("btn-success");
            confirmMsg.classList.add("btn-info");
            confirmMsg.innerHTML = "Registration Now"
        },5000)

         */
    }

}

function PrintFromData(event){
    event.preventDefault();
    window.print()
}


/*

else if(address.length == 0){
        let msg = document.getElementById("addressDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Enter Your Correct Address";
        setTimeout(function(){
            msg.classList.add("d-none");
        },3000)

    }else if( Math.round(img.size/(1024)) < 50 || Math.round(img.size/(1024)) > 5000 ){
        let msg = document.getElementById("imgDataMgs");
        msg.classList.remove("d-none");
        msg.innerHTML = "Please Chooses a image Size Minimum 50Kb Maximum Size 5MB.";
        setTimeout(function(){
            msg.classList.add("d-none");
        },4000)

    }

 */
