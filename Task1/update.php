<?php
    include "config.php";

    if(isset($_POST['update']))
    {
        $name = $_POST['name'];
        $user_id = $_POST['id'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $department = $_POST['department'];
        $phonenumber = $_POST['phonenumber'];
        $gender= $_POST['gender'];
        $bgroup = $_POST['bgroup'];

        $sql = "update `staff` set name = '$name', date = '$date', address = '$address', department = '$department', phonenumber = '$phonenumber', gender = '$gender',bgroup= '$bgroup' WHERE id ='$user_id'  " ;
        $result = $conn ->query($sql);

        if($result==TRUE) {
            echo "Record updated successfully";
        }
        else {
            echo "Error: ".$sql. "<br>". $conn->error;
        }
    }
     
    if(isset($_GET['id']) ) {
        $user_id = $_GET['id'];

        $sql = " SELECT * FROM `staff` WHERE id ='$user_id' ";
        $result =$conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $name = $row['name'];
                $date = $row['date'];
                $address = $row['address'];
                $department = $row['department'];
                $phonenumber = $row['phonenumber'];
                $gender = $row['gender'];
                $bgroup = $row['bgroup'];
                $id = $row['id'];
            }

        }
    }
    
        ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class=" text-center">
            <h2 class=>User Update Forms </h2>
            <form action="" method="POST" >
                <div class="form-group ">
                <fieldset>
                    <legend>Personal information:</legend>
                    <div class="form-control">
                    Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                    <input type="text" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                    <br>
                    </div>
                    <div class="form-control">
                    Date of Joining: &nbsp; 
                    <input type="date" name="date" value="<?php echo $date; ?>">
                    <br>
                    </div>
                    <div class="form-control">
                    Address: &nbsp;
                    <input type="text" name="address" value="<?php echo $address; ?>">
                    <br>
                    </div>
                    <div class="form-control">
                    Department: &nbsp;
                    <input type="text" name="department" value="<?php echo $department; ?>">
                    <br>
                    </div>
                    <div class="form-control">
                    Phone Number: &nbsp;
                    <input type="number" name="phonenumber" value="<?php echo $phonenumber; ?>">
                    <br>
                    </div>
                    <div class="form-control">
                    Gender: &nbsp;
                    <input type="radio" name="gender" value="<?php echo $gender; ?>">Male
                    <input type="radio" name="gender" value="<?php echo $gender; ?>">female
                    <br>
                    </div>
                    <div class="form-control">
                    Blood group: &nbsp;
                    <input type="text" name="bgroup" value="<?php echo $bgroup; ?>">
                    <br><br>
                    </div>
                    <div class="form-control">
                    <input type="submit" value="update" name="update"> 
                    </div>
                </fieldset>
                </div>
            </form>

</body>
</html>

