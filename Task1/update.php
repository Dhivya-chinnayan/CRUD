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

        $sql = "UPDATE 'staff' SET 'name' = '$name', 'date' = '$date', 'address' = '$address', 'department' = '$department', 'phonenumber' = '$phonenumber', 'gender' = '$gender','bgroup'= '$bgroup' WHERE 'id' ='$user_id'  " ;
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

        $sql = "SELECT * FROM 'staff' WHERE 'id'='$user_id'";
        $result =$conn->query($sql);

        if($result->num_rows >0){
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

            <h2>User Update Forms </h2>
            <form action="" method="POST">
                <fieldset>
                    <legend>Personal information:</legend>
                    Name:<br>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                    <br>
                    Date of Joining:<br>
                    <input type="date" name="date" value="<?php echo $date; ?>">
                    <br>
                    Address:<br>
                    <input type="text" name="department" value="<?php echo $department; ?>">
                    <br>
                    Phone Number:<br>
                    <input type="number" name="phonenumber" value="<?php echo $phonenumber; ?>">
                    <br>
                    Gender:<br>
                    <input type="radio" name="gender" value="<?php echo $gender; ?>">Male
                    <input type="radio" name="gender" value="<?php echo $gender; ?>">female
                    <br>
                    Blood group:<br>
                    <input type="text" name="bgroup" value="<?php echo $bgroup; ?>">
                    <br><br>

                    <input type="submit" value="update" name="update"> 
                </fieldset>
            </form>

            </body>
            </html>

