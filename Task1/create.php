<?php
    include "config.php";


    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $department = $_POST['department'];
        $phonenumber = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $bgroup = $_POST['bgroup'];
    }

    $sql = "INSERT INTO 'staff' ('name','date','address','department','phonenumber','gender','bgroup') VALUES ('$name',' $date','$address','$department','$phonenumber','$gender','$bgroup')" ;

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "New record created successfully";
    }

    else {
        echo "Error:" .$sql . "<br>" . $conn->error;
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
                Name:<br>
                <input type="text" name="name">
                <br>
                Date of joining:<br>
                <input type="date" name="date">
                <br>
                Address:<br>
                <input type="text" name="address">
                <br>
                Department:<br>
                <input type="text" name="department">
                <br>
                Phone Number:<br>
                <input type="number" name="phonenumber">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="female">female
                <br>
                Blood group:<br>
                <input type="text" name="bgroup">
                <br><br>
                <input type="submit", name="submit", value="submit">
            </fieldset>

        </form>
    </body>
</html>