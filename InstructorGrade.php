<?php include 'db.php'; ?>

<?php
    // SELECT QUERY
    $studquery = 'SELECT sub.*, stud.firstName, stud.lastName FROM submission AS sub LEFT JOIN student AS stud ON sub.studId = stud.studId';
    $studname = mysqli_query($conn, $studquery);

    $avg = 'SELECT ROUND(AVG(wordCount),2) FROM submission';
    $selavg = mysqli_query($conn, $avg);
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

    <title>Grade Assignment</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- .bloc { display:inline-block; vertical-align:top; overflow:hidden; border:solid grey 1px; }
        .bloc select { padding:5px; margin:-5px -20px -5px -5px; } -->
    <style type="text/css">
        .bloc { display:inline-block; vertical-align:top; overflow:hidden; border:solid grey 1px; }
        .bloc select { padding:5px; margin:-5px -20px -5px -5px; }
        .morectnt span {
        display: none;
        }
    </style>
    <link href="css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/customjs.js" type="text/javascript"></script>

</head>
<body>
    <div class="container-fluid">
        
        <div class="jumbotron">
            <div class="container">
                <h1 class="text-center">Grade Page</h1>
              
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="Instructor.php">Home</a></li>
                    <li role="presentation"><a href="InstructorCreateEdit.php">New Assignment</a></li>
                    <li role="presentation"><a href="InstructorGrade.php">Grade Assignment</a></li>
                    <li role="presentation" class="pull-right"><a href="index.php">Back</a></li>
                </ul>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row bg-primary">
                <div class="col-xs-10">
                <span class="h3" style="float:left;">Assignments</span>
                <span class="h3" style="float:right;">A.W.C.</span>
                </div>

                <div class="col-xs-2">
                    <h3>
                    <?php while ($row = $selavg->fetch_assoc()) {  
                       echo $row['ROUND(AVG(wordCount),2)'];
                     }
                    ?>
                    </h3>
                </div>
            </div>
            <hr>
            <?php $id = 0; ?>
            <?php while($row = mysqli_fetch_assoc($studname)) : ?>
                <input type="hidden" name="assid" value="<?php echo $row['assId']; ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-9">
                        <label id="labelStudId_<?php echo $id ?>"><?php echo $row['studId']; ?></label> - <label id="labelFirstName_<?php echo $id ?>"><?php echo $row['firstName']; ?></label>
                        <label id="labelLastName_<?php echo $id ?>"><?php echo $row['lastName']; ?></label>
                    </div>
                    <div class="col-xs-2">
                        <?php echo $row['subDate']; ?> - <?php echo $row['wordCount']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-11 main_ctnt">
                        <div class="show"><?php echo $row['assText']; ?> </div>
                    </div>
                    <div class="col-xs-1">
                        <form action="" method="post">
                        <input type="text" class="form-control" id="<?php echo 'grade' . $row['assId'] ?>" name="grade" placeholder="Enter Grade">
                        
                            <!-- <button type="submit" class="btn btn-default" style="margin-top: 10px;"> -->
                            <!-- Submit</button> -->
                           <!-- <a href="http://192.168.64.2/projectClass/InstructorGradeProcess.php?assignmentId=<?php echo $row['assId'];?>&studentId=<?php echo $row['studId'];?>&submissionId=<?php echo $row['subId'];?>&grade=">Submit</a> -->
                            <a href="#" onClick="gradeSubmit('<?php echo $row['assId'];?>','<?php echo $row['studId'];?>','<?php echo $row['subId'];?>')">Submit</a>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
            <?php $id++; ?>
            <?php endwhile; ?>    
        </div>
    </div>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="js/customjs.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/readmore.js"></script>
    <script>
    function gradeSubmit(assId,studId,subId){
        //alert(assId+","+studId+","+subId);
        var grade = $("#grade"+assId).val();
        var url = "InstructorGradeProcess.php?assignmentId="+assId+"&studentId="+studId+"&submissionId="+subId+"&grade="+grade;
        $.get(url, function(data){
            alert(data);
        });

    }
    </script>

</body>
</html>