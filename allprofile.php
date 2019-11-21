<?php
    require_once("db_connect.php");
        $sql="SELECT * FROM register";
        $data=$db_connect->query($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Student id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=$data->fetch_array(MYSQLI_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Surname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php
                }
                $data->free_result();
                $db_connect->close();
            ?>
            </tbody>

            
        </table>
    </div>
    
</body>
</html>