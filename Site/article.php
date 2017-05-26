<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

$serverName = "localhost";
$username = $email;
$password = "password";
$dbName = "myDB";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	}
	else
	{
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{
			$nameErr = "Only letters and white space allowed"; 
		}
	}
  
	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
	}
	else 
	{
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		$emailErr = "Invalid email format"; 
		}
	}
    
	if (empty($_POST["website"])) 
	{
		$website = "";
	} 
	else 
	{
		$website = test_input($_POST["website"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
		{
			$websiteErr = "Invalid URL"; 
		}
	}

	if (empty($_POST["comment"])) 
	{
		$comment = "";
	} 
	else 
	{
		$comment = test_input($_POST["comment"]);
	}
  
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
$conn->close();
  
  
}

function securityFilter()
{
	
}

function securityScreen1()
{
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<link href = "CSS/External/bootstrap.min.css" rel = "stylesheet"/>
		<link href = "CSS/Application/styles.css" rel = "stylesheet"/>
		<link href = "CSS/External/font-awesome.min.css" rel = "stylesheet"/>

		<script type="text/javascript" src = "Javascript/External/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src = "Javascript/External/bootstrap.min.js"></script>
		
		<title>Hacking 101</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
					  <a class="navbar-brand" style = "padding:0;" href=""><img src="" class = "img-responsive"></a>
					</div>
					 <div id="navbar">
					    <ul class="nav navbar-nav">
							<li><a href="">Home</a></li>
							<li><a href="">About</a></li>
						
					    </ul>
					    <form class="navbar-form pull-right" role="search">
							<div class="input-group add-on">
							  <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
							  <div class="input-group-btn">
								 <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</nav>
			<div style = "width:100%;height:10px;background-color:steelblue;margin:0;"></div>
			<div id = "headerImageBox">
				<div class = "text-center" style = "padding-top:8%;">
					<div style = "color:white;font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-style: italic;font-size: 35px;line-height: 22px;">Hacking 101</div>
					<h3 style = "color:white;font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;text-transform: uppercase;font-weight: 700;font-size: 50px;line-height: 50px;">Post Title</h3>
				</div>
			</div>
		</header>
		<div class = "container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="">Back to list</a>
					<h1 style = "margin-top:1%;">Website security</h1>
				</div>
				<div class="panel-body">
					<div class = "row">
						<div class = "col-xs-8 col-xs-offset-2">
							<div>
								<p>
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								</p>
						
								<p>
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								</p>
						
								<p>
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								</p>
						
								<p>
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								content content content content content content content content content content content content
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<h2>Add Comment</h2>
					<hr>
					<div class="row">
						<div class="form-group col-xs-6">
							<label for="name" class="h4">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter name" required>
						</div>
						<div class="form-group col-xs-6">
							<label for="email" class="h4">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" required>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="h4 ">Message</label>
						<textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
					</div>
					<button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
					<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<h2>Comments</h2>
					<hr>
					<div class = "row" style = "margin: 0 auto;padding-left:5%;padding-right:5%;">
						<div class="panel panel-default arrow left">
							<div class="panel-body" style = "padding-bottom:0;">
								<div class = "row">
									<div class = "col-xs-2">
										<figure class="thumbnail" style = "border:none;">
											<img class="img-circle" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
											<figcaption class="text-center">username</figcaption>
										</figure>
									</div>
									<div class = "col-xs-10">
										<header class="text-left">
											<div class="comment-user"><i class="fa fa-user"></i> username</div>
											<time class="comment-date" datetime="5-25-2017 01:05"><i class="fa fa-clock-o"></i> May 25, 2017</time>
										</header>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<div class="comment-post">
										<p>
											Comment
										</p>
										</div>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<p class="text-right"><a href="" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default arrow left" style = "margin-left:10%;">
							<div class="panel-body" style = "padding-bottom:0;">
								<div class = "row">
									<div class = "col-xs-2">
										<figure class="thumbnail" style = "border:none;">
											<img class="img-circle" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
											<figcaption class="text-center">username</figcaption>
										</figure>
									</div>
									<div class = "col-xs-10">
										<header class="text-left">
											<div class="comment-user"><i class="fa fa-user"></i> username</div>
											<time class="comment-date" datetime="5-25-2017 01:05"><i class="fa fa-clock-o"></i> May 25, 2017</time>
										</header>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<div class="comment-post">
										<p>
											Comment
										</p>
										</div>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<p class="text-right"><a href="" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default arrow left">
							<div class="panel-body" style = "padding-bottom:0;">
								<div class = "row">
									<div class = "col-xs-10">
										<header class="text-left">
											<div class="comment-user"><i class="fa fa-user"></i> username</div>
											<time class="comment-date" datetime="5-25-2017 01:05"><i class="fa fa-clock-o"></i> May 25, 2017</time>
										</header>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<div class="comment-post">
										<p>
											Comment
										</p>
										</div>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<p class="text-right"><a href="" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
									</div>
									<div class = "col-xs-2">
										<figure class="thumbnail" style = "border:none;">
											<img class="img-circle" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
											<figcaption class="text-center">username</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-default arrow left">
							<div class="panel-body" style = "padding-bottom:0;">
								<div class = "row">
									<div class = "col-xs-2">
										<figure class="thumbnail" style = "border:none;">
											<img class="img-circle" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
											<figcaption class="text-center">username</figcaption>
										</figure>
									</div>
									<div class = "col-xs-10">
										<header class="text-left">
											<div class="comment-user"><i class="fa fa-user"></i> username</div>
											<time class="comment-date" datetime="5-25-2017 01:05"><i class="fa fa-clock-o"></i> May 25, 2017</time>
										</header>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<div class="comment-post">
										<p>
											Comment
										</p>
										</div>
										<hr style = "margin-top:2%;margin-bottom:2%;">
										<p class="text-right"><a href="" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		<footer id = "footer">
			<div class = "panel-footer">
				<div class = "container">
					<div style = "float:right">
						<p style = "margin:0"> Footer stuff </p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
