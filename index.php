<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Homepage</title>
</head>
<body>
    <main class="bg">
        <form action="/action_page.php" method="post">

            <div class="loginBox">
                <img src="./logo.gif" alt="logo" id="logo">
                <label for="name" class="credentials"><b>Username</b></label>
                <input type="text" placeholder="Username" name="name" required ><br>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Password" name="pass" required><br>
        
                <button type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
    </main>
</body>
</html>
