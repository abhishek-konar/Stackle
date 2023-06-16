function myfunc(){
    const email=document.forms["register"]["email"].value
    const name=document.forms["register"]["name"].value
    const password=document.forms["register"]["pass"].value
    const conpass=document.forms["register"]["conpass"].value
    if(name==""){
        document.getElementById("myalert").innerHTML="Please enter yours name";
        return false;
    }
    if(email==""){
        document.getElementById("myalert").innerHTML="Please enter a email.";
        return false;
    }
   if(password==""){
        document.getElementById("myalert").innerHTML="Please enter yours password";
        return false;
    }
  if(conpass==""){
        document.getElementById("myalert").innerHTML="Please enter yours confirm password";
        return false;
    }
    
}

