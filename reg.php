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
			$password = $name = $cpassword = $email = '' ;
			$passwordError = $nameError = $emailError = $cpasswordError = ''  ;
			$f_name = $f_email = $f_cpassword = 0;
			if(isset($_POST['submit']))
			{
				
				if(empty($_POST['password']))
				{
					$passwordError='Password is Required.';
				}
				else
				{
					$password=$_POST['password'];
					if(preg_match_all
					('/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%#?&])[A-Za-z\d@$!%#?&]{7,12}$/',$password))
					{
						echo 'Your password is : '.$password.'<br>';
					}
					else
					{
						$passwordError='must be length of 7 to 12.';
					}
				}
				
				if(empty($_POST['cpassword']))
				{
					$cpasswordError='confirm Password is Required.';
				}
				else
				{
						$cpassword=$_POST['cpassword'];
						if($password == $cpassword)
						{
							echo 'Your confirm password is done.';
							$f_cpassword=1;
						}
						else
						{
							$cpasswordError='password and confirm password are not same.';
						}
				}
				
				if(empty($_POST['name']))
				{
					$nameError='name is Required.';
				}
				else
				{
					$name=$_POST['name'];
					if(preg_match('/[^a-z]/i',$name))
					{
						$nameError='must be alphabates.';	
					}
					else
					{
						echo 'Your name is : '.$name.'<br>';
						$f_name=1;
					}
				}
				
				if(empty($_POST['email']))
				{
					$emailError='must be Required.';
				}
				else
				{
					$email=$_POST['email'];
					if(preg_match('/\w.*\@\w.*\.\w{2,3}/',$email))
					{
						echo 'Your email is: '.$email.'<br>';
						$f_email=1;
					}
					else
					{
						$emailError='Enter proper format.';
					}
				}
			}
		?>
		<form method='POST'>
		<div class="wrapper">
		
		<h2>register</h2>
      <div class="input-field">
        <input type="text" name = "name">
        <label>Enter your name</label>
      </div>
	  <div class="input-field">
        <input type="text" name = "email">
        <label>Enter your email</label>
      </div>
	  <div class="input-field">
        <input type="password" name = "password">
        <label>Enter your password</label>
      </div>
	  <div class="input-field">
        <input type="password" name = "cpassword">
        <label>Enter your c password</label>
      </div>
      
      <button type="submit" name = "submit" href = "login.php">Log In</button>
	  
		<a href = "login.php" color = "black">Enter login page</a>
      
    
      </div>
		</form>

		
		<?php
				if($f_name == 1 and $f_cpassword == 1 and $f_email == 1)
				{
					$c_id='';
					$c_name=$_POST['name'];
					$c_email=$_POST['email'];
					$c_password=$_POST['cpassword'];
					$conn=mysqli_connect('localhost','root','','darshil');
					$sql="insert into d1 (name,email,password) values ('$c_name','$c_email','$c_password')";
					if(mysqli_query($conn,$sql))
					{
						echo 'Data is inserted.';
						$sql1="select*from d1 where name = '$c_name'";
					$result=mysqli_query($conn,$sql1);
					$row=mysqli_fetch_assoc($result);
					echo 'your id is: '.$row['id'];
					}
					
					else
					{
						echo 'Data is not inserted.';
					}
				}
				else
				{
					'Enter proper data.';
				}
		?>
		
	</body>
</html>