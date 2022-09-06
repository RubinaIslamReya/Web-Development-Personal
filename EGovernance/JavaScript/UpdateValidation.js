function validateGen(){
  var gn = document.getElementsByName("gender");
  var checked = false;
  for(var i=0;i<gn.length;i++){
      if(gn[i].checked){
          checked = true;
          break;
      }
  }
  return checked;
}
function validateForm() {
    var fname = document.getElementById("firstName").value;
    var lname = document.getElementById("lastName").value;
    var dob = document.getElementById("dob").value;
    var presentAddress = document.getElementById("presentAddress").value;
    var permanentAddress = document.getElementById("permanentAddress").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var userName = document.getElementById("userName").value;
    var password = document.getElementById("password").value;

    if(fname=="")
    {
      document.getElementById("errorfname").innerHTML="First Name Required !!";
    }
    else
    {
      document.getElementById("errorfname").innerHTML="";
     
    }
  

    if(lname=="")
    {
      document.getElementById("errorlname").innerHTML="Last Name Required !!";
    }
    else
    {
      document.getElementById("errorlname").innerHTML="";
     
    }
    
    if(dob=="")
    {
      document.getElementById("errordob").innerHTML="DOB Required !!";
    }
    else
    {
      document.getElementById("errordob").innerHTML="";
     
    }
    if(presentAddress=="")
    {
      document.getElementById("errorpreadd").innerHTML="Present Address Required !!";
    }
    else
    {
      document.getElementById("errorpreadd").innerHTML="";
    }
    if(permanentAddress=="")
    {
      document.getElementById("errorperadd").innerHTML="Permanent Address Required !!";
    }
    else
    {
      document.getElementById("errorperadd").innerHTML="";
    }
    if(phone=="")
    {
      document.getElementById("errorphone").innerHTML="Phone Required !!";
    }
    else
    {
      document.getElementById("errorphone").innerHTML=""; 
    }
    if(email=="")
    {
      document.getElementById("erroremail").innerHTML="Email Required !!";
    }
    else
    {
      document.getElementById("erroremail").innerHTML="";
    }

    if(userName=="")
    {
      document.getElementById("errorusername").innerHTML="Username Required !!";
    }
    else
    {
      document.getElementById("errorusername").innerHTML="";
    }

    if(validateGen()==false)
    {
      document.getElementById("errorgender").innerHTML="Gender Must Requried";
    }
    else{
    document.getElementById("errorgender").innerHTML="";
    }

   if (password.length<5 ) 
   {
     document.getElementById("errorpass").innerHTML="Password Must Contain 5 Char";
    }
    else 
    {
      document.getElementById("errorpass").innerHTML="";
    }
 
  }
  