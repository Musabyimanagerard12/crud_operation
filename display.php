<?php
@include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispaly</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary mt-5"><a href="index.php" class="text-light">Add user</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM `crud`";
                $result = mysqli_query($con,$select);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['userID'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo ' <tr>
                        <th scope="col">'.$id.'</th>
                        <td scope="col">'.$username.'</td>
                        <td scope="col">'.$email.'</td>
                        <td scope="col">'.$mobile.'</td>
                        <td scope="col">'.$password.'</td>
                        <td scope="col"><button class="btn btn-danger"><a class="text-light" href="delete.php?deletedid='.$id.'">Delete</a></button>
                        <button class="btn btn-primary"><a class="text-light" href="update.php"?updateid='.$id.'>Update</a></button>
                        </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>