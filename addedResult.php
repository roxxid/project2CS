<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    </head>
    <body>
        <?php
            $user = 'kthakkv7_k';
            $password = 'abc654321';
            $db = 'kthakkv7_textassignment';
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
            
            $postText=htmlspecialchars($_POST["inputText"]);
            $assignmentID=htmlspecialchars($_POST["assId"]);
            $wordCount = count(explode(" ",$postText));
            $insertStm = 'insert into submission(stuId,assId,assText,wordCount) values("U012345678","'.$assignmentID.'","'.$postText.'","'.$wordCount.'")'.$assId;
            if($link->query($insertStm)==TRUE)
                echo "New Record Created Successfully!";
            else
                echo "Error:".$insertStm."<br>".$link->error;
            
            echo '<p><a class="btn btn-primary btn-lg" href="index.php" role="button">Go back to assignment list</a></p>';
        ?>
    </body>
</html>
