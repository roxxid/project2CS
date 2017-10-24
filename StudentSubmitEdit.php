<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

<?php include 'db.php'; ?>

<?php

    if(isset($_GET['error'])){
        $error = $_GET['error'];
    }

    if(isset($_GET['success'])){
        $success = $_GET['success'];
    }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Submit Assignment</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <div class="jumbotron">
        <div class="container">
            <h1 class="text-center">Assignment Submission</h1>
        </div>
    </div>

  <div class="text-center">
    <p><h3>Instructions:</h3>
       <p>To submit your assignment, enter your UID, assignment ID and the assignment content.</p>
       <p>Make sure what you entered is in correct pattern. UID should begin with letter “U”, followed by 9 digits.</p>
       <p>Make sure the assignment ID is correct.</p>
    <b><p>Example:</p></b>
    <p>Student ID: U012345678</p>
    <p>Assignment ID: 3</p>
    <p>Content: Sample content for assignment 3.</p>
    </br>
    </p>
   </div>

    <form method="POST" action="StudentCreateEditProcess.php">

    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
    <div class="form-group">
      <label for="studid" class="col-xs-3">Student ID</label>
      <div class="col-xs-9">
        <input type="text" pattern="U+\d{9}" class="form-control" id="studid" name="studid" placeholder="Enter your Student Id" autofocus>
        
      </div>
      </br></br>
      <label for="assid" class="col-xs-3">Assignment ID</label>
      <div class="col-xs-9">
        <input type="number" class="form-control" id="assid" name="assid" placeholder="Enter the Assignment Id">
      </div>
    </br></br></br>
      <label for="ass" class="col-xs-3"><h1>Assignment</h1></label>
      <br><br>
      <br>
      <br>
      <textarea class="form-control" rows="10" id="ass" name="ass" placeholder="Enter your text here"></textarea>

    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    <p>   </p>
    <p><a class="btn btn-primary btn-sm" href="student.php" role="button">Go back to assignment list</a></p>

    <?php if(isset($error)): ?>
          <div class="label label-danger"><?php echo $error; ?></div>
      <?php endif; ?>
      <?php if(isset($success)): ?>
          <div class="label label-success"><?php echo $success; ?></div>
      <?php endif; ?>

    </form>
    </div>
    <div class="col-xs-1"></div>
    </div>

    <script>
			CKEDITOR.replace('ass');
		</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>

</body>
</html>