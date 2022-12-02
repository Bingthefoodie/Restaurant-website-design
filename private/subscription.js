
let emailInput = document.querySelector("#email");
let termsInput = document.querySelector("#terms");
let nameInput = document.querySelector("#login");
let passwordInput = document.querySelector("#pass");
let retypePasswordInput = document.querySelector("#pass2");
let newsInput = document.querySelector("#newsletter");
let firstNameInput=document.querySelector("#firstName");
let lastNameInput=document.querySelector("#lastName");
let phoneNumberInput=document.querySelector("#phoneNumber");

let firstNameError = document.createElement("p");
firstNameError.setAttribute("class","warning");
//append the created element to the parent of textEmail div
document.querySelectorAll(".userFirstName")[0].append(firstNameError);
firstNameError.style.color = "#CE7777";

 let lastNameError = document.createElement("p");
lastNameError.setAttribute("class","warning");
 //append the created element to the parent of textEmail div
document.querySelectorAll(".userLastName")[0].append(lastNameError);
lastNameError.style.color= "#CE7777";

// create paragraph to display the error Msg returented by vaildateEmail() function 
// and assign this paragraph to the class warning to style the error MSg
let emailError = document.createElement("p");
emailError.setAttribute("class","warning");
//append the created element to the parent of textEmail div
document.querySelectorAll(".textEmail")[0].append(emailError);
emailError.style.color = "#CE7777";

// create paragraph to display the error Msg returented by validatePhoneNumber() function 
// and assign this paragraph to the class warning to style the error MSg
let phoneNumberError = document.createElement("p");
 phoneNumberError.setAttribute("class","warning");
//append the created element to the parent of textEmail div
document.querySelectorAll(".phoneNumber")[0].append(phoneNumberError);
phoneNumberError.style.color = "#CE7777";

// create paragraph to display the error Msg returented by validateTerm() function 
// and assign this paragraph to the class warning to style the error MSg
let termError = document.createElement("p");
termError.setAttribute("class","warning");
//append the created element to the parent of checkboxTerm div
document.querySelectorAll(".checkboxTerm")[0].append(termError);
termError.style.color = "#CE7777";

// create paragraph to display the error Msg returented by validateName() function 
// and assign this paragraph to the class warning to style the error MSg
let nameError = document.createElement("p");
nameError.setAttribute("class","warning");
//append the created element to the parent of textUserName div
document.querySelectorAll(".textUserName")[0].append(nameError);
nameError.style.color = "#CE7777";

// create paragraph to display the error Msg returented by validatePassword() function 
// and assign this paragraph to the class warning to style the error MSg
let passwordError = document.createElement("p");
passwordError.setAttribute("class","warning");
//append the created element to the parent of textPassword div
document.querySelectorAll(".textPassword")[0].append(passwordError);
passwordError.style.color = "#CE7777";

// create paragraph to display the error Msg returented by validateRetypePassword() function 
// and assign this paragraph to the class warning to style the error MSg
let retypePasswordError = document.createElement("p");
retypePasswordError.setAttribute("class","warning");
//append the created element to the parent of textRetypePassword div
document.querySelectorAll(".textRetypePassword")[0].append(retypePasswordError);
retypePasswordError.style.color = "#CE7777";

//define global variables for displaying the error message
let emailErrorMsg = "Email address should be non-empty with the format xyx@xyz.xyz.";
let termErrorMsg = "Please accept the terms and conditions.";
let nameErrorMsg1 = "User name should be non-empty, and within 20 characters long.";
let nameErrorMsg2 = "Login name must be less than 20 characters.";
let passwordErrorMsgLength = "password should be at least 6 characters long.";
let passwordErrorMsgCase = "password should have at least 1 uppercase letter and 1 lowercase letter.";
let passwordErrorMsgCheck = "Both password should be matched.";
let passwordErrorMsgBlank = "This field cannot be blank.";
let lastNameErrorMsg= "Please enter name with letters only";
let firstNameErrorMsg= "Please enter name with letters only";
let phoneNumberErrorMsg="Please enter the phone number in (123) 456-7890 or 123-456-7890 format";
let defaultMSg = "";

//method to validate first name
function validateFirstName(){
    let firstName=firstNameInput.value;
    let regexp=/^[a-zA-Z]+$/;
    if(regexp.test(firstName)){
        error=defaultMSg;
    }
    else{
        error=firstNameErrorMsg;
    }
    return error;
}

//method to validate last name
function validateLastName(){
    let lastName=lastNameInput.value;
    let regexp=/^[a-zA-Z]+$/;
    if(regexp.test(lastName)){
        error=defaultMSg;
    }
    else{
        error=lastNameErrorMsg;
    }
    return error;
}

//method to validate email
function validateEmail()
{
    let email = emailInput.value;
    let regexp = /\S+@\S+\.\S+/;

    if(regexp.test(email))
    {
        error = defaultMSg;
    }
    else
    {
        error = emailErrorMsg;
    }
    return error;
}

//method to validate phone number
function validatePhoneNumber()
{
    let phoneNumber=phoneNumberInput.value;
    let regexp=/^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
    if(regexp.test(phoneNumber))
    {
        error=defaultMSg;
    }
    else
    {
        error=phoneNumberErrorMsg;
    }
    return error;
}
//method to validate name
function validateName()
{  
    let name = nameInput.value;
    
    if(name === "" || name == null)
    {
        error = nameErrorMsg1;
    }
    else if( name.length >= 20)
    {
        error = nameErrorMsg2;
    }
    else
    {
        return defaultMSg;
    }
    return error;
}

//method to validate password
function validatePassword()
{
    let password = passwordInput.value;
    let regexp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/;
    if(password.length < 6)
    {
        error = passwordErrorMsgLength;
    }
    else if(regexp.test(password))
    {
        error = defaultMSg;
    }
    else
    {
        error = passwordErrorMsgCase;
    }
    return error;
}

//method to validate re-type password
function validateRetypePassword()
{
    let repassword = retypePasswordInput.value;
    let password = passwordInput.value;
    if(repassword !== password)
    {
        error = passwordErrorMsgCheck;
    }
    else if(repassword === "" || repassword == null)
    {
        error = passwordErrorMsgBlank;
    }
    else
    {
        error = defaultMSg;
    }
    return error;
}

//method to validate newsletter checkbox
function validateNews()
{
    if(newsInput.checked)
    {
        error = alert("You might receive spam emails or mails by checking this box");
    }
    else
    {
        error = defaultMSg;
    }
    return error;
}

//method to validate term and condition checkbox
function validateTerm()
{
    if(termsInput.checked)
    {
        return defaultMSg;
    }
    else
    {
        return termErrorMsg;
    }
}

//event handler for sumbit event
function validate()
{
    let valid = true;
    let emailValidation = validateEmail();
    let termValidation = validateTerm();
    let nameValidation = validateName();
    let passwordValidation = validatePassword();
    let retypePasswordValidation = validateRetypePassword();
    let firstNameValidation=validateFirstName();
    let lastNameValidation=validateLastName();
    let phoneNumberValidation=validatePhoneNumber();
    let name = nameInput.value;

    if(firstNameValidation!==defaultMSg){
        firstNameError.textContent=firstNameValidation;
        valid=false;
    }
    if(lastNameValidation!==defaultMSg){
        lastNameError.textContent=lastNameValidation;
        valid=false;
    }
    if(emailValidation !== defaultMSg)
    {
        emailError.textContent = emailValidation;
        valid = false;
    }
    if(phoneNumberValidation!==defaultMSg){
        phoneNumberError.textContent=phoneNumberValidation;
        valid=false;
    }
    
    if(nameValidation !== defaultMSg)
    {
        nameError.textContent = nameValidation;
        valid = false;
    }
    if(passwordValidation !== defaultMSg)
    {
        passwordError.textContent = passwordValidation;
        valid = false;
    }
    if(retypePasswordValidation !== defaultMSg)
    {
        retypePasswordError.textContent = retypePasswordValidation;
        valid = false;
    }
    if(termValidation !== defaultMSg)
    {
        termError.textContent = termValidation;
        valid = false;
    }
    //after all the validation successed, convert the user name to all lower case.
    document.getElementById("login").value =name.toLowerCase();
    return valid;
}

//event listner to clear the text inside the 5 paragraph when click reset button
function resetFormError()
{
    emailError.textContent = defaultMSg;
    nameError.textContent = defaultMSg;
    passwordError.textContent = defaultMSg;
    retypePasswordError.textContent = defaultMSg;
    termError.textContent = defaultMSg;
    firstNameError.textContent=defaultMSg;
    lastNameError.textContent=defaultMSg;
    phoneNumberError.textContent=defaultMSg;
}
//event listner for the reset button inside the form
document.form.addEventListener("reset",resetFormError);

firstNameInput.addEventListener("blur",()=>{
    let firstName=validateFirstName();
    if(firstName=defaultMSg){
        firstNameError.textContent=defaultMSg;
    }
});
lastNameInput.addEventListener("blur",()=>{
    let lastName=validateLastName();
    if(lastName=defaultMSg){
        lastNameError.textContent=defaultMSg;
    }
});
//event listner for the email if user input the correct format of email,
//the error message will be clear
emailInput.addEventListener("blur",()=>{
    let email = validateEmail();
    if(email == defaultMSg)
    {
        emailError.textContent = defaultMSg;
    }
});

phoneNumberInput.addEventListener("blur",()=>{
    let phoneNumber=validatePhoneNumber();
    if(phoneNumber=defaultMSg){
        phoneNumberError.textContent=defaultMSg;
    }
});

//event listner for the user name if user input the correct format of user name,
//the error message will be clear
nameInput.addEventListener("blur",()=>{
    let name = validateName();
    if(name == defaultMSg)
    {
        nameError.textContent = defaultMSg;
    }
});

//event listner for the password if user input the correct format of password,
//the error message will be clear
passwordInput.addEventListener("blur",()=>{
    let password = validatePassword();
    if(password == defaultMSg)
    {
        passwordError.textContent = defaultMSg;
    }
});

//event listner for the re-type password if user input the correct format of re-type password,
//the error message will be clear
retypePasswordInput.addEventListener("blur",()=>{
    let repassword = validateRetypePassword();
    if(repassword == defaultMSg)
    {
        retypePasswordError.textContent = defaultMSg;
    }
});

//event listner for the term and condition checkbox if user checked the term and condition checkbox,
//the error message will be clear
termsInput.addEventListener("change", function(){
    if(this.checked)
    {
        termError.textContent = defaultMSg;
    }
});







