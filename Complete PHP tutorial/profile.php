<?php

    require "functions.php";

    check_login();

    
    if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['action']) && $_POST['action'] == 'delete')
        {
            //delete your profile
            $id = $_SESSION['info']['id'];
            $query = "delete from users where id = '$id' limit 1";
            $result = mysqli_query($con,$query);

            if(file_exists($_SESSION['info']['image'])){
                unlink($_SESSION['info']['image']);
            }

            $query = "delete from posts where user_id = '$id'";
            $result = mysqli_query($con, $query);

            header("Location: logout.php");
            exit();
        }

    elseif($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['username']))
        {  
            //profile edit
            $image_added = false;
            if(!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0){
                //file was uploaded
                $folder = "uploads/";
                if(!file_exists($folder)){
                    mkdir($folder,0777,true);
                }
                $image = $folder . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $image);

                if(file_exists($_SESSION['info']['image'])){
                    unlink($_SESSION['info']['image']);
                }
                
                $image_added = true;
            }
            $username = addslashes($_POST['username']);
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
            $id = $_SESSION['info']['id'];

            if($image_added = true){
                $query = "update users set username = '$username',email = '$email',password = '$password',image='$image' where id = '$id' limit 1";
            } else {
                $query = "update users set username = '$username',email = '$email',password = '$password' where id = '$id' limit 1";
            }
        
            $result = mysqli_query($con, $query);

            $query = "select * from users where id = '$id' limit 1" ;
            $result = mysqli_query($con, $query);

            if(mysqli_num_rows($result) > 0){

                $row = mysqli_fetch_assoc($result);

                $_SESSION['info'] = $row;
            }

            header("Location: profile.php");
            exit();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - my website</title>
</head>
<body>
    
   <?php require "header.php";?>

   <div style="margin: auto; max-width: 600px">

        <?php if(!empty($_GET['action']) && $_GET['action'] == 'edit'): ?>
            
        <h2 style="text-align: center;">Edit profile</h2>

        <form method="post" enctype="multipart/form-data" style="margin: auto;padding: 10px;">

            <img src="<?php echo $_SESSION['info']['image']?>" style="width: 100px;height: 100px;object-fit: cover;margin:auto;display:block">
            image: <input type="file" name="image"><br>
            <input value="<?php echo $_SESSION['info']['username']?>" type="text" name="username" placeholder="Username" required><br>
            <input value="<?php echo $_SESSION['info']['email']?>" type="email" name="email" placeholder="Email" required><br>
            <input value="<?php echo $_SESSION['info']['password']?>" type="password" name="password" placeholder="Password" required><br>

            <button>Save</button>
            <a href="profile.php">
                <button>Cancel</button>
            </a>
        </form>

        <?php elseif(!empty($_GET['action']) && $_GET['action'] == 'delete'): ?>
            
            <h2 style="text-align: center;">Are you sure you want to delete your profile?</h2>
    
            <div style="margin: auto;max-width: 600px;text-align:center ">
                <form method="post" style="margin: auto;padding: 10px;">
                
                    <img src="<?php echo $_SESSION['info']['image']?>" style="width: 100px;height: 100px;object-fit: cover;margin:auto;display:block">
                    <div><?php echo $_SESSION['info']['username']?></div>
                    <div><?php echo $_SESSION['info']['email']?></div>
        
                    <button>Delete</button>
                    <a href="profile.php">
                        <button>Cancel</button>
                    </a>
                </form>
            </div>

        <?php else:?>
            <h2 style="text-align: center;">User Profile</h2>
            <br>
            <div style="margin: auto;max-width: 600px;text-align:center ">
                <div>
                    <td><img src="<?php echo $_SESSION['info']['image']?>" style="width: 150px;height: 150px;object-fit: cover;"></td>
                </div>
                <div>
                    <td><?php echo $_SESSION['info']['username']?></td>
                </div>
                <div>
                    <td><?php echo $_SESSION['info']['email']?></td>
                </div>
                <a href="profile.php?action=edit">
                    <button>Edit profile</button>
                </a>
                <a href="profile.php?action=delete">
                    <button>Delete profile</button>
                </a>
                
            </div>
            <br>
            <hr>
            <h5>Create a post</h5>
            <form method="post" style="margin: auto;padding: 10px;">
            
                <textarea name="post" id="" cols="30" rows="10"></textarea><br>

                <button>Post</button>
            </form>

        <?php endif;?>
    </div>

   <?php require "footer.php";?>
</body>
</html>