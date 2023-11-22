<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <h2 class="mb-3"><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
    <p><?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?></p>
<?php endif; ?>
