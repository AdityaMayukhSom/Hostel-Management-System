<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "testing");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		// $first_name = $_REQUEST['first_name'];
		// $last_name = $_REQUEST['last_name'];
		// $gender = $_REQUEST['gender'];
		// $address = $_REQUEST['address'];
		// $email = $_REQUEST['email'];


        $name = $_REQUEST["name"];
        $fatherName = $_REQUEST["fatherName"];
        $motherName = $_REQUEST["motherName"];
        $address = $_REQUEST["address"];
        $city = $_REQUEST["city"];
        $district = $_REQUEST["district"];
        $state = $_REQUEST["state"];
        $pincode = $_REQUEST["pincode"];
        $gender = $_REQUEST["gender"];
        $department = $_REQUEST["department"];
        $roll = $_REQUEST["roll"];
        $birthday = $_REQUEST["birthday"];
        $bloodGroup = $_REQUEST["bloodGroup"];
        $contactNumber = $_REQUEST["contactNumber"];
        $email = $_REQUEST["email"];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO data_sample VALUES ($name,$fatherName,$motherName,$address,$city,$district,$state,$pincode,$gender,$department,$roll,$birthday,$bloodGroup,$contactNumber,$email)";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $fatherName\n "
				. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
