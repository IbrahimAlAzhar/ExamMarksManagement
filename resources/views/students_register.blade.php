<!DOCTYPE html>
<html>
<head>
	<title>Register Form Design</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<link rel="stylesheet" type="text/css" href="css/style8.css">
</head>
<body>
    <div class="loginbox">

    	<h1>Register Here</h1>

				<form action="/storeS" method="post">
 		    @csrf

				 <p>ID</p>
  		 	<input type="text" name="student_id" id="student_id" placeholder="Enter Id..">

				<p>Name</p>
  		 	<input type="text" name="name" id="name" placeholder="Enter name..">

 		  <p>Email</p>
 		  <input type="text" name="email" id="email" placeholder="Enter Email..">

 		 	<p>Password</p>
 		 	<input type="password" name="password" id="password" placeholder="Enter password..">


    		<input type="submit"  value="Submit">
				<div>
					<br>
					<a href="{{route('index')}}" class="btn4">Home</a>
				</div>

    	</form>

    </div>

</body>
</html>
