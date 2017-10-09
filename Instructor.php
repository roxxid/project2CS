<?php include 'db.php'; ?>

<?php
    $asslistquery = 'SELECT * FROM assignment ORDER BY assId';
    $alist = mysqli_query($conn, $asslistquery);
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

    <title>Text Submission</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        
        <div class="jumbotron">
            <div class="container">
                <h1 class="text-center">Instructor Page</h1>

                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="Instructor.php">Home</a></li>
                    <li role="presentation"><a href="InstructorCreateEdit.php">New Assignment</a></li>
                    <li role="presentation"><a href="InstructorGrade.php">Grade Assignment</a></li>
                    <li role="presentation" class="pull-right"><a href="index.php">Back</a></li>
                </ul>
            </div>
        </div>
        
        <div>
            <div class="row">
                <div class="col-xs-2 text-center">
                    Assignment No
                </div>
                <div class="col-xs-7">
                    Assignment Name
                </div>
                <div class="col-xs-2 text-center">
                    Due Date
                </div>
                <div class="col-xs-1"></div>
            </div>
            <hr>
        </div>

        <?php while($row = mysqli_fetch_assoc($alist)) : ?>
        <div>
            <div class="row">
                <div class="col-xs-2 text-center">
                    <?php echo $row['assId']; ?>
                </div>
                <div class="col-xs-7">
                    <?php echo $row['assName']; ?>
                </div>
                <div class="col-xs-2 text-center">
                    <?php echo $row['dueDate']; ?>
                </div>
                <div class="col-xs-1"></div>
            </div>
            <hr>
        </div>
        <?php endwhile; ?>

    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>

</body>
</html>