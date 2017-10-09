<?php include 'db.php'; ?>

<?php
	if(!empty($_POST['assname']) && !empty($_POST['instruct']) && !empty($_POST['duedate'])){
		$assname = mysqli_real_escape_string($conn, $_POST['assname']);
		$instruct = mysqli_real_escape_string($conn, $_POST['instruct']);
		$duedate = mysqli_real_escape_string($conn, $_POST['duedate']);
			
		$query = "INSERT INTO assignment(assName, Instructions, dueDate) VALUES('$assname', '$instruct', '$duedate')";

				if(!mysqli_query($conn, $query)){
				die(mysqli_error($conn));
				}

				else {
					header("Location: InstructorCreateEdit.php?success=Assignment%20Added");
				}

	} else {
		header("Location: InstructorCreateEdit.php?error=Please%20Fill%20In%20All%20Required%20Fields");
	}