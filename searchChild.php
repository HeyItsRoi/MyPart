
<!DOCTYPE>
<html>
<head>
<body > 

	
	<?php

	$id = 1;
	
		// Create connection
		$conn = new mysqli("localhost", "Roi", "password", "mydaycare");
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}  

	
		$sql = "SELECT * FROM `mychild`";
		$result = $conn->query($sql);
	

		    while($row = mysql_fetch_array($result)){
		    	echo $row['child_fname'] . "";
		    	echo "<br />";
		    }

		$conn->close();


	?>


	
</body>

</html>