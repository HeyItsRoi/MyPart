
<!DOCTYPE>
<html>
<!-- Let's Make this edit and add page -->
<head>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Custom CSS for the page -->
<link href = "EditPageStyle.css" rel = "stylesheet" type = "text/css" /> 
</head>

<body class="container"> 
	<div id = "picture">
		<img src="profile.png" alt="picture"class="img-thumbnail" style="width:250px;height:250px;">
		<div id = "button">
			<button type="button" class="btn btn-info" id="change">Change</button>
			<button type="button" class="btn btn-info" id="remove">Remove</button>
		</div>
	</div>
	
	<div id="specifics">
		<p> • Profile image should have a minimum width of 210px and minimum height of 210px. <br>
		    • Make sure to save changes after changing the image.</p>
	</div>
	
	<form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div id="left">
		<div class="form-group">
			<label>First Name</label>
			<input type="text" name = "cfirstname" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>Last name</label>
			<input type="text" name = "clastname" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>Parent's First Name</label>
			<input type="text" name = "parent_Fname" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>Parent's Last Name</label>
			<input type="text" name = "parent_Lname" class="form-control" >
		  </div>
	  </div>
	  <div id="right">
		  <div class="form-group">
			<label>Additional Information</label>
			<textarea class="form-control" name = "allergies" rows="5" placeholder = "Write text" ></textarea>
		  </div>
		  <div class="form-group">
			<label>Phone Number</label>
			<input type="text" name = "phone_number" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>Address</label>
			<input type="text" name = "address" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>City/Town</label>
			<input type="text" name = "city" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>Zip</label>
			<input type="text" name = "zip" class="form-control" >
		  </div>
	  </div>
	  <button type="submit" class="btn btn-info" name = "submit" id="saveButton">Save</button>
	</form>
	
	<?php
	// <!-- Since were using this as add as well I put this -->
	if (isset($_POST['submit'])){
	
		// Create connection
		$conn = new mysqli("localhost", "Roi", "password", "mydaycare");
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}  

	
		$sql = "INSERT INTO MyChild 
		(child_fname ,child_lname ,phone_number ,address ,city ,zip ,parent_fname ,parent_lname, info, allergies, child_dob) VALUES 
		('$_POST[cfirstname]', '$_POST[clastname]' , '$_POST[phone_number]', '$_POST[address]', '$_POST[city]', '$_POST[zip]', '$_POST[parent_Fname]', '$_POST[parent_Lname]', '$_POST[allergies]', '$_POST[allergies]', '2016-11-23')";
	
		if ($conn->query($sql) === TRUE) {
		    echo "Insert MyParent created successfully";
		} else {
		    echo "Error inserting table: " . $conn->error . "<br>";
		}
		$conn->close();
	}

	?>


	
</body>

</html>