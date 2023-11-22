<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="col-lg-4">
        <h2 class="mb-4"><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
        <p><?= end($arResult["ITEMS"])['PROPERTIES']['explanation']['VALUE'] ?></p>
        <p><?= end($arResult["ITEMS"])['PROPERTIES']['last_update']['VALUE'] ?></p>
        <p>
            <a href="<?= end($arResult["ITEMS"])['PROPERTIES']['email_href']['VALUE'] ?>">
                <?= end($arResult["ITEMS"])['PROPERTIES']['email_address']['VALUE'] ?>
            </a>
        </p>
        <address>
            <?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?>
        </address>
    </div>
<?php endif; ?>
