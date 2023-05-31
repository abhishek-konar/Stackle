function myfunction(){
    var Country=document.getElementById("Country").value;
    var mobilenumber= document.getElementById("mobilenumbe").value;
    var pin= document.getElementById("pin").value;
    var name=document.getElementById("name").value;
    var area=document.getElementById("area").value;
    var state=document.getElementById("state").value;
    var city=document.getElementById("city").value;
    if(Country==""){
        document.getElementById("myalert").innerHTML="Country/Region";
        return false;
    }
    if(name==""){
        document.getElementById("myalert").innerHTML="Please enter a name.";
        return false;
    }
    if(name==""){
        document.getElementById("myalert").innerHTML="Please enter a name.";
        return false;
    }
    if(mobilenumber==""){
        document.getElementById("myalert").innerHTML="Please enter a phone number so we can call if there are any issues with delivery.";
        return false;
    }
    if(isNaN(mobilenumber)){
        document.getElementById("myalert").innerHTML="Enter only Numeric value.";
        return false;
    }
    if(mobilenumber.length<10){
        document.getElementById("myalert").innerHTML="Mobile number must be 10 digit only.";
        return false;
    }
    if(mobilenumber.length>10){
        document.getElementById("myalert").innerHTML="Mobile number must be 10 digit only.";
        return false;
    }
    if(pin==""){
        document.getElementById("myalert").innerHTML="Please enter a ZIP or postal code.";
        return false;
    }
    if(area==""){
        document.getElementById("myalert").innerHTML="Please enter an address.";
        return false;
    }
    if(city==""){
        document.getElementById("myalert").innerHTML="Please enter a city name.";
        return false;
    }
    if(state==""){
        document.getElementById("myalert").innerHTML="Please enter a state, region or province";
        return false;
    }
}


