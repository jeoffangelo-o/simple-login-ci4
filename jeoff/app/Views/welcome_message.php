<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <?php if(session()->get('isLoggedIn')): ?>

        <h3>Welcome <?= session()->get('email')?></h3>
        <p>User ID: <?= session()->get('user_id')?> </p>
        <button><a href="/logout">Logout</a></button>

    <?php else: ?>

        <h3>Welcome Guest. Please <a href="/login">Login</a></h3>

    <?php endif; ?>
    
</body>
</html>