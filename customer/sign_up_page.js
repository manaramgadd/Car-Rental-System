function checkFields(){
    let email = document.forms["signUpForm"]["email"].value;
    let password = document.forms["signUpForm"]["password"].value;
    let confirmPassword = document.forms["signUpForm"]["confirmPassword"].value;
    let ssn = document.forms["signUpForm"]["ssn"].value;
    let fname = document.forms["signUpForm"]["fname"].value;
    let lname = document.forms["signUpForm"]["lname"].value;
    let num = document.forms["signUpForm"]["pnum"].value;
    let bd = document.forms["signUpForm"]["bdate"].value;
    let gender = document.forms["signUpForm"]["gender"].value;
    if(email == "" || !validateEmail(email))
        document.getElementById("emailValidate").style.visibility = "visible";
    else
        document.getElementById("emailValidate").style.visibility = "hidden";
    if(password == "")
        document.getElementById("passValidate").style.visibility = "visible";
    else
        document.getElementById("passValidate").style.visibility = "hidden";
    if(confirmPassword == "" || confirmPassword != password)
        document.getElementById("passConfirmValidate").style.visibility = "visible";
    else
        document.getElementById("passConfirmValidate").style.visibility = "hidden";
    if(ssn == "")
        document.getElementById("ssnValidate").style.visibility = "visible";
    else
        document.getElementById("ssnValidate").style.visibility = "hidden";
    if(fname == "")
        document.getElementById("fnameValidate").style.visibility = "visible";
    else
        document.getElementById("fnameValidate").style.visibility = "hidden";
    if(lname == "")
        document.getElementById("lnameValidate").style.visibility = "visible";
    else
        document.getElementById("lnameValidate").style.visibility = "hidden";    
    if(num == "")
        document.getElementById("pnumValidate").style.visibility = "visible";
    else
        document.getElementById("pnumValidate").style.visibility = "hidden";    
    if(bd == "")
        document.getElementById("bdateValidate").style.visibility = "visible";
    else
        document.getElementById("bdateValidate").style.visibility = "hidden";    
    if(gender == "")
        document.getElementById("genderValidate").style.visibility = "visible";
    else
        document.getElementById("genderValidate").style.visibility = "hidden";    
    if(email == "" || password == "" || confirmPassword == "" || ssn == "" || fname == "" || lname == "" || num == "" || gender == "" || bd == "" || password != confirmPassword)
        return false;
}

function validateEmail(email){
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };