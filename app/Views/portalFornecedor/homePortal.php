<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php if (session()->has('user')): ?>
<body>
    <div class="text text-center container mt-5 mb-5">
        <h3>Olá, <?php echo session()->get('user')->nome ?></h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime asperiores dolores, optio ipsa explicabo amet cum aliquam laboriosam. In earum nisi ratione inventore! A perferendis hic reprehenderit cupiditate veritatis ad.</p>
    </div>

<?php endif ?>
</body>

</html>