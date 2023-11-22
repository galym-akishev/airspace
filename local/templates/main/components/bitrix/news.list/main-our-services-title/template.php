<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="row">
        <div class="col-12 text-center">
            <div class="section-title">
                <h2><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
                <p><?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>