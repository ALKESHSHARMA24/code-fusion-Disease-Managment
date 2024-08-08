<html>
	<head>
		<style>
			.center
			{
				text-align:center;
			}
			.bg
			{
				background-color:silver;
			}
			.Error
			{
				color:#FF0000;
			}
		</style>
	</head>
	<link rel="stylesheet" href="hi.css">
	<body class='bg'>
		<?php
		$idError = $nameError = $passwordError = '';
		$c_id = $name = $password ='';
		if(isset($_POST['submit']))
			{
				if(empty($_POST['id']))
				{
					$idError='must be Required.';
				}
				else
				{
					$c_id=$_POST['id'];
				}
				
				if(empty($_POST['name']))
				{
					$nameError='name is Required.';
				}
				else
				{
					$name=$_POST['name'];
				}
				
				if(empty($_POST['password']))
				{
					$passwordError='Password is Required.';
				}
				else
				{	
					$c_password=$_POST['password'];
				}
				
				
				if(!empty($_POST['name']) and ($_POST['password']) and ($_POST['id']))
				{
					$conn=mysqli_connect('localhost','root','','darshil') or die('Not connected');
					$sql="select * from d1 where id = '$c_id' and password = '$c_password'";
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result) <= 0)
					{
						echo 'You are not login.';
					}
					else
					{
						header("Location:dashbord.php");
						exit();
					}
					
				}
				else
				{
					die('Enter proper data.');
				}
				
				
			}
		?>
		<div class="wrapper">
		<form method="post">
		<h2>Login</h2>
        <div class="input-field">
        <input type="text" name = "id">
        <label>Enter your id</label>
      </div>
      <div class="input-field">
        <input type="text" name = "name">
        <label>Enter your name</label>
      </div>
	  <div class="input-field">
        <input type="password" name = "password">
        <label>Enter your password</label>
      </div>
      
      <button type="submit" name = "submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href = "reg.php">Create a account</a></p>
      </div>
		</form>
	</body>
</html>