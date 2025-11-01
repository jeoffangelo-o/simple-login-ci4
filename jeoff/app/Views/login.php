<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if(session()->getFlashData('message')): ?>
        <?= session()->getFlashData('message') ?>
    <?php endif; ?>

    <form action="/auth" method="post">
        
        <label for="">Email</label>
        <input type="email" name="email" id="" required>
        <label for="">Password</label>
        <input type="password" name="password" id="" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>