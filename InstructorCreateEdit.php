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

    <title>Create/Edit Assignment</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        
        <div class="jumbotron">
            <div class="container">
                <h1 class="text-center">Add or Edit Assignment</h1>
              
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="Instructor.php">Home</a></li>
                    <li role="presentation"><a href="InstructorCreateEdit.php">New Assignment</a></li>
                    <li role="presentation"><a href="InstructorGrade.php">Grade Assignment</a></li>
                    <li role="presentation" class="pull-right"><a href="index.php">Back</a></li>
                </ul>
            </div>
        </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                
                <?php if(isset($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <?php if(isset($success)): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>

                <form method="POST" action="InstructorCreateEditProcess.php">

                    <div class="form-group">
                        <label for="assid" class="col-xs-6">Assignment Name</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="assid" name="assname" placeholder="Assignmnet Name">
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="instruct">Instructions for Assignment</label>
                        <textarea class="form-control" rows="10" id="instruct" name="instruct" placeholder="Instructions for Assignment"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="duedate" class="col-xs-3">Due Date</label>
                        <div class="col-xs-9">
                            <input type="datetime-local" id="duedate" name="duedate">
                        </div>
                    </div>
                    <hr><hr>

                  <button type="submit" class="btn btn-default center-block">Submit</button>

                </form>
            </div>
            <div class="col-xs-1"></div>
        </div>
    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>

</body>
</html>