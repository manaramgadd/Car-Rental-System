function checkFields(){
    let x = document.forms["loginForm"]["email"].value;
    let y = document.forms["loginForm"]["password"].value;
    if(x == "" || !validateEmail(x))
        document.getElementById("emailValidate").style.visibility = "visible";
    else
        document.getElementById("emailValidate").style.visibility = "hidden";
    if(y == "")
        document.getElementById("passValidate").style.visibility = "visible";
    else
        document.getElementById("passValidate").style.visibility = "hidden";
    if(x == "" || y == "")
        return false;
}

function validateEmail(email){
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };