<html>
    <head>
        <title>ITF lab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#7A2311;">
        <?php
        
        $conn = mysqli_init();
        mysqli_real_connect($conn, 'finnallab.mysql.database.azure.com', 'meawpanipa@finnallab', 'Ben10alienforce', 'itflab', 3306);
        if (mysqli_connect_errno($conn))
        {
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }


        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $link = $_POST['link'];


        $sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


        if (mysqli_query($conn, $sql)) {
            echo "<h2 style='text-align:center; color:white;'>New record created successfully</h2>";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

        mysqli_close($conn);
        ?>
        
        
        <center><a href = "index.php"><button type="button" class="btn btn-info">Continue</button></a></center>
    </body>
</html>
