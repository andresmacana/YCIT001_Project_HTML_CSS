<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CV Jorge Macana</title>
</head>

<body>

<h1>Processed Data</h1>

<?php
	if(isset($_POST['send']))
	{
		
		$name = $_POST['name'];
        $lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$comments = $_POST['comments'];
		
		if(!empty($name) && !empty($email))
		{
			
			
			$re_email = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/";
			
			
			if(preg_match($re_email, $email))
			{
				echo "<p>name: $name</p>";
                echo "<p>lastname: $lastname</p>";
				echo "<p>email: $email</p>";
				echo "<p>Comments: $comments</p>";
				
			}
			else { echo "you did not format your email properly"; }
		}
		
		else { echo "You did not fill in the required fields"; }
	
	}
?>

</body>
</html>