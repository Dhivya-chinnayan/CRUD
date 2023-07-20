<?php
    include "config.php";

    if(isset($_POST['update']))
    {
        $first_name = $_POST['firstname'];
        $user_id = $_POST['id'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender= $_POST['gender'];

        $sql = "UPDATE 'users' SET 'firstname' = '$firstname', 'lastname' = '$lastname', 'email' = '$email', 'password' = '$password', 'gender' = '$gender' WHERE 'id' ='$user_id'  " ;
        $result = $conn ->query($sql);

        if($result==TRUE) {
            echo "Record updated successfully";
        }
        else {
            echo "Error: ".$sql. "<br>". $conn->error;
        }
    }
     
    if(isset($_GET['id']) ) {
        $user_id = $_get['id'];

        $sql = "SELECT * FROM 'users' WHERE 'id'='$user_id'";
        $result =$conn->query($sql);

        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $first_name = $row['firstname'];
                $last_name = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender'];
                $id = $row['id'];
            }

        }
    }
    
        ?>

            <h2>User Update Forms </h2>
            <form action="" method="POST">

            </form>
    
