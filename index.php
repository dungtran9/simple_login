<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Login</title>
</head>
<style>

</style>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username">
        <input type="password" name="password" size="30" placeholder="password">
        <input type="submit" value="Sign in">

    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === "admin" && $password === "admin") {
            echo "<h2>Welcome <span style='color:red'>" . $username . "</span> to website </h2>";
        } else {
            echo "<h2><span style='color: red'>Login Error</span></h2>";
        }
    }
    ?>

</form>
</body>
</html>