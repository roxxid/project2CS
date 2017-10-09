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

    <form method="POST" action="StudentCreateEditProcess.php">

    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
    <div class="form-group">
      <label for="studid" class="col-xs-3">Student ID</label>
      <div class="col-xs-9">
        <input type="text" class="form-control" id="studid" name="studid" placeholder="Enter your Student Id">
      </div>

      <label for="assid" class="col-xs-3">Assignment ID</label>
      <div class="col-xs-9">
        <input type="text" class="form-control" id="assid" name="assid" placeholder="Enter the Assignment Id">
      </div>
    </br></br></br>
      <label for="ass" class="col-xs-3"><h1>Assignment</h1></label>
      <textarea class="form-control" rows="10" id="ass" name="ass" placeholder="Enter your text here"></textarea>

    </div>

    <button type="submit" class="btn btn-default">Submit</button>

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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>

</body>
</html>