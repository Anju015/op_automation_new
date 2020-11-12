<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>CHC PUTHENCHIRA OP MANAGEMENT</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">
	function valid()
	{
       
	    
		if(pudonation.name.value=="")
		{
			alert("Please enter the Name !!!");
			pudonation.name.focus();
			return false;
		}
		if(!isNaN(pudonation.name.value))
		{
			alert("Please enter the valid Name  !!!");
			pudonation.name.focus();
			return false;
		}
		if(pudonation.email.value=="")
		{
			alert("Please enter the Email !!!");
			pudonation.email.focus();
			return false;
		}
		
		var regularExpression = new RegExp("^[a-z]+(\.[a-z0-9_\+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,4})$");
   	        if(!regularExpression.test(pudonation.email.value))
               {
                 alert("Enter a valid Existing E-mail ID. For example: name@example.com");
		 pudonation.email.focus();
                  return false;
               }
		if(pudonation.p_no.value=="")
		{
			alert("Please enter the phone Number !!!");
			pudonation.p_no.focus();
			return false;
		}
		if(isNaN(pudonation.p_no.value))
		{
			alert("Please enter the digits !!!");
			  pudonation.p_no.focus();
			return false;
		}
		if(pudonation.p_no.value.length!=10) 
		{
			alert("Please enter the valid Mobile Number !!!");
			 pudonation.p_no.focus();
			return false;
		}
		if(pudonation.address.value=="")
		{
			alert("Please enter the Address !!!");
			pudonation.address.focus();
			return false;
		}
		if(pudonation.Amnt.value=="")
		{
			alert("Please enter the Amount !!!");
			pudonation.Amnt.focus();
			return false;
		}
		if(isNaN(pudonation.Amnt.value))
		{
			alert("Please enter the digits !!!");
			  pudonation.Amnt.focus();
			return false;
		}
		if(pudonation.anote.value=="")
		{
			alert("Please enter the phone Note !!!");
			pudonation.anote.focus();
			return false;
		}
		if(pudonation.idproof.value=="")
		{
			alert("Please add the image of ID proof !!!");
			pudonation.idproof.focus();
			return false;
		}
		return true;
		}
		</script>

    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class=""></i> <a href="tel:"> </a> </li>
                             <li> <i class=""></i> <a href="mailto:contact@sadaka.org"></a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                   


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.html"><!-- <img src="assets/images/sadaka-logo.png" alt="">--><font size="+1" face="Times New Roman, Times, serif"><img src="assets/healthcare-bubble.jpg" height="40" width="50">PHIS </font></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a class="is-active" href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
					
                    <li class="has-child"><a href="#">SEARCH</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="public_view_hospital1.php">Hospital</a></li>
						                       </ul>
                    </li>
					<li class="has-child"><a href="#">PATIENTS</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="add_patient.php">REGISTRATION</a></li>
						                       </ul>
                    </li>
					 <li><a href="admin_add_complaint.php">COMPLAINT</a></li>
					  <li><a href="login.php">LOGIN</a></li>                                                       																																																																																												
                  
                  </ul>
 
                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


