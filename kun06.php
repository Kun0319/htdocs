<?php
// 設定如果if設定x值 && and 設定y值時 才執行下面code
$x = $y = $v = '';
if (isset($_GET['x']) && isset($_GET['y'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $v = (int) ($x / $y);
    $z = $x % $y;
}
?>
<form>
    <input name="x" value="<?= $x; ?>" />
    /
    <input name="y" value="<?= $y; ?>" />
    <input type="submit" value="=" />
    <span>
        <?= "{$v}......{$z}" ?>
    </span>
</form>