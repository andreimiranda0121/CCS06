function validate(){
    var x = 0;
    var id = document.myForm.uid.value;
    var pass = document.myForm.password.value;
    var re = /\d/;
    var letters = /^[0-9a-zA-Z]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(id.length <= 5 || id.length > 12 || id.length == 0){  
        alert("Lengt of ID must be 5 to 12");
        document.myForm.uid.focus();
        return false;
    }
    if(pass.length <= 5 || pass.length>12 || pass.length == 0){  
        alert("Length of password must be 5 to 12");
        document.myForm.password.focus();
        return false;
    }
    if(re.test(document.getElementById("name").value)){  
        alert("Name must not contain numbers and special characters");
        document.myForm.name.focus();
        return false;
    }
    if(!letters.test(document.getElementById("address").value)){
        alert("User address must have alphanumeric characters only")
        document.myForm.address.focus();
        return false;
    }
    if(document.myForm.country.value == "select country"){  
        alert("Required Must Select A country");
        document.myForm.country.focus();
        return false;
    }
    if(isNaN(document.myForm.zip.value)){
        alert("Must Be numeric only")
        document.getElementById("zip").focus;
        return false;
    }
    if(!mdocument.getElementById("email").value.match(mailformat)){
        alert("Must be a valid email");
        document.getElementById("email").focus;
        return false;
    }
    if(!document.getElementsByClassName("lang").checked){
        alert("Please choice language");
        return false;
    }
    if(document.getElementById("female").value.checked){
        x++;
    }
    if(document.getElementById("male").value.checked){
        x++;
    }
   if(validsex){
    
   }
}



function validsex(umsex,ufsex)
{
    var umsex = document.myForm.male;
    var ufsex = document.myForm.female;
    x=0;
    if(umsex.checked) {
        x++;
    } 
    if(ufsex.checked){
        x++; 
    }
    if(x==0){
        alert('Select Male/Female');
        umsex.focus();
        return false;
    }else{
        alert('Form Succesfully Submitted');
        window.location.reload()
        return true;
    }
}