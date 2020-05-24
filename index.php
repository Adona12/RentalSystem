<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="col s12"  method="post" action="Authentication.php">
<label for="user" class="label">Username</label>
<input id="user" required  type="email" name="userEmail" class="input">
<label for="pass" class="label">Password</label>
<input id="pass" type="password" required  name="userPassword" class="input" data-type="password">
<button id="sbtn" class="btn waves-effect waves-light" type="submit" name="login">Login</Button>
</form>
</body>
</html>