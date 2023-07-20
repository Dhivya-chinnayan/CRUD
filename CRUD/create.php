<?php
    include "config.php";

    if(isset($_POST['submit']))
    {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender= $_POST['gender'];
    }

    $sql =" INSERT INTO users ('firstname','lastname','email','password','gender') VALUES ('$first_name' , '$last_name', '$email' , '$password' , '$gender') "; 
    $result =mysqli_query($conn,$sql);
    if($result == TRUE){
        echo "New record created successfully";
    }
    else {
        echo "Error". $sql . "<br>". $conn->error;
    }
    $conn->close();

  
?>

<!DOCTYPE html>
<html>
    <body>
        <h2>Signup Form</h2>

        <form action="", method="POST">
            <fieldset>
                <legend>Personal Information:</legend>
                First Name:<br>
                <input type="text" name="firstname">
                <br>
                Last Name:<br>
                <input type="text" name="lastname">
                <br>
                Email:<br>
                <input type="text" name="email">
                <br>
                Password:<br>
                <input type="text" name="password">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="female">female
                <br> <br>
                <input type="submit", name="submit", value="submit">
            </fieldset>

        </form>
    </body>
</html>
