<?php 
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); //snaitizing email if no current emails will filter
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


	$salt = "$5$" . "rounds=5000" . uniqid(nt_rand(), true) . "$";

	echo $salt;

	$hashedPassword = crypt($password, $salt);

	$query = $_SESSION["connection"]->query("INSERT INTO users SET"
			. "email = '$email',"
			. "username = '$username',"
			. "password = '$hashedPassword',"
			. "salt = '$salt'"); //created a query that is going to insert users

	if($query) {
		echo "Successfully created user: $username";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}