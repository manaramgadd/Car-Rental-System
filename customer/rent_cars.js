function checkFields(){
    let rentDt  = new Date(document.forms["loginForm"]["rentDate"].value);
    let retDt  = new Date(document.forms["loginForm"]["returnDate"].value);
    console.log(retDt);
    let flag = 0; // false

    if (retDt <= rentDt){
       alert("Enter Valid Dates!");
       return false;
    }
    return true;
}
