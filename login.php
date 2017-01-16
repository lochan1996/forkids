<!DOCTYPE html>
<html>
<head>
    <title> LOGIN PAGE </title>
     <link rel="stylesheet" href="css/main2.css">
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/login.js"></script>

</head>
<body>
<nav class="nav navbar-inverse navbar-fixed-top">
<div class="container-fluid">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnavbar">
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  </button>
	  <a href="kid.html" class="navbar-brand">MENU</a>
	  </div>
	  <div class="collapse navbar-collapse" id="mainnavbar">
	  <ul class="nav  navbar-nav">
	  <li><a href="kid.html">Home</a></li>
	  <li ><a href="#">about us</a></li>
	  <li><a href="#">contact us</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">login <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="register.html">register</a></li>
        <li><a href="forgot.html">forgot password</a></li>
		<li class="divider"></li>
		<li class="active"><a href="login.html">already a member</a></li>

      </ul>
    </li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="#">logout</a></li>
	</ul>
	</div>
  </ul>
</div>
</nav> 
  <div id="back_glob">
     <div id="back_header">
	
	  LOGIN<hr/>
	  </div>
	  
	  <div id="back_form">
	    
	     <form method="POST">
		     <label >USERNAME</label>
		     <input type="text" name="username" id="username" placeholder="username" onblur="onrequired()" required />
			 <label>PASSWORD</label>
			 <input type="password" name="password" id="password" placeholder="password" onblur="isrequired()"required />
			 <input type="button" name="valid" value="Login" id="submit" onclick="check()"/>
			 <a href="forgot.html">Forgot password?</a>
			 <a href="register.html">Register here</a>
			 </form>
	  </div>
	 </div>
	  

</body>
</html>
 