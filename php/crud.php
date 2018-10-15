<?php
include 'index.php';

function addData($firstname, $lastname, $email) {
	$conn = OpenCon();
	$addquery = "INSERT INTO test(firstname, lastname, email) VALUES('$firstname','$lastname','$email')";

	if($conn->query($addquery) === TRUE) { echo 'Added Successfully'; };

	CloseCon($conn);
}

function showData($firstname) {
	$conn = OpenCon();

	$arr = array();

	$viewData = "SELECT * FROM test WHERE firstname='$firstname'";
	$viewResult = mysqli_query($conn, $viewData) or die('Error: ' . mysqli_error($conn));
	while($row=mysqli_fetch_assoc($viewResult)) {
		$arr = array(
			'firstname' => $row['firstname'],
			'lastname' => $row['lastname'],
			'email' => $row['email']
		);
	}

	echo json_encode($arr);

	CloseCon($conn);
}

function updateData($firstname, $lastname, $email) {
	$conn = OpenCon();
	$addquery = "UPDATE test SET firstname='$firstname', lastname='$lastname', email='$email' WHERE firstname='$firstname'";

	if($conn->query($addquery) === TRUE) { echo 'Updated Successfully'; };

	CloseCon($conn);
}

function deleteData($firstname) {
	$conn = OpenCon();
	$addquery = "DELETE FROM test WHERE firstname='$firstname'";

	if($conn->query($addquery) === TRUE) { echo 'Deleted Successfully'; };

	CloseCon($conn);
}

?>