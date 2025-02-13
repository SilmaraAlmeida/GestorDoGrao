<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (session()->has('user')): ?>
        <h3>Olá, <?php echo session()->get('user')->nome ?></h3>
        <a href="<?= url_to('login_destroy') ?>">Logout</a>
    <?php endif ?>

    <h2>Portal</h2>
</body>
</html>