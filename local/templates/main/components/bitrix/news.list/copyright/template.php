<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <p class="copyright mb-0">
        <?= end($arResult["ITEMS"])['PROPERTIES']['record']['VALUE'] ?>
        <?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?>
        <a href="<?= end($arResult["ITEMS"])['PROPERTIES']['link']['VALUE'] ?>">
            <?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?>
        </a>
    </p>
<?php endif; ?>
