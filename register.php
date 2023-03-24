<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <main class="bg"></main>
    <div class="loginBox">
        <h2>Sign up</h2>
        <label for="name" class="credentials"><b>Username: </b></label>
        <input type="text" name="name" required ><br>

        <label for="pass"><b>Password:</b></label>
        <input type="password" placeholder="Password" name="pass" required><br>

        <label for="pass"><b>Confirm Password:</b></label>
        <input type="password" placeholder="Password" name="pass" required><br>

        <button type="submit" id="submit">Login</button>

    </div>
    <?php
            include 'footer.html'
            ?>
</body>
</html>