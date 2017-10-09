<?php        
$user = 'root';
$password = '';
$db = 'text_db';
$host = 'localhost';
$port = 3306;
$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
?>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="foundation.css" />
    <script src="jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>
      <div class="container-fluid">
<?php

$assId=htmlspecialchars($_GET["assId"]);

$findSubSql = "SELECT * FROM submission WHERE assId=".$assId;

$subResult = $link->query($findSubSql);

if ($subResult->num_rows > 0) {
    if($row = $subResult->fetch_assoc()) {
        echo '<div class="jumbotron">';
        echo '<h1>Submission Content:</h1>';
        echo $row["assText"].'</br>';
        echo "Student ID:".$row["studId"]."</br>"."Assignment ID:".$row["assId"]."</br>";
        /*$findGraSql= 'SELECT * from Grade where subID="'.$row["subID"].'"';
        $graResult = $link->query($findGraSql);*/
        $grade = "Not Available";
        /*if($row2 = $graResult->fetch_assoc()) {
            $grade = $row2["Grade"];
        }*/
        echo "Grade:".$grade;
        echo '</div>';
        echo '<p><a class="btn btn-primary btn-lg" href="student.php" role="button">Go back to assignment list</a></p>';
        return;
    }
}

$findDesSql = "SELECT * FROM assignment where assId=".$assId;
$desResult = $link->query($findDesSql);
$homeworkDescription="";
$homeworkTitle="";
if ($desResult->num_rows > 0) {
    if($row = $desResult->fetch_assoc()) {
        $homeworkDescription=$row["Instructions"];
        $homeworkTitle=$row["assName"];
    }
}

echo '<div class="jumbotron">';
        echo '<h1>Submission Content:</h1>';
        echo 'No Assignment Submitted!</h1><br/>';
        echo 'Click below to submit assignment<br/>';
        echo '
  <a href="StudentSubmitEdit.php"><button class="btn btn-default">Submit</button></a><br/>
';
        echo "Assignment ID:".$row["assId"]."</br>";
        /*$findGraSql= 'SELECT * from Grade where subID="'.$row["subID"].'"';
        $graResult = $link->query($findGraSql);*/
        $grade = "Not Available";
        /*if($row2 = $graResult->fetch_assoc()) {
            $grade = $row2["Grade"];
        }*/
        echo "Grade:".$grade;
        echo '</div>';
        

mysqli_close($link);
?>

    
    </body>
</html>
