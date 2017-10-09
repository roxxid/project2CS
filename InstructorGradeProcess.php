<?php include 'db.php'; ?>

<?php
	if(!empty($_GET['studentId']) && !empty($_REQUEST['assignmentId']) && !empty($_REQUEST['grade']) && !empty($_REQUEST['submissionId'])){
		$studid = mysqli_real_escape_string($conn, $_REQUEST['studentId']);
		$assid = mysqli_real_escape_string($conn, $_REQUEST['assignmentId']);
		$grade = mysqli_real_escape_string($conn, $_REQUEST['grade']);
		$subId = mysqli_real_escape_string($conn, $_REQUEST['submissionId']);


		$query = "INSERT INTO grades(assId, grade, studId, subId) VALUES('$assid', '$grade', '$studid', '$subId')";

		if(mysqli_query($conn, $query)){
			echo "Grade Submitted";
		}

		else {
			echo "Already Graded!    WARNING : ";
		}
		$noescape = die(mysqli_error($conn));
	}
 ?>
