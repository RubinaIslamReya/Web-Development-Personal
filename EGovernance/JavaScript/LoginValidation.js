function validateForm() {
    var password = document.getElementById("password").value;
    var user = document.getElementById("username").value;
    if(user=="")
    {
      document.getElementById("errorUser").innerHTML="Username Needed !!";
      //return false; 
    }
    else
    {
      document.getElementById("errorUser").innerHTML="";
     
    }
  
   if (password.length<4 ) 
   {
     document.getElementById("errorpass").innerHTML="Password Can not be empty";
      return false;
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }
  
  
  }
  