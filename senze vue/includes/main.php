<main class="container"><?php
    include_once __DIR__ . '/../db/data.php';
    foreach ($arr_disc as $disc ) {?>
    <div class="poster-container">
        <img src="<?= $disc['poster']?>" alt="<?= $disc['title']?>">
        <h3><?= $disc['title']?></h3>
    </div><?php
    }?>
</main>