<?php
    include "config.php";


    if (isset($_POST['submit'])){ 

        $name = $_POST['name'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $department = $_POST['department'];
        $phonenumber = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $bgroup = $_POST['bgroup'];
    

    $sql = "insert into `staff`  (name,date,address,department,phonenumber,gender,bgroup) VALUES ('$name',' $date','$address','$department','$phonenumber','$gender','$bgroup')" ;
    $result =mysqli_query($conn,$sql);

    if($result) {
        echo "New record created successfully";
    }

    else {
        die(mysqli_error($conn));
    }
   
}

 
?>
    
    <!DOCTYPE html>
<html>
<head>
        <title>View Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body  >
        <div class="container text-center "> 
        <h2 class = "page-header bg-success">Signup Form</h2>

        <form action="", method="POST">
            <fieldset >
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
        </div>
    </body>
</html>