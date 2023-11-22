<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <h4><?= $arItem['PREVIEW_TEXT'] ?></h4>
        <p><?= $arItem['DETAIL_TEXT'] ?></p>
    <?php endforeach ?>
<?php endif ?>