<?php

    require "functions.php";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        $query = "select * from users where email = '$email' && password = '$password' limit 1";

        $result = mysqli_query($con, $query);

        //print_r($result);  // mysqli_result Object ( [current_field] => 0 [field_count] => 6 [lengths] => [num_rows] => 1 [type] => 0 )
        //print_r(mysqli_num_rows($result));  // 1

        if(mysqli_num_rows($result) > 0){
            header("Location: profile.php");
            exit();
        }else {
            $error = "wrong email or password";
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - my website</title>
</head>
<body>
    
   <?php require "header.php";?>

   <div style="margin: auto; max-width: 600px">

        <?php
        
            if(!empty($error)){
                echo "<div>".$error."</div>";
            }

        ?>

        <h2 style="text-align: center;">Login</h2>

        <form method="post" style="margin: auto;padding: 10px;">
        
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="password" placeholder="Password" required><br>

            <button>Login</button>
        </form>
    </div>

   <?php require "footer.php";?>
</body>
</html>