<main>
    <h3>Fire Emblem 聖戦の系譜</h3>
    <h1>キャラクターデータベース</h1>
    <?php foreach ($character as $chara): ?>
        <h3><?php echo $chara['name']; ?></h3>
        <div class="main">
            <?php echo $chara['profile']; ?>
        </div>
        <p><a href="<?php echo site_url('characters/chara-id-' . $chara['id']); ?>">詳細</a></p>
    <?php endforeach; ?>
</main>