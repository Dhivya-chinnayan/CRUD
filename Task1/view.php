<?php
    include "config.php";

    $sql = " SELECT * FROM staff ";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body class="bg-primary" >
        <div class="container ">
            <h2 class="text-center">Staff</h2>
        <table class="table">
            <head>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Department</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Blood group</th>
                    <th>Action</th>
                </tr>
            </head>
            <tbody>
                <?php
                if($result ->num_rows>0) {
                    while($row = $result->fetch_assoc())
                    {

                    
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['phonenumber']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['bgroup']; ?></td>
                    <td><a class="btn btn-info" href="update.php? id=<?php echo $row['id']; ?>">
                    Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php  
                
            }
                }
                ?>
            </tbody>
        </table>
        </div>
    </body>
</html>