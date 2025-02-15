<?php if (session()->has('user')): ?>

    <div class="text text-center container mt-5 mb-5">
        <h3>Olá, <?php echo session()->get('user')->nome ?></h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime asperiores dolores, optio ipsa explicabo amet cum aliquam laboriosam. In earum nisi ratione inventore! A perferendis hic reprehenderit cupiditate veritatis ad.</p>
    </div>

<?php endif ?>