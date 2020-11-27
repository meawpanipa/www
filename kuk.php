<html>
    <head>
        <title>itf final</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<BODY>
<body style="background-color:#7A2311;">
        <?php
        
        $conn = mysqli_init();
        mysqli_real_connect($conn, 'finnallab.mysql.database.azure.com', 'meawpanipa@finnallab', 'Ben10@alienforce', 'itffinal', 3306);
        if (mysqli_connect_errno($conn))
        {
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }

        $Price = $_POST['Price'];;
        $Amount = $_POST['Amount'];
        $Total=$Price * $Amount;

        echo "<H1>$Total</H1>";

        mysqli_close($conn);
        ?>

</BODY>
</html>