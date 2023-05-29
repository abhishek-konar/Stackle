function myfunc(){
    const email=document.forms["register"]["email"].value
    const name=document.forms["register"]["name"].value
    const password=document.forms["register"]["pass"].value
    if(name==""){
        document.getElementById("myalert").innerHTML="Please enter yours name";
        return false;
    }
    
    else if(email==""){
        document.getElementById("myalert").innerHTML="Please enter a email.";
        return false;
    }
    else if(password==""){
        document.getElementById("myalert").innerHTML="Please enter yours password";
        return false;
    }
    
}

