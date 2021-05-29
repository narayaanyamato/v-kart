

  
  //MADE WITH LOVE...Anime



  //contact pafe..

  function validate()
  {
    //	alert("trsting");

    if (document.form.fname.value=="")
     {
       alert("Enter your Fullname..");
       return false;
     }

     else
     {
     	re = /^[a-zA-Z\s]+$/;

       	if (!re.test(document.form.fname.value))
       	 {
           alert("user name can't be spacial symbol and number empty..");
           return false;
       	 }
     }



     //phone

     if (document.form.phone.value=="")
     {
       alert("Enter your Phone number..");
       return false;
     }

     else
     {
     	re=/^[6-9]\d{9}$/

       	if (!re.test(document.form.fname.value))
       	 {
           alert("Enter valide Phone number");
           return false;
       	 }
     }


     //email
   
      if (document.form.email.value=="")
     {
       alert("Enter your Phone number..");
       return false;
     }

     else
     {
     	
     	re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

       	if (!re.test(document.form.email.value))
       	 {
           alert("Enter valide Phone number");
           return false;
       	 }
     }




  }



  //signup page...


  function validate_signup()
  {

    if (document.Signup.name.value=="")
     {
       alert("Enter your Fullname..");
       return false;
     }

     else
     {
     	re = /^[a-zA-Z\s]+$/;

       	if (!re.test(document.Signup.name.value))
       	 {
           alert("user name can't be spacial symbol and number empty..");
           return false;
       	 }
     }



     //phone

     if (document.Signup.phone.value=="")
     {
       alert("Enter your Phone number..");
       return false;
     }

     else
     {
     	re=/^[6-9]\d{9}$/

       	if (!re.test(document.Signup.phone.value))
       	 {
           alert("Enter valide Phone number");
           return false;
       	 }
     }


     //email
   
      if (document.Signup.email.value=="")
     {
       alert("Enter your Email Address..");
       return false;
     }

     else
     {
     	
     	re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

       	if (!re.test(document.Signup.email.value))
       	 {
           alert("Enter valide email address");
           return false;
       	 }
     }



   //password.


   //password..

         if (document.Signup.pass.value =="")
          {
              alert("Enter your password ..");
              return false;

          }

          else
          {
          	re=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
          	if (!re.test(document.Signup.pass.value))
          	 {
              alert("1)small letters,2)cap. letters,3)at least 8 chars long.4)digits");
              return false;
          	 }
          }

         
        //pasword checking..

        if (document.Signup.re_pass.value=="")
         {
              alert("Enter your conform password ..");
              return false;
         }

         else
         {
         	if (document.Signup.re_pass.value !=document.Signup.pass.value )
         	 {
                  alert("password does not match....");
                  return false;
         	 }
         }

        

  }


  //login


    function validate_in()
    {
    	//alert("test.");

      if (document.Signin.name.value =="")
          {
              alert("Enter your username ..");
              return false;

          }


       //password
       if (document.Signin.pass.value =="")
          {
              alert("Enter password ..");
              return false;

          }



    }

    