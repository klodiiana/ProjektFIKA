<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    
	<link rel="stylesheet" type="text/css" href="../stili.css">

    <style>

*{
    margin: 0;
    padding: 0;
}

body{
    background-color: #FFF1EB;
}

.header {
    display: block;
    text-align: center;
    width: 100vw;
    height: 50px;
    color: white;
    font-weight: bold;
    background-color:#64403E;
}

.header h2{
    padding-top: 10px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.content-2{
    padding-left: 50px;
    padding-top: 50px;

}

.content-2 strong{
    font-size: xx-large;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.content-2 .logout{
    background-color: #64403E;
    color: white;
    display: block;
    width: 100px;
    height: 30px;
    text-align: center;
    border-radius: 12px;
    margin-top: 300px;
    font-size: larger;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.content-2 .adduser{
    background-color: #64403E;
    color: white;
    display: block;
    width: 100px;
    height: 30px;
    text-align: center;
    border-radius: 12px;
    margin-top: 30px;
    font-size: larger;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.content-2 .check{
    display: block;
    margin-top: 50px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
	
	</style>
</head>

<body>
	<div class="header">
		<h2>DASHBOARD</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			

			<div class="content-2">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="../indeksi.php" class="check">Check the website!</a>
						<a href="dashboard.php?logout='1'" class="logout">logout</a>
                        <a href="create_user.php" class="adduser"> + add user</a>
				

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>