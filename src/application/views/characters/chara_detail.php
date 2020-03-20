<main>
    <h3>Fire Emblem 聖戦の系譜</h3>
    <h1><?php echo $chara['name']; ?></h1>
    <p>性別 : <?php echo $this->word_conversion->convert_to_sex($chara['sex']); ?></p>
    <p>ユニット : <?php echo $this->word_conversion->convert_to_class($chara['class']); ?></p>
    <p>HP : <?php echo $chara['hp']; ?> %</p>
    <p>力 : <?php echo $chara['strength']; ?> %</p>
    <p>魔力 : <?php echo $chara['magic']; ?> %</p>
    <p>技 : <?php echo $chara['dexterity']; ?> %</p>
    <p>素早さ : <?php echo $chara['speed']; ?> %</p>
    <p>運 : <?php echo $chara['luck']; ?> %</p>
    <p>守備力 : <?php echo $chara['defense']; ?> %</p>
    <p>魔法防御 : <?php echo $chara['resistance']; ?> %</p>
    <p>個人スキル :
    <?php for ($i = 1; $i <= 8; $i++): ?>
        <?php if (is_null($chara['skill0' . $i])): ?>
            <?php break; ?>
        <?php else: ?>
            <?php echo $this->word_conversion->convert_to_skill($chara['skill0' . $i]); ?>
        <?php endif; ?>
    <?php endfor; ?>
    </p>
    <p>プロフィール : <?php echo $chara['profile']; ?></p>
    <p>一言 : <?php echo $chara['message']; ?></p>
</main>