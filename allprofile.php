<?php
$con=mysqli_connect('localhost', 'id11387127_projectpsit2019', 'Imnayeon1995', 'id11387127_psit');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result_set = $connection->query("SELECT * FROM register");

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
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Surname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['userwname']; ?></td>
                    <td><button type="button" class="btn btn-success">Edit</td>    
                
                </tr>
    
                
            <?php
                    }
                mysqli_free_result($result);

                mysqli_close($con);
            ?>
            </tbody>

            
        </table>
    </div>
    
</body>
</html>