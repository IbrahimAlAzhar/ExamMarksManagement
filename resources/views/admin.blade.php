<!DOCTYPE html>
<html>
<head>
	<title>Log in Form Design</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
    <div class="loginbox">
      <img src="css/vector.png" class="avatar">
    	<h1>Login Here</h1>

    	<form action="/logs" method="post">
				@csrf
        <p>ID</p>
    		<input type="text" name="email" placeholder="Enter ID">

    		<p>Password</p>
    		<input type="password" name="password" placeholder="Enter Password">

      <input type="submit"  value="Submit">

    	</form>




			</div>


    </div>

</body>
</html>
