<html>
    <head>
        <title>itf final</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    </head>
    <body>
        <?php
            $conn = mysqli_init();
            mysqli_real_connect($conn, 'finnallab.mysql.database.azure.com', 'meawpanipa@finnallab', 'Ben10@alienforce', 'itffinal', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }
            $res = mysqli_query($conn, 'SELECT * FROM friday');
        ?>
        <table id="myTable" class="display table table-bordered table table-hover" width="95%">
            <thead class="thead-dark">
                <tr>
                    <th width="37%"> <div align="center"><h4>Product</h4></div></th>
                    <th width="15%"> <div align="center"><h4>Price </h4></div></th>
                    <th width="15%"> <div align="center"><h4>Amount </h4></div></th>
                    <th width="15%"> <div align="center"><h4>Total </h4></div></th>
                    <th width="13%"> <div align="center"><h4>Action </h4></div></th>
                </tr>
            </thead>
        <?php
            while($Result = mysqli_fetch_array($res))
            {
        ?>
            <tr>
                <td><?php echo $Result['Product'];?></div></td>
                <td><?php echo $Result['Price'];?></td>
                <td><?php echo $Result['Amount'];?></td>
                <td><?php echo $Result['Action'];?><center><a href = "delete.php?delete_id=<?php echo $Result['ID']; ?>"><button type="button" class="btn btn-warning">Delete</button></a></center></td>
            </tr>
        <?php
            }
        ?>
        </table>
        <script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
        </script>
        <?php
            mysqli_close($conn);
        ?>
        <center><a href = "form_fn.php"><button type="button" class="btn btn-info">Add</button></a></center>
    </body>
</html>
