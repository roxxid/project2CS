<?php include 'db.php'; ?>

<?php
	if(!empty($_POST['studid']) && !empty($_POST['assid']) && !empty($_POST['ass'])){
		$studid = mysqli_real_escape_string($conn, $_POST['studid']);
		$assid = mysqli_real_escape_string($conn, $_POST['assid']);
		$ass = mysqli_real_escape_string($conn, $_POST['ass']);
		$subdate = (new \DateTime())->format('Y-m-d H:i:s');
		$wordcount = str_word_count($_POST['ass']);


		$query = "INSERT INTO submission(studId, assId, assText, subDate, wordCount) VALUES('$studid','$assid', '$ass', '$subdate', '$wordcount')";

		if(!mysqli_query($conn, $query)){
		die(mysqli_error($conn));
		}

		else {
			header("Location: StudentSubmitEdit.php?success=Assignment%20Submitted");
		}

		}
	
	 else {
		header("Location: StudentSubmitEdit.php?error=Please%20Fill%20In%20All%20Required%20Fields");
	}