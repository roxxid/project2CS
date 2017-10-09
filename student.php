<?php include 'db.php'; ?>

<html class="no-js" lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<body>
    <div class="container-fluid">
        <div class="list-group">
            <a href="#" class="list-group-item active">Homework Assignment List</a>

            <?php            
                $sql = "SELECT * FROM assignment";
                $result = mysqli_query($conn, $sql);
                $idx=0;
                $colors = array("success", "info", "warning","danger");
                
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                            $assId = "'".$row["assId"]."'";
                            echo '<a href="AssDetail.php?assId='.$assId.'" class="list-group-item list-group-item-'.$colors[$idx%4].'">'.$row["assName"].'</a>';
                            
                            $idx++;
                    }
                }
            ?>

        </div>
    </div>

</body>

</html>
