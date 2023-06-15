<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
</head>
<body>
    
    <style>
        *{
            padding:0px;
            margin: 0px;
        }
        a{
            text-decoration: none;
        }
        body{
            background-color: whitesmoke;
            font-family: tahoma;
        }
        header div{
            padding: 20px;
        }
        header a{
            color: ivory;
        }
        header{
            background-color: darkred;
            display: flex;
           
            justify-content: center;
            align-items: center;
        }
    </style>
    <header>
        <div><a href="home.php">Home</a></div>
        <div><a href="profile.php">Profile</a></div>
        <div><a href="login.php">Login</a></div>
        <div><a href="signup.php">Signup</a></div>
    </header>
</body>
</html>