<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <?php if(session()->getFlashData('message')): ?>
        <?= session()->getFlashData('message') ?>
    <?php endif; ?>

    <form action="/store" method="post">
        
        <label for="">Email</label>
        <input type="email" name="email" id="">
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Register">
    </form>
</body>
</html>