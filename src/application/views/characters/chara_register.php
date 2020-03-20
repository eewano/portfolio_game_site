<main>
    <h3>Fire Emblem 聖戦の系譜</h3>
    <h1>キャラクター新規登録</h1>

    <?php echo validation_errors(); ?>
    <?php echo form_open('characters/chara_register'); ?>
        <label for="name">キャラクター名</label>
        <input type="input" name="name"><br>
        <!-- <label for="icon">キャラアイコン</label>
        <input type="input" name=""><br>
        <label for="photo01">写真01</label>
        <input type="input" name="photo01"><br>
        <label for="photo02">写真02</label>
        <input type="input" name="photo02"><br>
        <label for="photo03">写真03</label>
        <input type="input" name="photo03"><br> -->
        <label for="sex">性別</label>
        <input type="input" name="sex"><br>
        <label for="class">ユニット</label>
        <input type="input" name="class"><br>
        <!-- <label for="blood01">血統01</label>
        <input type="input" name="blood01"><br>
        <label for="blood02">血統02</label>
        <input type="input" name="blood02"><br>
        <label for="blood03">血統03</label>
        <input type="input" name="blood03"><br>
        <label for="blood04">血統04</label>
        <input type="input" name="blood04"><br> -->
        <label for="hp">HPの成長率</label>
        <input type="input" name="hp"><br>
        <label for="strength">力の成長率</label>
        <input type="input" name="strength"><br>
        <label for="magic">魔力の成長率</label>
        <input type="input" name="magic"><br>
        <label for="dexterity">技の成長率</label>
        <input type="input" name="dexterity"><br>
        <label for="speed">素早さの成長率</label>
        <input type="input" name="speed"><br>
        <label for="luck">運の成長率</label>
        <input type="input" name="luck"><br>
        <label for="defense">守備力の成長率</label>
        <input type="input" name="defense"><br>
        <label for="resistance">魔法防御の成長率</label>
        <input type="input" name="resistance"><br>
        <label for="skill01">個人スキル01</label>
        <input type="input" name="skill01"><br>
        <label for="skill02">個人スキル02</label>
        <input type="input" name="skill02"><br>
        <!-- <label for="skill03">個人スキル03</label>
        <input type="input" name="skill03"><br>
        <label for="skill04">個人スキル04</label>
        <input type="input" name="skill04"><br>
        <label for="skill05">個人スキル05</label>
        <input type="input" name="skill05"><br>
        <label for="skill06">個人スキル06</label>
        <input type="input" name="skill06"><br>
        <label for="skill07">個人スキル07</label>
        <input type="input" name="skill07"><br>
        <label for="skill08">個人スキル08</label>
        <input type="input" name="skill08"><br> -->
        <label for="profile">プロフィール</label>
        <textarea name="profile"></textarea><br>
        <label for="message">一言</label>
        <textarea name="message"></textarea><br>

        <input type="submit" name="submit" value="登録">
    </form>
</main>