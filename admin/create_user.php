<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../stili.css">
	<style>

		*{
			margin: 0;
			padding: 0;
		}

		.header{
			display: block;
			text-align: center;
			width: 100vw;
			height: 50px;
			color: white;
			font-weight: bold;
			background-color: #64403e;
		}

        .header h2{
			padding-top: 10px;
			font-family: 'Franklin Gothic Medium', Arial, sans-serif;
		}

		.form22{
			width: 300px;
			height: 150px;
			margin: 0 auto;
		}

		.input-group label{
			display: block;
			font-size: 18px;
			font-family: 'Poppins', sans-serif;
			padding-top: 1rem;
		}

		.input-group .box{
			width: 100%;
			height: 20px;
			margin: 0.7rem 0;
			border: 0.1rem solid rgba(0, 0, 0, 0.1);
			border-radius: 0.5rem;
			padding: 1rem 1.2rem;
			color: #000;
			text-transform: none;
		}

		.input-group button{
			text-align: center;
			display: flex;
			margin: auto;
			padding: auto;
		}

		button{
			margin-top: 1rem;
            display: inline-block;
            height: 40px;
            border-radius: 0.5rem;
            color: #fff;
            background: #6f4b3b;
            font-size: 1.7rem;
            cursor: pointer;
            font-weight: 500;
		}

		button:hover{
			background: #5f3725;
			text-align: center;
		}

	</style>
</head>

<body>
	
	<div class="header">
		<h2>Admin - Create User</h2>
	</div>
	
	<form method="post" action="create_user.php">
		<div class="form22">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter Username" class="box" value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter Email" class="box" value="<?php echo $email; ?>">
		</div>

		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" class="box">
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="Enter Password" class="box">
		</div>

		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2" placeholder="Confirm Password" class="box">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> Create User </button>
		</div>
	</div>

	</form>
</body>
</html>